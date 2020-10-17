@extends('layouts.app')

@section('content')
        <ul>
            <li>{{$repo->nome}}</li>
            <li>{{$repo->eta}}</li>
            <li>{{$repo->description}}</li>
        </ul>
@endsection
