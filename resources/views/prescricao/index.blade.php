@extends('layouts.app')

@section('title', 'Minha Página')

@section('header')
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Prescrição
    </h2>
@endsection

@section('content')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    Página de Prescrição
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        // Seu JavaScript específico da página
    </script>
@endpush