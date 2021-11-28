@extends('layouts.authentication')

@section('content')
<div class="container-auth">
   
        <form method="POST" action="{{ route('register') }}" id="register">@csrf
            <fieldset class="form-auth" form="register">
                
                <div class="form-group">
                    <label for="name" >Nome</label>
                    
                    <div>
                        <div class="input">
                            <span class="material-icons">
                                person
                            </span>
                            <input id="name" type="name" @error('name') is-invalid @enderror name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        </div>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        
        
                        
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" >Email</label>
                    
                    <div>
                        <div class="input">
                            <span class="material-icons">
                                mail
                            </span>
                            <input id="email" type="email" @error('email') is-invalid @enderror name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        </div>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        
        
                        
                    </div>
                </div>
    
                <div class="form-group">
                    <label for="password" >Senha</label>
                    
                    <div>
                        <div class="input">
                            <span class="material-icons">
                                vpn_key
                                </span>
                            <input id="password" type="password"  @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        </div>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror  
                    </div>
                </div>
                <div class="form-group">
                    <label for="password-confirm" >Confirmar Senha</label>
                    
                    <div>
                        <div class="input">
                            <span class="material-icons">
                                vpn_key
                                </span>
                            <input id="password-confirm" type="password"  @error('password') is-invalid @enderror" name="password_confirmation" required autocomplete="current-password">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div >
                        <button type="submit">
                            Registrar
                        </button>
                    </div>
                </div>

                <a  href="{{ route('login') }}" class="reset">
                    Já Possui uma Conta? Faça o Login
                </a>
            </fieldset>
        </form>
        <div class="banner-auth">
            <img src="{{asset('assets/images/backgrounds/register.jpg')}}" alt="">
        </div>
        
    

</div>
@endsection




