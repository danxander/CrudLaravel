@extends('layout.home')

@section('content')

 <div class="row">
        <div class="col-md-12">
            <div class="well well-sm">
                <fieldset>
                    <legend class="text-center header">Formulario de Cliente</legend>
					{!! Form::model($cliente,['route'=>['cliente.update',$cliente->id], 'method'=>'PUT'])!!}
						@include('cliente.forms.formulario')
						{!! Form::submit('Registrar', ['class'=>'btn btn-primary'])!!}
					{!! Form::close()!!}
                   
                </fieldset>
            </div>
        </div>
    </div>

@endsection