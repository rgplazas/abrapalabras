<style>

/* Estilos para envolver el cuadro de búsqueda */
.main {
    width: 50%;
    margin: 50px auto;
}

/* Bootstrap 4 entrada de texto con el icono de búsqueda */

.has-search .form-control {
    padding-left: 2.375rem;
}

.has-search .form-control-feedback {
    position: absolute;
    z-index: 2;
    display: inline-block;
	  vertical-align: top;
    width: 2.375rem;
    height: 2.375rem;
    line-height: 2.375rem;
    text-align: center;
    pointer-events: none;
    color: #000000;
}

/*Modal Menú*/
  .modal {
          color: #000;
      }
  
  .modal-izquierda {
          padding-right: 772px !important;
      }

@media screen and (max-device-width : 480px) {
  .modal-izquierda {
          padding-right: 15px !important;
      }
}

      .modal-dialog {
          border: 4px solid #009F98;
          overflow-y: hidden;
      }

    ul li {
        list-style: none;
      text-align:center;
      font-size:13px;
      line-height:3em;
      height:3em;
      text-transform:none;
    }

    li {
        float: left;
        padding-left: 1px;
    }

    li a {
        display: inline-block;
	      vertical-align: top;
        text-align: center;
        text-decoration: none;
        cursor: pointer;
    }

    .menuIconosRedes i {
    width: 30px;
    height: 30px;
    border-radius: 30px;
    background: #009f98;
    color: #fff;
    line-height: 30px;
    text-align: center;
    }


    .modal-header .cerrar {
    padding: 1rem 1rem;
    margin: -1rem -1rem -1rem auto;
    }

    .cerrar {
        color: #000;
    }

    .cerrar:hover{
        color: #009f98;
    }

</style>

<!DOCTYPE html>
<!-- Update your html tag to include the itemscope and itemtype attributes. -->
<html lang="es">

