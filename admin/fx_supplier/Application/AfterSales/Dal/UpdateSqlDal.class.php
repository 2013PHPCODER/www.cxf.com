<?php
namespace AfterSales\Dal;
class UpdateSqlDal{


	public function changeStatus($para){				//改变售后状态，仅针对待确认状态下
		$conn=M('cus_order_list');
		$condition=$para['condition'];
		$data=$para['data'];
		return $conn->where($condition)->save($data);
	}

	public function saveGoodsInfo($para){
		$condition=$para['condition'];
		$data=$para['data'];
		M('cus_order_goods_list')->where($condition)->save($data);
	}
	public function changeStatusWithFinance($para, $user_id){				//改变售后状态，用于退货 可能会写财务表
		$conn=M('cus_order_list');
		$condition=$para['condition'];
		$data=$para['data'];

		if ($para['is_finance']) {
			$order_info=$conn->join('order_list as b on cus_order_list.order_id=b.order_id')->where($condition)->field('b.goods_amount as amount, b.order_sn')->find();
			$amount=$order_info['amount'];
			$order_sn=$order_info['order_sn'];
			$user_info=M('fx_distribute_user')->where(['id'=>$user_id])->field('receiver_account_type, open_bank_address, receiver_account')->find();

			$finance_data=[
				'source_sn'=>$order_sn, 'catch_type'=>3, 'source_id'=>$condition['id'],
				'repay'=>$amount, 'status'=>1, 'addtime'=>time(), 'user_type'=>2, 
				'receiver_account_type'=>$user_info['receiver_account_type'], 'bank_deposit'=>$user_info['open_bank_address'],
				'receiver_name'=>$user_info['receiver_account']
			];
			$conn->startTrans();			//开始事务

			$r1=M('fx_catch_money')->add($finance_data);
			$r2=$conn->where($condition)->save($data);

			if ($r1 && $r2) {
				$conn->commit();
				return $r2;
			}else{
				$conn->rollback();
				return false;
			}
		}else{
			return $conn->where($condition)->save($data);
		}
	}

	public function changeStatusWithOrder($para, $user_id){					//改变售后状态，用于退款情况下
		$conn=M('cus_order_list');
		$condition=$para['condition'];
		$data=$para['data']['cus'];
		$order_data=$para['data']['order'];		


		// 查询数据信息;
		$condition2=['cus_order_list.supplier_id'=>$condition['supplier_id'] ,'id'=>$condition['id']];
		$order_info=M('cus_order_list')->join('order_list  as a on cus_order_list.order_id=a.order_id')->where($condition2)->field('a.order_id, a.pay_amount, a.order_sn')->find();
		$order_sn=$order_info['order_sn'];
		$amount=$order_info['pay_amount'];
		$order_id=$order_info['order_id'];
		$user_info=M('fx_distribute_user')->where(['id'=>$user_id])->field('receiver_account_type, open_bank_address, receiver_account')->find();



		$conn->startTrans();			//开始事务
		if ($order_data) {					//已发货
			
			$r1=M('order_list')->where(['order_id'=>$order_id])->save($order_data);
			$r2=$conn->where($condition)->save($data);
		}else{

			$finance_data=[
				'source_sn'=>$order_sn, 'catch_type'=>3, 'source_id'=>$condition['id'],
				'repay'=>$amount, 'status'=>1, 'addtime'=>time(), 'user_type'=>2, 
				'receiver_account_type'=>$user_info['receiver_account_type'], 'bank_deposit'=>$user_info['open_bank_address'],
				'receiver_name'=>$user_info['receiver_account']
			];
			$r1=M('fx_catch_money')->add($finance_data);
			$r2=$conn->where($condition)->save($data);			
		}

		// 返回记录
		if ($r1 && $r2) {
			$conn->commit();
			return $r2;
		}else{
			$conn->rollback();
			return false;
		}

	}

}