<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Loan_application;
class Loan_applicationController extends Controller
{
 public function execute() {
	if(view()->exists('admin.loan_applications')) {
		$loan_applications = Loan_application::all();
		$data = [
				'title'=>'Business Purpose/Commercial Loan Application',
				'loan_applications'=>$loan_applications
				];
		return view('admin.loan_applications',$data);
		}									
	}
}

