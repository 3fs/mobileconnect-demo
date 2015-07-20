@extends('layouts.master')

@section('header')
	<div class="row text-center">
		<div class="large-centered columns">
			<span class="title">Welcome to Tapstore</span>
		</div>
	</div>
@stop

@section('content')
<div>
	<img src="/images/camera-541213_1920.jpg">
</div>
<div class="row text-center topMargin">
	<div class="large-12 columns">
		<p class="noMargin text-center"><strong>Your favorite brands just a tap away</strong></p>
	</div>
</div>

<div class="loginBacground topMargin">
	<div class="row text-center">
		<div class="large-12 columns">
			<a href="/login" class="noMargin">
				<img src="/images/mobcon.png"/>
			</a>
		</div>
	</div>
</div>
@stop