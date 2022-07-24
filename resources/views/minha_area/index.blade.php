@extends('minha_area.template.main')

@section('styles')
@endsection


@section('titulo')
    Dashboard @if (isset($tipo))
        {{ $tipo }}
    @endif
@endsection

@section('botoes')
@endsection

@section('conteudo')
    @livewire('minha-area.inicio.dashboard')
@endsection

@section('scripts')
@endsection
