<div class="card col-12 col-md-6 col-sm-6 col-lg-3 filter {{$producto->categoria_id}}">
    <a href=""><img class="card-img-top" 
    src="{{$producto->foto}}" 
    alt="Card image cap" class="rounded" style="width: 75%; margin-left: auto;
    margin-right: auto;
    display: block;"></a>
    <div class="">
        <a href=""><p class="">{{$producto->descripcion}}</p></a>
        <p class="">{{$producto->precio}}</p>
    </div>
    <!--<div class="card-footer text-center">
      <a href="#" class="card-link">Card link</a>
      <a href="#" class="card-link">Another link</a>
    </div>-->
</div>