<head>
<script data-ad-client="ca-pub-7670889827427073" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
  <meta charset=utf-8> 
  <meta name=viewport content="width=device-width,initial-scale=1, shrink-to-fit=no">
  <link rel="shortcut icon" type="image/png" href="<?php echo base_url().'assets/img/favicon/abrapalabrasfavicon.ico';?>"/>

  <!-- Bootstrap core CSS -->
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i|Roboto+Slab:100,300,400,700&display=swap|Roboto&display=swap" rel="stylesheet"> <!-- FUENTES -->
  <link href="<?php echo base_url().'assets/bootstrap/css/bootstrap.min.css'; ?>" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="<?php echo base_url().'assets/css/shop-homepage.css'; ?>" rel="stylesheet">
  <!-- icons Fontawesome 5 Icons -->
  <link href="<?php echo base_url().'assets/plugin/fontawesome/css/all.min.css'; ?>" rel="stylesheet" type="text/css" />
  <!-- Estilo Propio CSS -->
  <link href="<?php echo base_url().'assets/css/estilos.css'; ?>" rel="stylesheet" type="text/css" />
  <body>
  <!-- Load Facebook SDK for JavaScript -->
  <div id="fb-root"></div>
  <!-- Navigation -->
  <nav class="navbar navbar-light bg-white fixed-top" style='background-color: #ffffff'>
    <div class="container">
      
      <div class="col-3 d-none d-sm-none d-md-block"> <!--solo se visualiza modo escritorio-->
        <div class="row">
          <div class="btn-group">
            <button class="d-none d-sm-none d-md-block navbar-toggler navbar-brand border-0" type="button" data-toggle="modal" data-target="#modalMenuHamburguesa">
              <span style="color:#009F98;"><i class="fa fa-bars fa-2x"></i></span>
            </button>
            <h1 class="d-none d-sm-none d-md-block" style="font-size: 40px; color:#009F98;">MEN&Uacute;</h1>  <!--solo se visualiza modo escritorio-->
          </div>
        </div>
        
        <div class="row d-none d-sm-none d-md-block"> <!--solo se visualiza modo escritorio-->
          <!-- Search form -->
          <?php $atributo = array(
                'id' => "BuscarNoticias"
            );
            echo form_open('', $atributo);
            ?>
            <input type="hidden" id="hidden_buscar" name="hidden_buscar" value="">
          <div class="form-group has-search">
            <span class="fa fa-search form-control-feedback"></span>
            <input type="text" id="buscarNoticia" name="buscarNoticia" class="form-control border-dark" placeholder="BUSCAR..." onkeydown="search(this)">
          </div>
        </div>
        </div>
        <?php echo form_close(); ?>
        <div class="col-lg-6 d-none d-sm-none d-md-block"> <!--solo se visualiza modo escritorio-->
        <a href="<?php echo base_url()?>">
          <div class="row">
            <img src="<?php echo base_url().'assets/img/abrapalabras.svg'; ?>"class="rounded mx-auto d-block" alt="Logo del sitio">
          </div>
        </a>
        </div>
        <?php if (($this->session->userdata('id_perfil')) == 1) { ?>
          <?php if (count($dolarHoy) > 0) { ?>
            <?php foreach ($dolarHoy as $i => $dolar) { ?>
              <div class="col-lg-3 d-none d-sm-none d-md-block"> <!--solo se visualiza modo escritorio-->
                        <p class="m-0 float-right border-bottom border-dark rounded-0" style="font-size: 0.875em;">Resistencia - Chaco</p>
                        <p class="m-0 float-right border-bottom border-dark rounded-0" style="font-size: 0.875em;">Actualizado: <?php echo date("H:i", strtotime($dolar->fechaHoraActualizacion));?>-hs <?php echo date("d/m/Y", strtotime($dolar->fechaHoraActualizacion));?></p>
                        <p class="m-0 float-right border-bottom border-dark rounded-0" style="font-size: 0.875em;" data-toggle="modal" data-target="#modalActualizarDolar">Dólar Compra $<?php echo $dolar->dolarCompra;?> Venta $<?php echo $dolar->dolarVenta;?></p> 
              </div>
            <?php } ?>
          <?php } ?>
        <?php }else{ ?>
          <?php if (count($dolarHoy) > 0) { ?>
          <?php foreach ($dolarHoy as $i => $dolar) { ?>
              <div class="col-lg-3 d-none d-sm-none d-md-block"> <!--solo se visualiza modo escritorio-->
                        <p class="m-0 float-right border-bottom border-dark rounded-0" style="font-size: 0.875em;">Resistencia - Chaco</p>
                        <p class="m-0 float-right border-bottom border-dark rounded-0" style="font-size: 0.875em;">Actualizado: <?php echo date("H:i", strtotime($dolar->fechaHoraActualizacion));?>-hs <?php echo date("d/m/Y", strtotime($dolar->fechaHoraActualizacion));?></p>
                        <p class="m-0 float-right border-bottom border-dark rounded-0" style="font-size: 0.875em;">Dólar Compra $<?php echo $dolar->dolarCompra;?> Venta $<?php echo $dolar->dolarVenta;?></p> 
              </div>
            <?php } ?>
          <?php } ?>
        <?php } ?>
      </div>

      <div  class="col-12 d-block d-sm-block d-md-none"><!--solo se visualiza modo mobil-->
          
              <div class="row">
                <div class="col-6">
                  <button class="navbar-toggler navbar-brand border-0 float-left" type="button" data-toggle="modal" data-target="#modalMenuHamburguesa"><!--solo se visualiza modo mobil-->
                    <span style="color:#009F98;"><i class="fa fa-bars fa-1x"></i></span>
                  </button>
                </div>
                <div class="col-6">
                  <a href="<?php echo base_url()?>">
                    <img class="img-fluid rounded float-right" src="<?php echo base_url().'assets/img/abrapalabras.svg'; ?>" alt="Logo del sitio">
                  </a>
                </div>
              </div>
              <hr>
              <div class="row">
                <?php if (($this->session->userdata('id_perfil')) == 1) { ?>
                  <?php if (count($dolarHoy) > 0) { ?>
                    <?php foreach ($dolarHoy as $i => $dolar) { ?>
                      <div class="col-12">
                          <p class="m-0 float-right" style="font-size: 0.875em;">Actualizado: <?php echo date("H:i", strtotime($dolar->fechaHoraActualizacion));?>-hs <?php echo date("d/m/Y", strtotime($dolar->fechaHoraActualizacion));?></p>
                          <p class="m-0 float-right border-bottom border-dark rounded-0" style="font-size: 0.875em;" data-toggle="modal" data-target="#modalActualizarDolar">Dólar Compra $<?php echo $dolar->dolarCompra;?> Venta $<?php echo $dolar->dolarVenta;?></p> 
                      </div>
                    <?php } ?>
                  <?php } ?>
                <?php }else{ ?>
                  <?php if (count($dolarHoy) > 0) { ?>
                    <?php foreach ($dolarHoy as $i => $dolar) { ?>
                      <div class="col-12">
                          <p class="m-0 float-right" style="font-size: 0.875em;">Actualizado: <?php echo date("H:i", strtotime($dolar->fechaHoraActualizacion));?>-hs <?php echo date("d/m/Y", strtotime($dolar->fechaHoraActualizacion));?></p>
                          <p class="m-0 float-right" style="font-size: 0.875em;">Dólar Compra $<?php echo $dolar->dolarCompra;?> Venta $<?php echo $dolar->dolarVenta;?></p> 
                      </div>
                <?php } ?>
                <?php } ?>
                <?php } ?>
              </div>
              <hr>
      </div>
  </nav>  
  <hr>
</head>

