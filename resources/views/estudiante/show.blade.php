@extends('layouts.app')

@section('template_title')
    {{ $estudiante->name ?? "{{ __('Show') Estudiante" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Estudiante</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('estudiantes.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>E Id:</strong>
                            {{ $estudiante->e_id }}
                        </div>
                        <div class="form-group">
                            <strong>E Nombres:</strong>
                            {{ $estudiante->e_nombres }}
                        </div>
                        <div class="form-group">
                            <strong>E Apellidos:</strong>
                            {{ $estudiante->e_apellidos }}
                        </div>
                        <div class="form-group">
                            <strong>E Dni:</strong>
                            {{ $estudiante->e_dni }}
                        </div>
                        <div class="form-group">
                            <strong>E Edad:</strong>
                            {{ $estudiante->e_edad }}
                        </div>
                        <div class="form-group">
                            <strong>E Fecha Nac:</strong>
                            {{ $estudiante->e_fecha_nac }}
                        </div>
                        <div class="form-group">
                            <strong>E Facultad:</strong>
                            {{ $estudiante->e_facultad }}
                        </div>
                        <div class="form-group">
                            <strong>E Escuela:</strong>
                            {{ $estudiante->e_escuela }}
                        </div>
                        <div class="form-group">
                            <strong>E Semestre:</strong>
                            {{ $estudiante->e_semestre }}
                        </div>
                        <div class="form-group">
                            <strong>E Codigo:</strong>
                            {{ $estudiante->e_codigo }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
