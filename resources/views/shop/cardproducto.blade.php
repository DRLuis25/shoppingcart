<div class="card col-12 col-md-6 col-sm-6 col-lg-3 filter {{$producto->categoria_id}}">
  <div style="height: 210px">
    <a href="/detalle_producto/{{$producto->id}}" >
      <img class="card-img-top" 
      src="{{$producto->foto}}" 
      alt="Card image cap" class="rounded" style="width: 75%; margin-left: auto;
      margin-right: auto;
      display: block;" >
    </a>
  </div>
    <div class="">
        <a href="/detalle_producto/{{$producto->id}}"><p style="color:#000000 !important;
          text-decoration:none;" class="font-weight-bold">{{$producto->descripcion}}</p></a>
        <p class="float-right">Precio: S/. {{$producto->precio}}</p>
    </div>
    <!--<div class="card-footer text-center">
      <a href="#" class="card-link">Card link</a>
      <a href="#" class="card-link">Another link</a>
    </div>-->
</div>