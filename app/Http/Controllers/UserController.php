<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\ModelsLoanApplication;
use Validator;
use App\User;
use DB;
use App\Loan_application;

class UserController extends Controller
{
/**
* Display a listing of the resource.
*
* @return \Illuminate\Http\Response
*/
	public function create()
	{
		if (view()->exists('memberOnlyPage.user')) {
			$user = Auth::user();

			$data = [
				'title'=>'Borrower Information',
				'user'=>$user
			];

			return view('memberOnlyPage.user', $user)->with('user', $user)->with('title','User profile');
		}
	}
/**
* Show the form for creating a new resource.
*
* @return \Illuminate\Http\Response
*/
	public function index (Request $request, User $user)
	{
		if (view()->exists('memberOnlyPage.profile')) {
			$user = Auth::user();
			//$gravatar = Auth::user()->gravatar;

			return view('memberOnlyPage.content_profile')->with('user', $user)->with('title','User profile form requirement');
		}
	}

/**
* Store a newly created resource in storage.
*
* @param  \Illuminate\Http\Request  $request
* @return \Illuminate\Http\Response
*/
	public function store(Request $request)
	{

	}
/**
* Display the specified resource.
*
* @param  int  $id
* @return \Illuminate\Http\Response
*/
	public function show($id)
	{
		//
	}
/**
* Show the form for editing the specified resource.
*
* @param  int  $id
* @return \Illuminate\Http\Response
*/

public function edit(Request $request, $id)
	{
		if ($request->isMethod('post')) {
			$input = $request->except('_token');
			$validator = Validator::make($input,[
				'account_name'=>'required|max:255',
			]);
			if ($validator->fails()) {
				return redirect()
				->route('UserEdit',['user'=>$input['id']])
				->withErrors($validator);
			}
			$user = Auth::user();
			$user->fill($input);

			if ($user->update()) {
				return redirect('memberOnlyPage')->with('status','Member Added');
			}

		}


		$old = $user->toArray();

		if (view()->exists('memberOnlyPage.content_user')) {

			$data = [
				'title' => 'User profile form requirement - '.$old['name'],
				'data' => $old
			];
			return view('memberOnlyPage.content_user',$data);

		}
	}
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function palaadd (Request $request)
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
			
			$loan_application->fill($input);
			
			if ($loan_application->save()) {
				return redirect('memberOnlyPage')->with('status', 'Loan Application Added');
			}
		}
		if (view()->exists('memberOnlyPage.content_pala_add')) {
			$user = Auth::user();
			$data = [
				'title' => 'New LOAN APPLICATION '
			];
			
			return view('memberOnlyPage.pala_add',$data)->with('user', $user);
		}
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
			$loan_application = new ModelsLoanApplication();
			
			$loan_application->fill($input);
		
			if ($loan_application->save()) {
				return redirect('memberOnlyPage')->with('status', 'Loan Application Added');
			}
		}
		$user = Auth::user();
		
		$loan_application=$user->loan_application;
		$loan_application->dump(); 
		
		if (view()->exists('memberOnlyPage.content_pala_final')) {
			$data = [
				'title' => 'New LOAN APPLICATION ',
				'user' =>'$user'
			];
			return view('memberOnlyPage.content_pala_final',$data)->with('user', $user)->with('loan_application', $loan_application);
		}
	}
}
