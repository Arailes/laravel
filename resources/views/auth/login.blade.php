@extends('layouts.authentication')

@section('content')
<div class="container">
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div >
            <label for="email" >Email</label>

            <div>
                <input id="email" type="email" @error('email') is-invalid @enderror name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div >
            <label for="password" >Senha</label>

            <div>
                <input id="password" type="password"  @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                @error('password')
                    <span  role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div>
            <div>
                <div >
                    <input  type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                    <label  for="remember">
                        Lembra de mim
                    </label>
                </div>
            </div>
        </div>

        <div >
            <div >
                <button type="submit"">
                    {{ __('Login') }}
                </button>

                @if (Route::has('password.request'))
                    <a  href="{{ route('password.request') }}">
                        Não lembro minha senha
                    </a>
                @endif
            </div>
        </div>
    </form>
    
    
   
</div>
@endsection
