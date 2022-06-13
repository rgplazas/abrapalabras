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

  <?php if (count($noticias) > 0) { ?>
    <?php foreach ($noticias as $i => $noticiaCabecera) { ?>

        <meta charset=utf-8> 
        <meta name=viewport content="width=device-width,initial-scale=1, shrink-to-fit=no">
        <link rel="shortcut icon" type="image/png" href="<?php echo base_url().'assets/img/favicon/abrapalabrasfavicon.ico';?>"/>

        <!-- Agrega estos datos entre las etiquetas <head> de tu sitio -->
          <!-- Para twitter -->
          <meta name="twitter:card" content="summary"></meta>
          <meta name="twitter:site" content="@abrapalabras">
          <meta name="twitter:creator" content="@abrapalabras">
          <!-- Para facebook, SMS y Whatsapp -->
          <meta property="og:type" content="article" />
          <meta property="og:title" content="<?php echo (htmlspecialchars($noticiaCabecera->titulo));?>" />
          <meta property="og:description" content="<?php echo (htmlspecialchars($noticiaCabecera->copete));?>" />
          <meta property="og:image" itemprop="image" content="<?php echo base_url().'assets/img/'.$noticiaCabecera->contenido;?>" />
          <meta property="og:image:secure_url" content="<?php echo base_url().'assets/img/'.$noticiaCabecera->contenido;?>" />
          <meta property="og:image:type" content="<?php echo base_url().'assets/img/'?>"/>
          <meta property="og:image:width" content="300" />
          <meta property="og:image:height" content="300" />
          <meta property="og:url" content="<?php echo 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];?>" />
          <meta property="og:site_name" content="Abra palabras | Todo por decir" />        
          
          <?php } ?>
  <?php } ?>

        <!-- Bootstrap core CSS -->
        <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i|Roboto+Slab:100,300,400,700&display=swap|Roboto&display=swap" rel="stylesheet"> <!-- FUENTES -->
        <link href="<?php echo base_url().'assets/bootstrap/css/bootstrap.min.css'; ?>" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="<?php echo base_url().'assets/css/shop-homepage.css'; ?>" rel="stylesheet">
        <!-- icons Fontawesome 5 Icons -->
        <link href="<?php echo base_url().'assets/plugin/fontawesome/css/all.min.css'; ?>" rel="stylesheet" type="text/css" />
        <!-- Estilo Propio CSS -->
        <link href="<?php echo base_url().'assets/css/estilos.css'; ?>" rel="stylesheet" type="text/css" />
        <script async charset="utf-8" src="//cdn.embedly.com/widgets/platform.js"></script>
        <script>
          window.onload = function () {
            cargarClasesImagenes();
          };
            function cargarClasesImagenes(){
              var A=document.getElementsByTagName("img");
                for(var i=0;i< A.length;i++)
                {
                    if(A[i]['class']!="")
                    {
                        A[i].setAttribute("class","img-fluid z-depth-1 rounded mx-auto d-block py-2");
                    }
                }
            }
        </script>
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

function searchEtiqueta(ele) {

        buscarNoticia = ele;
        
        document.getElementById("hidden_buscarEtiqueta").value = buscarNoticia;

        document.getElementById('BuscarNoticiasEtiqueta').action = "<?php echo base_url() . 'index.php/C_publico/leerBusquedaNoticiaEtiqueta'; ?>";
        document.getElementById('BuscarNoticiasEtiqueta').method = "post";
        document.getElementById('BuscarNoticiasEtiqueta').submit();
}
    
</script>







<!-- Aca empieza el cuerpo -->





<div  class="col-12 d-block d-sm-block d-md-none"><!--solo se visualiza modo mobil-->
      <br>
      <br>
      <br>
      <br>
      <br>
</div>
<div  class="col-12 d-none d-sm-none d-md-block"><!--solo se visualiza modo mobil-->
      <br>
      <br>
      <br>
