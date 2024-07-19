@extends('admin.layouts.app')

@section('title', 'Detalhes do Usuário')
    
@section('content')
    <h1>Detalhes do Usuário {{ $user->name }}</h1>
    <ul>
        <li><strong>Name:</strong> {{ $user->name }}</li>
        <li><strong>E-mail:</strong> {{ $user->email }}</li>
    </ul>
    <x-alert/>
    @can('is-admin')
    <form action="{{ route('users.destroy', $user) }}" method="post">
        @csrf
        @method('delete')
        <button type="submit">Deletar</button>
    </form>
    @endcan
    <a href="{{ route('users.index') }}">Voltar</a>
@endsection