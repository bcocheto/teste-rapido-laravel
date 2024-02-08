@extends('layouts.app')

@section('title')
Ler Arquivo
@endsection

@section('content')

<h1>Conteúdo do Arquivo :</h1>

<div class="bg-gray-100 p-4 rounded-md shadow-sm">
  @if (isset($conteudo))
    <p class="text-lg text-gray-700">" {{ $conteudo }} "</p>
  @else
    <p class="text-danger text-lg">{{ $erro }}</p>
  @endif
</div>

@endsection
