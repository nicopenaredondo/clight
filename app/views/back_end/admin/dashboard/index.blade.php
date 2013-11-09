@extends('back_end.admin.layout.master')

@section('title')
Citylight Information System v2.0 | Dashboard
@stop

@section('container')
	<div class="row">
		<div class="col-md-12">
			<h3>Dashboard</h3>
			<hr>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="row">
				<div id="job_order_chart"></div>
			</div>
			<div class="row">
				<div id="branch_chart"></div>
			</div>
		</div>
	</div>
@stop

@section('scripts')
	<script src="https://www.google.com/jsapi" type="text/javascript"></script>
	<script src="{{ asset('assets/javascript/admin/dashboard.js') }}" type="text/javascript"></script>
@stop
