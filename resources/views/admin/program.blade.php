@extends('admin.master')

@section('content')
    {{ Form::open(array('url' => 'adminSecret/product/program/add', 'method' => 'post')) }}
    {{ Form::hidden('product_id',$id) }}
    <table class="table table-bordered">
    <tr>
        <th>روز</th>
        <th>8 الی 10</th>
        <th>10 الی 12</th>
        <th>12 الی 14</th>
        <th>14 الی 16</th>
        <th>16 الی 18</th>
        <th>18 الی 20</th>
        <th>20  الی 22</th>
    </tr>
        <tr>
            <td>{{ Form::text('day1','شنبه',['class' => 'form-control']) }}</td>
            <td>{{ Form::text('h81','',['class' => 'form-control']) }}</td>
            <td>{{ Form::text('h101','',['class' => 'form-control']) }}</td>
            <td>{{ Form::text('h121','',['class' => 'form-control']) }}</td>
            <td>{{ Form::text('h141','',['class' => 'form-control']) }}</td>
            <td>{{ Form::text('h161','',['class' => 'form-control']) }}</td>
            <td>{{ Form::text('h181','',['class' => 'form-control']) }}</td>
            <td>{{ Form::text('h201','',['class' => 'form-control']) }}</td>
        </tr>
        <tr>
            <td>{{ Form::text('day2','یک شنبه',['class' => 'form-control']) }}</td>
            <td>{{ Form::text('h82','',['class' => 'form-control']) }}</td>
            <td>{{ Form::text('h102','',['class' => 'form-control']) }}</td>
            <td>{{ Form::text('h122','',['class' => 'form-control']) }}</td>
            <td>{{ Form::text('h142','',['class' => 'form-control']) }}</td>
            <td>{{ Form::text('h162','',['class' => 'form-control']) }}</td>
            <td>{{ Form::text('h182','',['class' => 'form-control']) }}</td>
            <td>{{ Form::text('h202','',['class' => 'form-control']) }}</td>
        </tr>
        <tr>
            <td>{{ Form::text('day3','دو شنبه',['class' => 'form-control']) }}</td>
            <td>{{ Form::text('h83','',['class' => 'form-control']) }}</td>
            <td>{{ Form::text('h103','',['class' => 'form-control']) }}</td>
            <td>{{ Form::text('h123','',['class' => 'form-control']) }}</td>
            <td>{{ Form::text('h143','',['class' => 'form-control']) }}</td>
            <td>{{ Form::text('h163','',['class' => 'form-control']) }}</td>
            <td>{{ Form::text('h183','',['class' => 'form-control']) }}</td>
            <td>{{ Form::text('h203','',['class' => 'form-control']) }}</td>
        </tr>
        <tr>
            <td>{{ Form::text('day4','سه شنبه',['class' => 'form-control']) }}</td>
            <td>{{ Form::text('h84','',['class' => 'form-control']) }}</td>
            <td>{{ Form::text('h104','',['class' => 'form-control']) }}</td>
            <td>{{ Form::text('h124','',['class' => 'form-control']) }}</td>
            <td>{{ Form::text('h144','',['class' => 'form-control']) }}</td>
            <td>{{ Form::text('h164','',['class' => 'form-control']) }}</td>
            <td>{{ Form::text('h184','',['class' => 'form-control']) }}</td>
            <td>{{ Form::text('h204','',['class' => 'form-control']) }}</td>
        </tr>
        <tr>
            <td>{{ Form::text('day5','چهار شنبه',['class' => 'form-control']) }}</td>
            <td>{{ Form::text('h85','',['class' => 'form-control']) }}</td>
            <td>{{ Form::text('h105','',['class' => 'form-control']) }}</td>
            <td>{{ Form::text('h125','',['class' => 'form-control']) }}</td>
            <td>{{ Form::text('h145','',['class' => 'form-control']) }}</td>
            <td>{{ Form::text('h165','',['class' => 'form-control']) }}</td>
            <td>{{ Form::text('h185','',['class' => 'form-control']) }}</td>
            <td>{{ Form::text('h205','',['class' => 'form-control']) }}</td>
        </tr>
        <tr>
            <td>{{ Form::text('day6','پنج شنبه',['class' => 'form-control']) }}</td>
            <td>{{ Form::text('h86','',['class' => 'form-control']) }}</td>
            <td>{{ Form::text('h106','',['class' => 'form-control']) }}</td>
            <td>{{ Form::text('h126','',['class' => 'form-control']) }}</td>
            <td>{{ Form::text('h146','',['class' => 'form-control']) }}</td>
            <td>{{ Form::text('h166','',['class' => 'form-control']) }}</td>
            <td>{{ Form::text('h186','',['class' => 'form-control']) }}</td>
            <td>{{ Form::text('h206','',['class' => 'form-control']) }}</td>
        </tr>
        <tr>
            <td>{{ Form::text('day7','جمعه',['class' => 'form-control']) }}</td>
            <td>{{ Form::text('h87','',['class' => 'form-control']) }}</td>
            <td>{{ Form::text('h107','',['class' => 'form-control']) }}</td>
            <td>{{ Form::text('h127','',['class' => 'form-control']) }}</td>
            <td>{{ Form::text('h147','',['class' => 'form-control']) }}</td>
            <td>{{ Form::text('h167','',['class' => 'form-control']) }}</td>
            <td>{{ Form::text('h187','',['class' => 'form-control']) }}</td>
            <td>{{ Form::text('h207','',['class' => 'form-control']) }}</td>
        </tr>
    </table>
    {{ Form::submit('ثبت',['class'=>'btn btn-primary','style'=>'float: left ; border-radius: 0px ; float:right']) }}
    {{ Form::close() }}



    <table class="table table-bordered">
        <tr>
            <th>روز</th>
            <th>8 الی 10</th>
            <th>10 الی 12</th>
            <th>12 الی 14</th>
            <th>14 الی 16</th>
            <th>16 الی 18</th>
            <th>18 الی 20</th>
            <th>20  الی 22</th>
        </tr>
        @foreach($Programs as $program)
        <tr>
            <td>{{ $program->day }}</td>
            <td>{{ $program->h8 }}</td>
            <td>{{ $program->h10 }}</td>
            <td>{{ $program->h12 }}</td>
            <td>{{ $program->h14 }}</td>
            <td>{{ $program->h16 }}</td>
            <td>{{ $program->h18 }}</td>
            <td>{{ $program->h20 }}</td>
        </tr>
            @endforeach
    </table>
@stop
