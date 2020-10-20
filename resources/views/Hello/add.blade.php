@extends('layouts.helloapp')
@section('title','Add')

@section('menubar')
	@parent
@endsection

@section('content')
<table>
 <tr><th>name</th><th>mail</th><th>age</th></tr>

 	<form action="/hello/add" method="post">
 		@csrf
 		<table>
 			<tr>
	 			<th>name:</th><td><input type="text" name="name"></td>
 			</tr>
 			<tr>
	 			<th>mail:</th><td><input type="text" name="mail"></td>
 			</tr>
 			<tr>
	 			<th>age:</th><td><input type="text" name="age"></td>
 			</tr>
 			<tr>
	 			<th></th><td><input type="submit" name="send"></td>
 			</tr>

 		</table>
 	</form>
</table>
@endsection

@section('footer')
copyright
@endsection