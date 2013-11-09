@extends('back_end.admin.layout.master')

@section('title')
Citylight Information System v2.0 | Branch Management
@stop

@section('container')
	<div class="row">
		<div class="col-md-12">
			<h3>&lt;Branch Name&gt;</h3>
			<hr>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<a href="" class="btn btn-danger btn-sm">
				<i class="icon-file-text-alt" style="margin-right:5px;"></i>
				Generate Report
			</a>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<table class="table table-hovered table-condensed" style="margin-top:10px;">
				<thead>
					<th>Job Order ID</th>
					<th>Customer Name</th>
					<th>Date Issued</th>
					<th>Status</th>
					<th></th>
				</thead>
				<tbody>
					<tr>
						<td>CTC2013213123</td>
						<td>Canon Philippines</td>
						<td>November 19,2013</td>
						<td><span class="label label-success">Released</span></td>
						<td>
							<a href="#" class="btn btn-primary btn-xs">
								<i class="icon-search" style="margin-right:5px;"></i>View Job Order
							</a>	
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
@stop
