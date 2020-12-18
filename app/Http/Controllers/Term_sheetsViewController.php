<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Term_sheet;


class Term_sheetsViewController extends Controller
{

	public function view (Term_sheet $term_sheet, Request $request )
	{


		$old=$term_sheet->toArray();


		if (view()->exists('admin.term_sheets_view')) {

			$data=[
				'title'=>'Заголовок-'.$old['borrower_id'],

				'data'=>$old
			];
			return view('admin.term_sheets_view', $data);
		}
	}

	public function execute (Term_sheet $term_sheet, Request $request)
	{

		
		$term_sheet = Term_sheet::where('id', 1)->first();
		$date = $term_sheet->toArray();
		$title = 'title';
	
		if (view()->exists('admin.term_sheets_view')) {

			$data=[
			'title'=>'term_sheets',
			
			];
			
		
			return view('admin.term_sheets_view')->with('date', $date)->with('term_sheet', $term_sheet)->with('title', 'term sheets');


		}
	}

}