<!-- Modal -->
<div class="modal modal-izquierda fade bg-example-modal-sm" id="modalMenuHamburguesa" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <!-- <div class="modal-header">
      </div> -->
      <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <div class="container">
        <div class="row d-inline-block" style="">
          <h4 class="tituloPrincipal">Pol&iacute;tica</h4>
            <ul class="px-0">
              <li><a class="copeteDestacadoPrincipal" href="<?php echo base_url().'index.php/C_publico/leerContenidoSeccion/1/1';?>">Municipal</a></li>
              <li>&nbsp;│&nbsp;</li>
              <li><a class="copeteDestacadoPrincipal" href="<?php echo base_url().'index.php/C_publico/leerContenidoSeccion/1/2';?>">Provincial</a></li>
              <li>&nbsp;│&nbsp;</li>
              <li><a class="copeteDestacadoPrincipal" href="<?php echo base_url().'index.php/C_publico/leerContenidoSeccion/1/3';?>">Nacional</a></li>
              <li>&nbsp;│&nbsp;</li>
              <li><a class="copeteDestacadoPrincipal" href="<?php echo base_url().'index.php/C_publico/leerContenidoSeccion/1/4';?>">Internacional</a></li>
            </ul>
        </div><hr>
        <div class="row d-inline-block" style="">
          <h4 class="tituloPrincipal">Econom&iacute;a</h2>
            <ul class="px-0">
            <li><a class="copeteDestacadoPrincipal" href="<?php echo base_url().'index.php/C_publico/leerContenidoSeccion/2/1';?>">Municipal</a></li>
              <li>&nbsp;│&nbsp;</li>
              <li><a class="copeteDestacadoPrincipal" href="<?php echo base_url().'index.php/C_publico/leerContenidoSeccion/2/2';?>">Provincial</a></li>
              <li>&nbsp;│&nbsp;</li>
              <li><a class="copeteDestacadoPrincipal" href="<?php echo base_url().'index.php/C_publico/leerContenidoSeccion/2/3';?>">Nacional</a></li>
              <li>&nbsp;│&nbsp;</li>
              <li><a class="copeteDestacadoPrincipal" href="<?php echo base_url().'index.php/C_publico/leerContenidoSeccion/2/4';?>">Internacional</a></li>
            </ul>
        </div><hr>
        <div class="row d-inline-block" style="">
          <h4 class="tituloPrincipal">Varios</h4>
            <ul class="px-0">
            <li><a class="copeteDestacadoPrincipal" href="<?php echo base_url().'index.php/C_publico/leerContenidoSeccion/3/1';?>">Municipales</a></li>
              <li>&nbsp;│&nbsp;</li>
              <li><a class="copeteDestacadoPrincipal" href="<?php echo base_url().'index.php/C_publico/leerContenidoSeccion/3/2';?>">Provinciales</a></li>
              <li>&nbsp;│&nbsp;</li>
              <li><a class="copeteDestacadoPrincipal" href="<?php echo base_url().'index.php/C_publico/leerContenidoSeccion/3/3';?>">Nacionales</a></li>
              <li>&nbsp;│&nbsp;</li>
              <li><a class="copeteDestacadoPrincipal" href="<?php echo base_url().'index.php/C_publico/leerContenidoSeccion/3/4';?>">Internacionales</a></li>
            </ul>
        </div><hr>
        <div class="row d-inline-block" style="">
          <h4 class="tituloPrincipal" style="font-family: 'Playfair Display', serif !important; font-style: italic; margin-bottom: -2%; color: #019F98 !important;">Entrevistas</h4>
            <ul class="px-0" style="color: #019F98;">
            <li><a class="copeteDestacadoPrincipal" style="color: #019F98 !important;" href="<?php echo base_url().'index.php/C_publico/leerContenidoSeccion/4/1';?>">Municipales</a></li>
              <li>&nbsp;│&nbsp;</li>
              <li><a class="copeteDestacadoPrincipal" style="color: #019F98 !important;" href="<?php echo base_url().'index.php/C_publico/leerContenidoSeccion/4/2';?>">Provinciales</a></li>
              <li>&nbsp;│&nbsp;</li>
              <li><a class="copeteDestacadoPrincipal" style="color: #019F98 !important;" href="<?php echo base_url().'index.php/C_publico/leerContenidoSeccion/4/3';?>">Nacionales</a></li>
              <li>&nbsp;│&nbsp;</li>
              <li><a class="copeteDestacadoPrincipal" style="color: #019F98 !important;" href="<?php echo base_url().'index.php/C_publico/leerContenidoSeccion/4/4';?>">Internacionales</a></li>
            </ul>
        </div><br><hr>
        <div class="row d-inline-block">   
          <a href="<?php echo base_url().'index.php/C_publico/leerContenidoSeccion/5/NULL';?>"><h4 class="tituloPrincipal" style="font-family: 'Playfair Display', serif !important; font-style: italic; color: #019F98 !important;">Editorial</h4></a>
        </div><hr>
        <div class="row d-inline-block">   
          <a href="<?php echo base_url().'index.php/C_publico/leerContenidoSeccion/6/NULL';?>"><h4 class="tituloPrincipal" style="font-family: 'Playfair Display', serif !important; font-style: italic; color: #019F98 !important;">Columnistas</h4></a>
        </div><hr>
        <div class="row d-inline-block"> 
          <h4 class="tituloPrincipal" style="margin-bottom: -2%; color: #019F98 !important; font-family: 'Roboto', sans-serif !important; font-style: normal !important; font-weight: normal !important;">MULTIMEDIA</h4>
            <ul class="px-0" style="color: #019F98;">
              <li><a class="copeteDestacadoPrincipal" style="color: #019F98 !important;" href="<?php echo base_url().'index.php/C_publico/multimedia/1';?>">Fotograf&iacute;a</a></li>
              <li>&nbsp;│&nbsp;</li>
              <li><a class="copeteDestacadoPrincipal" style="color: #019F98 !important;" href="<?php echo base_url().'index.php/C_publico/multimedia/2';?>">Videos</a></li>
            </ul>
        </div><hr>
        <div class="row d-inline-block">   
          <a href="<?php echo base_url().'index.php/C_publico/vistaContacto';?>" style="color:white !important;"><h4 class="tituloPrincipal">Contacto</h4></a>
        </div><hr>

        <div class="row">
          <div class="col-12 row px-0"> 
            <div class="col-8">   
              <h4 class="tituloPrincipal">Seguinos en: </h4>
            </div>
            <div class="col-4">   
              <div class="row">
                  <p><a class="" href="https://www.facebook.com/abrapalabras/" target="_blank"><i class="fab fa-facebook fa-lg" style="color:#019F98;"></i></a>&nbsp;
                  <a class="" href="https://www.instagram.com/abrapalabras/" target="_blank"><i class="fab fa-instagram fa-lg" style="color:#019F98;"></i></a>&nbsp;</p>
              </div>
              <div class="row">
                  <a class="" href="https://twitter.com/Abrapalabras" target="_blank"><i class="fab fa-twitter-square fa-lg" style="color:#019F98;"></i></a>&nbsp;
                  <a class="" href="https://www.youtube.com/channel/UCwo9LUHego5ySdqDHnh3TbQ/featured?view_as=subscriber" target="_blank"><i class="fab fa-youtube fa-lg" style="color:#019F98;"></i></a>
              </div>
            </div>
          </div>
        </div><hr>
        <?php if (($this->session->userdata('id_perfil')) == 1) { ?>
          <div class="row d-block">  
              <a class="btn btn btn-success float-md-left" href="<?php echo base_url().'index.php/C_privado/index';?>" role="button">Agregar Contenido</a>
              <a class="btn btn-danger float-md-right" href="<?php echo base_url().'index.php/C_privado/logout';?>" role="button">Salir</a>
          </div>
        <?php }else{ ?>
          <!-- <div class="row float-right">   
          <a class="btn btn-success" href="<?php echo base_url().'index.php/C_privado/index';?>" role="button">Ingresar</a>
          </div> -->
          <?php } ?>
        </div> 
      </div>
      <!-- <div class="modal-footer">
      </div> -->
    </div>
  </div>
