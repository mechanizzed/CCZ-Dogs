<div class="form-group">
  {!! Form::label('title', 'Título') !!}
  {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Título', 'required']) !!}
</div>

<div class="form-group">
  {!! Form::label('data', 'Data da vacina') !!}
  {!! Form::date('data', null, ['class' => 'form-control', 'placeholder' => 'Data da vacina' ,'required']) !!}
</div>

<div class="form-group">
  {!! Form::label('body', 'Anotações') !!}
  {!! Form::textarea('body', null, ['class' => 'form-control', 'placeholder' => 'Anotações', 'row' => 5]) !!}
</div>