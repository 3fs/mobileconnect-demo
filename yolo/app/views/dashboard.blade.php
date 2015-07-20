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
<div class="row">
    <div class="large-12 columns contentList">
        <div class="row item">
            <div class="small-9 columns text-left">
                <h5>
                    Your account
                    <img style="width:24px; height:24px" src="{{{ $avatar }}}">
                    <strong>{{{ $username }}}</strong> is created
                </h5>
            </div>
            <div class="small-3 columns text-right">
                <p>Just now</p>
            </div>

        </div>
        <div class="row">
            <div class="large-12 columns">
                <div class="row">
                    <div class="large-8 columns text-left">
                        <h5>Yolo</h5>
                    </div>
                    <div class="large-4 columns text-right">
                        <p>1 min ago</p>
                    </div>
                </div>
                <div clas="row">
                    <img src="/images/live-concert-455762_1920.jpg">
                </div>
                <div class="row">
                        <div class="small-8 columns text-left">
                            <h5>Welcome to Yolo!</h5>
                        </div>
                        <div class="small-4 columns text-right">
                            <img src="/images/icons/chat.png">
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@stop
