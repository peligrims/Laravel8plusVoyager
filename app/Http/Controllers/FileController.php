<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;
use App\Models\File;

class FileController extends Controller
{
    
 public function index()
	{
		$user = Auth::user();
		$files = File::where('user_id',$user->id)->get();
		if (!$user->id) {
			abort(404);
		}
		if (view()->exists('memberOnlyPage.file')) {

			$data = [

			'title' => 'Upload files',
			'user' => $user,
			'files' =>$files,

			];

			return view('memberOnlyPage.file',$data);
		} else {
			abort(404);
		}
	}
	 public function destroy(File $file, Request $request)
    {

		
		if ($request->isMethod('delete')) {
			$file->delete();
			return redirect('memberOnlyPage.file')->with('status','Document delete');
		}
    }
    
    
    public function filesupload () {
    	
    	$files = File::all();
    	if (view()->exists('adminOnlyPage.file')) {

			$data = [

			'title' => 'Upload files',
			
			'files' =>$files,

			];

			return view('adminOnlyPage.file',$data);
		} else {
			abort(404);
		}
    }
    
 
    public function fileuploadEdit(File $file,Request $request) {
		
		

		
		if($request->isMethod('delete')) {
			$file->delete();
			return redirect('adminOnlyPage')->with('status','Delete document');
		}
		
		
		if($request->isMethod('post')) {
			
			
			$input = $request->except('_token');
			
			$validator = Validator::make($input,[
			
				
			
			]);
			
			if($validator->fails()) {
				return redirect()
						->route('fileuploadEdit',['file'=>$input['id']])
						->withErrors($validator);
			}
			
			/*if($request->hasFile('images')) {
				$file = $request->file('images');
				$file->move(public_path().'/assets/img',$file->getClientOriginalName());
				$input['images'] = $file->getClientOriginalName();
			}
			else {
				$input['images'] = $input['old_images'];
			}*/
			
		/*	unset($input['old_images']);*/
			$input['files'] = $file;
			$file->fill($input);
			
			if($file->update()) {
				return redirect('adminOnlyPage')->with('status','Document Update');
			}
			
		}

		
		$old = $file->toArray();
		
		//dd($old);
		if(view()->exists('adminOnlyPage.files_edit')) {
			
			$data = [
					'title' => 'Edit Document - '.$old['filename'],
					'data' => $old
					];
			return view('adminOnlyPage.files_edit',$data);		
			
		}
		
	}
}
