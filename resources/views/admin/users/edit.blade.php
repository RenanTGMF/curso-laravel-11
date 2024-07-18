@extends('admin.layouts.app')

@section('title', 'Editar Usuário')

@section('content')
    <h1>Editar o Usuário {{ $user->name }}</h1>

    <form action="{{ route('users.update', $user->id) }}" method="post">
        @csrf()
        @method('put')
        <input type="text" name="name" placeholder="Nome" value="{{ $user->name }}">
        <input type="email" name="email" placeholder="E-mail" value="{{ $user->email }}">
        <input type="password" name="password" placeholder="Senha">
        <button type="submit">Enviar</button>
    </form>

    <x-alert/>
@endsection