@extends('layouts.app')

@section('script')
    
@endsection

@section('style')
<link href="{{ asset('css/user.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="Logcontainer">
    <form class="login-form">
        <div class="logincontainer">
            <div class="top">
                <img class="scpLogo"  src="{{asset('images/header_logo.png')}}">
            </div>
            <div>
                <table class="logTable">
                    <tr>
                        <td class="warning-note">
                            Invalid Username and Password
                        </td>
                    </tr>
                    <tr>
                        <td>Username</td>
                    <tr>
                    <tr>
                        <td><input type="text" value="" name="username" required></td>
                    <tr>
                    <tr>
                        <td class="padTop">Password</td>
                    <tr>
                    <tr>
                        <td><input type="password"  name="password" required></td>
                    <tr>
                    <tr>
                        <td class="forgot"><a href="admin/user/forgot" class="forgota">Forgot Username?</a></td>
                    </tr>
                </table>
            </div>
            <div class="bottom">
                <div class="buttonContainerLog">
                    {{-- <input type="submit"  class="ButtonLog" value="LaOGIN"> --}}
                    <a href="/admin/dashboard" class="ButtonLog">LOGIN</a>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection