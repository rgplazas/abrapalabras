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

<!-- <form class="was-validated" id="editarNoticia" action="editarNoticia" method="post" enctype="multipart/form-data"> -->
<?php $atributo = array(
                'class'=>"was-validated",
                'id' => "EditarNoticiass"
            );
            echo form_open('', $atributo);
            ?>
  <div class="container">
    <?php if (count($noticias) > 0) { ?>
      <?php foreach ($noticias as $i => $noticia) { ?>
        <input id="id_noticia"   name="id_noticia" type="hidden"  value="<?php echo $noticia->id_noticia;?>">
        <div class="row">
          <div class="col-md-12">
            <div class="row">
              <div class="col-md-3 form-group">
                  <select class="custom-select" id="seccion" name="seccion" required>
                    <option <?php if ($noticia->id_seccion == "" ) echo  'selected' ; ?> value="0">Seleccione Secci&oacute;n</option>
                    <option <?php if ($noticia->id_seccion == "1" ) echo 'selected' ; ?> value="1">Pol&iacute;tica</option>
                    <option <?php if ($noticia->id_seccion == "2" ) echo 'selected' ; ?> value="2">Econom&iacute;a</option>
                    <option <?php if ($noticia->id_seccion == "3" ) echo 'selected' ; ?> value="3">Varios</option>
                  </select>
              </div>
              <div class="col-md-3 form-group">
                <select class="custom-select" id="subseccion" name="subseccion" required>
                    <option <?php if ($noticia->id_subseccion == "" ) echo  'selected' ; ?> value="0">Seleccione Sub-Secci&oacute;n</option>
                    <option <?php if ($noticia->id_subseccion == "1" ) echo  'selected' ; ?> value="1">Municipal</option>
                    <option <?php if ($noticia->id_subseccion == "2" ) echo  'selected' ; ?> value="2">Provincial</option>
                    <option <?php if ($noticia->id_subseccion == "3" ) echo  'selected' ; ?> value="3">Nacional</option>
                    <option <?php if ($noticia->id_subseccion == "4" ) echo  'selected' ; ?> value="4">Internacional</option>
                  </select>
              </div>
              <div class="col-md-3 form-group">
                <select class="custom-select" id="destacado" name="destacado" onclick="CargarOrdenDestacado();">
                    <option <?php if ($noticia->destacado == "" ) echo  'selected' ; ?> value="0">Seleccione si es Destacado</option>
                    <option <?php if ($noticia->destacado == "1" ) echo  'selected' ; ?> value="1">Primicia[1]</option>
                    <option <?php if ($noticia->destacado == "2" ) echo  'selected' ; ?> value="2">Principal[5]</option>
                    <option <?php if ($noticia->destacado == "3" ) echo  'selected' ; ?> value="3">Izquierdo[5]</option>
                  </select>
              </div>
              <div class="col-md-3 form-group" id="box_Destacado" style="display: none">
                <select class="custom-select" id="ordenDestacadoDestacado" name="ordenDestacadoDestacado">
                    <option <?php if ($noticia->orden == "" ) echo  'selected' ; ?> value="0">Seleccione el orden si es Destacado</option>
                    <option <?php if ($noticia->orden == "1" ) echo  'selected' ; ?> value="1">Primero</option>
                  </select>
              </div>
              <div class="col-md-3 form-group" id="box_Principal" style="display: none">
                <select class="custom-select" id="ordenDestacadoPrincipal" name="ordenDestacadoPrincipal">
                    <option <?php if ($noticia->orden == "" ) echo  'selected' ; ?> value="0">Seleccione el orden si es Destacado</option>
                    <option <?php if ($noticia->orden == "1" ) echo  'selected' ; ?> value="1">Primero</option>
                    <option <?php if ($noticia->orden == "2" ) echo  'selected' ; ?> value="2">Segundo</option>
                    <option <?php if ($noticia->orden == "3" ) echo  'selected' ; ?> value="3">Tercero</option>
                    <option <?php if ($noticia->orden == "4" ) echo  'selected' ; ?> value="4">Cuarto</option>
                    <option <?php if ($noticia->orden == "5" ) echo  'selected' ; ?> value="5">Quinto</option>
                  </select>
              </div>
              <div class="col-md-3 form-group" id="box_Izquierda" style="display: none">
                <select class="custom-select" id="ordenDestacadoIzquierdo" name="ordenDestacadoIzquierdo">
                    <option <?php if ($noticia->orden == "" ) echo  'selected' ; ?> value="0">Seleccione el orden si es Destacado</option>
                    <option <?php if ($noticia->orden == "1" ) echo  'selected' ; ?> value="1">Primero</option>
                    <option <?php if ($noticia->orden == "2" ) echo  'selected' ; ?> value="2">Segundo</option>
                    <option <?php if ($noticia->orden == "3" ) echo  'selected' ; ?> value="3">Tercero</option>
                    <option <?php if ($noticia->orden == "4" ) echo  'selected' ; ?> value="4">Cuarto</option>
                    <option <?php if ($noticia->orden == "5" ) echo  'selected' ; ?> value="5">Quinto</option>
                  </select>
              </div>
            </div><hr>
            <div class="row">
              <div class="col-md-12 ">
                <div class="mb-3">
                  <label for="validationTextarea">ETIQUETAS (no es obligatorio ingresar etiquetas y/o todas las etiquetas)</label>
                  <div class="row">
                    <?php if (count($noticiasEtiqueta) > 0) { ?>
                      <?php foreach ($noticiasEtiqueta as $i => $noticiaEtiqueta) { ?>
                        <div class="col-md-4 form-group">
                          <input id="id_noticiaEtiqueta<?php echo $i+1?>"   name="id_noticiaEtiqueta<?php echo $i+1?>"  type="hidden"  value="<?php echo $noticiaEtiqueta->id_noticiaEtiqueta;?>">
                          <input type="text" class="form-control" id="etiqueta<?php echo $i+1?>" name="etiqueta<?php echo $i+1?>" placeholder="Ingrese <?php echo $i+1?>ra Etiqueta" value="<?php echo $noticiaEtiqueta->etiquetaDescripcion;?>">
                        </div>
                      <?php } ?>
                    <?php } ?>
                  </div>
                </div>
              </div>
            </div><hr>
            <div class="row">
              <div class="col-md-12">
                <div class="mb-3">
                  <label for="validationTextarea">VOLANTA</label>
                  <textarea class="form-control is-invalid" id="volanta" name="volanta" placeholder="Ingrese la Volanta"><?php echo $noticia->volanta;?></textarea>
                </div>
              </div>
            </div><hr>
            <?php if ($noticia->id_tipoMultimedia == 1) { ?>
              <input id="contenidoImagen"   name="contenidoImagen"  type="hidden"  value="<?php echo $noticia->contenido;?>">
            <?php }else{ ?>
              <input id="contenidoImagen"   name="contenidoImagen"  type="hidden"  value="">
            <?php } ?>

            <?php if ($noticia->id_tipoMultimedia == 2) { ?>
                <input id="contenidoVideo"   name="contenidoVideo"   type="hidden"  value="<?php echo $noticia->contenido;?>">
              <?php }else{ ?>
                <input id="contenidoVideo"   name="contenidoVideo"   type="hidden"  value="">
              <?php } ?>
            <div class="row">
              <div class="col-md-12">
                <div class="mb-3">
                  <label for="validationTextarea">TITULO</label>
                  <textarea class="form-control is-invalid" id="titulo" name="titulo" placeholder="Ingrese el T&iacute;tulo" required><?php echo $noticia->titulo;?></textarea>
                </div>
              </div>
            </div><hr>
            <div class="row">
              <div class="col-md-12">
                <div class="mb-3">
                  <label for="validationTextarea">COPETE</label>
                  <textarea class="form-control is-invalid" id="copete" name="copete" placeholder="Ingrese el Copete" required><?php echo $noticia->copete;?></textarea>
                </div>
              </div>
            </div><hr>
            <div class="row">
              <div class="col-md-12">
                <div class="mb-3">
                  <label for="validationTextarea">TEXTO</label>
                          <textarea class="form-control is-invalid" id="texto" name="texto" required><?php echo $noticia->texto;?></textarea>
                </div>
              </div>
            </div><hr>
            <div class="row">
              <div class="col-md-12">
                <div class="mb-3">
                  <label for="validationTextarea">FUENTE</label>
                  <textarea class="form-control is-invalid" id="fuente" name="fuente" placeholder="Ingrese la Fuente"><?php echo $noticia->fuente;?></textarea>
                </div>
              </div>
            </div><hr> 
            <button type="button" class="btn btn-success btn-lg active btn-block" onclick="editarNoticias()">
              EDITAR CONTENIDO
            </button>
          </div>
        </div>
      <?php } ?>
    <?php } ?>
  </div>
