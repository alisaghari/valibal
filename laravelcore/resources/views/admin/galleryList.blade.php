@extends('admin.master')

@section('content')
    <div>
        <table class="table table-striped jambo_table bulk_action">
            <thead>
            <tr class="headings">
                <th class="column-title">عکس  </th>
                <th class="column-title">عنوان  </th>
                <th>حذف</th>
            </tr>
            </thead>

            <tbody>



            @foreach($galleries as $gallery)
                <tr class="even pointer">
                    <td class=" "><img src="{{ url('/') }}/content/gallery/{{$gallery->id}}.{{$gallery->img}}" width="50"> </td>
                    <td class=" ">{{$gallery->name}}</td>
                    <td >
                        <a href="{{ url('/') }}/adminSecret/gallery/delete/{{$gallery->id}}" class="btn btn-danger">حذف</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@stop
