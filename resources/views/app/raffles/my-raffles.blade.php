@extends('layouts.app.layout')

@section('content')
    <div class="my-raffles-title">
        <h3>Minhas Rifas</h3>
    <div>
    <div class="my-raffles-body">
        <ul>
            @foreach ($raffles as $raffle)
                <li>
                    <div>
                        <span>{{$raffle->title}}</span>  
                    </div>
                    <div>
                        <div class="controls">
                            <button data-type="prev">
                                <<
                            </button>
                            <button>
                                >>
                            </button data-type="next">
                        </div>
                        
                        @foreach ($raffle->images as $image)
                            <img src="{{Storage::url($image->path)}}" alt="{{$image->title}}">   
                        @endforeach
                        <div>
                            @foreach ($raffle->images as $image)
                                <span></span>   
                            @endforeach 
                        </div>
                        
                    </div>
                    <div>
                        <a href="">Mais Informações</a>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
    
@endsection

@push('js')
    <script>

    </script>
@endpush

