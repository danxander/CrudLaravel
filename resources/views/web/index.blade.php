@extends('layout.home')
@if(Session::has('message'))
	<div class='alert alert-success alert-mismissible' role='alert'>
	<button type='button' class='close' data-dismiss='alert'
	aria-label='close'><span aria-hidden='true'>&times;</span></button>
	{{ Session::get('message') }}
	</div>
@endif

@section('content')
<h1> Listado de Clientes</h1>
{!! Link_to_route('cliente.create', $title='Agregar', $attributes=['class'=>'btn btn-primary']) !!}
	<table class="table">
		<thead>
			<th>CI</th>
			<th>NOMBRE</th>
			<th>APELLIDO</th>
			<th>ACCIONES</th>
		</thead>
		@foreach($clientes as $cliente)
		<tbody>
			<td>{{$cliente -> id}}</td>
			<td>{{$cliente -> pNombre}}</td>
			<td>{{$cliente -> pApellido}}</td>
			<td>{!! Link_to_route('cliente.edit', $title='Editar', $parameters= $cliente -> id, $attributes=['class'=>'btn btn-primary']) !!}</td>
		</tbody>
		@endforeach
	</table>

@endsection

