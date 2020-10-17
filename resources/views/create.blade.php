@extends('layouts.app')

@section('title', 'Create')

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

    <section>
        <form action="{{(!empty($repo)) ? route('repos.update', $repo->id) : route('repos.store')}}" method="post">
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
            <h1>Fixed Table header</h1>

            <div class="tbl-header">
                <table cellpadding="0" cellspacing="0" border="0">
                    <thead>
                        <tr>
                            <th><label for="title">Nome</label></th>
                            <th><label for="content">Età</label></th>
                            <th><label for="content">Descrizione</label></th>
                            <th></th>
                        </tr>
                    </thead>
                </table>
            </div>
            <div class="tbl-content">
                <table cellpadding="0" cellspacing="0" border="0">
                    <tbody>
                        <tr>
                            <th><input type="text" name="nome" placeholder="Nome" id="nome" value="{{(!empty($repo)) ? $repo->nome : old('name')}}"></th>
                            <th><input type="text" name="eta" placeholder="Età" id="eta" value="{{(!empty($repo)) ? $repo->eta : old('eta')}}"></th>
                            <th><textarea name="description" rows="8" cols="35">{{(!empty($repo)) ? $repo->description : old('description')}}</textarea></th>
                            <th><input type="submit" value="Invia"></th>
                        </tr>
                    </tbody>
                </table>
            </div>
        </form>
    </section>



@endsection
