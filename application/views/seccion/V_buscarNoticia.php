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
    
    <!-- /.row -->
    <div class="row">
      
        <!-- .col-lg-9 -->
        <div class="col-lg-12 px-1">

          <div class="row">

            <?php if (count($buscador) > 0) { ?>
                    <?php foreach ($buscador as $i => $buscado) { ?>
                        <div class="col-lg-4 col-md-6 mb-4">
                        <?php if (($buscado->id_seccion == 5) or ($buscado->id_seccion == 6)) {?>
                          <h3 class="titulo"><a href="<?php echo base_url().'index.php/C_publico/noticiaEspecifica/'.$buscado->id_noticia.'/'.$buscado->id_seccion.'/'.$buscado->id_subseccion = 'NULL';?>"><?php echo $buscado->titulo?></a></h3>
                          <p  class="copete"><?php echo $buscado->copete?></p>
                        <div class="row align-items-center">
                          <div class="col-4">
                            <img  style="width:4.125em; height:4.125em;" class="img-fluid rounded-circle" src="<?php echo base_url().'assets/img/'.$buscado->contenido; ?>">
                          </div>
                          <div class="col-8">
                            <p class="m-0 float-md-left" style="font-size:0.5em;">por <b style="font-weight: bold;"><?php echo $buscado->fuente?></b></p>
                          </div>
                        </div>
                        <hr>
                        <?php }else{ ?>
                          <div class="">
                          <?php if (!empty($buscado->contenido)) { ?>
                            <?php if ($buscado->id_tipoMultimedia == '1') { ?>
                          <a><img class="img-fluid z-depth-1 rounded mx-auto d-block px-0 py-2" src="<?php echo base_url().'assets/img/'.$buscado->contenido;?>" alt="video" data-toggle="modal" data-target="#modalI<?php echo $i+1;?>"></a>
                          <?php }else{ ?>
                            <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                                            <iframe id="my-video1" class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo $buscado->contenido;?>?enablejsapi=1&autohide=1&showinfo=0&rel=0" frameborder="0"
                                              allowfullscreen></iframe>
                            </div>
                          <?php } ?>
                          <?php } ?>
                          <div class="">
                                <h4 class="titulo px-0">
                                  <a href="<?php echo base_url().'index.php/C_publico/noticiaEspecifica/'.$buscado->id_noticia.'/'.$buscado->id_seccion.'/'.$buscado->id_subseccion;?>"><?php echo $buscado->titulo;?></a>
                                </h4>
                                <h5 class ="d-inline-block copete px-0"><?php echo $buscado->copete; ?></h5>
                                <div class="row py-1">
                                  <div class="col-6 text-center px-3">
                                    <p class="m-0 float-md-left text-dark row"><a class="seccion"><?php echo $buscado->seccion;?></a>&nbsp;<a class="subseccion"><?php echo $buscado->subseccion;?></a></p>
                                  </div>
                                  <div class="col-6 text-center px-3">
                                  <!-- d/m/Y - H:i -->
                                    <p class="m-0 float-md-right text-dark fechaHora"><?php echo date("d/m/Y", strtotime($buscado->fecha_noticias));?></p>
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
                                    <iframe id="my-video1" class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo $buscado->contenido;?>?enablejsapi=1&autohide=1&showinfo=0&rel=0" frameborder="0"
                                      allowfullscreen></iframe>
                                  </div>

                                </div>

                                <!--Footer-->
                                <div class="modal-footer justify-content-center">
                                  <span class="mr-4"><?php echo $buscado->titulo;?></span>
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
                                    <img class="img-fluid img-thumbnail z-depth-1 rounded mx-auto d-block" src="<?php echo base_url().'assets/img/'.$buscado->contenido;?>"> 
                                </div>

                                <!--Footer-->
                                <div class="modal-footer justify-content-center">
                                  <span class="mr-4"><?php echo $buscado->titulo;?></span>
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

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <script type="text/javascript">

      function pauseVideo(id_modal){
        $('#modalV'+id_modal+' iframe').attr("src", $("#modalV"+id_modal+" iframe").attr("src"));
      }

  </script>