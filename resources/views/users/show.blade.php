@extends('layouts.app')

@section('title', 'Listagem do Usuário')

@section('content')
    <h1>Listagem dos Usuários {{ $user->name }}</h1>

    <ul>
        <li>{{ $user->name }}</li>
        <li>{{ $user->email }}</li>
        <li>{{ $user->created_at }}</li>
    </ul>
@endsection
