@extends('admin.layouts.app')

@section('title', 'Criar Novo Usuário')

@section('content')
    
    @include('admin.layouts.breadcrumb')
    <div class="py-6">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Novo Usuário
        </h2>
    </div>

    <form action="{{ route('users.store') }}" method="post">
        @include('admin.users.partials.form')
    </form>
@endsection