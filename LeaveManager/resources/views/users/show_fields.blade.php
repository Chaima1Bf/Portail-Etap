<div class="row">

    <!-- Matricule -->
    <div class="form-group col-md-2">
        {!! Form::label('matricule', 'Matricule:') !!}
        <p>{{ $user->matricule }}</p>
    </div>

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


        <!-- gender Field -->
        <div class="form-group col-md-2">
            {!! Form::label('gender', 'Gender:') !!}
            <p>{{ $user->gender }}</p>
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


        <!-- Is Admin Field -->
        <div class="form-group col-md-2">
            {!! Form::label('isAdmin', 'Rôle:') !!} <br>
            @if ($user->is_admin == 1)
                <span class="badge badge-success">Admin</span>
            @else
                <span class="badge badge-primary">Utilisateur</span>
            @endif
        </div>
        
</div>

