@extends('admin.master')

@section('content')
    <style>
        tr{
            height:50px;
        }
    </style>
    {{ Form::open(array('url' => 'adminSecret/notification/add', 'method' => 'post', 'files' => true)) }}
    <table style="width: 100%;">
        <tr>
            <td style="width: 200px">
             عنوان
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
                {{ Form::textarea('short_description','',['class' => 'form-control']) }}
            </td>
        </tr>
        <tr>
            <td>
                توضیح
            </td>
            <td>
                {{ Form::textarea('description','',['class' => 'form-control']) }}
            </td>
        </tr>
        <tr>
            <td>
                تصویر
            </td>
            <td>
                {{ Form::file('image' ) }}
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
