@extends('layouts.user')
@section('main')
<h1>All User</h1>
<p>{{link_to_route('users.create','Add New User')}}</p>
@if($users->count())
<table class="table">
	<thead>
		<tr>
			<th>Usename</th>
			<th>Password</th>
			<th>Email</th>
			<th>Phone</th>
			<th>Name</th>
		</tr>
	</thead>
	<tbody>
		@foreach($users as $user)
		<tr>
			<td>{{$user->username}}</td>
			<td>{{$user->password}}</td>
			<td>{{$user->email}}</td>
			<td>{{$user->phone}}</td>
			<td>{{$user->name}}</td>
			<td>
			{{link_to_route('users.edit','Edit',array($user->id), array('class'=>'btn btn-info'))}}
			</td>
		</tr>
		@endforeach
		@else
		<tr><td>there are no users</td></tr>
		@endif
	</tbody>
</table>
@stop