@extends('layouts.app.layout')

@section('content')
    <form method="POST" action="{{route('rifas.image.store',$raffle->id)}}" enctype="multipart/form-data"> @csrf
        <div>
            <fieldset>
                <div class="form-group">
                    <input type="file" name="file_1">
                </div>
                <div class="form-group">
                    <input type="file" name="file_2">
                </div>
                <div class="form-group">
                    <input type="file" name="file_3">
                </div>
                <div class="form-group">
                    <input type="file" name="file_4">
                </div>
                <div class="form-group">
                    <input type="file" name="file_5">
                </div>  
                <div class="form-group">
                    <button>
                        Próximo
                    </button>
                </div> 
            </fieldset>
        </div>
    </form>
@endsection