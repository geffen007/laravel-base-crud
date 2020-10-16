@extends('layouts.app')

@section('content')
    @if ($errors->any())
        <div class="">
            <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            </ul>
        </div>
    @endif


    <form action="{{(!empty($repo)) ? route('repos.update', $repo->id) : route('repos.store', $repo->$id)}}" method="post">
    @csrf
    {{-- scriviamo a mano l'input --}}
    {{-- <input name="_method" type="hidden" value="POST"> --}}
    {{-- oppure usiamo blade --}}
    @if (!empty($repo))
        @method('PATCH')
    @else
        @method('POST')
    @endif

    @if (!empty($repo))
        <input type="hidden" name="id" value="{{$repo->id}}">
    @endif


    <label for="title">Nome</label>
    <input type="text" name="nome" placeholder="Nome" id="nome" value="{{(!empty($repo)) ? $repo->nome : old('name')}}">

    <label for="content">Età</label>
    <input type="text" name="eta" placeholder="Età" id="eta" value="{{(!empty($repo)) ? $repo->eta : old('eta')}}">

    <label for="content">Descrizione</label>
    <textarea name="description" rows="8" cols="80">{{(!empty($repo)) ? $repo->description : old('description')}}</textarea>

    <input type="submit" value="Invia">
    </form>

@endsection
