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



            @foreach($talents as $talent)
                <tr class="even pointer">
                    <td class=" "><img src="{{ url('/') }}/content/talents/{{$talent->id}}.{{$talent->img}}" width="50"> </td>
                    <td class=" ">{{$talent->name}}</td>
                    <td class=" ">{{$talent->description}} </td>
                    <td >
                        <a href="{{ url('/') }}/adminSecret/talent/delete/{{$talent->id}}" class="btn btn-danger">حذف</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@stop
