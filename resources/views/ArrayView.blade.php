@extends('layouts.app')
@section('title')
Teste Rápido
@endsection

@section('header')
Manupulador de Arrays
@endsection

@section('content')

<h1>Array aleatório</h1>

<div class="flex flex-wrap items-center">
  @foreach ($numeros as $numero)
    <a class="flex items-center bg-gray-200 hover:bg-gray-300 text-center p-4 mx-4">
      <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 11H7m16 0l-4-8m4 8v3l4-8v3z"/></svg>
      {{ $numero }}
    </a>
  @endforeach
</div>

<p>Média: {{ $media }}</p>

@endsection
