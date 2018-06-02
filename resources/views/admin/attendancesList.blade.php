@extends('admin.master')

@section('content')
	{{ Form::open(array('url' => 'adminSecret/class/att/find/list', 'method' => 'post')) }}
	<table style="width: 100%;" class="table table-bordered">
		<tr>
			<td style="width: 200px">
				کد ملی
			</td>
			<td>
				{{ Form::text('nc','',['class' => 'form-control']) }}
				{{ Form::hidden('product_id',$product_id) }}
			</td>

			<td>
				{{ Form::submit('بررسی وضعیت',['class'=>'btn btn-primary','style'=>'float: left ; border-radius: 0px']) }}
			</td>
		</tr>
		@foreach($users as $user)
			<tr>
				<td style="width: 200px">
					نام خانوادگی	نام
				</td>
				<td>
{{ $user->name }} {{ $user->family }}
				</td>
				<td style="width: 200px">
					{{ $user->status }}
				</td>
				<td>
					{{ $user->date }}
				</td>
			</tr>
		@endforeach
	</table>
@stop
