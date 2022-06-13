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
</div>
  <!-- Page Content -->
  <div class="container">
    
    <!--row -->
    <div class="row">
      <div class="col-lg-12">
        <div class="carousel slide my-4">
          <div class="carousel-inner tituloPrincipal">
            Multimedia
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

            <?php if (count($multimedias) > 0) { ?>
                    <?php foreach ($multimedias as $i => $multimedia) { ?>
                        <div class="col-lg-4 col-md-6 mb-4">
                          <div class="">
                          <?php if ($multimedia->id_tipoMultimedia == 1) { ?>
                          <a><img class="img-fluid img-thumbnail z-depth-1" src="<?php echo base_url().'assets/img/'.$multimedia->contenido;?>" alt="video" data-toggle="modal" data-target="#modalI<?php echo $i+1;?>"></a>
                          <?php }else{ ?>
                          <a><img class="img-fluid img-thumbnail z-depth-1" src="https://img.youtube.com/vi/<?php echo $multimedia->contenido;?>/hqdefault.jpg" alt="video" data-toggle="modal" data-target="#modalV<?php echo $i+1;?>"></a>
                          <?php } ?>
                          <div class="">
                                <h4 class="titulo">
                                  <a href="<?php echo base_url().'index.php/C_publico/noticiaEspecifica/'.$multimedia->id_noticia.'/'.$multimedia->id_seccion.'/'.$multimedia->id_subseccion;?>"><?php echo $multimedia->titulo;?></a>
                                </h4>
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
                                    <iframe id="my-video1" class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo $multimedia->contenido;?>?enablejsapi=1&autohide=1&showinfo=0&rel=0" frameborder="0"
                                      allowfullscreen></iframe>
                                  </div>

                                </div>

                                <!--Footer-->
                                <div class="modal-footer justify-content-center">
                                  <span class="mr-4"><?php echo $multimedia->titulo;?></span>
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
                                    <img class="img-fluid img-thumbnail z-depth-1 rounded mx-auto d-block" src="<?php echo base_url().'assets/img/'.$multimedia->contenido;?>"> 
                                </div>

                                <!--Footer-->
                                <div class="modal-footer justify-content-center">
                                  <span class="mr-4"><?php echo $multimedia->titulo;?></span>
                                  <div class="sharethis-inline-share-buttons"></div>
                                  <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal" onclick="pauseVideo(<?php echo $i+1;?>)">Cerrar</button>

                                </div>

                              </div>
                              <!--/.Content-->

                            </div>
                          </div>
                          <!--Modal: Imegenes-->
                          
                        </div>                    
                <?php } ?>
            <?php } ?>

          </div>
          <!-- /.row -->

        </div>
        <!-- /.col-lg-9 -->
        
        <!-- .col-lg-3 -->
        <div class="col-lg-3 px-1">
          <div class="row">

            <!--Inicio Lo mas visto en Multimedia-->
            <div class="col-lg-12 col-md-6">
              <div class="titulo mb-2" style="font-family: 'Roboto Slab', serif !important; background:#009f98; text-align:center; height:2.5em; font-size:1.5625em;color:#fff !important;"><h3>Lo mas visto en Multimedia</h3></div>
                  <?php if (count($multimediasLeidos) > 0) { ?>
                          <?php foreach ($multimediasLeidos as $i => $multimediasLeido) { ?>
                            <a href="<?php echo base_url().'index.php/C_publico/noticiaEspecifica/'.$multimediasLeido->id_noticia.'/'.$multimediasLeido->id_seccion.'/'.$multimediasLeido->id_subseccion;?>" class="copete"><b><?php echo $i+1?></b>. <?php echo $multimediasLeido->titulo;?></a><hr>                    
                      <?php } ?>
                  <?php } ?>
            </div>
            <!--Fin Lo mas visto en Multimedia-->

             <!--Inicio publicidad-->
             <div class="col-12 py-2">
                  <?php if (count($multimediasPlublicidades) > 0) { ?>
                          <?php foreach ($multimediasPlublicidades as $i => $multimediasPlublicid) { ?>
                            <?php if (($this->session->userdata('id_perfil')) == 1) { ?>
                            <a><img class="img-fluid z-depth-1 rounded mx-auto d-block py-2" src="<?php echo base_url().'assets/img/'.$multimediasPlublicid->contenido;?>" data-toggle="modal" data-target="#modal<?php echo $multimediasPlublicid->orden;?>"></a>
                              <form class="was-validated" action="<?php echo base_url();?>index.php/C_privado/actualizarPlublicidad" method="post" enctype="multipart/form-data">
                                <div class="modal fade" id="modal<?php echo $multimediasPlublicid->orden;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                                                                  <input id="inputSeccion" name="inputSeccion" type="hidden" value="<?php echo $multimediasPlublicid->id_seccion;?>">
                                                                
                                                                        <input id="inputOrden"   name="inputOrden" type="hidden"  value="<?php echo $multimediasPlublicid->orden;?>">
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
                                <a  href="<?php echo $multimediasPlublicid->linck;?>" target="_blank"><img class="img-fluid z-depth-1 rounded mx-auto d-block py-2" src="<?php echo base_url().'assets/img/'.$multimediasPlublicid->contenido;?>"></a>
                                <?php }?>                     
                      <?php } ?>
                  <?php } ?>
            </div>
            <!--Fin publicidad-->

            <!--Inicio Lo mas leído en Abrapalabras-->
            <div class="col-lg-12 col-md-6 mb-4 py-2">
              <div class="titulo mb-2" style="font-family: 'Roboto Slab', serif !important; background:#009f98; text-align:center; height:2.5em; font-size:1.5625em;color:#fff !important;"><h3>Lo mas leído en Abrapalabras</h3></div>
              <?php if (count($noticiasLeidos) > 0) { ?>
                          <?php foreach ($noticiasLeidos as $i => $noticiasLeido) { ?>
                            <a href="<?php echo base_url().'index.php/C_publico/noticiaEspecifica/'.$noticiasLeido->id_noticia.'/'.$noticiasLeido->id_seccion.'/'.$noticiasLeido->id_subseccion;?>" class="copete"><b><?php echo $i+1?></b>. <?php echo $noticiasLeido->titulo;?></a><hr>                    
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