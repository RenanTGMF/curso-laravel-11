@extends('admin.layouts.app')

@section('title', 'Editar Usuário')

@section('content')
    @include('admin.layouts.breadcrumb')
    <div class="py-6">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Editar o Usuário {{ $user->name }}
        </h2>
    </div>
    <form action="{{ route('users.update', $user->id) }}" method="post">
        @method('put')
        @include('admin.users.partials.form')
    </form>
@endsection