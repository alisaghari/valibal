@extends('user.master')
    @section('title')
    <h1><span class="colored">تماس</span> باما</h1>
    @stop()
@section('content')
    <style>
        input,textarea{
            direction: rtl;
        }
    </style>
<div class="fh5co-contact animate-box">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h3>راه های ارتباط با ما</h3>
                <ul class="contact-info">
                    <li><i class="icon-map"></i>جنب بیمارستان سینا</li>
                    <li><i class="icon-phone"></i>+ 1235 2355 98</li>
                    <li><i class="icon-envelope"></i><a href="#">info@yoursite.com</a></li>
                    <li><i class="icon-globe"></i><a href="#">www.yoursite.com</a></li>
                </ul>
            </div>
            <div class="col-md-8 col-md-push-1 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input class="form-control" placeholder="نام و نام خانوادگی" type="text">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input class="form-control" placeholder="ایمیل" type="text">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <textarea name="" class="form-control" id="" cols="30" rows="7" placeholder="پیام شما"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <input value="ارسال پیام" class="btn btn-primary" type="submit">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    @stop()