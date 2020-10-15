@extends('layouts.app')

@section('content')
    @foreach ($data as $item)
        <ul>
            <li>{{$item->nome}}</li>
            <li>{{$item->eta}}</li>
            <li>{{$item->description}}</li>
        </ul>
    @endforeach

@endsection
