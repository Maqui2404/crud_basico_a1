<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('e_id') }}
            {{ Form::text('e_id', $estudiante->e_id, ['class' => 'form-control' . ($errors->has('e_id') ? ' is-invalid' : ''), 'placeholder' => 'E Id']) }}
            {!! $errors->first('e_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('e_nombres') }}
            {{ Form::text('e_nombres', $estudiante->e_nombres, ['class' => 'form-control' . ($errors->has('e_nombres') ? ' is-invalid' : ''), 'placeholder' => 'E Nombres']) }}
            {!! $errors->first('e_nombres', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('e_apellidos') }}
            {{ Form::text('e_apellidos', $estudiante->e_apellidos, ['class' => 'form-control' . ($errors->has('e_apellidos') ? ' is-invalid' : ''), 'placeholder' => 'E Apellidos']) }}
            {!! $errors->first('e_apellidos', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('e_dni') }}
            {{ Form::text('e_dni', $estudiante->e_dni, ['class' => 'form-control' . ($errors->has('e_dni') ? ' is-invalid' : ''), 'placeholder' => 'E Dni']) }}
            {!! $errors->first('e_dni', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('e_edad') }}
            {{ Form::text('e_edad', $estudiante->e_edad, ['class' => 'form-control' . ($errors->has('e_edad') ? ' is-invalid' : ''), 'placeholder' => 'E Edad']) }}
            {!! $errors->first('e_edad', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('e_fecha_nac') }}
            {{ Form::text('e_fecha_nac', $estudiante->e_fecha_nac, ['class' => 'form-control' . ($errors->has('e_fecha_nac') ? ' is-invalid' : ''), 'placeholder' => 'E Fecha Nac']) }}
            {!! $errors->first('e_fecha_nac', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('e_facultad') }}
            {{ Form::text('e_facultad', $estudiante->e_facultad, ['class' => 'form-control' . ($errors->has('e_facultad') ? ' is-invalid' : ''), 'placeholder' => 'E Facultad']) }}
            {!! $errors->first('e_facultad', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('e_escuela') }}
            {{ Form::text('e_escuela', $estudiante->e_escuela, ['class' => 'form-control' . ($errors->has('e_escuela') ? ' is-invalid' : ''), 'placeholder' => 'E Escuela']) }}
            {!! $errors->first('e_escuela', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('e_semestre') }}
            {{ Form::text('e_semestre', $estudiante->e_semestre, ['class' => 'form-control' . ($errors->has('e_semestre') ? ' is-invalid' : ''), 'placeholder' => 'E Semestre']) }}
            {!! $errors->first('e_semestre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('e_codigo') }}
            {{ Form::text('e_codigo', $estudiante->e_codigo, ['class' => 'form-control' . ($errors->has('e_codigo') ? ' is-invalid' : ''), 'placeholder' => 'E Codigo']) }}
            {!! $errors->first('e_codigo', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>