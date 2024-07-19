@extends('admin.layouts.app')

@section('title', 'Detalhes do Usuário')
    
@section('content')
    @include('admin.layouts.breadcrumb')
    <div class="py-6">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Detalhes do Usuário {{ $user->name }}
        </h2>
    </div>
    <ul class="pb-6 max-w-md space-y-1 text-gray-500 list-disc list-inside dark:text-gray-400">
        <li><strong>Name:</strong> {{ $user->name }}</li>
        <li><strong>E-mail:</strong> {{ $user->email }}</li>
    </ul>

    <x-alert/>

    <div class="flex gap-4 mb-6">
    
    <a href="{{ route('users.index') }}" class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Voltar</a>
    
    @can('is-admin')
    <form action="{{ route('users.destroy', $user) }}" method="post">
        @csrf
        @method('delete')
        <button type="submit"
        class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 focus:outline-none dark:focus:ring-red-800">Deletar</button>
    </form>
    @endcan
    </div>
@endsection