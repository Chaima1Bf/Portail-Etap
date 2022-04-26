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
                <form>
                    <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search">
                    <div class="input-group-btn">
                        <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                    </div>
                    </div>
                </form>
                </div>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-striped">
                        @if (Auth::user()->is_admin == 1) 
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
                            @foreach ($absences as $absence)
                            <tr>
                                <td>{{$absence['ABS_MAT_95']}}</td>
                                <td>{{$absence['ABS_MAT_95']}}</td>
                                <td>{{$absence['ABS_NBRJOUR_93']}}</td>
                                <td>{{$absence['ABS_DATE_DEB']}}</td>
                                <td>{{$absence['ABS_PERDEB_X']}}</td>
                                <td>{{$absence['ABS_DATE_FIN']}}</td>
                                <td>{{$absence['ABS_PERFIN_X']}}</td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                    @endif
                    <div class="card-footer text-right">
                        <nav class="d-inline-block">
                          <ul class="pagination mb-0">
                            <li class="page-item disabled">
                              <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
                            <li class="page-item">
                              <a class="page-link" href="#">2</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                              <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                            </li>
                          </ul>
                        </nav>
                      </div>
                </div>
            </div>
            </div>
        </div>
    </div>
@endsection