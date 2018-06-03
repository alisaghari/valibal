@extends('user.masterstu')

@section('title')
   گالری من
@stop

@section('content')
    <style>
        .my-video3-dimensions{
            height: 240px !important;
        }
        </style>
    <link href="https://vjs.zencdn.net/6.9.0/video-js.css" rel="stylesheet">

    <!-- If you'd like to support IE8 (for Video.js versions prior to v7) -->
    <script src="http://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>
    <div id="best-deal">
        <div class="container">
            <div class="row">
                @foreach($galleries as $gallery)
                    <div class="col-md-4 item-block animate-box" data-animate-effect="fadeIn">

                        <div class="fh5co-property">
                            <figure>
                                @if($gallery->ext!="mp4")
                                    <img src="{{ url('/') }}/content/usergallery/{{$gallery->id}}.{{$gallery->ext}}" alt="Free Website Templates FreeHTML5.co" class="img-responsive">
                                @else
                                    <style>
                                        .video-js .vjs-tech {
                                            position: initial !important;
                                        }
                                    </style>
                                    <video id="my-video3" class="video-js img-responsive"  style="width: 100%" controls preload="auto" poster="{{ url('/') }}/content/learns/{{$gallery->id}}_poster.{{$gallery->extp}}" data-setup="{}">
                                        <source src="{{ url('/') }}/content/learns/{{$gallery->id}}.{{$gallery->ext}}" type='video/mp4'>
                                        <source src="{{ url('/') }}/content/learns/{{$gallery->id}}.{{$gallery->ext}}" type='video/webm'>
                                    </video>
                                    <script src="https://vjs.zencdn.net/6.9.0/video.js"></script>
                                @endif
                            </figure>
                            <div class="fh5co-property-innter">
                                <h3><a href="#">{{$gallery->name}}</a></h3>
                                <p>{!! $gallery->description  !!} </p>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </div>
    <script src="https://vjs.zencdn.net/6.9.0/video.js"></script>
@stop