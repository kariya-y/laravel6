@extends('layouts.helloapp')
@section('title','Person.index')

@section('menubar')
	@parent
@endsection

@section('content')
<table>
 <tr><th>person</th><th>board</th></tr>
 @foreach ($items as $item)
 	<tr>
		<td>{{$item->getData()}}</td>
		@if( $item->board != null)
		@foreach($item->board as $obj)
		<td>{{$obj->getData()}}</td>
		@endforeach
		@endif
 	</tr>
 @endforeach
</table>
@endsection

@section('footer')
copyright
@endsection