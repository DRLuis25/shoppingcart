<div class="row">
    <div class="col-lg-7 mx-auto">
    <div class="bg-white rounded-lg shadow-sm p-5">
        <!-- Credit card form content -->
        <div class="tab-content">

        <!-- credit card info-->
        <div id="nav-tab-card" class="tab-pane fade show active">
            
            <div class="form-group">
                <label for="username">Nombre (en la tarjeta)</label>
                <input type="text" name="username" placeholder="Jason Doe" required class="form-control">
            </div>
            <div class="form-group">
                <label for="cardNumber">Número de tarjeta</label>
                <div class="input-group">
                <input type="text" name="cardNumber" minlength="16" maxlength="16" onkeypress='return event.charCode >= 48 && event.charCode <= 57' placeholder="Tu número de tarjeta" class="form-control" required>
                <div class="input-group-append">
                    <span class="input-group-text text-muted">
                        <i class="fab fa-cc-visa mx-1"></i>
                        <i class="fab fa-cc-amex mx-1"></i>
                        <i class="fab fa-cc-mastercard mx-1"></i>
                    </span>
                </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-8">
                <div class="form-group">
                    <label><span class="hidden-xs">Fecha de expiración</span></label>
                    <div class="input-group">
                    <input type="number" min="1" max="12" placeholder="MM" name="mes" class="form-control" required>
                    <input type="number" min="2021"  placeholder="YY" name="anio" class="form-control" required>
                    </div>
                </div>
                </div>
                <div class="col-sm-4">
                <div class="form-group mb-4">
                    <label data-toggle="tooltip" title="Three-digits code on the back of your card">CVV
                        <i class="fa fa-question-circle"></i>
                    </label>
                    <input type="text" minlength="3" maxlength="3"  name="cvv" onkeypress='return event.charCode >= 48 && event.charCode <= 57' required class="form-control">
                </div>
                </div>
            </div>
            {{-- <button type="button" class="subscribe btn btn-primary btn-block rounded-pill shadow-sm"> Confirm  </button> --}}
           
        </div>
        <!-- End -->
        </div>
        <!-- End -->

    </div>
    </div>
</div>

<script>
    function validaNumericos(event) {
    if(event.charCode >= 48 && event.charCode <= 57){
      return true;
     }
     return false;        
}
</script>