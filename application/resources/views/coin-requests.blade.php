@extends('layout')

@section('page-title') {{ "| Home" }} @stop

@section('custom-styles')
<link rel="stylesheet" href="{{ url('/resources/assets/css/page.css') }}">
@stop

@section('content')
<div class="container text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav hidden-xs">
      <!--<p><a href="#">Link</a></p>
      <p><a href="#">Link</a></p>
      <p><a href="#">Link</a></p>-->
    </div>
    <div class="col-sm-8 text-left" style="margin-bottom:20px;"> 
      <h3>Requests Log</h3>
    <hr>
	<table class="table table-striped">
		<thead>
		  <tr>
			<th>Date Requested</th>
			<th>Type</th>
			<th>Number</th>
			<th>Status</th>
		  </tr>
		</thead>
		<tbody>
		@foreach ($requests as $request)
		  <tr>
			<td>{{$request->Time_Stamp}}</td>
			<td>{{$request->type}}</td>
			<td>{{$request->QNumber}}</td>
			<td>
			@if($request->status==null)
			<a href="{{ url('/approvereq',['reqID'=>$request->ID]) }}"><button class="btn btn-primary btn-xs">Approve</button></a>
			@else
			{{'approved'}}
			@endif
			</td>
		  </tr>
		  @endforeach
		  
		</tbody>
    </table>
    
    </div>
    <div class="col-sm-2 sidenav">
      <!--<div class="well">
        <p>ADS</p>
      </div>
      <div class="well">
        <p>ADS</p>
      </div>-->
    </div>
  </div>
</div>
@stop

@section('custom-scripts')
<script>
    $(document).ready(function(){
      $('li').removeClass('active');
      $('#my-forms').addClass('active');
    });
</script>
@stop