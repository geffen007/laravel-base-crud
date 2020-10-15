@extends('layouts.app')

@section('content')
    <form action="{{route('repos.store')}}" method="post">
    @csrf
    {{-- scriviamo a mano l'input --}}
    {{-- <input name="_method" type="hidden" value="POST"> --}}
    {{-- oppure usiamo blade --}}
    @method('POST')
    <label for="title">Nome</label>
    <input type="text" name="nome" placeholder="Nome" id="nome" value="{{old('name')}}">

    <label for="content">Età</label>
    <input type="text" name="eta" placeholder="Età" id="eta" value="{{old('eta')}}">

    <label for="content">Descrizione</label>
    <textarea name="description" rows="8" cols="80">{{old('description')}}</textarea>

    <input type="submit" value="Invia">
    </form>

@endsection
