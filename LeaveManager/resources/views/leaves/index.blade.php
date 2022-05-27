@extends('layouts.app')
@section('title')
    Congés
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Congés</h1> 
            <div class="" style="position: relative; left:350px; font-weight:bolder;">
                <span class="badge" style="background: #003049; color:white;box-shadow: 2px 2px #888888;">Récuperation <br> 50jours</span>
                <span class="badge" style="background:#264653; color:white;box-shadow: 2px 2px #888888;">Exceptionnel <br> 32jours</span>
                <span class="badge badge-success" style="background:#05668d; color:white;box-shadow: 2px 2px #888888;">Annuel <br> 20jours</span>
            </div>
            <div class="section-header-breadcrumb">
                <a href="{{ route('leaves.create') }}" class="btn btn-primary form-btn">Soummetre une demande <i
                        class="fas fa-plus"></i></a>
            </div>
        </div>
        <div class="section-body">
            @include('flash::message')

            <div class="card">
                <div class="card-body">
                    @include('leaves.table')
                </div>
            </div>
        </div>

        @include('stisla-templates::common.paginate', ['records' => $leaves])

    </section>
@endsection
