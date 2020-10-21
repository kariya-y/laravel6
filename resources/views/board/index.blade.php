@extends('layouts.helloapp')
@section('title','Board.index')

@section('menubar')
	@parent
@endsection

@section('content')
	<table>
	<tr>Data</tr>
	@foreach($items as $item)
	<tr><td>{{$item->getData()}}</td></tr>
	@endforeach
	</table>
@endsection

@section('footer')
copyright
@endsection