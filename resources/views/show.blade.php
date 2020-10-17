@extends('layouts.app')

@section('content')
    <section>
    <!--for demo wrap-->
        <h1>{{$repo->nome}}</h1>
        <div class="tbl-header">
            <table cellpadding="0" cellspacing="0" border="0">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Età</th>
                        <th>Descrizione</th>
                        <th></th>
                    </tr>
                </thead>
            </table>
        </div>
        <div class="tbl-content">
            <table cellpadding="0" cellspacing="0" border="0">
                <tbody>
                    <tr>
                        <th>{{$repo->nome}}</th>
                        <th>{{$repo->eta}}</th>
                        <th>{{$repo->description}}</th>
                        <th>
                            <form action="{{route('repos.edit', $repo->id)}}" method="post">
                                @csrf
                                @method('GET')
                                <input type="submit" value="MODIFICA">
                            </form>
                        </th>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
@endsection
