@extends('layouts.app')
@section('title')
    Pointages
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Liste des Pointages</h1>
          </div>
        <div class="col-12">
            <div class="card">
            <div class="card-header">
                <h4>Liste des Pointages</h4>
                <div class="card-header-form">
                    @if (Auth::user()->is_admin)
                <form method="GET" action="{{ route('pointage.search') }}">
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
                                <th>JourCptPnt</th>
                                <th>DateTimePnt</th>
                                <th>OriginePnt</th>
                                <th>PntSourceID</th>
                                <th>ValiderPar</th>
                                <th>TypeJour</th>
                                <th>TypeOperation</th>
                                <th>Etat</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($pointages as $pointage)
                            <tr>
                                <td>{{$pointage['Matricule']}}</td>
                                <td>{{$pointage['JourCptPnt']}}</td>
                                <td>{{$pointage['DateTimePnt']}}</td>
                                <td>{{$pointage['OriginePnt']}}</td>
                                <td>{{$pointage['PntSourceID']}}</td>
                                <td>{{$pointage['ValiderPar']}}</td>
                                <td>{{$pointage['TypeJour']}}</td>
                                <td>{{$pointage['TypeOperation']}}</td>
                                <td>{{$pointage['Etat']}}</td>
                            </tr>
                            @empty
                            <div class="alert alert-warning alert-has-icon">
                                <div class="alert-icon"><i class="fas fa-exclamation"></i></div>
                                <div class="alert-body">
                                  <div class="alert-title">Alerte</div>
                                   Il n'y aucun Pointage disponible
                                </div>
                              </div>
                            @endforelse

                        </tbody>
                    </table>
                    
                    <div class="card-footer text-right">
                        @include('stisla-templates::common.paginate', ['records' => $pointages])
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
@endsection