</div>

<form action="<?php echo base_url();?>index.php/C_privado/actualizarDolar" method="post">
  <div class="modal fade" id="modalActualizarDolar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Actualizar Valor del Dolar</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          
            <?php if (count($dolarHoy) > 0) { ?>
              <?php foreach ($dolarHoy as $i => $dolar) { ?>
                <div class="form-group">
                  <label class="col-form-label">D&oacute;lar Compra:</label>
                  <input id="inputDolarCompra" name="inputDolarCompra" type="text" class="form-control" value="<?php echo $dolar->dolarCompra;?>">
                </div>
                <div class="form-group">
                  <label class="col-form-label">D&oacute;lar Venta:</label>
                  <input id="inputDolarVenta" name="inputDolarVenta" type="text" class="form-control" value="<?php echo $dolar->dolarVenta;?>">
                </div>
              <?php } ?>
            <?php } ?>
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
      </div>
    </div>
  </div>
</form>

<script>
function search(ele) {
    if(event.key === 'Enter') {
        buscarNoticia = ele.value;
    
        document.getElementById("hidden_buscar").value = buscarNoticia;

        document.getElementById('BuscarNoticias').action = "<?php echo base_url() . 'index.php/C_publico/leerBusquedaNoticia'; ?>";
        document.getElementById('BuscarNoticias').method = "post";
        document.getElementById('BuscarNoticias').submit();
               
    }
}
    
</script>
