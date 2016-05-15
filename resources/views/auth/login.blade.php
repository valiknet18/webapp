@extends('layout')

@section('header-class')
    big-header waves-effect waves-light
@endsection

@section('content')
    <div class="row">
        <div class="col s12 m10 offset-m1">
            <div class="card">
                <form action="{{ action('Auth\AuthController@postLogin') }}" method="POST">
                    <div class="card-content">
                        <span class="card-title">Login</span>
                        <div class="row">
                            <div class="input-field  col s12">
                                <input id="username" name="username" type="text" class="@if ($errors->first('username')) invalid @endif">
                                <label for="username" @if ($errors->first('username')) data-error="{{ $errors->first('username') }}" @endif>Username</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="password" name="password" type="password" class="@if ($errors->first('password')) invalid @endif">
                                <label for="password" @if ($errors->first('password')) data-error="{{ $errors->first('password') }}" @endif>Password</label>
                            </div>
                        </div>

                        {!! csrf_field() !!}
                    </div>
                    <div class="card-action">
                        <button type="submit" class="waves-effect waves-light light-blue btn">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection