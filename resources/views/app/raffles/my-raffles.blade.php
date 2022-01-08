@extends('layouts.app.layout')

@section('content')
    <h3>Minhas Rifas</h3>
    <ul>
        @foreach ($raffles as $raffle)
            <li>
                <div>
                    <span>{{$raffle->title}}</span>  
                </div>
                <div>
                    @foreach ($raffle->images as $image)
                        <img src="{{Storage::url($image->path)}}" alt="{{$image->title}}">   
                    @endforeach
                </div>
                <div>
                    <a href="">Mais Informações</a>
                </div>
            </li>
        @endforeach
    </ul>
@endsection

