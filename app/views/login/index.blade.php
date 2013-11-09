@extends('login.layout.master')
@section('title')
	@parent
	Login Page
@stop
@section('container')
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <h1 class="text-center login-title" style="color:#ddd">Citylight Information System v1.0</h1>
            <div class="account-wall">
                <img class="profile-img" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120"
                    alt="">
                <form class="form-signin" method="POST" action= "{{ URL::to('account/login') }}">
                <input type="hidden" name="_token" value="{{ Session::getToken() }}">
                 
                 <div class="control-group {{ ($errors->has('username')) ? 'error' : '' }}" for="username">
                    <label class="control-label" for="username">E-Mail Address</label>
                    <div class="controls">
                        <input type="text" name="username" id="username" value="{{ Request::old('username') }}" class="input-xlarge form-control" placeholder="E-Mail Address">
                        {{ ($errors->has('username') ? $errors->first('username') : '') }}
                    </div>
                </div>
                
                <div class="control-group {{ ($errors->has('password')) ? 'error' : '' }}" for="password">
                    <label class="control-label" for="password">Password</label>
                    <div class="controls">
                        <input type="password" name="password" id="password" value="{{ Request::old('password') }}" class="form-control" placeholder="Password">
                        {{ ($errors->has('password') ? $errors->first('password') : '') }}
                    </div>
                </div>
                <button class="btn btn-lg btn-primary btn-block" type="submit">
                    Sign in</button>
                <label class="checkbox pull-left">
                    <input type="checkbox" value="remember-me">
                    Remember me
                </label>
                
                <a href="#" class="pull-right need-help" data-toggle="modal" data-target="#myModal">Forgot Password ? </a><span class="clearfix"></span>
                <!-- Modal -->
                </form>
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel">Forgot Password ? </h4>
                      </div>
                      <div class="modal-body">
                        <form action="{{ URL::to('account/forgot-password') }}" method="POST" class="form-horizontal">
                            <div class="form-group">
                                <label for="email_address" class="col-sm-2 control-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="email_address" placeholder="Email Address" required>
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </form>
                      </div>
                      <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Reset Password</button>
                      </div>
                    </div><!-- /.modal-content -->
                  </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->
            </div>
        </div>
    </div>
@stop