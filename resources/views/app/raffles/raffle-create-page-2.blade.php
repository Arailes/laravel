@extends('layouts.app.layout')

@section('content')
    <form method="POST" action="{{route('rifas.image.store',$raffle->id)}}" enctype="multipart/form-data"> @csrf
        <div>
            <label for="">Imagem</label>
            <input type="file" name="file_1">
            <input type="file" name="file_2">
            <input type="file" name="file_3">
            <input type="file" name="file_4">
            <input type="file" name="file_5">
        </div>
        <button>
            Próximo
        </button>
    </form>
@endsection