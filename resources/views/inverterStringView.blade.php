@extends('layouts.app')

@section('title')
Teste Rápido - Inverter String
@endsection

@section('content')

<div class="p-4">
    <h1 class="text-2xl text-blue-royal font-bold flex items-center">
      <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 17l4-4m0 0l-4-4m4 4H7m16 0v-4m0 0L9 7m14 4H5"/></svg>
      Exemplo de inverter string
    </h1>
    <p class="text-lg text-gray-700 mb-4">Texto original: {{ $textoOriginal }}</p>
    <p class="text-lg text-gray-700">Texto invertido: {{ $textoInvertido }}</p>
  </div>

@endsection
