@extends('layouts.master')

@section('header')
	<div class="row text-center">
		<div class="large-centered columns">
			<span class="title">Info</span>
		</div>
	</div>
@stop

@section('content')

<div class="row text-center">
	<div class="large-12 columns">
        {{{ $input }}}
	</div>
</div>
@stop
