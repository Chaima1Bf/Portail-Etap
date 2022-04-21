@extends('layouts.app')
@section('title')
    Personel
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Liste personnel</h1>
            <div class="section-header-breadcrumb">
                <a href="{{ route('users.create') }}" class="btn btn-primary form-btn">Personnel <i
                        class="fas fa-plus"></i></a>
            </div>
        </div>
        <div class="section-body">
            @include('flash::message')

            <div class="card">
                <div class="card-body">
                    @include('users.table')
                </div>
            </div>
        </div>
        @include('stisla-templates::common.paginate', ['records' => $users])

    </section>
@endsection
