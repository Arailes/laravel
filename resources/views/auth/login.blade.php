@extends('layouts.authentication')

@section('content')
<div class="container-auth">
    <div class="banner-auth">
        <img src="{{asset('assets/images/backgrounds/login.jpg')}}" alt="">
    </div>
    <form method="POST" action="{{ route('login') }}" id="login">@csrf
        <fieldset class="form-auth" form="login">
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            @error('password')
                <span  role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <div class="form-group">
                <label for="email" >Email</label>
                <div>
                    <div class="input">
                        <span class="material-icons">
                            mail
                        </span>
                        <input id="email" type="email" @error('email') is-invalid @enderror name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    </div>
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
                </div>
            </div>
            <div class="form-group">
                <div>
                    <div >
                        <input  type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
    
                        <label  for="remember">
                            Lembra de mim
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div >
                    <button type="submit">
                        Entrar
                    </button>
                </div>
            </div>
            @if (Route::has('password.request'))
                <a  href="{{ route('password.request') }}" class="reset">
                    Não lembro minha senha
                </a>
            @endif
            <a  href="{{ route('register') }}" class="reset">
                Não Possui uma conta? Cadastre-se
            </a>
        </fieldset>
    </form>
</div>
@endsection
