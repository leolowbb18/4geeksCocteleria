<div class="form-group">
	{!! Form::label('titulo', 'Nombre corto del producto') !!}
	{!! Form::text('titulo', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('description', 'Descripcion del producto') !!}
	{!! Form::text('description', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('tipo', 'Tipo de producto') !!}
	{!! Form::text('tipo', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('existencia', 'Existencia del producto') !!}
	{!! Form::text('existencia', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('precio', 'Precio del producto') !!}
	{!! Form::text('precio', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('img', 'Img del producto') !!}
	{!! Form::text('img', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('type_id', 'Categoria del producto') !!}
	{!! Form::number('type_id', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::submit('ENVIAR', ['class' => 'btn btn-primary']) !!}
</div>