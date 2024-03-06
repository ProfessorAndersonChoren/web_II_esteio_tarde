@extends('templates.app')

@section('title', 'Lista de usuários')

@section('content')
    <h1>Lista de usuário</h1>
    <table>
        <thead>
            <th>Nome</th>
            <th>Email</th>
            <th>Data de nascimento</th>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{$user['name']}}</td>
                    <td>{{$user['email']}}</td>
                    <td>{{$user['birthday']}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
