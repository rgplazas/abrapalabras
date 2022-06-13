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
    <div class="container row">
      <?php if (count($noticiasDestacadas) > 0) { ?>
        <?php foreach ($noticiasDestacadas as $i => $noticiasDestacada) { ?>
        <div class="col-12">
                <div class="">
                    <?php if (!empty($noticiasDestacada->contenido)) { ?>
                      <?php if ($noticiasDestacada->id_tipoMultimedia == '1') { ?>
                      <a href="#"><img class="img-fluid z-depth-1 rounded mx-auto d-block px-0" src="<?php echo base_url().'assets/img/'.$noticiasDestacada->contenido; ?>" alt=""></a>
                    <?php }else{ ?>
                      <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                                            <iframe id="my-video1" class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo $noticiasDestacada->contenido;?>?enablejsapi=1&autohide=1&showinfo=0&rel=0" frameborder="0"
                                              allowfullscreen></iframe>
                            </div>
                      <?php } ?>
                    <?php } ?>
                  <div class="">
                    <h1 class="tituloDestacadoPrincipal px-0">
                      <a href="<?php echo base_url().'index.php/C_publico/noticiaEspecifica/'.$noticiasDestacada->id_noticia.'/'.$noticiasDestacada->id_seccion.'/'.$noticiasDestacada->id_subseccion;?>"><?php echo $noticiasDestacada->titulo;?></a>
                    </h1>
                    <h5 class="copeteDestacadoPrincipal px-0"><?php echo $noticiasDestacada->copete;?></h5>
                    <div class="row py-1">
                      <div class="col-6 text-center px-3">
                        <p class="m-0 float-md-left text-dark row"><a class="seccionDestacadoPrincipal"><?php echo $noticiasDestacada->seccion;?></a>&nbsp;<a class="subseccionDestacadoPrincipal"><?php echo $noticiasDestacada->subseccion;?></a></p>
                      </div>
                      <div class="col-6 text-center px-3">
                      <!-- d/m/Y - H:i -->
                            <?php if (($this->session->userdata('id_perfil')) == 1) { ?>
                              <p class="m-0 float-md-right text-dark fechaHoraDestacadoPrincipal"><?php echo date("d/m/Y", strtotime($noticiasDestacada->fecha_noticias));?> - (<?php echo $noticiasDestacada->orden;?>)</p>
                            <?php }else{?>
                              <p class="m-0 float-md-right text-dark fechaHoraDestacadoPrincipal"><?php echo date("d/m/Y", strtotime($noticiasDestacada->fecha_noticias));?></p>
                            <?php } ?>
                      </div>
                  </div>
                  <hr/>
                  </div>
                </div>
            </div>
      <?php } ?>
            <?php } ?>
    </div>
    <!-- /.row -->

    <!-- /.row -->
    <div class="container row">
      
        <!-- .col-lg-3 -->
        <div class="col-xl-3 px-1">
          <div class="container">
          <div class="row">
          <?php if (count($noticiasRelevantesMenuIzquierdo) > 0) { ?>
          <?php foreach ($noticiasRelevantesMenuIzquierdo as $i => $noticiasRelevantesMenuIzquierd) { ?>
                <?php if ($noticiasRelevantesMenuIzquierd->orden == 1) { ?>
                      <div class="col-12 px-0 py-1 col order-1">
                <?php }?>
                <?php if ($noticiasRelevantesMenuIzquierd->orden == 2) { ?>
                      <div class="col-12 px-0 py-1 col order-3">
                <?php }?>
                <?php if ($noticiasRelevantesMenuIzquierd->orden == 3) { ?>
                      <div class="col-12 px-0 py-1 col order-4">
                <?php }?>
                <?php if ($noticiasRelevantesMenuIzquierd->orden == 4) { ?>
                      <div class="col-12 px-0 py-1 col order-6">
                <?php }?>
                <?php if ($noticiasRelevantesMenuIzquierd->orden == 5) { ?>
                      <div class="col-12 px-0 py-1 col order-7">
                <?php }?>
                <div class="">
                <?php if (!empty($noticiasRelevantesMenuIzquierd->contenido)) { ?>
                  <?php if ($noticiasRelevantesMenuIzquierd->id_tipoMultimedia == '1') { ?>
                  <a href="#"><img class="img-fluid z-depth-1 rounded mx-auto d-block px-0 py-2" src="<?php echo base_url().'assets/img/'.$noticiasRelevantesMenuIzquierd->contenido; ?>" alt=""></a>
                <?php }else{?>
                  <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                                            <iframe id="my-video1" class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo $noticiasRelevantesMenuIzquierd->contenido;?>?enablejsapi=1&autohide=1&showinfo=0&rel=0" frameborder="0"
                                              allowfullscreen></iframe>
                            </div>
                <?php }?>
                <?php }?>
                  <div class="">
                    <h4 class="titulo px-0 py-1">
                      <a href="<?php echo base_url().'index.php/C_publico/noticiaEspecifica/'.$noticiasRelevantesMenuIzquierd->id_noticia.'/'.$noticiasRelevantesMenuIzquierd->id_seccion.'/'.$noticiasRelevantesMenuIzquierd->id_subseccion;?>"><?php echo $noticiasRelevantesMenuIzquierd->titulo;?></a>
                    </h4>
                    <h5 class="copete px-0 py-1"><?php echo $noticiasRelevantesMenuIzquierd->copete; ?></h5>
                    <div class="row py-1">
                      <div class="col-6 text-center px-3">
                        <p class="m-0 float-md-left text-dark row"><a class="seccion"><?php echo $noticiasRelevantesMenuIzquierd->seccion;?></a>&nbsp;<a class="subseccion"><?php echo $noticiasRelevantesMenuIzquierd->subseccion;?></a></p>
                      </div>
                      <div class="col-6 text-center px-3">
                      <!-- d/m/Y - H:i -->
                        <?php if (($this->session->userdata('id_perfil')) == 1) { ?>
                          <p class="m-0 float-md-right text-dark fechaHora"><?php echo date("d/m/Y", strtotime($noticiasRelevantesMenuIzquierd->fecha_noticias));?> - (<?php echo $noticiasRelevantesMenuIzquierd->orden;?>)</p>
                        <?php }else{?>
                          <p class="m-0 float-md-right text-dark fechaHora"><?php echo date("d/m/Y", strtotime($noticiasRelevantesMenuIzquierd->fecha_noticias));?></p>
                        <?php } ?>
                      </div>
                    </div>
                    <hr>
                  </div>
                </div>
            </div>
          <?php } ?>
          <?php } ?>

            <?php if (count($noticiasPlublicidades) > 0) { ?>
              <?php foreach ($noticiasPlublicidades as $i => $noticiasPlublicidade) { ?>
                <?php if ($noticiasPlublicidade->orden == 1) { ?>
                <div class="col-12 px-0 py-1 col order-2">
                  <div class="">
                  <?php if (($this->session->userdata('id_perfil')) == 1) { ?>
                    <a><img class="img-fluid z-depth-1 rounded mx-auto d-block" src="<?php echo base_url().'assets/img/'.$noticiasPlublicidade->contenido;?>" data-toggle="modal" data-target="#modal1"></a>
                  <?php }else{?>
                    <a  href="<?php echo $noticiasPlublicidade->linck;?>" target="_blank"><img class="img-fluid z-depth-1 rounded mx-auto d-block" src="<?php echo base_url().'assets/img/'.$noticiasPlublicidade->contenido;?>"></a>
                    <?php }?>
                  </div>
                  <hr>
                </div>
                <?php } ?>
                <?php if ($noticiasPlublicidade->orden == 2) { ?>
                <div class="col-12 px-0 py-1 col order-5">
                  <div class="">
                  <?php if (($this->session->userdata('id_perfil')) == 1) { ?>
                    <a><img class="img-fluid z-depth-1 rounded mx-auto d-block" src="<?php echo base_url().'assets/img/'.$noticiasPlublicidade->contenido;?>" data-toggle="modal" data-target="#modal2"></a>
                  <?php }else{?>
                    <a href="<?php echo $noticiasPlublicidade->linck;?>" target="_blank"><img class="img-fluid z-depth-1 rounded mx-auto d-block" src="<?php echo base_url().'assets/img/'.$noticiasPlublicidade->contenido;?>"></a>
                    <?php }?>
                  </div>
                  <hr>
                </div>
                <?php } ?>
              <?php } ?>
              <?php } ?>

            
              </div>
          </div>
        </div>
        <!-- /.col-lg-3 -->
        
        <!-- .col-lg-6 -->
        <div class="col-xl-6 px-1">
          <div class="container">
            <div class="row">
              <?php if (count($noticiasRelevantes) > 0) { ?>
              <?php foreach ($noticiasRelevantes as $i => $noticiasRelevante) { ?>
                    <?php if ($noticiasRelevante->orden == 1) { ?>
                          <div class="col-12 px-0 py-1 col order-1">
                    <?php }?>
                    <?php if ($noticiasRelevante->orden == 2) { ?>
                          <div class="col-12 px-0 py-1 col order-2">
                    <?php }?>
                    <?php if ($noticiasRelevante->orden == 3) { ?>
                          <div class="col-12 px-0 py-1 col order-4">
                    <?php }?>
                    <?php if ($noticiasRelevante->orden == 4) { ?>
                          <div class="col-12 px-0 py-1 col order-6">
                    <?php }?>
                    <?php if ($noticiasRelevante->orden == 5) { ?>
                          <div class="col-12 px-0 py-1 col order-7">
                    <?php }?>
                    <div class="">
                      <?php if (!empty($noticiasRelevante->contenido)) { ?>
                        <?php if ($noticiasRelevante->id_tipoMultimedia == '1') { ?>
                        <a href="#"><img class="img-fluid z-depth-1 rounded mx-auto d-block py-2" src="<?php echo base_url().'assets/img/'.$noticiasRelevante->contenido; ?>" alt=""></a>
                      <?php }else{ ?>
                        <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                                            <iframe id="my-video1" class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo $noticiasRelevante->contenido;?>?enablejsapi=1&autohide=1&showinfo=0&rel=0" frameborder="0"
                                              allowfullscreen></iframe>
                            </div>
                      <?php } ?>
                      <?php } ?>
                    <div class="">
                          <h4 class="tituloPrincipal py-1">
                            <a href="<?php echo base_url().'index.php/C_publico/noticiaEspecifica/'.$noticiasRelevante->id_noticia.'/'.$noticiasRelevante->id_seccion.'/'.$noticiasRelevante->id_subseccion;?>"><?php echo $noticiasRelevante->titulo; ?></a>
                          </h4>
                          <h5 class="copeteDestacadoPrincipal py-1"><?php echo $noticiasRelevante->copete; ?></h5>
                          <div class="row py-1">
                            <div class="col-6 text-center">
                              <p class="m-0 float-md-left text-dark row"><a class="seccionDestacadoPrincipal"><?php echo $noticiasRelevante->seccion; ?></a>&nbsp;<a class="subseccionDestacadoPrincipal"><?php echo $noticiasRelevante->subseccion; ?></a></p>
                            </div>
                            <div class="col-6 text-center">
                            <!-- d/m/Y - H:i -->
                            <?php if (($this->session->userdata('id_perfil')) == 1) { ?>
                              <p class="m-0 float-md-right text-dark fechaHoraDestacadoPrincipal"><?php echo date("d/m/Y", strtotime($noticiasRelevante->fecha_noticias));?> - (<?php echo $noticiasRelevante->orden;?>)</p>
                            <?php }else{?>
                              <p class="m-0 float-md-right text-dark fechaHoraDestacadoPrincipal"><?php echo date("d/m/Y", strtotime($noticiasRelevante->fecha_noticias));?></p>
                            <?php } ?>
                            </div>
                        </div>
                        <hr>
                        </div>
                    </div>
                  </div>
                
              <?php } ?>
              <?php } ?>

              <?php if (count($noticiasPlublicidades) > 0) { ?>
              <?php foreach ($noticiasPlublicidades as $i => $noticiasPlublicidade) { ?>
                <?php if ($noticiasPlublicidade->orden == 3) { ?>
                <div class="col-12 px-2 py-1 col order-3">
                  <div class="">
                  <?php if (($this->session->userdata('id_perfil')) == 1) { ?>
                    <a><img class="img-fluid z-depth-1 rounded mx-auto d-block" src="<?php echo base_url().'assets/img/'.$noticiasPlublicidade->contenido;?>" data-toggle="modal" data-target="#modal3"></a>
                  <?php }else{?>
                    <a href="<?php echo $noticiasPlublicidade->linck;?>" target="_blank"><img class="img-fluid z-depth-1 rounded mx-auto d-block" src="<?php echo base_url().'assets/img/'.$noticiasPlublicidade->contenido;?>"></a>
                    <?php }?>
                  </div>
                  <hr>
                </div>
                <?php } ?>
                <?php if ($noticiasPlublicidade->orden == 4) { ?>
                <div class="col-12 px-2 py-1 col order-5">
                  <div class="">
                  <?php if (($this->session->userdata('id_perfil')) == 1) { ?>
                    <a><img class="img-fluid z-depth-1 rounded mx-auto d-block" src="<?php echo base_url().'assets/img/'.$noticiasPlublicidade->contenido;?>" data-toggle="modal" data-target="#modal4"></a>
                  <?php }else{?>
                    <a href="<?php echo $noticiasPlublicidade->linck;?>" target="_blank"><img class="img-fluid z-depth-1 rounded mx-auto d-block" src="<?php echo base_url().'assets/img/'.$noticiasPlublicidade->contenido;?>"></a>
                    <?php }?>
                  </div>
                  <hr>
                </div>
                <?php } ?>
              <?php } ?>
              <?php } ?>

            </div>
          </div>
          <!-- /.row -->
        </div>
        <!-- /.col-lg-6 -->
        
        <!-- .col-lg-3 -->
        <div class="col-xl-3 px-1">
          <div class="container px-0">

            <!--Inicio Clima-->
            <div class="col-12 px-0 py-3">
              <div class="d-none d-sm-none d-md-block">
                  <!-- <a target="_blank" href="https://hotelmix.es/weather/formosa-42542"><img src="https://w.bookcdn.com/weather/picture/3_42542_1_4_137AE9_160_ffffff_333333_08488D_1_ffffff_333333_0_6.png?scode=124&domid=582&anc_id=15544"  alt="booked.net" class = "img-fluid rounded mx-auto d-block"/></a> -->
                      <!-- www.tutiempo.net - Ancho:269px - Alto:52px -->
                      <!-- www.tutiempo.net - Ancho:269px - Alto:52px -->
                  <div id="TT_yCJEEEEE1fhcdccAKASjzDjDDtnALECFLY1YkcyoqEjI3omIm">El tiempo - Tutiempo.net</div>
                  <script type="text/javascript" src="https://www.tutiempo.net/s-widget/l_yCJEEEEE1fhcdccAKASjzDjDDtnALECFLY1YkcyoqEjI3omIm"></script>
              </div>
            </div>
            <!--Fin Clima-->

            
            <!--Inicio Editorial-->
            <div class="col-12 px-0 py-2">
              <div class="titulo py-2" style="font-style: italic; background:#009f98; text-align:center; height:2.5em; font-size:1.5625em;color:#ffffff !important; font-family: 'Playfair Display', serif !important;"><h1>Editorial</h1></div>
              <?php if (count($noticiasRelevantesMenuDerechaEditorial) > 0) { ?>
              <?php foreach ($noticiasRelevantesMenuDerechaEditorial as $i => $noticiasRelevantesMenuDerechaEditoria) { ?>
                  <a href="<?php echo base_url().'index.php/C_publico/noticiaEspecifica/'.$noticiasRelevantesMenuDerechaEditoria->id_editorialColumnistaEntrevista.'/'.$noticiasRelevantesMenuDerechaEditoria->id_seccion.'/NULL';?>"><h3 class="titulo py-2"><?php echo $noticiasRelevantesMenuDerechaEditoria->titulo?></h3></a>
                  <p  class="copete py-2"><?php echo $noticiasRelevantesMenuDerechaEditoria->copete?></p>
                <div class="row align-items-center py-2">
                  <div class="col-4">
                    <img style="width:5.125em; height:5.125em;" class="img-fluid rounded-circle rounded mx-auto d-block" src="<?php echo base_url().'assets/img/'.$noticiasRelevantesMenuDerechaEditoria->autorImagen; ?>">
                  </div>
                  <div class="col-8">
                    <p class="m-0 float-md-left copete" style="font-family: 'Playfair Display', serif !important; font-style: italic;">por <?php echo $noticiasRelevantesMenuDerechaEditoria->autor?></p>
                  </div>
                </div>
                <hr>
                <?php }?>
                <?php }?>
            </div>
            <!--Fin Editorial-->
            
            <!--Inicio Columnista-->
            <div class="col-12 px-0 py-2">
              <div class="titulo py-2" style="font-family: 'Playfair Display', serif !important; font-style: italic; background:#009f98; text-align:center; height:2.5em; font-size:1.5625em;color:#fff !important;"><h1>Columnista</h1></div>
              <?php if (count($noticiasRelevantesMenuDerechaColumnista) > 0) { ?>
              <?php foreach ($noticiasRelevantesMenuDerechaColumnista as $i => $noticiasRelevantesMenuDerechaColumnist) { ?>
                <div class="row align-items-center py-2">
                  <div class="col-4">
                    <img  style="width:5.125em; height:5.125em;" class="img-fluid rounded mx-auto d-block rounded-circle py-2" src="<?php echo base_url().'assets/img/'.$noticiasRelevantesMenuDerechaColumnist->autorImagen; ?>">
                  </div>
                  <div class="col-8">
                  <a href="<?php echo base_url().'index.php/C_publico/noticiaEspecifica/'.$noticiasRelevantesMenuDerechaColumnist->id_editorialColumnistaEntrevista.'/'.$noticiasRelevantesMenuDerechaColumnist->id_seccion.'/NULL';?>"><p class="m-0 float-md-left copete mb-1 py-2"><?php echo $noticiasRelevantesMenuDerechaColumnist->titulo;?></p></a>
                    <p class="m-0 float-md-left copete py-2" style="font-family: 'Playfair Display', serif !important; font-style: italic;">por <?php echo $noticiasRelevantesMenuDerechaColumnist->autor;?></p>
                  </div>
                </div>
                <hr>
                <?php }?>
                <?php }?>
            </div>
            <!--Fin Columnista-->
            

            <?php if (count($noticiasPlublicidades) > 0) { ?>
              <?php foreach ($noticiasPlublicidades as $i => $noticiasPlublicidade) { ?>
                <?php if ($noticiasPlublicidade->orden == 5) { ?>
                <div class="col-12 px-0 py-2">
                  
                <?php if (($this->session->userdata('id_perfil')) == 1) { ?>
                    <a><img class="img-fluid z-depth-1 rounded mx-auto d-block" src="<?php echo base_url().'assets/img/'.$noticiasPlublicidade->contenido;?>" data-toggle="modal" data-target="#modal5"></a>
                  <?php }else{?>
                    <a href="<?php echo $noticiasPlublicidade->linck;?>" target="_blank"><img class="img-fluid z-depth-1 rounded mx-auto d-block" src="<?php echo base_url().'assets/img/'.$noticiasPlublicidade->contenido;?>"></a>
                    <?php }?>
                  
                </div>
                <hr>
                <?php } ?>
              <?php } ?>
              <?php } ?>
            


            
            <!--Inicio Entrevistas-->
            
            <div class="col-12 px-0 py-2">
              <div class="titulo py-2" style="font-family: 'Playfair Display', serif !important; font-style: italic; background:#009f98; text-align:center; height:2.5em; font-size:1.5625em;color:#fff !important;"><h1>Entrevistas</h1></div>
              <?php if (count($noticiasRelevantesMenuDerechaEntrevista) > 0) { ?>
              <?php foreach ($noticiasRelevantesMenuDerechaEntrevista as $i => $noticiasRelevantesMenuDerechaEntrevist) { ?>
                <div class="col-12 px-0 py-2">
                    <div class="">
                      <a href="#"><img class="img-fluid" src="<?php echo base_url().'assets/img/'.$noticiasRelevantesMenuDerechaEntrevist->contenido; ?>" alt=""></a>
                      <div class="py-2">
                      <a href="<?php echo base_url().'index.php/C_publico/noticiaEspecifica/'.$noticiasRelevantesMenuDerechaEntrevist->id_editorialColumnistaEntrevista.'/'.$noticiasRelevantesMenuDerechaEntrevist->id_seccion.'/'.$noticiasRelevantesMenuDerechaEntrevist->id_subseccion;?>"><h5 class="titulo py-2" style="font-family: 'Roboto', sans-serif !important; font-style: italic !important; font-weight: bold !important;"><?php echo $noticiasRelevantesMenuDerechaEntrevist->copete; ?></h5></a>
                        <p class="m-0 float-md-left copete py-2" style="font-family: 'Playfair Display', serif !important; font-style: italic;"><?php echo $noticiasRelevantesMenuDerechaEntrevist->autor; ?></p>
                      </div>
                    </div>
                </div>
                <hr>
                <?php }?>
                <?php }?>

            </div>
            
            <!--Fin Entrevistas-->
           
          </div>
          <!-- /.row -->

        </div>
        <!-- /.col-lg-3 -->
 
    </div>
    <!-- /.row -->

    <!--row -->
    <div class="row align-items-center">
      <div class="col-12">
              <div class="titulo py-2" style="background:#009f98; text-align:center; height:2.5em; font-size:1.5625em;color:#fff !important;"><h1>Multimedia</h1></div>
                  
                  <div id="carouselExampleIndicators" class="carousel slide py-2" data-ride="carousel">
                    <ol class="carousel-indicators">
                      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                      <!-- <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="3"></li> -->
                    </ol>
                    <div class="carousel-inner col align-self-center text-center">
                      
                      <div class="carousel-item active px-0">
                        <?php if (count($multimedias1) > 0) { ?>
                        <?php foreach ($multimedias1 as $i => $multimedia) { ?>
                          <?php if ($multimedia->id_tipoMultimedia == 2){ ?>
                          <a class="col-4 m-0 float-md-left"><img class="img-fluid img-thumbnail z-depth-1 rounded mx-auto d-block" src="https://img.youtube.com/vi/<?php echo $multimedia->contenido;?>/hqdefault.jpg" alt="video" data-toggle="modal" data-target="#modalv<?php echo $i+1;?>"></a>
                          <!--Modal: Videos-->
                            <div class="modal fade" id="modalv<?php echo $i+1;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                            <?php } else {?>
                                  <a class="col-4 m-0 float-md-left"><img class="img-fluid img-thumbnail z-depth-1 rounded mx-auto d-block" src="<?php echo base_url().'assets/img/'.$multimedia->contenido;?>" alt="imagen" data-toggle="modal" data-target="#modali<?php echo $i+1;?>"></a>
                                   <!--Modal: Videos-->
                                    <div class="modal fade" id="modali<?php echo $i+1;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                      <div class="modal-dialog modal-lg" role="document">

                                        <!--Content-->
                                        <div class="modal-content">

                                          <!--Body-->
                                          <div class="modal-body mb-0 p-0">

                                            <img class="img-fluid img-thumbnail z-depth-1 rounded mx-auto d-block" src="<?php echo base_url().'assets/img/'.$multimedia->contenido;?>" alt="imagen">

                                          </div>

                                          <!--Footer-->
                                          <div class="modal-footer justify-content-center">
                                            <span class="mr-4"><?php echo $multimedia->titulo;?></span>
                                            <div class="sharethis-inline-share-buttons"></div>
                                            <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Cerrar</button>

                                          </div>

                                        </div>
                                        <!--/.Content-->

                                      </div>
                                    </div>
                                  <!--Modal: Videos-->
                                  <?php }?>
                          <?php }?>
                        <?php }?>
                      </div>
                      
                      <div class="carousel-item col align-self-center text-center px-0">
                        <?php if (count($multimedias2) > 0) { ?>
                        <?php foreach ($multimedias2 as $i => $multimedia) { ?>
                          <?php if ($multimedia->id_tipoMultimedia == 2){ ?>
                          <a class="col-4 m-0 float-md-left"><img class="img-fluid img-thumbnail z-depth-1 rounded mx-auto d-block" src="https://img.youtube.com/vi/<?php echo $multimedia->contenido;?>/hqdefault.jpg" alt="video" data-toggle="modal" data-target="#modalv1<?php echo $i+1;?>"></a>
                          <!--Modal: Videos-->
                            <div class="modal fade" id="modalv1<?php echo $i+1;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                          <?php } else {?>
                                  <a class="col-4 m-0 float-md-left"><img class="img-fluid img-thumbnail z-depth-1 rounded mx-auto d-block" src="<?php echo base_url().'assets/img/'.$multimedia->contenido;?>" alt="imagen" data-toggle="modal" data-target="#modali<?php echo $i+1;?>"></a>
                                   <!--Modal: Videos-->
                                    <div class="modal fade" id="modali<?php echo $i+1;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                      <div class="modal-dialog modal-lg" role="document">

                                        <!--Content-->
                                        <div class="modal-content">

                                          <!--Body-->
                                          <div class="modal-body mb-0 p-0">

                                            <img class="img-fluid img-thumbnail z-depth-1 rounded mx-auto d-block" src="<?php echo base_url().'assets/img/'.$multimedia->contenido;?>" alt="imagen">

                                          </div>

                                          <!--Footer-->
                                          <div class="modal-footer justify-content-center">
                                            <span class="mr-4"><?php echo $multimedia->titulo;?></span>
                                            <div class="sharethis-inline-share-buttons"></div>
                                            <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Cerrar</button>

                                          </div>

                                        </div>
                                        <!--/.Content-->

                                      </div>
                                    </div>
                                  <!--Modal: Videos-->
                                  <?php }?>
                        <?php }?>
                        <?php }?>
                      </div>
                      
                      <!-- <div class="carousel-item col align-self-center text-center px-0"> -->
                        <?php //if (count($multimedias3) > 0) { ?>
                        <?php //foreach ($multimedias3 as $i => $multimedia) { ?>
                          <!-- <a class="col-4 m-0 float-md-left"><img class="img-fluid img-thumbnail z-depth-1 rounded mx-auto d-block" src="https://img.youtube.com/vi/<?php //echo $multimedia->contenido;?>/hqdefault.jpg" alt="video" data-toggle="modal" data-target="#modalv2<?php //echo $i+1;?>"></a> -->
                          <!--Modal: Videos-->
                          <!-- <div class="modal fade" id="modalv2<?php //echo $i+1;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"> -->
                                  <!-- <div class="modal-dialog modal-lg" role="document"> -->

                                    <!--Content-->
                                    <!-- <div class="modal-content"> -->

                                      <!--Body-->
                                      <!-- <div class="modal-body mb-0 p-0"> -->

                                        <!-- <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                                          <iframe id="my-video1" class="embed-responsive-item" src="https://www.youtube.com/embed/<?php //echo $multimedia->contenido;?>?enablejsapi=1&autohide=1&showinfo=0&rel=0" frameborder="0"
                                            allowfullscreen></iframe>
                                        </div>

                                      </div> -->

                                      <!--Footer-->
                                      <!-- <div class="modal-footer justify-content-center">
                                        <span class="mr-4"><?php //echo $multimedia->titulo;?></span>
                                        <div class="sharethis-inline-share-buttons"></div>
                                        <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal" onclick="pauseVideo(<?php //echo $i+1;?>)">Cerrar</button>

                                      </div> -->

                                    <!-- </div> -->
                                    <!--/.Content-->

                                  <!-- </div>
                            </div> -->
                          <!--Modal: Videos-->
                        <?php //}?>
                        <?php //}?>
                      <!-- </div> -->
                      
                      <!-- <div class="carousel-item col align-self-center text-center px-0"> -->
                        <?php //if (count($multimedias4) > 0) { ?>
                        <?php //foreach ($multimedias4 as $i => $multimedia) { ?>
                          <!-- <a class="col-4 m-0 float-md-left"><img class="img-fluid img-thumbnail z-depth-1 rounded mx-auto d-block" src="https://img.youtube.com/vi/<?php //echo $multimedia->contenido;?>/hqdefault.jpg" alt="video" data-toggle="modal" data-target="#modalv3<?php //echo $i+1;?>"></a> -->
                          <!--Modal: Videos-->
                          <!-- <div class="modal fade" id="modalv3<?php //echo $i+1;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"> -->
                                  <!-- <div class="modal-dialog modal-lg" role="document"> -->

                                    <!--Content-->
                                    <!-- <div class="modal-content"> -->

                                      <!--Body-->
                                      <!-- <div class="modal-body mb-0 p-0">

                                        <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                                          <iframe id="my-video1" class="embed-responsive-item" src="https://www.youtube.com/embed/<?php //echo $multimedia->contenido;?>?enablejsapi=1&autohide=1&showinfo=0&rel=0" frameborder="0"
                                            allowfullscreen></iframe>
                                        </div>

                                      </div> -->

                                      <!--Footer-->
                                      <!-- <div class="modal-footer justify-content-center">
                                        <span class="mr-4"><?php //echo $multimedia->titulo;?></span>
                                        <div class="sharethis-inline-share-buttons"></div>
                                        <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal" onclick="pauseVideo(<?php //echo $i+1;?>)">Cerrar</button>

                                      </div>

                                    </div> -->
                                    <!--/.Content-->

                                  <!-- </div>
                            </div> -->
                          <!--Modal: Videos-->
                        <?php //}?>
                        <?php //}?>
                      <!-- </div> -->

                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Anterior</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Siguiente</span>
                    </a>
                  </div>

              </div>

      </div>
    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->
  

  <form class="was-validated" action="<?php echo base_url();?>index.php/C_privado/actualizarPlublicidad" method="post" enctype="multipart/form-data">
    <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                              <div class="modal-dialog modal-lg" role="document">

                                <!--Content-->
                                <div class="modal-content">

                                  <!--Body-->
                                  <div class="modal-body justify-content-center">
                                  <div class="row">
                                    <div class="col-md-12 form-group">
                                      <div class="custom-file form-inline justify-content-center">
                                        <input type="file" class="form-control-file" id="contenidoImagen" name="contenidoImagen">
                                      </div>
                                            <textarea class="form-control is-invalid" id="inputlinck" name="inputlinck" placeholder="Ingrese URL"></textarea>
                                            <input id="inputSeccion" name="inputSeccion" type="hidden" value="0">
                                            <input id="inputOrden"   name="inputOrden" type="hidden"  value="1">
                                            <input id="inputAlto"   name="inputAlto" type="hidden"  value="300">
                                            <input id="inputAncho"   name="inputAncho" type="hidden"  value="300">
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

  <form class="was-validated" action="<?php echo base_url();?>index.php/C_privado/actualizarPlublicidad" method="post" enctype="multipart/form-data">
    <div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                                      <input id="inputSeccion" name="inputSeccion" type="hidden" value="0">
                                    
                                            <input id="inputOrden"   name="inputOrden" type="hidden"  value="2">
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

  <form class="was-validated" action="<?php echo base_url();?>index.php/C_privado/actualizarPlublicidad" method="post" enctype="multipart/form-data">
    <div class="modal fade" id="modal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                                      <input id="inputSeccion" name="inputSeccion" type="hidden" value="0">
                                      <textarea class="form-control is-invalid" id="inputlinck" name="inputlinck" placeholder="Ingrese URL"></textarea>
                                            <input id="inputOrden"   name="inputOrden" type="hidden"  value="3">
                                            <input id="inputAlto"   name="inputAlto" type="hidden"  value="615">
                                            <input id="inputAncho"   name="inputAncho" type="hidden"  value="200">
                                         
                                      
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

  <form class="was-validated" action="<?php echo base_url();?>index.php/C_privado/actualizarPlublicidad" method="post" enctype="multipart/form-data">
    <div class="modal fade" id="modal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                                      <input id="inputSeccion" name="inputSeccion" type="hidden" value="0">
                                      
                                            <input id="inputOrden"   name="inputOrden" type="hidden"  value="4">
                                            <input id="inputAlto"   name="inputAlto" type="hidden"  value="615">
                                            <input id="inputAncho"   name="inputAncho" type="hidden"  value="200">
                                          
                                      
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

  <form class="was-validated" action="<?php echo base_url();?>index.php/C_privado/actualizarPlublicidad" method="post" enctype="multipart/form-data">
    <div class="modal fade" id="modal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                                      <input id="inputSeccion" name="inputSeccion" type="hidden" value="0">
                                    
                                            <input id="inputOrden"   name="inputOrden" type="hidden"  value="5">
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
  
  <script type="text/javascript">

      function pauseVideo(id_modal){
        $('#modal'+id_modal+' iframe').attr("src", $("#modal"+id_modal+" iframe").attr("src"));
      }

  </script>
