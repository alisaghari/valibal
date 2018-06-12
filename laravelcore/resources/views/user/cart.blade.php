@extends('user.masterstu')

@section('title')
    سبد خرید
@stop

@section('content')
    <style>
        .table>tbody>tr>td, .table>tfoot>tr>td{
            vertical-align: middle;
        }
        @media screen and (max-width: 600px) {
            .table#cart tbody td .form-control{
                width:20%;
                display: inline !important;
            }
            .actions .btn{
                width:36%;
                margin:1.5em 0;
            }

            .actions .btn-info{
                float:left;
            }
            .actions .btn-danger{
                float:right;
            }

            .table#cart thead { display: none; }
            .table#cart tbody td { display: block; padding: .6rem; min-width:320px;}
            .table#cart tbody tr td:first-child { background: #333; color: #fff; }
            .table#cart tbody td:before {
                content: attr(data-th); font-weight: bold;
                display: inline-block; width: 8rem;
            }



            .table#cart tfoot td{display:block; }
            .table#cart tfoot td .btn{display:block;}

        }
    </style>

    <div class="container" style="background-color: white ; -webkit-box-shadow: 0px 0px 18px -2px rgba(0,0,0,0.75);-moz-box-shadow: 0px 0px 18px -2px rgba(0,0,0,0.75);box-shadow: 0px 0px 18px -2px rgba(0,0,0,0.75)">
        <table id="cart" class="table table-hover table-condensed">
            <thead>
            <tr>
                <th style="width:50%">دوره</th>
                <th style="width:10%">قیمت</th>
                <th style="width:10%">تاریخ شروع</th>
                <th style="width:22%" class="text-center">وضعیت تکرار</th>
                <th style="width:10%"></th>
            </tr>
            </thead>
            <tbody>
            <?php
            $totalPrice=  0;
            ?>
            @foreach($carts as $cart)
            <tr>
                <td data-th="Product">
                    <div class="row">
                        <div class="col-sm-2 hidden-xs"><img src="{{ url('/') }}/content/products/{{$cart->id}}.{{$cart->img}}" alt="..." class="img-responsive"/></div>
                        <div class="col-sm-10">
                            <h4 class="nomargin">{{ $cart->name  }}</h4>
                            <p>{{$cart->description}} </p>
                        </div>
                    </div>
                </td>
                <td data-th="Price">{{ number_format($cart->price) }}</td>
                <td data-th="Quantity">
                    {{ $cart->start_day  }}
                </td>
                <td data-th="Subtotal" class="text-center"> هر روز ثبت نام میشود</td>
                <td class="actions" data-th="">
                    <button class="btn btn-info btn-sm"><i class="fa fa-refresh"></i></button>
                    <a href="{{ url('/') }}//product/cart/delete/{{ $cart->cart_id  }}" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></a>
                </td>
            </tr>
                <?php
             $totalPrice+=   $cart->price;
                ?>
                @endforeach
            </tbody>
            <tfoot>
            <tr>
                <td><a href="{{ url('/') }}/products" class="btn btn-warning"><i class="fa fa-angle-left"></i> بازگشت به لیست دوره ها</a></td>
                <td colspan="2" class="hidden-xs"></td>
                <td class="hidden-xs text-center"><strong>مجموع {{ number_format($totalPrice) }}</strong></td>
                <td>
<style>
    .textbox{
        display: none;
    }
</style>
                    <form action="{{ url('/') }}/pay/index.php" method="POST">
                        <input type="hidden" class="textbox" name="action" id="action" value="pay"/>
                                        <input type="text" class="textbox" name="fullname" id="fullname" value="{{ $username }}"  style="text-align:right;" />
                                        <input type="text" class="textbox" name="PayOrderId" id="PayOrderId" value="{{$user_id}}{{time()}}" />
                                        <input type="text" class="textbox" name="user_id" id="user_id" value="{{$user_id}}" style="text-align:left;" />
                                         <input type="email" class="textbox" name="email" value="" id="email"/>
                                        <input type="submit" class="btn btn-success btn-block" value="پرداخت آنلاین" />
                    </form>

                </td>
            </tr>
            </tfoot>
        </table>
    </div>
@stop