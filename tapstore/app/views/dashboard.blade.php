
@extends('layouts.master')

@section('header')
    <div class="row">
        <div class="small-6 columns">
            <a href="/logout">< Log out</a>
        </div>
        <div class="small-6 columns">

        </div>
    </div>
@stop

@section('content')
<div class="contentList">
    <div class="row">
        <div class="large-12 columns text-center">
            <h4 class="loginMsg">Welcome back user</h4>
            <h2 class="loginMsg">
                <strong> {{{ $username }}}</strong>
            </h2>
        </div>
    </div>
    <div class="row">
        <div class="large-12 columns">
            <p>Today we recommend:</p>
        </div>
    </div>
    <div class="row">
        <div class="large-12 columns noMargin">
            <ul class="small-block-grid-1 medium-block-grid-2 large-block-grid-3">
                <li>
                    <img src="/images/1.jpeg">
                    <div class="row">
                        <div class="small-6 columns text-left">
                            Amazing item
                        </div>
                        <div class="small-6 columns text-right">
                            <a href="#">Buy</a>
                        </div>
                    </div>
                </li>
                <li>
                    <img src="/images/3.jpeg">
                    <div class="row">
                        <div class="small-6 columns text-left">
                            Amazing item
                        </div>
                        <div class="small-6 columns text-right">
                            <a href="#">Buy</a>
                        </div>
                    </div>
                </li>
                <li>
                    <img src="/images/2.jpeg">
                    <div class="row">
                        <div class="small-6 columns text-left">
                            Amazing item
                        </div>
                        <div class="small-6 columns text-right">
                            <a href="#">Buy</a>
                        </div>
                    </div>
                </li>
                <li>
                    <img src="/images/6.jpeg">
                    <div class="row">
                        <div class="small-6 columns text-left">
                            Amazing item
                        </div>
                        <div class="small-6 columns text-right">
                            <a href="#">Buy</a>
                        </div>
                    </div>
                </li>

            </ul>
        </div>
    </div>
</div>
@stop
