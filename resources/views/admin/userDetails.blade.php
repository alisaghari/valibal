@extends('admin.master')

@section('content')
    <div>
        <h3>اطلاعات کاربر:</h3>
        <hr/>
        <table class="table table-striped jambo_table bulk_action">
            <thead>
            <tr class="headings">
                <th class="column-title">نام </th>
                <th class="column-title">نام خانوادگی </th>
                <th class="column-title">شماره همراه </th>
                <th class="column-title">کد ملی </th>
                <th class="column-title">جنسیت </th>
                <th class="column-title">تاریخ تولد </th>
                <th class="column-title no-link last">تلفن ضروری</th>
                <th class="bulk-actions" colspan="7">
                    <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                </th>
            </tr>
            </thead>

            <tbody>

            @foreach($users as $user)
                <tr class="even pointer">
                    <td class=" ">{{$user->name}}</td>
                    <td class=" ">{{$user->family}} </td>
                    <td class=" ">{{$user->studentPhone}} <i class="success fa fa-long-arrow-up"></i></td>
                    <td class=" ">{{$user->nationalCode}}</td>
                    <td class=" ">{{$user->gender}}</td>
                    <td class="a-right a-right ">{{$user->birthday}}</td>
                    <td class=" last">{{$user->emergencyPhone}}</td>

                </tr>

            @endforeach
            </tbody>
        </table>
        <h3>مدارک کاربر:</h3>
        <hr/>
        @foreach($users as $user)
            <div class="container-fluid">
                <div class="row">
                    @if($user->img1!="")
                        <div class="col-sm-4">
                            <img src="{{ url('/') }}/content/user/{{$user->id}}A.{{$user->img1}}" style="width: 100%">
                        </div>
                    @endif
                    @if($user->img2!="")
                        <div class="col-sm-4">
                            <img src="{{ url('/') }}/content/user/{{$user->id}}B.{{$user->img2}}" style="width: 100%">
                        </div>
                    @endif
                    @if($user->img3!="")
                        <div class="col-sm-4">
                            <img src="{{ url('/') }}/content/user/{{$user->id}}C.{{$user->img3}}" style="width: 100%">
                        </div>
                    @endif
                </div>
            </div>
        @endforeach
    </div>
@stop
