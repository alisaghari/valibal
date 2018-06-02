@extends('admin.master')

@section('content')
    <style>
        tr{
            height:50px;
        }
    </style>
    {{ Form::open(array('url' => 'adminSecret/class/add', 'method' => 'post', 'files' => true)) }}
    <table style="width: 100%;">
        <tr>
            <td style="width: 200px">
                    نام دوره
            </td>
            <td>
                {{ Form::text('name','',['class' => 'form-control']) }}
            </td>
        </tr>
        <tr>
            <td>
                نام مربی
            </td>
            <td>
                {{ Form::text('teacher','',['class' => 'form-control']) }}
            </td>
        </tr>
        <tr>
            <td>
                تاریخ شروع دوره
            </td>
            <td>
                {{ Form::text('startDate','',['class' => 'form-control']) }}
            </td>
        </tr>
        <tr>
            <td>
               ساعت شروع
            </td>
            <td>
                {{ Form::text('startTime','',['class' => 'form-control']) }}
            </td>
        </tr>
        <tr>
            <td>
               lat
            </td>
            <td>
                {{ Form::text('lat','',['class' => 'form-control']) }}
            </td>
        </tr>
        <tr>
            <td>
                long
            </td>
            <td>
                {{ Form::text('long','',['class' => 'form-control']) }}
            </td>
        </tr>
        <tr>
            <td>
                ظرفیت
            </td>
            <td>
                {{ Form::text('capacity','',['class' => 'form-control']) }}
            </td>
        </tr>
        <tr>
            <td>
                تعداد جلسات
            </td>
            <td>
                {{ Form::text('count','',['class' => 'form-control']) }}
            </td>
        </tr>
        <tr>
            <td>
            عکس مربی
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
