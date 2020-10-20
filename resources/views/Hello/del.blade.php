@extends('layouts.helloapp')
@section('title','Edit')

@section('menubar')
	@parent
	更新ページ
@endsection

@section('content')
<table>
 <tr><th>name</th><th>mail</th><th>age</th></tr>

 	<form action="/hello/del" method="post">
 		@csrf
 		<table>
 			<tr>
	 			<th>name:</th><td>{{$form->id}}</td>
 			</tr>
 			<tr>
	 			<th>mail:</th><td>{{$form->mail}}</td>
 			</tr>
 			<tr>
	 			<th>age:</th><td>{{$form->age}}</td></td>
 			</tr>
 			<tr>
	 			<th></th><td><input type="submit" name="del" value="削除"></td>
 			</tr>
 		</table>
 		 <input type="hidden" name="id" value="{{$form->id}}">
 	</form>
</table>
@endsection

@section('footer')
copyright
@endsection