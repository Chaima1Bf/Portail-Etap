<div class="row">
    <!-- Name Field -->
    <div class="form-group col-md-2">
        {!! Form::label('name', 'Name:') !!}
        <p>{{ $user->name }}</p>
    </div>

    <!-- Email Field -->
    <div class="form-group col-md-3">
        {!! Form::label('email', 'Email:') !!}
        <p>{{ $user->email }}</p>
    </div>
    <!-- Is Admin Field -->
    <div class="form-group col-md-2">
        {!! Form::label('isAdmin', 'Rôle:') !!} <br>
        @if ($user->is_admin == 1)
            <span class="badge badge-success">Admin</span>
        @else
            <span class="badge badge-primary">Utilisateur</span>
        @endif
    </div>
    <!-- Birth Date Field -->
    <div class="form-group col-md-2">
        {!! Form::label('birth_date', 'Date de naissance:') !!}
        <p>{{ $user->birth_date->format('d/m/Y') }}</p>
    </div>

    <!-- Cin Field -->
    <div class="form-group col-md-2">
        {!! Form::label('cin', 'Num. CIN:') !!}
        <p>{{ $user->cin }}</p>
    </div>
</div>

