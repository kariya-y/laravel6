@extends('layouts.helloapp')
@section('title','Bord.Add')

@section('menubar')
	@parent
@endsection

@section('content')
<table>
 <tr><th>name</th><th>mail</th><th>age</th></tr>

 	<form action="/board/add" method="post">
 		@csrf
 		<table>
 			<tr>
	 			<th>person id:</th><td><input type="number" name="person_id"></td>
 			</tr>
 			<tr>
	 			<th>title:</th><td><input type="text" name="title"></td>
 			</tr>
 			<tr>
	 			<th>message:</th><td><input type="text" name="message"></td>
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