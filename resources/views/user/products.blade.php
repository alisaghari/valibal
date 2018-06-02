@extends('user.master')
    @section('title')
    <h1><span class="colored">دوره های</span> آینده سازان</h1>
    @stop()
@section('content')
    <div id="best-deal">
        <div class="container">
            <div class="row">
                @foreach($products as $product)
                    <div class="col-md-4 item-block animate-box" data-animate-effect="fadeIn">

                        <div class="fh5co-property">
                            <figure>
                                <img src="{{ url('/') }}/content/products/{{$product->id}}.{{$product->img}}" alt="Free Website Templates FreeHTML5.co" class="img-responsive">
                                <a href="{{ url('/') }}/product/cart/add/{{$product->id}}" class="tag">ثبت نام</a>
                            </figure>
                            <div class="fh5co-property-innter">
                                <h3><a href="#">{{$product->name}}</a></h3>
                                <div class="price-status">
                                    <span class="price">{{number_format($product->price)}}  ریال  </span>
                                </div>
                                <p>{{$product->description}} </p>
                            </div>
                            <p class="fh5co-property-specification">
                                <span style="direction: rtl"><strong>مربی</strong> {{$product->teacher}}</span>      <span style="direction: rtl">همیشه <strong style="direction: rtl">زمان ثبت نام</strong>   </span>
                            </p>
                        </div>
                    </div>
                @endforeach


        </div>
    </div>


    @stop()