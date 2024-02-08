@extends('layouts.app')

@section('title')
Divisão de Números
@endsection

@section('content')

<div class="container">
    <h1 class="mb-4">Divisão de Números</h1>

    @if (isset($resultado))
        <div class="bg-gray-100 p-4 rounded-md shadow-sm">
            <p class="text-lg text-gray-700">"O resultado da divisão é: {{ $resultado }} "</p>
        </div>
    @endif

    @if (isset($erro))
        <div class="bg-red-100 p-4 rounded-md shadow-sm">
            <p class="text-danger text-lg">{{ $erro }}</p>
        </div>
    @endif

    {{-- <form action="{{ route('divisao') }}" method="get">
        <div class="form-group">
            <label for="numero1">Primeiro Número:</label>
            <input type="number" class="form-control" id="numero1" name="numero1" required>
        </div>

        <div class="form-group">
            <label for="numero2">Segundo Número:</label>
            <input type="number" class="form-control" id="numero2" name="numero2" required>
        </div>

        <button type="submit" class="btn btn-primary">Dividir</button>
    </form> --}}
</div>

@endsection
