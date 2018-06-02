@extends('user.master')
    @section('title')
    <h1><span class="colored">جزئیات محصول</span> </h1>
    @stop()
@section('content')
    <style>
        input,textarea{
            direction: rtl;
        }
        img {
            max-width: 100%; }

        .preview {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column; }
        @media screen and (max-width: 996px) {
            .preview {
                margin-bottom: 20px; } }

        .preview-pic {
            -webkit-box-flex: 1;
            -webkit-flex-grow: 1;
            -ms-flex-positive: 1;
            flex-grow: 1; }

        .preview-thumbnail.nav-tabs {
            border: none;
            margin-top: 15px; }
        .preview-thumbnail.nav-tabs li {
            width: 18%;
            margin-right: 2.5%; }
        .preview-thumbnail.nav-tabs li img {
            max-width: 100%;
            display: block; }
        .preview-thumbnail.nav-tabs li a {
            padding: 0;
            margin: 0; }
        .preview-thumbnail.nav-tabs li:last-of-type {
            margin-right: 0; }

        .tab-content {
            overflow: hidden; }
        .tab-content img {
            width: 100%;
            -webkit-animation-name: opacity;
            animation-name: opacity;
            -webkit-animation-duration: .3s;
            animation-duration: .3s; }

        .card {
            margin-top: 50px;
            background: #eee;
            padding: 3em;
            line-height: 1.5em; }

        @media screen and (min-width: 997px) {
            .wrapper {
                display: -webkit-box;
                display: -webkit-flex;
                display: -ms-flexbox;
                display: flex; } }

        .details {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column; }

        .colors {
            -webkit-box-flex: 1;
            -webkit-flex-grow: 1;
            -ms-flex-positive: 1;
            flex-grow: 1; }

        .product-title, .price, .sizes, .colors {
            text-transform: UPPERCASE;
            font-weight: bold; }

        .checked, .price span {
            color: #ff9f1a; }

        .product-title, .rating, .product-description, .price, .vote, .sizes {
            margin-bottom: 15px; }

        .product-title {
            margin-top: 0; }

        .size {
            margin-right: 10px; }
        .size:first-of-type {
            margin-left: 40px; }

        .color {
            display: inline-block;
            vertical-align: middle;
            margin-right: 10px;
            height: 2em;
            width: 2em;
            border-radius: 2px; }
        .color:first-of-type {
            margin-left: 20px; }

        .add-to-cart, .like {
            background: #ff9f1a;
            padding: 1.2em 1.5em;
            border: none;
            text-transform: UPPERCASE;
            font-weight: bold;
            color: #fff;
            -webkit-transition: background .3s ease;
            transition: background .3s ease; }
        .add-to-cart:hover, .like:hover {
            background: #b36800;
            color: #fff; }

        .not-available {
            text-align: center;
            line-height: 2em; }
        .not-available:before {
            font-family: fontawesome;
            content: "\f00d";
            color: #fff; }

        .orange {
            background: #ff9f1a; }

        .green {
            background: #85ad00; }

        .blue {
            background: #0076ad; }

        .tooltip-inner {
            padding: 1.3em; }

        @-webkit-keyframes opacity {
            0% {
                opacity: 0;
                -webkit-transform: scale(3);
                transform: scale(3); }
            100% {
                opacity: 1;
                -webkit-transform: scale(1);
                transform: scale(1); } }

        @keyframes opacity {
            0% {
                opacity: 0;
                -webkit-transform: scale(3);
                transform: scale(3); }
            100% {
                opacity: 1;
                -webkit-transform: scale(1);
                transform: scale(1); } }

    </style>
<div class="fh5co-contact animate-box">
    <div class="container">

        <div class="card">
            @foreach($Products as $product)
            <div class="container-fliud">
                <div class="wrapper row">
                    <div class="preview col-md-6">

                        <div class="preview-pic tab-content">
                            <div class="tab-pane active" id="pic-1"><img src="{{ url('/') }}/content/products/{{$product->id}}.{{$product->img}}" /></div>
                        </div>
                    </div>
                    <div class="details col-md-6">
                        <h3 class="product-title">{{$product->name}}</h3>
                        <p class="product-description">{{$product->description}}</p>
                        <h4 class="price">هزینه دوره : <span>{{number_format($product->price)}} ریال </span></h4>
                        <div class="action">
                            <a href="{{ url('/') }}/product/cart/add/{{$product->id}}" class="add-to-cart btn btn-default" type="button">افزودن به سبد خرید</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            <h3> زمان بندی دوره</h3>
                <table class="table table-bordered" style="direction: rtl">
                    <tr>
                        <th>روز</th>
                        <th>8 الی 10</th>
                        <th>10 الی 12</th>
                        <th>12 الی 14</th>
                        <th>14 الی 16</th>
                        <th>16 الی 18</th>
                        <th>18 الی 20</th>
                        <th>20  الی 22</th>
                    </tr>
                    @foreach($Programs as $program)
                        <tr>
                            <td>{{ $program->day }}</td>
                            <td>{{ $program->h8 }}</td>
                            <td>{{ $program->h10 }}</td>
                            <td>{{ $program->h12 }}</td>
                            <td>{{ $program->h14 }}</td>
                            <td>{{ $program->h16 }}</td>
                            <td>{{ $program->h18 }}</td>
                            <td>{{ $program->h20 }}</td>
                        </tr>
                    @endforeach
                </table>
        </div>

    </div>
</div>

    @stop()