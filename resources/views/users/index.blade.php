@extends('layout')
@section('title', "{$title}")
<!-- section include codigo php no blade.
La variable php debe pasarse en comilla doble -->
@section('content')
    <h1>{{ $title }}</h1>
    <!--Forma de validar pero directamente desde el for -->
    <ul>
      @forelse ($users as $user)
      <li>
        {{ $user }}
      </li>
      @empty
      <li>No hay usuarios registrados.</li>
      @endforelse
    </ul>
@endsection
@section('sidebar')
  @parent
  <h2>Barra personalizada.</h2>
@endsection
