@extends('admin.master')

@section('content')
    <div>
        <table class="table table-striped jambo_table bulk_action">
            <thead>
            <tr class="headings">
                <th class="column-title">عکس  </th>
                <th class="column-title">نام  </th>
                <th>حذف</th>
            </tr>
            </thead>

            <tbody>



            @foreach($Cvteachers as $Cvteacher)
                <tr class="even pointer">
                    <td class=" "><img src="{{ url('/') }}/content/teacherscv/{{$Cvteacher->id}}.{{$Cvteacher->img}}" width="50"> </td>
                    <td class=" ">{{$Cvteacher->name}}</td>
                    <td >
                        <a href="{{ url('/') }}/adminSecret/teacher/cv/delete/{{$Cvteacher->id}}" class="btn btn-danger">حذف</a>
                    </td>

                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@stop
