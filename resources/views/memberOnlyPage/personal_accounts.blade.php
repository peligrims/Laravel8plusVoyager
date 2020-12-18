@extends('layouts.admin')

@section('header')
	

	<form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
		{{ csrf_field() }}
	</form>


@endsection

@section('content')

	@include('memberOnlyPage.content_personal_accounts')

@endsection
