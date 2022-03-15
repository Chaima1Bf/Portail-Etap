<div class="table-responsive">
    <table class="table" id="leaves-table">
        <thead>
            <tr>
                <th>Type</th>
                <th>Période</th>
                <th>Motif</th>
                <th>Téléphone d'urgence</th>
                <th>Email d'urgence</th>
                @if (Auth::user()->is_admin)
                    <th>Utilisateur</th>
                @endif
                <th>Statut</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($leaves as $leave)
                <tr>
                    <td>{{ $leave->type }}</td>
                    <td>{{ $leave->start_date->format('d/m/Y') }} - {{ $leave->end_date->format('d/m/Y') }}</td>
                    <td>{{ $leave->reason }}</td>
                    <td>{{ $leave->emergency_phone }}</td>
                    <td>{{ $leave->emergency_email }}</td>
                    @if (Auth::user()->is_admin)
                        <td>{{ $leave->user->name }}</td>
                    @endif
                    <td>
                        @switch($leave->status)
                            @case('Traitement')
                                <span class="badge badge-primary">Traitement</span>
                            @break
                            @case('Acceptée')
                                <span class="badge badge-success">Acceptée</span>
                            @break
                            @case('Refusée')
                                <span class="badge badge-danger">Refusée</span>
                            @break

                        @endswitch
                    </td>
                    <td class=" text-center">
                        {!! Form::open(['route' => ['leaves.destroy', $leave->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{!! route('leaves.show', [$leave->id]) !!}" class='btn btn-light action-btn '><i
                                    class="fa fa-eye"></i></a>
                            <a href="{!! route('leaves.edit', [$leave->id]) !!}" class='btn btn-warning action-btn edit-btn'><i
                                    class="fa fa-edit"></i></a>
                            @if (Auth::user()->is_admin == 1)
                                {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger action-btn delete-btn', 'onclick' => 'return confirm("Êtes-vous sûr que vous voulez supprimer cet enregistrement?")']) !!}
                            @endif
                        </div>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
