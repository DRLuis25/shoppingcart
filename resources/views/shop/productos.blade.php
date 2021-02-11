@extends('layouts.cliente')



@section('content')
<div class="row w-75 mx-auto">
    <div class="col-12 col-sm-12 col-md-4 col-lg-2 text-center mt-5">
        <aside class="">
            <h3>Categorias</h3>
            <nav class="">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <button class="btn btn-default filter-button" data-filter="all">Todos</button>
                    </li>
                    <li class="nav-item">
                        <button class="btn btn-default filter-button" data-filter="cat1">Categoria 1</button>
                    </li>
                    <li class="nav-item">
                        <button class="btn btn-default filter-button" data-filter="cat2">Categoria 2</button>
                    </li>
                    <li class="nav-item">
                        <button class="btn btn-default filter-button" data-filter="cat3">Categoria 3</button>
                    </li>
                    <li class="nav-item">
                        <button class="btn btn-default filter-button" data-filter="cat4">Categoria 4</button>
                    </li>
                                            
                </ul>
            </nav>
        </aside>
    </div>
    <div class="col-12 col-sm-12 col-md-8 col-lg-10 mt-5">
        
        <div class="row">
          @include('shop.cardproducto',['nombreprod'=>'NombreProducto','precio'=>'99.99','cat'=>'cat1'])
          @include('shop.cardproducto',['nombreprod'=>'NombreProducto','precio'=>'20.25','cat'=>'cat2'])
          @include('shop.cardproducto',['nombreprod'=>'NombreProducto','precio'=>'50.75','cat'=>'cat3'])
          @include('shop.cardproducto',['nombreprod'=>'NombreProducto','precio'=>'40.99','cat'=>'cat2'])
          @include('shop.cardproducto',['nombreprod'=>'NombreProducto','precio'=>'30.49','cat'=>'cat4'])
          @include('shop.cardproducto',['nombreprod'=>'NombreProducto','precio'=>'25.50','cat'=>'cat3'])
          @include('shop.cardproducto',['nombreprod'=>'NombreProducto','precio'=>'99.99','cat'=>'cat1'])
          @include('shop.cardproducto',['nombreprod'=>'NombreProducto','precio'=>'20.25','cat'=>'cat2'])
          @include('shop.cardproducto',['nombreprod'=>'NombreProducto','precio'=>'50.75','cat'=>'cat3'])
          @include('shop.cardproducto',['nombreprod'=>'NombreProducto','precio'=>'40.99','cat'=>'cat2'])
          @include('shop.cardproducto',['nombreprod'=>'NombreProducto','precio'=>'30.49','cat'=>'cat4'])
          @include('shop.cardproducto',['nombreprod'=>'NombreProducto','precio'=>'25.50','cat'=>'cat3'])
        </div>
    </div>
</div>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script>
    
    $(document).ready(function(){

    $(".filter-button").click(function(){
        var value = $(this).attr('data-filter');
        
        if(value == "all")
        {
            //$('.filter').removeClass('hidden');
            $('.filter').show('1000');
        }
        else
        {
    //            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
    //            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
            $(".filter").not('.'+value).hide('3000');
            $('.filter').filter('.'+value).show('3000');
            
        }
    });

    if ($(".filter-button").removeClass("active")) {
    $(this).removeClass("active");
    }
    $(this).addClass("active");

});
</script>
@endsection
