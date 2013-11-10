@extends('back_end.admin.layout.master')

@section('title')
Citylight Information System v2.0 | Branch Management
@stop

@section('container')
	<div class="row">
		<div class="col-md-12">
			<h3>New Branch Account</h3>
			<hr>
			<p><small class="text-danger">(*) are required</small></p> 
		</div>
	</div>
	<div class="row">
		<form class="form-horizontal" role="form">
			<div class="col-md-6">
				<h4>Account Information</h4>
				<hr>
				  <div class="form-group">
				    <label for="inputEmail3" class="col-sm-3 control-label"><small class="text-danger">*</small>Email</label>
				    <div class="col-sm-9">
				      <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
				    </div>
				  </div>
					
				  <div class="form-group">
				    <label for="inputUsername" class="col-sm-3 control-label"><small class="text-danger">*</small>Username</label>
				    <div class="col-sm-9">
				      <input type="email" class="form-control" id="inputUsername" placeholder="Username">
				    </div>
				  </div>

				  <div class="form-group">
				    <label for="inputFirstName" class="col-sm-3 control-label">First Name</label>
				    <div class="col-sm-9">
				      <input type="text" class="form-control" id="inputFirstName" placeholder="First Name">
				    </div>
				  </div>

				  <div class="form-group">
				    <label for="inputLastName" class="col-sm-3 control-label">Last Name</label>
				    <div class="col-sm-9">
				      <input type="text" class="form-control" id="inputLastName" placeholder="First Name">
				    </div>
				  </div>

				 
				
			</div>
			<div class="col-md-6">
				<h4>Branch Information</h4>
				<hr>
				<div class="form-group">
				    <label for="inputBranchName" class="col-sm-3 control-label">Branch Name</label>
				    <div class="col-sm-9">
				      <input type="email" class="form-control" id="inputBranchName" placeholder="Branch Name">
				    </div>
				  </div>
					
				  <div class="form-group">
				    <label for="inpuBranchAddress" class="col-sm-3 control-label">Branch Address</label>
				    <div class="col-sm-9">
				      <input type="email" class="form-control" id="inpuBranchAddress" placeholder="Branch Address">
				    </div>
				  </div>

				  <div class="form-group">
				    <label for="inputBranchTelephone" class="col-sm-3 control-label">Telephone No.</label>
				    <div class="col-sm-9">
				      <input type="text" class="form-control" id="inputBranchTelephone" placeholder="Telephone Number">
				    </div>
				  </div>

				  <div class="form-group">
				    <label for="inputMobile" class="col-sm-3 control-label">Mobile</label>
				    <div class="col-sm-9">
				      <input type="text" class="form-control" id="inputMobile" placeholder="Mobile Number">
				    </div>
				  </div>
				 <button type="submit" class="btn btn-info pull-right" style="margin-top:10px;"><i class="icon-plus" style="margin-right:5px;"></i>Add New Branch</button>
			</div>
		</form>
	</div>
@stop
	