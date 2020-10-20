@extends('layouts.helloapp')
@section('title','Person.index')

@section('menubar')
	@parent
@endsection

@section('content')
<table>
 <tr><th>id</th><th>name</th><th>mail</th><th>age</th></tr>
 @foreach ($items as $item)
 	<tr>
		<td>{{$item->getData()}}</td>
 	</tr>
 @endforeach
</table>
@endsection

@section('footer')
copyright
@endsection