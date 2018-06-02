@extends('user.master')
    @section('title')
    <h1><span class="colored">آموزش های </span> آینده سازان</h1>
    @stop()
@section('content')
    <div id="fh5co-agents" style="background-color: whitesmoke" >
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center fh5co-heading  animate-box" data-animate-effect="fadeIn">
                    <h2>مربیان توانمند ما</h2>
                    <p>
                        ما با جذب بهترین و شاداب ترین مربیان سعی در این داریم که شما را به هدفتان برسانیم.
                    </p>
                </div>
                @foreach($teachers as $teacher)
                <div class="col-md-4 text-center item-block animate-box" data-animate-effect="fadeIn" style="background-color: #f9f9f9">
                    <div class="fh5co-agent">
                        <figure>
                            <img src="{{ url('/') }}/content/teachers/{{$teacher->id}}.{{$teacher->img}}" alt="Free Website Template by FreeHTML5.co">
                        </figure>
                        <h3>{{$teacher->name}}</h3>
                        <p>{{$teacher->description}}</p>
                        <p><a href="#" class="btn btn-primary btn-outline">رزومه من</a></p>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>



    @stop()