</div>
  <!-- Page Content -->
  <div class="container">
    
    <!--row -->
    <div class="row d-none d-sm-none d-md-block">
    </div>
    <!-- /.row -->

    <!-- /.row -->
    <div class="row">
      
        <!-- .col-lg-9 -->
        <div class="col-lg-9">

          <div class="row">

            <?php if (count($noticias) > 0) { ?>
                    <?php foreach ($noticias as $i => $noticia) { ?>
                        <div class="col-12">
                          <div class="">
                            <div class="container col align-self-center">
                                <br>
                                <div class="row">
                                  <div class="col-6 text-center">  
                                    <p class="m-0 float-md-left row"><a class="seccionDestacadoPrincipal"><?php echo $noticia->seccion;?></a>&nbsp;<a class="subseccionDestacadoPrincipal"><?php if (!empty($noticia->subseccion)) { ?>
                                                                                                  <?php echo $noticia->subseccion;?>
                                                                                                  <!-- d/m/Y - H:i -->
                                                                                                  <?php };?>&nbsp;-&nbsp;</a><a class="fechaHoraDestacadoPrincipal"><?php echo date("d/m/Y", strtotime($noticia->fecha_noticias));?></a></p>
                                  </div>
                                  <div class="col-6 text-center">
                                    <?php if (($this->session->userdata('id_perfil')) == 1) {?>
                                      <div class="dropdown d-block">
                                        <a class="btn btn-secondary dropdown-toggle float-md-right" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                          Acciones
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                          <?php if (($noticia->id_seccion == 4) or ($noticia->id_seccion == 5) or ($noticia->id_seccion == 6)) {?>
                                            <a class="dropdown-item" href="<?php echo base_url().'index.php/C_privado/vistaEditarEditorialColumnistaEntrevista/'.$noticia->id_noticia.'/'.$noticia->id_seccion.'/'.$noticia->id_subseccion = 'NULL';?>">Editar</a>
                                          <?php }else{?>
                                            <a class="dropdown-item" href="<?php echo base_url().'index.php/C_privado/vistaEditarNoticia/'.$noticia->id_noticia.'/'.$noticia->id_seccion.'/'.$noticia->id_subseccion;?>">Editar</a>
                                          <?php }?>
                                          <?php if (($noticia->id_seccion == 4) or ($noticia->id_seccion == 5) or ($noticia->id_seccion == 6)) {?>
                                            <a class="dropdown-item" href="<?php echo base_url().'index.php/C_privado/eliminarEditorialColumnaEntrevista/'.$noticia->id_noticia;?>">Eliminar</a>
                                          <?php }else{?>
                                            <a class="dropdown-item" href="<?php echo base_url().'index.php/C_privado/eliminarNoticia/'.$noticia->id_noticia;?>">Eliminar</a>
                                          <?php }?>
                                        </div>
                                      </div>
                                    <?php }else{ ?>
                                      <!-- <div class="d-block">
                                        <a class="m-0 float-md-right sharethis-inline-share-buttons"></a>
                                      </div>-->
                                      <!-- ShareThis BEGIN --><div class="m-0 float-md-right sharethis-inline-share-buttons"></div><!-- ShareThis END -->  
                                    <?php }?> 
                                  </div>
                                </div>
                              </div>
                              <br>
                          <?php if (!empty($noticia->contenido)) { ?> 
                          <?php if ($noticia->id_tipoMultimedia == '1') { ?>
                            <figure class="figure col align-self-center">
                              <img src="<?php echo base_url().'assets/img/'.$noticia->contenido;?>" class="figure-img img-fluid rounded mx-auto d-block" alt="<?php echo $noticia->epigrafe;?>">
                              <figcaption class="figure-caption"><b><?php echo $noticia->epigrafe;?></b></figcaption>
                            </figure>
                          <?php }else{ ?>
                            <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                                            <iframe id="my-video1" class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo $noticia->contenido;?>?enablejsapi=1&autohide=1&showinfo=0&rel=0" frameborder="0"
                                              allowfullscreen></iframe>
                            </div>
                          <?php } ?>
                          <?php } ?>
                          <div class="card-body">
                          <!-- SearchEtiqueta form -->
                                <?php $atributoEtiqueta = array('id' => "BuscarNoticiasEtiqueta");
                                    echo form_open('', $atributoEtiqueta);
                                ?>
                                <input type="hidden" id="hidden_buscarEtiqueta" name="hidden_buscarEtiqueta" value="">
                                <div> 
                                  <?php  if (count($noticiasEtiqueta) > 0) { ?>
                                    <span><i class="fa fa-tags"></i>&nbsp;
                                      <?php  foreach ($noticiasEtiqueta as $i => $noticiaEtiqueta) { ?>
                                        <a onclick="searchEtiqueta('<?php echo $noticiaEtiqueta->etiquetaDescripcion?>')" style="cursor: pointer"><?php echo $noticiaEtiqueta->etiquetaDescripcion?>&nbsp;/&nbsp;</a>
                                       
                                      <?php  }?>
                                  <?php  }?>
                                </div>
                                <?php echo form_close(); ?>
                                <br />

                                <?php if (($noticia->id_seccion != 4) and ($noticia->id_seccion != 5) and ($noticia->id_seccion != 6)) {?>
                                  <p class="copeteDestacadoPrincipal"><?php echo $noticia->volanta;?></p>
                                <?php }?>
                                
                                <h3 class="card-title">
                                  <a class="tituloPrincipal"><?php echo $noticia->titulo;?></a>
                                </h3>
                                <p class="copeteDestacadoPrincipal"><?php echo $noticia->copete;?></p>
                                <p><?php echo $noticia->texto;?></p>
                                <div class="container col align-self-center">
                                <div class="row">
                                  <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12">
                                      <?php if (($noticia->id_seccion != 4) and ($noticia->id_seccion != 5) and ($noticia->id_seccion != 6)) {?>  
                                        <p class="m-0 float-md-left text-dark copeteDestacadoPrincipal">Fuente: <?php echo $noticia->fuente;?></p>
                                      <?php }else{?>
                                            <div class="row align-items-center py-2">
                                              <div class="col-4">
                                                <img style="width:5.125em; height:5.125em;" class="img-fluid rounded-circle rounded mx-auto d-block" src="<?php echo base_url().'assets/img/'.$noticia->fuenteImagen; ?>">
                                              </div>
                                              <div class="col-8">
                                                <p class="m-0 float-md-left copete" style="font-family: 'Playfair Display', serif !important; font-style: italic;">por <?php echo $noticia->fuente?></p>
                                              </div>
                                            </div>
                                      <?php }?>
                                  </div>
                                  <div class="row col-xl-7 col-lg-7 col-md-12 col-sm-12 py-2">  <!--align-items-center -->
                                    <p class="row m-0 float-md-right text-dark"><a class="align-middle"><b>Compart&iacute; esta noticia</b></a>&nbsp;<a class="sharethis-inline-share-buttons"></a></p>
                                  </div>
                                </div>
                              </div>
                              </div>
                          </div>
                        </div>                    
                <?php } ?>
            <?php } ?>
            <div class="col align-self-center fb-comments" data-href="http://www.abrapalabras.com.ar" data-width="830" data-numposts="5"></div>
            <!-- <div class="col align-self-center fb-comments" data-href="http://localhost:8080/abrapalabras" data-width="830" data-numposts="5"></div> -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.col-lg-9 -->
        
        <!-- .col-lg-3 -->
        <div class="col-lg-3">
          <div class="row">

            <!--Inicio Lo mas visto en la seccion y subseccion-->
            <div class="col-12">
              <?php if (count($noticias) > 0) { ?>
                <?php foreach ($noticias as $i => $noticia) { ?>
                  <div class="titulo mb-2" style="font-family: 'Roboto Slab', serif !important; background:#009f98; text-align:center; font-size:1.5625em;color:#fff !important;"><h3>Lo mas visto en <?php echo $noticia->seccion;?> <?php echo $noticia->subseccion;?></h3></div>
                <?php } ?>
              <?php } ?>
                  <?php if (count($noticiasLeidos) > 0) { ?>
                          <?php foreach ($noticiasLeidos as $i => $noticiasLeido) { ?>
                            <?php if (($noticiasLeido->id_seccion == 5) or ($noticiasLeido->id_seccion == 6)) {?>
                            <a href="<?php echo base_url().'index.php/C_publico/noticiaEspecifica/'.$noticiasLeido->id_noticia.'/'.$noticiasLeido->id_seccion.'/NULL';?>" class="copete py-2"><b><?php echo $i+1?></b>. <?php echo $noticiasLeido->titulo;?></a><hr>                    
                            <?php }else{?>
                              <a href="<?php echo base_url().'index.php/C_publico/noticiaEspecifica/'.$noticiasLeido->id_noticia.'/'.$noticiasLeido->id_seccion.'/'.$noticiasLeido->id_subseccion;?>" class="copete py-2"><b><?php echo $i+1?></b>. <?php echo $noticiasLeido->titulo;?></a><hr>
                        <?php } ?>
                        <?php } ?>
                  <?php } ?>
            </div>
            <!--FIN Lo mas visto en la seccion y subseccion-->

            <!--Inicio publicidad-->
            <div class="col-12 py-2">
                  <?php if (count($noticiasPlublicidades) > 0) { ?>
                          <?php foreach ($noticiasPlublicidades as $i => $noticiasPlublicid) { ?>
                            <?php if (($this->session->userdata('id_perfil')) == 1) { ?>
                              <a><img class="img-fluid z-depth-1 rounded mx-auto d-block  py-2" src="<?php echo base_url().'assets/img/'.$noticiasPlublicid->contenido;?>" data-toggle="modal" data-target="#modal<?php echo $noticiasPlublicid->orden;?>"></a>
                                <form class="was-validated" action="<?php echo base_url();?>index.php/C_privado/actualizarPlublicidad" method="post" enctype="multipart/form-data">
                                  <div class="modal fade" id="modal<?php echo $noticiasPlublicid->orden;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-lg" role="document">
                                                              <!--Content-->
                                                              <div class="modal-content">
                                                                <!--Body-->
                                                                <div class="modal-body justify-content-center">
                                                                <div class="row">
                                                                  <div class="col-md-12 form-group">
                                                                    <div class="custom-file">
                                                                    <input type="file" class="form-control-file" id="contenidoImagen" name="contenidoImagen">
                                                                    </div>
                                                                    <textarea class="form-control is-invalid" id="inputlinck" name="inputlinck" placeholder="Ingrese URL"></textarea>
                                                                    <input id="inputSeccion" name="inputSeccion" type="hidden" value="<?php echo $noticiasPlublicid->id_seccion;?>">
                                                                  
                                                                          <input id="inputOrden"   name="inputOrden" type="hidden"  value="<?php echo $noticiasPlublicid->orden;?>">
                                                                          <input id="inputAlto"   name="inputAlto" type="hidden"  value="300">
                                                                          <input id="inputAncho"   name="inputAncho" type="hidden"  value="150">
                                                                  </div>
                                                                </div> 
                                                                </div>
                                                                <!--Footer-->
                                                                <div class="modal-footer justify-content-center">
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                                                    <button type="submit" class="btn btn-primary">Guardar</button>
                                                                </div>
                                                              </div>
                                                              <!--/.Content-->
                                                            </div>
                                    </div>
                                </form>
                            <?php }else{ ?>                                                                   
                              <a  href="<?php echo $noticiasPlublicid->linck;?>" target="_blank"><img class="img-fluid z-depth-1 rounded mx-auto d-block py-2" src="<?php echo base_url().'assets/img/'.$noticiasPlublicid->contenido;?>"></a>
                            <?php } ?>
                          <?php } ?>
                  <?php } ?>
            </div>
            <!--Fin publicidad-->

            <!--Inicio Lo mas leído en Abrapalabras-->
            <div class="col-12 py-2">
              <div class="titulo mb-2" style="font-family: 'Roboto Slab', serif !important; background:#009f98; text-align:center; font-size:1.5625em;color:#fff !important;"><h3>Lo mas leído en Abrapalabras</h3></div>
              <?php if (count($noticiasMasLeidos) > 0) { ?>
                          <?php foreach ($noticiasMasLeidos as $i => $noticiasMasLeido) { ?>
                            <a href="<?php echo base_url().'index.php/C_publico/noticiaEspecifica/'.$noticiasMasLeido->id_noticia.'/'.$noticiasMasLeido->id_seccion.'/'.$noticiasMasLeido->id_subseccion;?>" class="copete py-2"><b><?php echo $i+1?></b>. <?php echo $noticiasMasLeido->titulo;?></a><hr>                    
                      <?php } ?>
                  <?php } ?>
            </div>
            <!--Fin Lo mas leído en Abrapalabras-->

          </div>
          <!-- /.row -->

        </div>
        <!-- /.col-lg-3 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <script type="text/javascript">

      function pauseVideo(id_modal){
        $('#modalv'+id_modal+' iframe').attr("src", $("#modalv"+id_modal+" iframe").attr("src"));
      }

  </script>


<script>
    document.querySelectorAll( 'oembed[url]' ).forEach( element => {
        // Create the <a href="..." class="embedly-card"></a> element that Embedly uses
        // to discover the media.
        const anchor = document.createElement( 'a' );

        anchor.setAttribute( 'href', element.getAttribute( 'url' ) );
        anchor.className = 'embedly-card';

        element.appendChild( anchor );
    } );
</script>