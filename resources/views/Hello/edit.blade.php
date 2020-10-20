@extends('layouts.helloapp')
@section('title','Edit')

@section('menubar')
	@parent
	更新ページ
@endsection

@section('content')
<table>
 <tr><th>name</th><th>mail</th><th>age</th></tr>

 	<form action="/hello/edit" method="post">
 		@csrf
 		<table>
 			<tr>
	 			<th>name:</th><td><input type="text" name="name" value="{{$form->id}}"></td>
 			</tr>
 			<tr>
	 			<th>mail:</th><td><input type="text" name="mail" value="{{$form->name}}"></td>
 			</tr>
 			<tr>
	 			<th>age:</th><td><input type="text" name="age" value="{{$form->age}}"></td>
 			</tr>
 			<tr>
	 			<th></th><td><input type="submit" name="send"></td>
 			</tr>

 		</table>
 		 <input type="hidden" name="id" value="{{$form->id}}">
 	</form>
</table>
@endsection

@section('footer')
copyright
@endsection