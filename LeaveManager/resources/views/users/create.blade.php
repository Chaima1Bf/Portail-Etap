@extends('layouts.app')
@section('title')
    Créer un utilisateur
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1 class="page__heading m-0">Ajouter un utilisateur</h1>
            <div class="filter-container section-header-breadcrumb row justify-content-md-end">
                <a href="{{ route('users.index') }}" class="btn btn-primary">Retour</a>
            </div>
        </div>
        <div class="content">
            @include('stisla-templates::common.errors')
            <div class="section-body">
               <div class="row">
                   <div class="col-lg-12">
                       <div class="card">
                           <div class="card-body ">
                                {!! Form::open(['route' => 'users.store']) !!}
                                    <div class="row">
                                        @include('users.fields')
                                    </div>
                                {!! Form::close() !!}
                           </div>
                       </div>
                   </div>
               </div>
            </div>
        </div>
    </section>
@endsection
