<div  class="col-12 d-block d-sm-block d-md-none"><!--solo se visualiza modo mobil-->
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
    <div class="row">
      <div class="col-12">
        <div class="carousel slide my-4">
          <div class="carousel-inner tituloPrincipal">
          <?php if (count($secciones) > 0) { ?>
                  <?php echo $secciones[0]->seccion;?> 
                  <?php if (!empty($secciones[0]->subseccion)) { ?>
                        <?php echo $secciones[0]->subseccion;?>
                   <?php };?>
              <?php } ?>
          </div>
        </div>
      </div>
    </div>
    <!-- /.row -->

    <!-- /.row -->
    <div class="row">
      
        <!-- .col-lg-9 -->
        <div class="col-lg-9 px-1">

          <div class="row">

            <?php if (count($secciones) > 0) { ?>
                    <?php foreach ($secciones as $i => $seccione) { ?>
                        <div class="col-lg-4 col-md-6 mb-4">
                        <?php if (($seccione->id_seccion == 5) or ($seccione->id_seccion == 6)) {?>
                          <h3 class="titulo"><a href="<?php echo base_url().'index.php/C_publico/noticiaEspecifica/'.$seccione->id_noticia.'/'.$seccione->id_seccion.'/'.$seccione->id_subseccion = 'NULL';?>"><?php echo $seccione->titulo?></a></h3>
                          <p  class="copete"><?php echo $seccione->copete?></p>
                        <div class="row align-items-center">
                          <div class="col-4">
                            <img  style="width:4.125em; height:4.125em;" class="img-fluid rounded-circle" src="<?php echo base_url().'assets/img/'.$seccione->fuenteImagen; ?>">
                          </div>
                          <div class="col-8">
                            <p class="m-0 float-md-left" style="font-size:0.8em;">por <b style="font-weight: bold;"><?php echo $seccione->fuente?></b></p>
                          </div>
                        </div>
                        <hr>
                        <?php }else{ ?>
                          <div class="">
                          <?php if (!empty($seccione->contenido)) { ?>
                            <?php if ($seccione->id_tipoMultimedia == '1') { ?>
                          <a><img class="img-fluid z-depth-1 rounded mx-auto d-block px-0 py-2" src="<?php echo base_url().'assets/img/'.$seccione->contenido;?>" alt="video" data-toggle="modal" data-target="#modalI<?php echo $i+1;?>"></a>
                          <?php }else{ ?>
                            <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                                            <iframe id="my-video1" class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo $seccione->contenido;?>?enablejsapi=1&autohide=1&showinfo=0&rel=0" frameborder="0"
                                              allowfullscreen></iframe>
                            </div>
                          <?php } ?>
                          <?php } ?>
                          <div class="">
                                <h4 class="titulo px-0">
                                  <a href="<?php echo base_url().'index.php/C_publico/noticiaEspecifica/'.$seccione->id_noticia.'/'.$seccione->id_seccion.'/'.$seccione->id_subseccion;?>"><?php echo $seccione->titulo;?></a>
                                </h4>
                                <h5 class ="d-inline-block copete px-0"><?php echo $seccione->copete; ?></h5>
                                <div class="row py-1">
                                  <div class="col-6 text-center px-3">
                                    <p class="m-0 float-md-left text-dark row"><a class="seccion"><?php echo $seccione->seccion;?></a>&nbsp;<a class="subseccion"><?php echo $seccione->subseccion;?></a></p>
                                  </div>
                                  <div class="col-6 text-center px-3">
                                  <!-- d/m/Y - H:i -->
                                    <p class="m-0 float-md-right text-dark fechaHora"><?php echo date("d/m/Y", strtotime($seccione->fecha_noticias));?></p>
                                  </div>
                                </div>
                                <hr>
                          </div>
                          </div>
                           <!--Modal: Videos-->
                           <div class="modal fade" id="modalV<?php echo $i+1;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">

                              <!--Content-->
                              <div class="modal-content">

                                <!--Body-->
                                <div class="modal-body mb-0 p-0">

                                  <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                                    <iframe id="my-video1" class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo $seccione->contenido;?>?enablejsapi=1&autohide=1&showinfo=0&rel=0" frameborder="0"
                                      allowfullscreen></iframe>
                                  </div>

                                </div>

                                <!--Footer-->
                                <div class="modal-footer justify-content-center">
                                  <span class="mr-4"><?php echo $seccione->titulo;?></span>
                                  <div class="sharethis-inline-share-buttons"></div>
                                  <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal" onclick="pauseVideo(<?php echo $i+1;?>)">Cerrar</button>

                                </div>

                              </div>
                              <!--/.Content-->

                            </div>
                          </div>
                          <!--Modal: Videos-->

                           <!--Modal: Imagenes-->
                           <div class="modal fade" id="modalI<?php echo $i+1;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">

                              <!--Content-->
                              <div class="modal-content">

                                <!--Body-->
                                <div class="modal-body mb-0 p-0">
                                    <img class="img-fluid img-thumbnail z-depth-1 rounded mx-auto d-block" src="<?php echo base_url().'assets/img/'.$seccione->contenido;?>"> 
                                </div>

                                <!--Footer-->
                                <div class="modal-footer justify-content-center">
                                  <span class="mr-4"><?php echo $seccione->titulo;?></span>
                                  <div class="sharethis-inline-share-buttons"></div>
                                  <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal" onclick="pauseVideo(<?php echo $i+1;?>)">Cerrar</button>

                                </div>

                              </div>
                              <!--/.Content-->

                            </div>
                          </div>
                          <!--Modal: Imegenes-->
                          
                                          
                <?php } ?>
                </div>  
                <?php } ?>
            <?php } ?>

          </div>
          <!-- /.row -->

        </div>
        <!-- /.col-lg-9 -->
        
        <!-- .col-lg-3 -->
        <div class="col-lg-3 px-3">
          <div class="row">

            <!--Inicio Lo mas visto en la seecion-->
            <div class="col-12">
            <?php if (count($secciones) > 0) { ?>
                  <div class="titulo mb-2" style="font-family: 'Roboto Slab', serif !important; background:#009f98; text-align:center; font-size:1.5625em;color:#fff !important;"><h3>Lo mas visto en <?php echo $secciones[0]->seccion;?> <?php echo $secciones[0]->subseccion;?></h3></div>
              <?php } ?>
                  <?php if (count($seccionesLeidos) > 0) { ?>
                          <?php foreach ($seccionesLeidos as $i => $seccionesLeido) { ?>
                            <a href="<?php echo base_url().'index.php/C_publico/noticiaEspecifica/'.$seccionesLeido->id_noticia.'/'.$seccionesLeido->id_seccion.'/'.$seccionesLeido->id_subseccion;?>" class="copete"><b><?php echo $i+1?></b>. <?php echo $seccionesLeido->titulo;?></a><hr>                    
                      <?php } ?>
                  <?php } ?>
            </div>
            <!--Fin Lo mas visto en la seccion-->

            <!--Inicio publicidad-->
            <div class="col-12 py-2">
                  <?php if (count($seccionesPlublicidades) > 0) { ?>
                          <?php foreach ($seccionesPlublicidades as $i => $seccionesPlublicidades) { ?>
                            <?php if (($this->session->userdata('id_perfil')) == 1) { ?>
                            <a><img class="img-fluid z-depth-1 rounded mx-auto d-block py-2" src="<?php echo base_url().'assets/img/'.$seccionesPlublicidades->contenido;?>" data-toggle="modal" data-target="#modal<?php echo $seccionesPlublicidades->orden;?>"></a>
                              <form class="was-validated" action="<?php echo base_url();?>index.php/C_privado/actualizarPlublicidad" method="post" enctype="multipart/form-data">
                                <div class="modal fade" id="modal<?php echo $seccionesPlublicidades->orden;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                                                                  <input id="inputSeccion" name="inputSeccion" type="hidden" value="<?php echo $seccionesPlublicidades->id_seccion;?>">
                                                                
                                                                        <input id="inputOrden"   name="inputOrden" type="hidden"  value="<?php echo $seccionesPlublicidades->orden;?>">
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
                                <a  href="<?php echo $seccionesPlublicidades->linck;?>" target="_blank"><img class="img-fluid z-depth-1 rounded mx-auto d-block py-2" src="<?php echo base_url().'assets/img/'.$seccionesPlublicidades->contenido;?>"></a>
                                <?php }?>                     
                      <?php } ?>
                  <?php } ?>
            </div>
            <!--Fin publicidad-->

            <!--Inicio Lo mas leído en Abrapalabras-->
            <div class="col-12 py-2">
              <div class="titulo mb-2" style="font-family: 'Roboto Slab', serif !important; background:#009f98; text-align:center; height:2.5em; font-size:1.5625em;color:#fff !important;"><h3>Lo mas leído en Abrapalabras</h3></div>
              <?php if (count($seccionesMasLeidos) > 0) { ?>
                          <?php foreach ($seccionesMasLeidos as $i => $seccionesMasLeido) { ?>
                            <a href="<?php echo base_url().'index.php/C_publico/noticiaEspecifica/'.$seccionesMasLeido->id_noticia.'/'.$seccionesMasLeido->id_seccion.'/'.$seccionesMasLeido->id_subseccion;?>" class="copete"><b><?php echo $i+1?></b>. <?php echo $seccionesMasLeido->titulo;?></a><hr>                    
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
        $('#modalV'+id_modal+' iframe').attr("src", $("#modalV"+id_modal+" iframe").attr("src"));
      }

  </script>