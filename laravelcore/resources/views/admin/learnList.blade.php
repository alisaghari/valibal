@extends('admin.master')

@section('content')
    <div>
        <table class="table table-striped jambo_table bulk_action">
            <thead>
            <tr class="headings">
                <th class="column-title">عکس  </th>
                <th class="column-title">نام  </th>
                <th class="column-title">توضیحات </th>
                <th class="column-title" >کد دسته بندی(موقتا غیر فعال)</th>
                <th>حذف</th>
            </tr>
            </thead>

            <tbody>



            @foreach($learns as $learn)
                <tr class="even pointer">
                    <td class=" ">
                        @if($learn->ext!="mp4")
                        <img src="{{ url('/') }}/content/learns/{{$learn->id}}.{{$learn->ext}}" width="50">
                        @else
                            <a class="btn btn-warning" href="{{ url('/') }}/content/learns/{{$learn->id}}.{{$learn->ext}}">مشاهده ویدیو</a>
                        @endif
                    </td>
                    <td class=" ">{{$learn->name}}</td>
                    <td class=" ">{{$learn->description}} </td>
                    <td >{{$learn->category}}</td>
                    <td >
                        <a href="{{ url('/') }}/adminSecret/learn/delete/{{$learn->id}}" class="btn btn-danger">حذف</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@stop
