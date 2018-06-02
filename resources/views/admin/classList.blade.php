@extends('admin.master')

@section('content')
    <div>
        <table class="table table-striped jambo_table bulk_action">
            <thead>
            <tr class="headings">
                <th class="column-title">عکس  </th>
                <th class="column-title">نام  </th>
                <th class="column-title">مربی </th>
                <th class="column-title">تاریخ شروع </th>
                <th class="column-title">ساعت شروع </th>
                <th>حذف</th>
            </tr>
            </thead>

            <tbody>



            @foreach($products as $product)
                <tr class="even pointer">
                    <td class=" "><img src="{{ url('/') }}/content/class/{{$product->id}}.{{$product->img}}" width="50"> </td>
                    <td class=" ">{{$product->name}}</td>
                    <td class=" ">{{$product->teacher}} </td>
                    <td class=" ">{{$product->start_date}}</td>
                    <td class=" ">{{$product->start_time}}</td>
                    <td >
                        <a href="{{ url('/') }}/adminSecret/class/delete/{{$product->id}}" class="btn btn-danger">حذف</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@stop
