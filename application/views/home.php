<div class="container">
    <div class="row">
        <img class="img-responsive center-block" src="<?php echo asset_url(); ?>img/cubok-home-logo.png" alt="cubok" />
    </div>
    <!--    <div class="row">
            <h2 class="text-center">CUBOK</h2>
        </div>-->
</div>
<div>&nbsp;</div>
<div class="container">
    <div class="col-lg-6 col-lg-offset-3">
        <div class="form-group">
            <div class="input-group">
                <input class="form-control" type="text">
                <span class="input-group-btn">
                    <button class="btn btn-primary" type="button"><i class="fa fa-search"></i> Buscar</button>
                </span>
            </div>
        </div>
    </div>
        <a class="btn btn-primary"
           id="navbar-button-help" href="#" data-toggle="popover" data-trigger="focus" data-placement="bottom" title="¿Necesitas ayuda?" data-content="CUBOK es fácil de usar ¿Por qué no empiezas aquí?"><i class="fa fa-question-circle"></i></a>
</div>

<script>
    $('#navbar-button-help').popover('show');
</script>