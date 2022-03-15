
<!-- Type Field -->
<div class="form-group">
    {!! Form::label('type', 'Type:') !!}
    <p>{{ $leave->type }}</p>
</div>

<!-- Start Date Field -->
<div class="form-group">
    {!! Form::label('start_date', 'Date de début:') !!}
    <p>{{ $leave->start_date->format('d/m/Y') }}</p>
</div>

<!-- End Date Field -->
<div class="form-group">
    {!! Form::label('end_date', 'Date de fin:') !!}
    <p>{{ $leave->end_date->format('d/m/Y') }}</p>
</div>

<!-- Reason Field -->
<div class="form-group">
    {!! Form::label('reason', 'Motif:') !!}
    <p>{{ $leave->reason }}</p>
</div>

<!-- Emergency Phone Field -->
<div class="form-group">
    {!! Form::label('emergency_phone', 'Téléphone d\'urgence:') !!}
    <p>{{ $leave->emergency_phone }}</p>
</div>

<!-- Emergency Email Field -->
<div class="form-group">
    {!! Form::label('emergency_email', 'Email d\'urgence:') !!}
    <p>{{ $leave->emergency_email }}</p>
</div>

<!-- User Id Field -->
<div class="form-group">
    {!! Form::label('user_id', 'Utilisateur:') !!}
    <p>{{ $leave->user->name }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Soumis à:') !!}
    <p>{{ $leave->created_at->format('d/m/Y') }} ({{ $leave->created_at->diffForHumans() }})</p>
</div>
