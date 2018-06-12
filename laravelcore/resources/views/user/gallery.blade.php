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
                                <a href="#" class="thumbnail" data-toggle="modal" data-target="#lightbox">     <img src="{{ url('/') }}/content/gallery/{{$gallery->id}}.{{$gallery->img}}" alt="Free Website Templates FreeHTML5.co" class="img-responsive"></a>
                                <a  class="tag">{{$gallery->title}}</a>
                            </figure>
                        </div>
                    </div>
                                    @if($i%3==0)
                                </div>
                                            @endif
                @endforeach

    </div>
    </div>
    <div id="lightbox" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog" style=" z-index: 9999 !important;">
            <button type="button" class="close hidden" data-dismiss="modal" aria-hidden="true">×</button>
            <div class="modal-content">
                <div class="modal-body">
                    <img src="" alt="" />
                </div>
            </div>
        </div>
    </div>
    <style>

        #lightbox .modal-content {
            display: inline-block;
            text-align: center;
        }

        #lightbox .close {
            opacity: 1;
            color: rgb(255, 255, 255);
            background-color: rgb(25, 25, 25);
            padding: 5px 8px;
            border-radius: 30px;
            border: 2px solid rgb(255, 255, 255);
            position: absolute;
            top: -15px;
            right: -55px;

            z-index:1032;
        }
        .modal-backdrop {
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 0 !important;
            background-color: #000;
        }
        .thumbnail {
            display: block !important;
             padding: 0px !important;
             margin-bottom: 0px !important;
             line-height: 0 !important;
             background-color: #fff !important;
             border: 0px solid #ddd !important;
            border-radius: 0px !important;
            -webkit-transition: all .2s ease-in-out !important;
            transition: all .2s ease-in-out !important;
        }
    </style>

    <script>
        $(document).ready(function() {
            var $lightbox = $('#lightbox');

            $('[data-target="#lightbox"]').on('click', function(event) {
                var $img = $(this).find('img'),
                    src = $img.attr('src'),
                    alt = $img.attr('alt'),
                    css = {
                        'maxWidth': $(window).width() - 100,
                        'maxHeight': $(window).height() - 100
                    };

                $lightbox.find('.close').addClass('hidden');
                $lightbox.find('img').attr('src', src);
                $lightbox.find('img').attr('alt', alt);
                $lightbox.find('img').css(css);
            });

            $lightbox.on('shown.bs.modal', function (e) {
                var $img = $lightbox.find('img');

                $lightbox.find('.modal-dialog').css({'width': $img.width()});
                $lightbox.find('.close').removeClass('hidden');
            });
        });
    </script>
    @stop()