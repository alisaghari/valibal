@extends('admin.master')

@section('content')
    <style>
        tr{
            height:50px;
        }
    </style>
    {{ Form::open(array('url' => 'adminSecret/gallery/user/add', 'method' => 'post', 'files' => true)) }}
    <table style="width: 100%;">
        <tr>
            <td style="width: 200px">
                عنوان
            </td>
            <td>
                {{ Form::text('name','',['class' => 'form-control']) }}
                {{ Form::hidden('user_id',$user_id,['class' => 'form-control']) }}
            </td>
        </tr>
        <tr>
            <td>
                توضیح مختصر
            </td>
            <td>
                {{ Form::textarea('description','',['class' => 'form-control']) }}
            </td>
        </tr>
        <tr>
            <td>
                تصویر یا ویدیو
            </td>
            <td>
                {{ Form::file('file' ) }}
            </td>
        </tr>
        <tr>
            <td>
                تصویر پوستر ویدیو
            </td>
            <td>
                {{ Form::file('poster' ) }}
            </td>
        </tr>
        <tr>
            <td>
                آیا  ویدیو دارد ؟
            </td>
            <td>
                {{ Form::checkbox('isVideo') }}
            </td>
        </tr>
        <tr>
            <td>

            </td>
            <td>
                {{ Form::submit('ثبت',['class'=>'btn btn-primary','style'=>'float: left ; border-radius: 0px']) }}
            </td>
        </tr>

    </table>
@stop
