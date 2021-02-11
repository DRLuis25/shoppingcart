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
                    <div class="row justify-content-center mx-auto text-center">
                        <form action="" class="col-4">
                            <label for="email">E-mail:</label>
                            <input class="form-control" type="email" id="email" name="email">
                            <br>
                            <label for="pwd">Password:</label>
                            <input class="form-control col-sm6" type="password" id="pwd" name="pwd"><br>
                            <input class="btn btn-outline-primary" type="submit" value="Submit">
                        </form>
                    </div>
                    <p><b>Si eres nuevo usuario.</b></p>
                    <p>Si usted no se ha registrado antes, simplemente pulse aqui</p>
                    <div class="" style="margin: 20px;justify-content:left;">
                        <button type="button" class="btn btn-outline-primary" >Registrar</button>
                    </div>
               
            </div>
        </div>
    </div>
</div>
@endsection
