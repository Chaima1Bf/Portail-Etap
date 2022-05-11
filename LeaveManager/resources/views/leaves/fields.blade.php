<!-- Type Field -->
<div class="form-group col-sm-4">
    {!! Form::label('type', 'Type:') !!}
    {!! Form::select('type', ['Annuel' => 'Annuel', 'Exceptionnel' => 'Exceptionnel', 'Recuperation' => 'Recuperation'], null, ['class' => 'form-control']) !!}
</div>

<!-- Start Period -->
<div class="form-group col-sm-4">
    {!! Form::label('perdeb', 'Période Début:') !!}
    {!! Form::select('perdeb', ['Matin' => 'Matin', 'Aprés-Midi' => 'Aprés-Midi'], null, ['class' => 'form-control']) !!}
</div>

@if (Route::is('leaves.create'))
    <!-- Start Date Field -->
    <div class="form-group col-sm-4">
        {!! Form::label('start_date', 'Date de début:') !!}
        {!! Form::date('start_date', null, [
    'class' => 'form-control',
    'min' => now()->addDay(1)->format('Y-m-d'),
]) !!}
    </div>
@else
    <div class="form-group col-sm-4">
        {!! Form::label('start_date', 'Date de début:') !!}
        {!! Form::date('start_date', $leave->start_date, [
    'class' => 'form-control',
    'min' => now()->addDay(1)->format('Y-m-d'),
]) !!}
    </div>
@endif

@if (Route::is('leaves.create'))
    <!-- End Date Field -->
    <div class="form-group col-sm-4">
        {!! Form::label('end_date', 'Date de fin:') !!}
        {!! Form::date('end_date', null, ['class' => 'form-control']) !!}
    </div>
@else
    <!-- End Date Field -->
    <div class="form-group col-sm-4">
        {!! Form::label('end_date', 'Date de fin:') !!}
        {!! Form::date('end_date', $leave->end_date, ['class' => 'form-control']) !!}
    </div>

@endif

<!-- End Period -->
<div class="form-group col-sm-4">
    {!! Form::label('perfin', 'Période Fin:') !!}
    {!! Form::select('perfin', ['Matin' => 'Matin', 'Aprés-Midi' => 'Aprés-Midi'], null, ['class' => 'form-control']) !!}
</div>

<!-- Address -->
<div class="form-group col-sm-4">
    {!! Form::label('address', 'Adresse:') !!}
    {!! Form::text('address', null, ['class' => 'form-control']) !!}
</div>



<!-- Emergency Phone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('emergency_phone', 'Numéro de téléphone d\'urgence:') !!}
    {!! Form::text('emergency_phone', null, ['class' => 'form-control']) !!}
</div>

<!-- Emergency Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('emergency_email', 'Email d\'urgence:') !!}
    {!! Form::email('emergency_email', null, ['class' => 'form-control']) !!}
</div>

@if (Auth::user()->is_admin)

    <!-- User Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('user_id', 'Utilisateur:') !!}
        {!! Form::select('user_id', $users, null, ['class' => 'form-control']) !!}
    </div>
    {{-- Status Field --}}
    <div class="form-group col-sm-6">
        {!! Form::label('status', 'Statut:') !!}
        {!! Form::select('status', ['Traitement' => 'Traitement'], null, ['class' => 'form-control']) !!}
    </div>
@endif

<!-- Reason Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('reason', 'Motif:') !!}
    {!! Form::textarea('reason', null, ['class' => 'form-control']) !!}
</div>
<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Sauvegarder', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('leaves.index') }}" class="btn btn-light">Annuler</a>
</div>
