@extends('admin.master')

@section('content')
    <div>
        <table class="table table-striped jambo_table bulk_action">
            <thead>
            <tr class="headings">
                <th class="column-title">عکس  </th>
                <th class="column-title">نام  </th>
                <th class="column-title">توضیح  </th>
                <th>حذف</th>
            </tr>
            </thead>

            <tbody>



            @foreach($notifications as $notification)
                <tr class="even pointer">
                    <td class=" "><img src="{{ url('/') }}/content/notifications/{{$notification->id}}.{{$notification->img}}" width="50"> </td>
                    <td class=" ">{{$notification->name}}</td>
                    <td class=" ">{{$notification->description}} </td>
                    <td >
                        <a href="{{ url('/') }}/adminSecret/notification/delete/{{$notification->id}}" class="btn btn-danger">حذف</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@stop
