@extends('layouts.app')
@section('title')
    Congés
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Congés</h1>
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
