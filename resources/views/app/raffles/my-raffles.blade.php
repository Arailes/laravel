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
                            <button data-type="prev" onClick='prevImage({{$raffle->images->count()}},"{{$raffle->slug}}")'>
                                <<
                            </button>
                            <button data-type="next"  onClick='nextImage({{$raffle->images->count()}},"{{$raffle->slug}}")'>
                                >>
                            </button>
                        </div>
                        <div id="{{$raffle->slug}}">
                            @foreach ($raffle->images as $image)
                                <img src="{{Storage::url($image->path)}}" style="margin-left:0" alt="{{$image->title}}">   
                            @endforeach
                        </div>
                        
                        <div id="{{$raffle->slug}}_amount">
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
        function nextImage(imagesAmount, idImageDiv){
            
            totalMarginLeftImages = imagesAmount * (-176);
            
            const imageDiv =  document.getElementById(idImageDiv);
            const firstImage= imageDiv.querySelector('img');
            const marginLeftFirstImage =  firstImage.style.marginLeft;
            const marginLeftFirstImageFormated =  parseInt(marginLeftFirstImage.replace('px',''));
            
            const newMarginLeft =marginLeftFirstImageFormated - 176;
            changeBallColor(idImageDiv + '_amount', marginLeftFirstImageFormated / -176)
            if(totalMarginLeftImages < newMarginLeft){
                // console.log(marginLeftFirstImageFormated)
                firstImage.style.marginLeft = newMarginLeft + 'px';
            }else{
                firstImage.style.marginLeft = '0px';
            }   
        }

        function prevImage(imagesAmount, idImageDiv){
            totalMarginLeftImages = imagesAmount * (-176);
            
            const imageDiv =  document.getElementById(idImageDiv);
            const firstImage= imageDiv.querySelector('img');
            const marginLeftFirstImage =  firstImage.style.marginLeft;
            const marginLeftFirstImageFormated =  parseInt(marginLeftFirstImage.replace('px',''));
            const newMarginLeft =marginLeftFirstImageFormated + 176;
            if(newMarginLeft <= 0){
                // console.log(marginLeftFirstImageFormated)
                firstImage.style.marginLeft = newMarginLeft + 'px';
            }else{
                // console.log(totalMarginLeftImages);
                firstImage.style.marginLeft = (totalMarginLeftImages + 176 )  + 'px';
            }   
        }

        function changeBallColor(divElement,idBall){
            const div = document.getElementById(divElement);
            const balls = div.querySelectorAll('span');
            console.log(idBall);
           balls.forEach((element,key) => {
               if(idBall + 1 == key){
                element.style.backgroundColor="red"   
               }else{
                element.style.backgroundColor="#fff"
               }
                
           });
        }
    </script>
@endpush

