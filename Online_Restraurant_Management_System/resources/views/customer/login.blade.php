@extends('layouts.app')
@section('content')
<div class="p-3 mb-2 text-dark" style="background-color: #e3f2fd;">
<h2>Login</h2>
<form action="{{route('login')}}" class="form-group" method="post">
    <!-- Cross Site Request Forgery-->
    {{csrf_field()}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="col-md-4 form-group">
        <span>Email</span>
        <input type="text" name="email" <?php if(isset($_COOKIE['remember'])) {echo $_COOKIE['remember'];} ?> value="<?php if(isset($_COOKIE['remember'])) {echo $_COOKIE['remember'];} ?>" class="form-control">
        @error('email')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>

    <div class="col-md-4 form-group">
        <span>Password</span>
        <input type="text" name="pass" value="{{old('pass')}}"class="form-control">
        @error('pass')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="form-group d-md-flex">
				<div class="w-50">
					<label class="checkbox-wrap checkbox-primary">Remember Me
									<input type="checkbox" name="remember">
									<span class="checkmark"></span>
								</label>
		       </div>
	</div>
    <input type="submit" class="btn btn-success" value="Login" >                  
</form>
</div>
@endsection