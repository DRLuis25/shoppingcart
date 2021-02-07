@extends('layouts.cliente')



@section('content')
<div class="row w-75 mx-auto">
    <div class="col-2 text-center" style="position:fixed; 
    transform: translateY(50%); left:5%">
        <aside class="bg-danger">
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
    <div class="col-10 offset-2 text-center">
        <h3> Lista productos</h3>
        <div class="row">
            <div class="card col-3 filter cat1">
              <img class="card-img-top" src="https://cdn.shopify.com/s/files/1/1543/3205/products/nicestuffssnavy_1024x1024.jpg?v=1589419928" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Producto 1</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">Last updated 3 mins ago</small>
              </div>
            </div>
            <div class="card col-3 filter cat2">
              <img class="card-img-top" src="https://cdn.shopify.com/s/files/1/1543/3205/products/nicestuffssnavy_1024x1024.jpg?v=1589419928" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Producto 2</h5>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">Last updated 3 mins ago</small>
              </div>
            </div>
            <div class="card col-3 filter cat3">
              <img class="card-img-top" src="https://cdn.shopify.com/s/files/1/1543/3205/products/nicestuffssnavy_1024x1024.jpg?v=1589419928" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Producto 3</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">Last updated 3 mins ago</small>
              </div>
            </div>
            <div class="card col-3 filter cat4">
                <img class="card-img-top" src="https://cdn.shopify.com/s/files/1/1543/3205/products/nicestuffssnavy_1024x1024.jpg?v=1589419928" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Producto 4</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">Last updated 3 mins ago</small>
                </div>
            </div>
            <div class="card col-3 filter cat2">
                <img class="card-img-top" src="https://cdn.shopify.com/s/files/1/1543/3205/products/nicestuffssnavy_1024x1024.jpg?v=1589419928" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Producto 2</h5>
                  <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">Last updated 3 mins ago</small>
                </div>
              </div>
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
