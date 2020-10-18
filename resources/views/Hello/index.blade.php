@extends('layouts.helloapp')
@section('title','Index')

@section('menubar')
	@parent
@endsection

@section('content')
	<p>contentないのpタグ</p>
	<table>
	@foreach($data as $item)
	<tr><th>{{$item['name']}}:{{$item['mail']}}</th></tr>
	@endforeach
	</table>
@endsection

@section('footer')
copyright
@endsection