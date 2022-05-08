@extends('layouts.app')
@section('title')
    Abscences
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Liste des Abscences</h1>
          </div>
        <div class="col-12">
            <div class="card">
            <div class="card-header">
                <h4>Liste des Abscences</h4>
                <div class="card-header-form">
                    @if (Auth::user()->is_admin)
                <form method="GET" action="{{ route('absence.search') }}">
                    <div class="input-group">
                    <input type="text" name="query" id="query" value="{{ request()->get('query') ? request()->get('query') : ''  }}" class="form-control" placeholder="Search" required>
                    <div class="input-group-btn">
                        <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                    </div>
                    </div>
                </form>
                    @endif
                </div>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Matricule</th>
                                <th>Nom & Prénom</th>
                                <th>Nombre de Jours</th>
                                <th>Date Début</th>
                                <th>Periode Début</th>
                                <th>Date Fin</th>
                                <th>Periode Fin</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($absences as $absence)
                            <tr>
                                <td>{{$absence['ABS_MAT_95']}}</td>
                                <td>{{$absence->user->name}}</td>
                                <td>{{$absence['ABS_NBRJOUR_93']}}</td>
                                <td>{{$absence['ABS_DATE_DEB']}}</td>
                                <td>{{$absence['ABS_PERDEB_X']}}</td>
                                <td>{{$absence['ABS_DATE_FIN']}}</td>
                                <td>{{$absence['ABS_PERFIN_X']}}</td>
                            </tr>
                            @empty
                                <tr>
                                    <td>No Records Found</td>
                                </tr>
                            @endforelse

                        </tbody>
                    </table>
                    <div class="card-footer text-right">
                        @include('stisla-templates::common.paginate', ['records' => $absences])
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
@endsection