<!-- </form> -->
<?php echo form_close(); ?>
<!-- <script src="https://cdn.ckeditor.com/ckeditor5/12.3.1/decoupled-document/ckeditor.js"></script> -->
<script src="https://cdn.ckeditor.com/ckeditor5/12.3.1/classic/ckeditor.js"></script> 
<script src="<?php echo base_url().'assets/plugin/ckfinder/ckfinder.js'; ?>"></script>

<script>

function editarNoticias() {
  
        // var id_noticia = document.getElementById("id_noticia").value;
        // var seccion = document.getElementById("seccion").value;
        // var subseccion = document.getElementById("subseccion").value;
        // var destacado = document.getElementById("destacado").value;
        // if (destacado == "1") {
        //   var ordenDestacado = document.getElementById("ordenDestacadoDestacado").value;
        // }
        // if (destacado == "2") {
        //   var ordenDestacado = document.getElementById("ordenDestacadoPrincipal").value;
        // }
        // if (destacado == "3") {
        //   var ordenDestacado = document.getElementById("ordenDestacadoIzquierdo").value;
        // }
        // var etiqueta1 = document.getElementById("etiqueta1").value;
        // var etiqueta2 = document.getElementById("etiqueta2").value;
        // var etiqueta3 = document.getElementById("etiqueta3").value;
        // var volanta = document.getElementById("volanta").value;
        // var contenidoImagen = document.getElementById("contenidoImagen").value;
        // var contenidoVideo = document.getElementById("contenidoVideo").value;
        // var titulo = document.getElementById("titulo").value;
        // var copete = document.getElementById("copete").value;
        // var texto = document.getElementById("texto").value;
        // var fuente = document.getElementById("fuente").value;

        document.getElementById('EditarNoticiass').action  = "<?php echo base_url() . 'index.php/C_privado/editarNoticia'; ?>";
        document.getElementById('EditarNoticiass').method  = "post";
        document.getElementById('EditarNoticiass').enctype = "multipart/form-data";
        document.getElementById('EditarNoticiass').submit();
               
    
}

