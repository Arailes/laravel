@extends('layouts.app.layout')

@section('content')
    <h3>Imagens</h3>
    <form method="POST" action="{{route('rifas.image.store',$raffle->id)}}" enctype="multipart/form-data"> @csrf
        
        <div>
            <fieldset >
                <div class="image-raffle">
                    <div class="form-group">
                       
                        <label for="file_1">
                            +
                            <img  alt="" id="image_1" >
                        </label>
                        <input type="file" id="file_1" image name="file_1"   onchange="previewImage(event)">
                    </div>
                    <div class="form-group">
                        <label for="file_2" >
                            +
                            <img  alt="" id="image_2">
                        </label>
                        <input type="file" id="file_2" image name="file_2"  onchange="previewImage(event)">
                    </div>
                    <div class="form-group">
                        <label for="file_3" >
                            +
                            <img  alt="" id="image_3">
                        </label>
                        <input type="file" id="file_3" image name="file_3"  onchange="previewImage(event)">
                    </div>
                    <div class="form-group">
                        <label for="file_4" >
                            +
                            <img  alt="" id="image_4">
                        </label>
                        <input type="file" id="file_4" image name="file_4"  onchange="previewImage(event)">
                    </div>
                    <div class="form-group" >
                        <label for="file_5" >
                            +
                            <img  alt="" id="image_5">
                        </label>
                        <input type="file" id="file_5" image name="file_5"  onchange="previewImage(event)">
                    </div>
                    <div class="form-group">
                        <label for="file_6" >
                            +
                            <img  alt="" id="image_6">
                        </label>
                        <input type="file"id="file_6" image name="file_6"  onchange="previewImage(event)">
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

@push('js')
    <script>
        function previewImage (event){
            console.log('entrou');
            const id = event.target.getAttribute('id');
            const index = id.substring(5,6)
            
            const image = document.querySelector(`#image_${index}`);

           
            image.src = URL.createObjectURL(event.target.files[0])
                
           
        }
        
    </script>
@endpush