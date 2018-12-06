<div class="row">
  <div class="form-group col-lg-4">
    {!! Form::label('raca_id', 'Raça') !!}
    {!! Form::select('raca_id', $racas, null, ['class' => 'form-control']) !!}
  </div>
  <div class="form-group col-lg-4">
    {!! Form::label('name', 'Nome') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nome do cachorrinho', 'required']) !!}
  </div>

  <div class="form-group col-lg-4">
    {!! Form::label('entrada', 'Data da entrada') !!}
    {!! Form::date('entrada', null, ['class' => 'form-control', 'placeholder' => 'Data da entrada']) !!}
  </div>

  <div class="form-group col-lg-4">
    {!! Form::label('microchip', 'Microchip') !!}
    {!! Form::text('microchip', null, ['class' => 'form-control', 'placeholder' => 'Microchip']) !!}
  </div>

  <div class="form-group col-lg-4">
    {!! Form::label('color', 'Cor') !!}
    {!! Form::text('color', null, ['class' => 'form-control', 'placeholder' => 'Cor']) !!}
  </div>

  <div class="form-group col-lg-4">
    {!! Form::label('age', 'Idade') !!}
    {!! Form::text('age', null, ['class' => 'form-control', 'placeholder' => 'Idade']) !!}
  </div>

  <div class="form-group col-lg-2">
    {!! Form::label('castrado', 'É castrado?') !!}
    {!! Form::select('castrado', [false => 'Não', true => 'Sim'], old('castrado'), ['class' => 'form-control']) !!}
  </div>

  <div class="form-group col-lg-2">
    {!! Form::label('treatment', 'Em tratamento?') !!}
    {!! Form::select('treatment', [false => 'Não', true => 'Sim'], old('treatment'), ['class' => 'form-control']) !!}
  </div>

  <div class="form-group col-lg-4">
    {!! Form::label('porte', 'Porte') !!}
    {!! Form::text('porte', null, ['class' => 'form-control', 'placeholder' => 'Porte']) !!}
  </div>

  <div class="form-group col-lg-4">
    {!! Form::label('temperamento', 'Temperamento') !!}
    {!! Form::text('temperamento', null, ['class' => 'form-control', 'placeholder' => 'Temperamento']) !!}
  </div>
</div>


{{--<div class="form-group">--}}
{{--{!! Form::label('body', 'Description') !!}--}}
{{--{!! Form::text('body', null, ['class' => 'editor']) !!}--}}
{{--</div>--}}