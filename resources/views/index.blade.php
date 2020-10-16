@extends('layouts.app')

@section('content')
    @foreach ($data as $item)
        <ul>
            <a href="{{ route('repos.show', $item->id)}}"><li>{{$item->nome}}</li></a>
            <li>{{$item->eta}}</li>
            <li>{{$item->description}}</li>
            <li>
                <form action="{{route('repos.destroy', $item->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Cancella">


                </form>
            </li>
        </ul>
    @endforeach

@endsection
