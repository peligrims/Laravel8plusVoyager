<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Personal_account;
use App\Term_sheet;
use App\File;
use App\Loan_application;
use App\Loan_condition;
use Illuminate\Support\Facades\Storage;
use Image;
use Input;
use Validator;


class PersonalAccountController extends Controller
{
	public function execute()
	{

		if (view()->exists('memberOnlyPage.personal_accounts')) {

			// WHere `alias` = $alias
			$personal_accounts = Personal_account::all();

			$data = [

				'title' => 'personal accounts',
				'personal_accounts' => $personal_accounts

			];

			return view('memberOnlyPage.personal_accounts',$data);
		} else {
			abort(404);
		}
	}
	public function pats()
	{
		if (view()->exists('memberOnlyPage.content_pats')) {

			$term_sheet = Term_sheet::where('borrower_id', 1)->first();

			$date = [
				'title'=>'Summary of Proposed Terms & Conditions',
				'term_sheet'=>$term_sheet,
			];


			return view('memberOnlyPage.content_pats')->with('date', $date)->with('term_sheet', $term_sheet)->with('title', 'Personal account');
		}
	}
	public function tem()
	{
		if (view()->exists('memberOnlyPage.content_pala')) {

			$term_sheet = Term_sheet::where('borrower_id', 1)->first();
			$data = [
				'title'=>'Summary of Proposed Terms & Conditions',
				'term_sheet'=>$term_sheet,
			];
			return view('memberOnlyPage.content_pala')->with('data', $data)->with('term_sheet', $term_sheet)->with('title', 'Personal account');
		}
	}
	public function padoc()
	{
		if (view()->exists('memberOnlyPage.content_pats')) {
			$term_sheet = Term_sheet::where('borrower_id', 1)->first();

			$date = [
				'title'=>'Summary of Proposed Terms & Conditions',
				'term_sheet'=>$term_sheet,
			];

			return view('memberOnlyPage.content_padoc')->with('date', $date)->with('term_sheet', $term_sheet)->with('title', 'Personal account');

		}
	}
	
	
	public function createfile(Request $request)
	
		
	{		
		if (view()->exists('memberOnlyPage.content_padoc')) 
		$loan_conditions = Loan_condition::all()
			->pluck('name_loan_condition','id')
			->toArray();
		$date = ['title'=>'Summary of Proposed Terms & Conditions'];
		
	
		return view('memberOnlyPage.content_padoc')
			->with('title', 'Upload Documents')
			
			->with('loan_conditions',$loan_conditions);
	}


	
	public function upload(Request $request)
	
	{		
			
			$user = Auth::user();
			$file=$request->file('files');
			//$name = uniqid() . '_'. time(). '.' . $file->getClientOriginalExtension();
			$name = 'Client-'.$user->name. '_'. $file->getClientOriginalName();
			$data[] = $name;
			
			$request->file('files')->store('','google');
			$file = new File();		
			$input = $request->except('_token');
			$file->fill($input);
			$file->filename = $name;
			$file->status ='Upload';
			$file->user_id=$user->id;
		
		
			$file->save();
			
		
		return view('memberOnlyPage.content_profile', $user)
		->with('title','Documents')
	
		->with('user', $user);
	}

	
	public function store(Request $request)
	{
		$this->validate($request, [
			'filename' => 'required',
			'filename.*' => 'mimes:doc,pdf,docx,zip'
		]);
		if ($request->hasfile('filename')) {

			foreach ($request->file('filename') as $file) {
				$name=$file->getClientOriginalName();
				$file->move(public_path().'/files/', $name);
				$data[] = $name;
			}
		}
		$file= new Personal_account();
		$file->filename=json_encode($data);
		$file->save();
		return back()->with('success', 'Your files has been successfully added');
	}
	public function palaview (Request $request)
	{
		if ($request->isMethod('post')) {
			$input = $request->except('_token');
			$validator = Validator::make($input, [
				//'name' => 'required|max:255',
				//'filter' => 'required|unique:portfolios|max:255'
			]);
			if ($validator->fails()) {
				return redirect()->route('loan_applicationAdd')
				->withErrors($validator)
				->withInput();
			}
			$loan_application = new Loan_application();
			// Page::unguard();
			$loan_application->fill($input);
			if ($loan_application->save()) {
				return redirect('memberOnlyPage')->with('status', 'Loan Application Added');
			}
		}
		if (view()->exists('memberOnlyPage.content_pala_final')) {
			$data = [
				'title' => 'New LOAN APPLICATION '
			];
			return view('memberOnlyPage.content_pala_final',$data);
		}
	}
	

}