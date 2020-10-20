@extends('layouts.helloapp')
@section('title','show')

@section('menubar')
	@parent
	詳細ページ
@endsection

@section('content')
<table>
 <tr><th>name</th><th>mail</th><th>age</th></tr>
 		<table>
 		@if($items != null)
 		@foreach($items as $item)
 			<tr>
	 			<th>id:</th><td>{{$item->id}}</td>
 			</tr>
 			<tr>
	 			<th>name:</th><td>{{$item->name}}</td>
 			</tr>
 			<tr>
	 			<th>mail:</th><td>{{$item->mail}}</td>
 			</tr>
 			<tr>
	 			<th>age:</th><td>{{$item->age}}</td></td>
 			</tr>
 			<tr>
 			</tr>
 		@endforeach
 		@endif
 		</table>
</table>
@endsection

@section('footer')
copyright
@endsection