@extends('index')
@section('content')
    <!-- Advanced Form Example With Validation -->
    <div class="users">
        <table class="table">
            <thead>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Operaciones</th>
            </thead>
            @foreach($users as $user)
                <tbody>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>
                    {!!link_to_route('usuario.edit', $title = 'Editar', $parameters = $user->id, $attributes = ['class'=>'btn btn-primary'])!!}
                </td>
                </tbody>
            @endforeach
        </table>
        {!!$users->render()!!}
    </div>

    <!-- #END# Advanced Form Example With Validation -->
@endsection