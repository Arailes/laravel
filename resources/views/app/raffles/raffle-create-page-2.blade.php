@extends('layouts.app.layout')

@section('content')
    <h3>Imagens</h3>
    <form method="POST" action="{{route('rifas.image.store',$raffle->id)}}" enctype="multipart/form-data"> @csrf
        
        <div>
            <fieldset >
                <div class="image-raffle">
                    <div class="form-group">
                        <label for="file_1">+</label>
                        <input type="file" id="file_1" image name="file_1">
                    </div>
                    <div class="form-group">
                        <label for="file_2" >+</label>
                        <input type="file" id="file_2" image name="file_2">
                    </div>
                    <div class="form-group">
                        <label for="file_3" >+</label>
                        <input type="file" id="file_3" image name="file_3">
                    </div>
                    <div class="form-group">
                        <label for="file_4" >+</label>
                        <input type="file" id="file_4" image name="file_4">
                    </div>
                    <div class="form-group" >
                        <label for="file_5" >+</label>
                        <input type="file" id="file_5" image name="file_5">
                    </div>
                    <div class="form-group">
                        <label for="file_6" >+</label>
                        <input type="file"id="file_6" image name="file_6">
                    </div>
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