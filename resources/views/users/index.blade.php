@extends('layouts.app')

@section('title', 'Listagem dos Usuários')
    
@section('content')
    <h1>Listagem dos Usuários
        <button>
            <a href="{{ route('users.create')}}">Cadastro Usuário</a>
        </button>
    </h1>

    <ul>
        @foreach ($users as $user)
            <li>
                {{ $user->name }} -
                {{ $user->email }}
                |<a href="{{ route('users.edit', $user->id) }}">Editar</a>
                | <a href="{{ route('users.show', $user->id)}}">Detalhes</a>
            </li>
        @endforeach
    </ul>
@endsection
