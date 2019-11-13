
 <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
 <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script> -->
 <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->

 <?php echo $this->Html->css('credit_card', array('inline' => false)); ?>


<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">


<div class="container">

<div class="row">
  <aside class="col-sm-6">
    <h3> Agregar Forma de Pago </h3>
    
    <article class="card">
      <div class="card-body p-5">
        <ul class="nav bg-light nav-pills rounded nav-fill mb-3" role="tablist">
          <li class="nav-item">
              <a class="nav-link active" data-toggle="pill" href="#nav-tab-card">
                <i class="fa fa-credit-card"></i> Tarjeta de Credito o Debito
              </a>
          </li>
        </ul>

        <div class="tab-content">
          <div class="tab-pane fade show active" id="nav-tab-card">
              <p class="alert alert-success">Some text success or error</p>
              <form role="form">
                <div class="form-group">
                  <label for="username">Nombre en la Tarjeta</label>
                  <input type="text" class="form-control" name="username" placeholder="" required="">
                </div> <!-- form-group.// -->

                <div class="form-group">
                  <label for="cardNumber">Número de tarjeta</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="cardNumber" placeholder="">
                          <div class="input-group-append">
                            <span class="input-group-text text-muted">
                                <i class="fab fa-cc-visa"></i>   <i class="fab fa-cc-amex"></i>   
                                <i class="fab fa-cc-mastercard"></i> 
                            </span>
                          </div>
                    </div>
                </div> <!-- form-group.// -->

                <div class="row">
                  <div class="col-sm-8">
                    <div class="form-group">
                        <label><span class="hidden-xs">Fecha de Vencimiento</span> </label>
                        <div class="input-group">
                          <input type="" class="form-control" placeholder="MM/YY" name="">
                          
                        </div>
                    </div>
                  </div>
                  
                  <div class="col-sm-4">
                      <div class="form-group">
                          <label data-toggle="tooltip" title="" data-original-title="3 digits code on back side of the card">CVV <i class="fa fa-question-circle"></i></label>
                          <input type="number" class="form-control" required="">
                      </div> <!-- form-group.// -->
                  </div>
                </div> <!-- row.// -->

                <button class="subscribe btn btn-primary btn-block" type="button"> Confirmar  </button>
              </form>
            </div> <!-- tab-pane.// -->
        </div> <!-- tab-content .// -->
      </div> <!-- card-body.// -->
    </article> <!-- card.// -->
  </aside> <!-- col.// -->
</div> <!-- row.// -->
</div> 
<!--container end.//-->

