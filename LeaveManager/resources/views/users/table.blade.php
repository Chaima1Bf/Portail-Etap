<div class="table-responsive">
    <table class="table" id="users-table">
        <thead>
            <tr>
                <th>Nom complet</th>
                <th>Email</th>
                <th>Rôle</th>
                <th>Date de naissance</th>
                <th>CIN</th>
                <th>Nb. demandes</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        @if ($user->is_admin == 1)
                            <span class="badge badge-success">Admin</span>
                        @else
                            <span class="badge badge-primary">Utilisateur</span>
                        @endif
                    </td>
                    <td>{{ $user->birth_date->format('d/m/Y') }}</td>
                    <td>{{ $user->cin }}</td>
                    <td>{{ $user->leaves_count }}</td>
                    <td class=" text-center">
                        {!! Form::open(['route' => ['users.destroy', $user->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{!! route('users.show', [$user->id]) !!}" class='btn btn-light action-btn '><i
                                    class="fa fa-eye"></i></a>
                            <a href="{!! route('users.edit', [$user->id]) !!}" class='btn btn-warning action-btn edit-btn'><i
                                    class="fa fa-edit"></i></a>
                            {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger action-btn delete-btn', 'onclick' => 'return confirm("Êtes-vous sûr que vous voulez supprimer cet enregistrement ?")']) !!}

                        </div>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>