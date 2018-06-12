@extends('admin.master')

@section('content')
    <div>
        <table class="table table-striped jambo_table bulk_action">
            <thead>
            <tr class="headings">
                <th class="column-title">عکس  </th>
                <th class="column-title">نام  </th>
                <th class="column-title">توضیحات </th>
                <th>حذف</th>
            </tr>
            </thead>

            <tbody>



            @foreach($galleries as $gallery)
                <tr class="even pointer">
                    <td class=" ">
                        @if($gallery->ext!="mp4")
                            <img src="{{ url('/') }}/content/usergallery/{{$gallery->id}}.{{$gallery->ext}}" width="50">
                        @else
                            <a class="btn btn-warning" href="{{ url('/') }}/content/usergallery/{{$gallery->id}}.{{$gallery->ext}}">مشاهده ویدیو</a>
                        @endif
                    </td>
                    <td class=" ">{{$gallery->name}}</td>
                    <td class=" ">{{$gallery->description}} </td>
                    <td >
                        <a href="{{ url('/') }}/adminSecret/gallery/user/delete/{{$gallery->id}}" class="btn btn-danger">حذف</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@stop
