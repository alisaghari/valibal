@extends('admin.master')

@section('content')
    <style>
        tr{
            height:50px;
        }
    </style>
    {{ Form::open(array('url' => 'adminSecret/learn/add', 'method' => 'post', 'files' => true)) }}
    <table style="width: 100%;">
        <tr>
            <td style="width: 200px">
               نام آموزش
            </td>
            <td>
                {{ Form::text('name','',['class' => 'form-control']) }}
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
               متن کامل
            </td>
            <td>
                {{ Form::textarea('content','',['class' => 'form-control']) }}
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
                دسته بندی
            </td>
            <td>
                {{ Form::select('category', array('1' => 'والیبال خوب'),'',['class'=>'form-control']) }}
            </td>
        </tr>
        <tr>
            <td>
              آیا این آموزش ویدیو دارد ؟
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
