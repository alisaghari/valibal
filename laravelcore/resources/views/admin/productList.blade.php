@extends('admin.master')

@section('content')
    <div>
        <table class="table table-striped jambo_table bulk_action">
            <thead>
            <tr class="headings">
                <th class="column-title">عکس  </th>
                <th class="column-title">نام  </th>
                <th class="column-title">قیمت </th>
                <th class="column-title">مربی </th>
                <th class="column-title">تاریخ شروع </th>
                <th class="column-title">تاریخ پایان </th>
                <th class="column-title">تکرار ثبت نام هرروز</th>
                <th class="column-title" >کد دسته بندی(موقتا غیر فعال)</th>
                <th>حذف</th>
                <th>افزودن برنامه کلاسی</th>
                <th>افراد ثبت نام شده در این دوره</th>
                <th> حضور غیاب</th>
                <th>وضعیت حضور غیاب</th>
            </tr>
            </thead>

            <tbody>



            @foreach($products as $product)
                <tr class="even pointer">
                    <td class=" "><img src="{{ url('/') }}/content/products/{{$product->id}}.{{$product->img}}" width="50"> </td>
                    <td class=" ">{{$product->name}}</td>
                    <td class=" ">{{$product->price}} </td>
                    <td class=" ">{{$product->teacher}} </td>
                    <td class=" ">{{$product->start_day}}</td>
                    <td class=" ">{{$product->end_day}}</td>
                    <td >{{$product->loopCourse}}</td>
                    <td >{{$product->category}}</td>
                    <td >
                        <a href="{{ url('/') }}/adminSecret/product/delete/{{$product->id}}" class="btn btn-danger">حذف</a>
                    </td>
                    <td >
                        <a href="{{ url('/') }}/adminSecret/product/program/{{$product->id}}" class="btn btn-danger">افزودن برنامه کلاسی</a>
                    </td>
                    <td >
                        <a href="{{ url('/') }}/adminSecret/product/user/{{$product->id}}" class="btn btn-info">نمایش</a>
                    </td>
                    <td >
                        <a href="{{ url('/') }}/teacher/attend/{{$product->id}}" class="btn btn-info">حضور و غیاب</a>
                    </td>
                    <td >
                        <a href="{{ url('/') }}/adminSecret/class/att/user/find/{{$product->id}}" class="btn btn-info">وضعیت حضور و غیاب</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@stop
