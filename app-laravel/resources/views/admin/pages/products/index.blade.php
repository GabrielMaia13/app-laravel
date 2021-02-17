@extends('admin.layouts.app')

@section('title', 'Gestão de Produtos')

@section('content')
    <h1>Exibindo produtos</h1>
    <a href="{{ route('products.create') }}">Cadastrar</a>

    <hr>

{{--     
    @component('admin.components.card')
         
        @slot('title')
            <h1>Título Slot</h1>
        @endslot
        Um card de exemplo
    @endcomponent

    <hr>

    @include('admin.includes.alerts', ['content' => 'Alerta de preços de produtos'])

    @if (isset($products))
        @foreach ($products as $product)
            <p class="@if ($loop->last) last @endif">{{ $product }}</p>
        @endforeach
    @endif

    <hr>
    
    @forelse ($products as $product)
        <p class="@if ($loop->first) last @endif">{{ $product }}</p>
    @empty
        <p>Não  existem produtos cadastrados</p>
    @endforelse

    <hr>

@endsection    

@push('link')
 <link rel="stylesheet" href="../app/resources/css/style.css">
@endpush --}}