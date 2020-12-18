@extends('layouts.admin')

@section('header')

	@include('memberOnlyPage.content_personal_accounts')

@endsection

@section('content')

	@include('memberOnlyPage.content_pats')

@endsection
