@extends('admin.master')

@section('content')
    <style>
        tr{
            height:50px;
        }
    </style>
    {{ Form::open(array('url' => 'adminSecret/product/add', 'method' => 'post', 'files' => true)) }}
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
            <td style="width: 200px">
               مبلغ
            </td>
            <td>
                {{ Form::text('price','',['class' => 'form-control']) }}
            </td>
        </tr>
        <tr>
            <td>
                نام مربی (اختیاری)
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
                تاریخ پایان دوره
            </td>
            <td>
                {{ Form::text('endDate','',['class' => 'form-control']) }}
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
              تصویر
            </td>
            <td>
                {{ Form::file('image' ) }}
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
                آیا این دوره همیشه ثبت نام دارد ؟
            </td>
            <td>
                {{ Form::checkbox('loop') }}
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
