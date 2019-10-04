@extends('layouts.app')

@section('script')
    
@endsection

@section('style')
<link href="{{ asset('css/user.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="Logcontainer">
		<form class="forgot-username">
			<div class="logincontainer">
				<div class="top">
					<img class="scpLogo"  src="{{asset('images/header_logo.png')}}">
				</div>
				<div>
					<table class="logTable">
						<tr>
							<td>Email:</td>
						<tr>
						<tr>
							<td><input type="email" autofocus name="email"></td>
						<tr>
					</table>
				</div>
				<div class="bottom">
					<div class="buttonContainerLog">
						<input type="submit"  class="ButtonLog" value="Submit">
					</div>
				</div>
			</div>
		</form>
	</div>
@endsection