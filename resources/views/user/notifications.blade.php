@extends('user.master')
    @section('title')
    <h1><span class="colored">اعلامیه های </span> آینده سازان</h1>
    @stop()
@section('content')
    <link href="https://vjs.zencdn.net/6.9.0/video-js.css" rel="stylesheet">

    <!-- If you'd like to support IE8 (for Video.js versions prior to v7) -->
    <script src="http://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>
    <div id="best-deal">
        <div class="container">
            <div class="row">
                @foreach($notifications as $notification)
                    <div class="col-md-4 item-block animate-box" data-animate-effect="fadeIn">

                        <div class="fh5co-property">
                            <figure>
                                <img src="{{ url('/') }}/content/notifications/{{$notification->id}}.{{$notification->img}}" alt="Free Website Templates FreeHTML5.co" class="img-responsive">
                                    <a href="#" class="tag">جزئیات</a>
                            </figure>
                            <div class="fh5co-property-innter">
                                <h3><a href="#">{{$notification->name}}</a></h3>
                                <p>{{$notification->description}} </p>
                            </div>
                        </div>
                    </div>
                @endforeach


        </div>
    </div>
    </div>
    <script src="https://vjs.zencdn.net/6.9.0/video.js"></script>
    @stop()