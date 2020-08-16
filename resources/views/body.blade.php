@extends('layout')
@section('content')
	<div class="container my-2">
		<div class="row my-3">
			@yield('rowTop')
		</div>
		<div class="row my-3">
			@yield('rowMid')
		</div>
		<div class="row my-3">
			@yield('rowBot')
		</div>
	</div>
@endsection