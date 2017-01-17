@extends('layouts.master')

@section('title')
New Item
@stop
@section('content')
<div class="container-fluid">
	<div class="form-group">
	<form action="/inventory/new" method="POST">
	<input type="text" name="Item Name">
	</form>

	</div>
</div>
@stop
