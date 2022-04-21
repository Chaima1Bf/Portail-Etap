@extends('layouts.app')
@section('title')
    Abscences
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Pointage</h1>
          </div>
        <div class="col-12">
            <div class="card">
            <div class="card-header">
                <h4>Pointage</h4>
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
                        <thead>
                            <tr>
                                <th>JourCptPnt</th>
                                <th>DateTimePnt</th>
                                <th>Nombre de Jours</th>
                                <th>Details</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><a href="#" class="btn btn-secondary">Detail</a></td>
                            </tr>
                        </tbody>
                    </table>
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