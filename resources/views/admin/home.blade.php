@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Usuários</div>

                    <div class="card-body">

                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Data</th>
                                    <th scope="col">Deletar</th>
                                    <th scope="col">Atualizar</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <th scope="row">{{ $user->id }}</th>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->created_at->format('d/m/Y H:i') }}</td>
                                        <td>
                                            <form method="POST"
                                                action="{{ route('admin.user.update', ['user' => $user->id]) }}">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger"
                                                    class="btn btn-sm btn-danger">Deletar</button>
                                            </form>
                                        </td>
                                        <td>
                                            @if ($user->pro)
                                                <form method="POST"
                                                    action="{{ route('admin.user.update', ['user' => $user->id]) }}">
                                                    @csrf
                                                    @method('PUT')
                                                    <input type="hidden" name="pro" value="{{ !$user->pro }}">
                                                    <button type="submit" class="btn btn-sm btn-warning">Desativar</button>
                                                </form>
                                            @else
                                                <form method="POST"
                                                    action="{{ route('admin.user.update', ['user' => $user->id]) }}">
                                                    @csrf
                                                    @method('PUT')
                                                    <input type="hidden" name="pro" value="{{ !$user->pro }}">
                                                    <button type="submit" class="btn btn-sm btn-primary">Ativar</button>
                                                </form>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                        </table>
                        {{ $users->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
