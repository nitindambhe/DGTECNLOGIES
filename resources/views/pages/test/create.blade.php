@extends('layouts.app')
@section('title','Online Exam')
@section('content')
@php $data = (int) Session::get('exam.'.$userId.'.'.$result->id);@endphp
<div class="container">
	<div class="row">
		<div class="container-fluid bg-info">
			<h1>DG Tecnologies <span class="color_h1">PHP</span> Quiz</h1>
			<div class="w3-padding w3-light-grey">
				<p class="w3-large" style="margin-bottom:30px;">{{$result->id }} {{$result->question}}</p>
				{{ Form::open(['url' => '/exam/question/'.$result->id,'method'=>'post','id'=>'formId']) }}
				<div class='radio'>
					<label>
						@php $select =($data==1)?true:false;@endphp
						{{ Form::radio($result->id, '1',$select, array('id'=>'penyakit-1','autocomplete' => 'off')) }}
						{{ Form::label('penyakit-1', $result->optionA) }}
						
					</label>
				</div>
				<div class='radio'>
					<label>
						@php $select =($data==2)?true:false;@endphp
						{{ Form::radio($result->id, '2', $select, array('id'=>'penyakit-2','autocomplete' => 'off')) }}
						{{ Form::label('penyakit-2', $result->optionB) }}
					</label>
				</div>
				<div class='radio'>
					<label>
						@php $select =($data==3)?true:false; @endphp
						{{ Form::radio($result->id, '3', $select, array('id'=>'penyakit-3','autocomplete' => 'off')) }}
						{{ Form::label('penyakit-3', $result->optionC) }}
					</label>
				</div>
				<div class='radio'>
					<label>
						@php $select =($data==4)?true:false;@endphp
						{{ Form::radio($result->id, '4', $select, array('id'=>'penyakit-4','autocomplete' => 'off')) }}
						{{ Form::label('penyakit-4', $result->optionB) }}
					</label>
				</div>
				<br>
				<div style="margin-bottom: 20px;">
					@if($result->id != 1)
					<a href="{{url('/exam/question/'.($result->id - 1))}}" class="btn btn-primary">Prev</a>
					@endif
					@if($result->id == 10)
					<input type='submit' class="btn btn-primary" value='Submit'>
					@else
					<input type='submit' class="btn btn-primary" value='Next'>
					@endif
				</div>
				{{ form::close() }}
			</div>
		</div>
	</div>
</div>
@endsection
@section('scripts')

@endsection
