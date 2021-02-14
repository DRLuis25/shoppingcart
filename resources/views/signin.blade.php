@extends('layouts.cliente')

@section('content')
<div class="container">
    <div class="col-sm-4 bg-white ">
        <h1> Menú principal</h1>
    </div>
    <div class="row  justify-content-center ">
        <div class="col-sm-12 justify-content-center" style="">
            <p style="font-family: fantasy;margin-top: 10px; font-size: 20px;justify-content: left ">Confirmar la Entrada</p>
            <p style="justify-content: left">El primer paso es confirmar la entrada.</p>
            <p style="justify-content: left">Solamente seleccione uno de las opciones debajo.</p>

            <div>
                    <p><b> Si usted ya se ha registrado con anterioridad.</b></p>
                    <p>Si usted se ha registrado antes en SISTEMA TIENDA VIRTUAL,teclee su email y su password para confirmar la entrada</p>
                    <div class="row justify-content-center ">
                        
                    <form method="post" action="{{ url('/login') }}">
                        @csrf
                        <div class="input-group mb-3">
                            <input type="email"
                                name="email"
                                value="{{ old('email') }}"
                                placeholder="Email"
                                class="form-control @error('email') is-invalid @enderror">
                            <div class="input-group-append">
                                <div class="input-group-text"><span class="fas fa-envelope"></span></div>
                            </div>
                            @error('email')
                            <span class="error invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="input-group mb-3">
                            <input type="password"
                                name="password"
                                placeholder="Password"
                                class="form-control @error('password') is-invalid @enderror">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                            @error('password')
                            <span class="error invalid-feedback">{{ $message }}</span>
                            @enderror

                        </div>

                        <div class="row">
                            <div class="col-8">
                                <div class="icheck-primary">
                                    <input type="checkbox" id="remember">
                                    <label for="remember">Remember Me</label>
                                </div>
                            </div>

                            <div class="col-4">
                                <button type="submit" class="btn btn-primary">Login</button>
                            </div>

                        </div>
                    </form>
                    </div>
                    <p><b>Si eres nuevo usuario.</b></p>
                    <p>Si usted no se ha registrado antes, simplemente pulse aqui</p>
                    <div class="" style="margin: 20px;justify-content:left;">
                        <button type="button" class="btn btn-outline-primary" >Registrar</button>
                        <a href="{{route('registro')}}">Registrarse</a>
                    </div>
               
            </div>
        </div>
    </div>
</div>
@endsection
