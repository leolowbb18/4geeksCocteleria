<div class="form-group">
	{!! Form::label('name', 'Nombre del Usuario') !!}
	{!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('email', 'Email del Usuario') !!}
	{!! Form::text('email', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('password', 'Clave del usuario') !!}
	{!! Form::text('password', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('admin', 'Nivel del Usuario') !!}
	{!! Form::number('admin', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
</div>