@extends('user.master')
    @section('title')
    <h1><span class="colored">گالرری</span> آینده سازان</h1>
    @stop()
@section('content')
    <div id="best-deal">
        <div class="container">

                <?php $i=0; ?>
                @foreach($galleries as $gallery)
                        <?php $i++; ?>
                    @if($i%3==0)
                                <div class="row">
                        @endif
                    <div class="col-md-4 item-block animate-box" data-animate-effect="fadeIn">

                        <div class="fh5co-property">
                            <figure>
                                <img src="{{ url('/') }}/content/gallery/{{$gallery->id}}.{{$gallery->img}}" alt="Free Website Templates FreeHTML5.co" class="img-responsive">
                                <a  class="tag">{{$gallery->title}}</a>
                            </figure>
                        </div>
                    </div>
                                    @if($i%3==0)
                                </div>
                                            @endif
                @endforeach

    </div>


    @stop()