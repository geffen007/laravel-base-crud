@extends('layouts.app')

@section('content')

@section('title', 'Show')

<section>
<!--for demo wrap-->
    <h1>CRUD</h1>
    <div class="tbl-header">
        <table cellpadding="0" cellspacing="0" border="0">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Età</th>
                    <th>Descrizione</th>
                    <th>Change</th>
                </tr>
            </thead>
        </table>
    </div>
    <div class="tbl-content">
        <table cellpadding="0" cellspacing="0" border="0">
            <tbody>
            @foreach ($data as $item)
                <tr>
                    <th><a href="{{ route('repos.show', $item->id)}}">{{$item->nome}}</a></th>
                    <th>{{$item->eta}}</th>
                    <th>{{$item->description}}</th>
                    <th>
                        <form action="{{route('repos.destroy', $item->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Cancella">
                        </form>
                    </th>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</section>

@endsection
