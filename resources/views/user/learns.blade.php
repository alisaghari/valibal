@extends('user.master')
    @section('title')
    <h1><span class="colored">آموزش های </span> آینده سازان</h1>
    @stop()
@section('content')
    <link href="https://vjs.zencdn.net/6.9.0/video-js.css" rel="stylesheet">

    <!-- If you'd like to support IE8 (for Video.js versions prior to v7) -->
    <script src="http://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>
    <div id="best-deal">
        <div class="container">
            <div class="row">
                @foreach($learns as $learn)
                    <div class="col-md-4 item-block animate-box" data-animate-effect="fadeIn">

                        <div class="fh5co-property">
                            <figure>
                                @if($learn->ext!="mp4")
                                <img src="{{ url('/') }}/content/learns/{{$learn->id}}.{{$learn->ext}}" alt="Free Website Templates FreeHTML5.co" class="img-responsive">
                                @else
                                    <style>
                                        .video-js .vjs-tech {
                                           position: initial !important;
                                        }
                                    </style>
                                    <video id="my-video3" class="video-js img-responsive" controls preload="auto" poster="{{ url('/') }}/content/learns/{{$learn->id}}_poster.{{$learn->extp}}" data-setup="{}">
                                        <source src="{{ url('/') }}/content/learns/{{$learn->id}}.{{$learn->ext}}" type='video/mp4'>
                                        <source src="{{ url('/') }}/content/learns/{{$learn->id}}.{{$learn->ext}}" type='video/webm'>
                                    </video>
                                    <script src="https://vjs.zencdn.net/6.9.0/video.js"></script>
                                @endif
                                    <a href="#" class="tag">مشاهده</a>
                            </figure>
                            <div class="fh5co-property-innter">
                                <h3><a href="#">{{$learn->name}}</a></h3>
                                <p>{!! $learn->description !!} </p>
                            </div>
                        </div>
                    </div>
                @endforeach


        </div>
    </div>
    </div>
    <script src="https://vjs.zencdn.net/6.9.0/video.js"></script>
    @stop()