@extends('back_end.admin.layout.master')

@section('title')
Citylight Information System v2.0 | Job Order
@stop

@section('container')
	<div class="row">
		<div class="col-md-12">
			<h3>Job Order</h3>
			<hr>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<table class="table table-hovered table-condensed" style="margin-top:10px;">
				<thead>
					<th>Branch Name</th>
					<th>Managed By</th>
					<th>Job Order Issued</th>
					<th>Date Created</th>
					<th></th>
				</thead>
				<tbody>
					<tr>
						<td>Main Branch</td>
						<td>Anonymous</td>
						<td>
							<span class="badge">230</span>
						</td>
						<td>November 19,2013</td>
						<td>
							<a href="#" class="btn btn-primary btn-xs">
								<i class="icon-search" style="margin-right:5px;"></i>View Branch
							</a>	
						</td>
					</tr>
					<tr>
						<td>Main Branch</td>
						<td>Anonymous</td>
						<td>
							<span class="badge">230</span>
						</td>
						<td>November 19,2013</td>
						<td>
							<a href="#" class="btn btn-primary btn-xs">
								<i class="icon-search" style="margin-right:5px;"></i>View Branch
							</a>	
						</td>
					</tr>
					<tr>
						<td>Main Branch</td>
						<td>Anonymous</td>
						<td>
							<span class="badge">230</span>
						</td>
						<td>November 19,2013</td>
						<td>
							<a href="#" class="btn btn-primary btn-xs">
								<i class="icon-search" style="margin-right:5px;"></i>View Branch
							</a>	
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
@stop
