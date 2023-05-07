@extends('layouts.app')

@section('template_title')
    Estudiante
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Estudiante') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('estudiantes.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>E Id</th>
										<th>E Nombres</th>
										<th>E Apellidos</th>
										<th>E Dni</th>
										<th>E Edad</th>
										<th>E Fecha Nac</th>
										<th>E Facultad</th>
										<th>E Escuela</th>
										<th>E Semestre</th>
										<th>E Codigo</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($estudiantes as $estudiante)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $estudiante->e_id }}</td>
											<td>{{ $estudiante->e_nombres }}</td>
											<td>{{ $estudiante->e_apellidos }}</td>
											<td>{{ $estudiante->e_dni }}</td>
											<td>{{ $estudiante->e_edad }}</td>
											<td>{{ $estudiante->e_fecha_nac }}</td>
											<td>{{ $estudiante->e_facultad }}</td>
											<td>{{ $estudiante->e_escuela }}</td>
											<td>{{ $estudiante->e_semestre }}</td>
											<td>{{ $estudiante->e_codigo }}</td>

                                            <td>
                                                <form action="{{ route('estudiantes.destroy',$estudiante->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('estudiantes.show',$estudiante->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('estudiantes.edit',$estudiante->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $estudiantes->links() !!}
            </div>
        </div>
    </div>
@endsection
