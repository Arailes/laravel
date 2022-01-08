@extends('layouts.app.layout')

@section('content')
    <h3>Minhas Rifas</h3>
    <ul>
        @foreach ($raffles as $raffle)
            <li>
                <div>
                    <span>{{$raffle}}</span>  
                </div>
                <div>
                    @foreach ($collection as $item)
                        <img src="" alt="">   
                    @endforeach
                </div>
                <div>
                    <a href="">Mais Informações</a>
                </div>
            </li>
        @endforeach
    </ul>
@endsection