function CargarOrdenDestacado() {
        tipoDestacado = document.getElementById('destacado').value;
        if (tipoDestacado == "1") {
            document.getElementById('box_Destacado').style.display = "block";
            document.getElementById('ordenDestacadoPrincipal').value = "";
            document.getElementById('ordenDestacadoIzquierdo').value = "";
            $('#ordenDestacadoDestacado').prop("required", true);
        } else {
            document.getElementById('box_Destacado').style.display = "none";
            document.getElementById('ordenDestacadoDestacado').value = "";
        }

        if (tipoDestacado == "2") {
            document.getElementById('box_Principal').style.display = "block";
            document.getElementById('ordenDestacadoDestacado').value = "";
            document.getElementById('ordenDestacadoIzquierdo').value = "";
            $('#ordenDestacadoPrincipal').prop("required", true);
        } else {
            document.getElementById('box_Principal').style.display = "none";
            document.getElementById('ordenDestacadoPrincipal').value = "";
        }

        if (tipoDestacado == "3") {
            document.getElementById('box_Izquierda').style.display = "block";
            document.getElementById('ordenDestacadoDestacado').value = "";
            document.getElementById('ordenDestacadoPrincipal').value = "";
            $('#ordenDestacadoIzquierdo').prop("required", true);
        } else {
            document.getElementById('box_Izquierda').style.display = "none";
            document.getElementById('ordenDestacadoIzquierdo').value = "";
        }

    }
</script>
<script>
    // DecoupledEditor
    ClassicEditor
        .create( document.querySelector( '#texto' ),
         {
            ckfinder: {
            //uploadUrl: '/abrapalabras/assets/plugin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files&responseType=json', //local
            uploadUrl: 'http://www.abrapalabras.com.ar/assets/plugin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files&responseType=json', //servidor
            },
            mediaEmbed: {
            // configuration...
        }
         })
        .then( editor => {
          
        } )
        .catch( error => {

        } );
</script>
