@extends('layout')

@section('content')
    <div class="row">
        <div class="col s12 m10 offset-m1">
            <div class="card">
                <form action="{{ action('Auth\AuthController@postRegister') }}" method="POST">
                    <div class="card-content">
                        <span class="card-title">Registration</span>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="full_name" type="text" name="full_name" class="@if($errors->first('full_name')) invalid @endif" value="{{ old('full_name') }}">
                                <label for="full_name" @if($errors->first('full_name')) data-error="{{ $errors->first('full_name') }}" @endif>Full name</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="email" type="text" name="email" class="@if($errors->first('email')) invalid @endif" value="{{ old('email') }}">
                                <label for="email" @if($errors->first('email')) data-error="{{ $errors->first('email') }}" @endif>Email</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="username" type="text" name="username" class="@if($errors->first('username')) invalid @endif" value="{{ old('username') }}">
                                <label for="username" @if($errors->first('username')) data-error="{{ $errors->first('username') }}" @endif>Username</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="password" type="password" name="password" class="@if($errors->first('password')) invalid @endif">
                                <label for="password" @if($errors->first('password')) data-error="{{ $errors->first('password') }}" @endif>Password</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="password_confirmation" type="password" name="password_confirmation" class="@if($errors->first('password_confirmation')) invalid @endif">
                                <label for="password_confirmation" @if($errors->first('password_confirmation')) data-error="{{ $errors->first('password_confirmation') }}" @endif>Password confirmation</label>
                            </div>
                        </div>

                        {!! csrf_field() !!}
                    </div>
                    <div class="card-action">
                        <button type="submit" class="waves-effect waves-light darken-custom btn">Registration</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection