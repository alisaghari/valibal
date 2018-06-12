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
                <th>افزودن رزومه</th>
                <th>رزومه ها</th>
            </tr>
            </thead>

            <tbody>



            @foreach($teachers as $teacher)
                <tr class="even pointer">
                    <td class=" "><img src="{{ url('/') }}/content/teachers/{{$teacher->id}}.{{$teacher->img}}" width="50"> </td>
                    <td class=" ">{{$teacher->name}}</td>
                    <td class=" ">{{$teacher->description}} </td>
                    <td >
                        <a href="{{ url('/') }}/adminSecret/teacher/delete/{{$teacher->id}}" class="btn btn-danger">حذف</a>
                    </td>
                    <td >
                        <a href="{{ url('/') }}/adminSecret/teacher/cv/{{$teacher->id}}" class="btn btn-danger">افزودن رزومه مربی</a>
                    </td>
                    <td >
                        <a href="{{ url('/') }}/adminSecret/teachercv/list/{{$teacher->id}}" class="btn btn-danger">لیست رزومه ها</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@stop
