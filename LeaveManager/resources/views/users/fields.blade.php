<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Nom Complet:') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>



<!-- Is Admin Field -->
<div class="form-group col-sm-6">
    {!! Form::label('is_admin', 'Compte Administrateur ?') !!} <br>
    <label class="checkbox-inline">
        {!! Form::hidden('is_admin', 0) !!}
        {!! Form::checkbox('is_admin', '1', null) !!} OUI
    </label>
</div>

@if (Route::is('users.create'))
    <!-- Birth Date Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('birth_date', 'Date de naissance:') !!}
        {!! Form::date('birth_date', null, ['class' => 'form-control', 'max' => now()->format('Y-m-d')]) !!}
    </div>
@else
    <!-- Birth Date Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('birth_date', 'Date de naissance:') !!}
        {!! Form::date('birth_date', $user->birth_date->format('Y-m-d'), ['class' => 'form-control', 'max' => now()->format('Y-m-d')]) !!}
    </div>
@endif


<!-- Cin Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cin', 'Numéro CIN:') !!}
    {!! Form::text('cin', null, ['class' => 'form-control', 'maxlength' => 8]) !!}
</div>

<!-- Password Field -->
<div class="form-group col-sm-6">
    {!! Form::label('password', 'Mot de passe:') !!}
    {!! Form::password('password', ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Sauvegarder', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('users.index') }}" class="btn btn-light">Annuler</a>
</div>
