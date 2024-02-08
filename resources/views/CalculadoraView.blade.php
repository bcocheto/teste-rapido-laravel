@extends('layouts.app')

@section('title')
Teste Rápido - Calculadora
@endsection

@section('header')
Calculadora
@endsection

@section('content')

<div class="bg-gray-100 p-4 rounded-md shadow-sm">
  <h1 class="text-2xl text-blue-royal font-bold">Resultados da Calculadora</h1>
  <ul class="list-disc list-outside pl-4">
    <li class="text-lg text-gray-700">Soma: {{ $soma }}</li>
    <li class="text-lg text-gray-700">Subtração: {{ $subtracao }}</li>
    <li class="text-lg text-gray-700">Multiplicação: {{ $multiplicacao }}</li>
    <li class="text-lg text-gray-700">Divisão: {{ $divisao }}</li>
  </ul>
</div>

@endsection
