<?php
    include 'layout.php';
?>

<div class="row">
    <div class="col-md-12">

        <div class="card card-border-color card-border-color-primary">
            <div class="card-header card-header-divider">
                Licencias
            </div>
            <div class="card-body">
                <form id="form-buscar" method="post">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="">Buscar por número de Licencia</label>
                                <div class="input-group input-search">
                                    <input type="text" required id="buscar_licencia" class="form-control" name='licencia'>
                                    <span class="input-group-btn btn-search-custom">
                                        <button type="button" class="btn btn-secondary">
                                            <i class="icon zmdi zmdi-search"></i>
                                        </button>
                                    </span>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary btn-block" id="buscar_btn" value="Buscar">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div id="demo" class="carousel slide" data-ride="carousel">

                              <!-- Indicators -->
                              <ul class="carousel-indicators">
                                <li data-target="#demo" data-slide-to="0" class="active"></li>
                                <li data-target="#demo" data-slide-to="1"></li>
                                <li data-target="#demo" data-slide-to="2"></li>
                                <li data-target="#demo" data-slide-to="3"></li>
                              </ul>

                              <!-- The slideshow -->
                              <div class="carousel-inner">
                                <div class="carousel-item active">
                                  <img src="img/img-1.jpeg" alt="" style="width:auto; height:200px;">
                                </div>
                                <div class="carousel-item">
                                  <img src="img/img-2.jpeg" alt="" style="width:auto; height:200px;">
                                </div>
                                <div class="carousel-item">
                                  <img src="img/img-3.jpeg" alt="" style="width:auto; height:200px;">
                                </div><div class="carousel-item">
                                  <img src="img/img-4.jpeg" alt="" style="width:auto; height:200px;">
                                </div>

                              </div>

                              <!-- Left and right controls -->
                              <a class="carousel-control-prev" href="#demo" data-slide="prev">
                                <span class="carousel-control-prev-icon"></span>
                              </a>
                              <a class="carousel-control-next" href="#demo" data-slide="next">
                                <span class="carousel-control-next-icon"></span>
                              </a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div id="result"></div>
    </div>
</div>
