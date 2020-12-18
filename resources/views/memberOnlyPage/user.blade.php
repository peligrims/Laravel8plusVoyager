@extends('layouts.admin')

@section('header')

	@include('memberOnlyPage.header')

@endsection

@section('content')

@include('memberOnlyPage.content_user')

@endsection