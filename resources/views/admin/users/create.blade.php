@extends('admin.layouts.app')

@section('title', 'Criar Novo Usuário')

@section('content')
    <h1>Novo Usuário</h1>

    <form action="{{ route('users.store') }}" method="post">
        @csrf()
        <input type="text" name="name" placeholder="Nome" value="{{ old('name') }}">
        <input type="email" name="email" placeholder="E-mail" value="{{ old('email' )}}">
        <input type="password" name="password" placeholder="Senha">
        <button type="submit">Enviar</button>
    </form>

    @if ($errors->any())   
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
    @endif
@endsection