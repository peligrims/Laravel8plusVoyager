<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Term_sheet extends Model
{
	
	public function potential()
	{
		return $this->belongsTo('App\Potential', 'potential_id');	
	}
		

	protected $fillable = ['id','borrower1','spa_street1','spa_city1','spa_state1','spa_zip1','eva1','loan_amount1','use_of_funds','max_ltv','term','interest_rate','loan_ext_option','amortization','yield_maintenance','structure','original_fee','exit_fee','broker_fee','due_diligence_fee','created_at','updated_at','potential_id','lc_01','lc_02','lc_03','lc_04','lc_05','lc_06','lc_07','lc_08','lc_09','lc_10','lc_11','lc_12','lc_13','lc_14','lc_15','lc_16','lc_17','lc_18','lc_19','lc_20','lc_21','lc_22','lc_23','lc_24','lc_25','lc_26','lc_27','lc_28','lc_29','lc_30','lc_31','lc_32','lc_33','lc_34','lc_35','lc_36','lc_37','lc_38','lc_39','lc_40'];
}
