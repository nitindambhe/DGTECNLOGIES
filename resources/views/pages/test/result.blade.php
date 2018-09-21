@extends('layouts.app')
@section('title','Online Exam Result')
@section('content')
<div class="container">
	<div class="row">
		<div class="container-fluid bg-info">
            <h3 class="text-center" style="cursor:pointer">
            	Your Result is : {{$result->examResult}} / 20
            	<br>
            	<a href="{{url('/logout')}}">logout</a>
            </h3>
        </div>
	</div>
</div>
@endsection
@section('scripts')
<script type="text/javascript">
	 location.reload();
</script>
@endsection
