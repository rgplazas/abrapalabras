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
<?php $atributo = array(
                'class'=>"was-validated",
                'id' => "EditarEditorialColumnaEntrevista"
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
				<div class="col-md-6 form-group">
            <select class="custom-select" id="seccion" name="seccion" onclick="CargarSubSeccion();" required>
              <option <?php if ($noticia->id_seccion == "" ) echo  'selected' ; ?> value="">Seleccione Secci&oacute;n</option>
              <option <?php if ($noticia->id_seccion == "4" ) echo  'selected' ; ?> value="4">Entrevistas</option>
              <option <?php if ($noticia->id_seccion == "5" ) echo  'selected' ; ?> value="5">Editorial</option>
              <option <?php if ($noticia->id_seccion == "6" ) echo  'selected' ; ?> value="6">Columnistas</option>
            </select>
				</div>
				<div class="col-md-6 form-group" id="box_subseccion" style="display: none">
          <select class="custom-select" id="subseccion" name="subseccion">
              <option <?php if ($noticia->id_subseccion == "" ) echo  'selected' ; ?> value="">Seleccione Sub-Secci&oacute;n [Solo para Entrevista]</option>
              <option <?php if ($noticia->id_subseccion == "1" ) echo  'selected' ; ?> value="1">Municipal</option>
              <option <?php if ($noticia->id_subseccion == "2" ) echo  'selected' ; ?> value="2">Provincial</option>
              <option <?php if ($noticia->id_subseccion == "3" ) echo  'selected' ; ?> value="3">Nacional</option>
              <option <?php if ($noticia->id_subseccion == "4" ) echo  'selected' ; ?> value="4">Internacional</option>
            </select>
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
			<!-- <div class="row">
				<div class="col-md-6 form-group">
          <div class="custom-file">
            <input type="file" class="custom-file-input" id="contenidoImagen" name="contenidoImagen">
            <label class="custom-file-label" for="validatedCustomFile">Elija el archivo...</label>
          </div>
        </div>
        <div class="col-md-6 form-group">
          <input type="text" class="form-control" id="contenidoVideo" name="contenidoVideo" placeholder="Ingrese ID Youtube">  
				</div>
			</div><hr> -->
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
            <label for="validationTextarea">TEXTO TITULO</label>
            <textarea class="form-control is-invalid" id="copete" name="copete" placeholder="Ingrese Alg&uacute;n Texto Alternativo"><?php echo $noticia->copete;?></textarea>
          </div>
				</div>
			</div><hr>
			<div class="row">
				<div class="col-md-12">
          <div class="mb-3">
            <label for="validationTextarea">TEXTO</label>
            <!-- <textarea class="form-control is-invalid" name="texto" id="texto" required></!-->
                <!-- The toolbar will be rendered in this container. -->
                    <!-- <div id="toolbar-container"></div> -->

                <!-- This container will become the editable. -->
                    <!-- <div id="editor" name="content"> -->
                    <textarea class="form-control is-invalid" id="texto" name="texto" required><?php echo $noticia->texto;?></textarea>
                    <!-- </div> -->
          </div>
				</div>
			</div><hr>
			<div class="row">
				<div class="col-md-12">
          <div class="mb-3">
            <label for="validationTextarea">AUTOR/FUENTE</label>
            <!-- <textarea class="form-control is-invalid" id="fuente" name="fuente" placeholder="Ingrese la Fuente" required></!-->
            <div class="row">
            <div class="col-md-9">
              <select class="form-control" id="fuente" name="fuente">
                <option value="" selected>Seleccionar Autor/Fuente</option>
                <?php
                  foreach ($editorialColumnistaEntrevista as $i => $autor) :
                      if ( $autor->id == $noticia->id_autor) :
                          echo "<option value ='" . $autor->id . "'selected>" . $autor->nombre . "</option>";
                      else :
                          echo "<option value ='" . $autor->id . "'>" . $autor->nombre . "</option>";
                      endif;
                  endforeach;
                ?>
              </select>
            </div>
            <div class="row col-md-3">
              <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalAgregarAutor">Nuevo Fuente/Autor</button>
              </div>
              </div>  
          </div>
          </div>
				</div>
			</div><hr> 
			<button type="button" class="btn btn-success btn-lg active btn-block" onclick="editarEditorialColumnaEntrevista()">
              EDITAR CONTENIDO
      </button>
    </div>
	</div>
</div>
</form>

<form class="was-validated" action="<?php echo base_url();?>index.php/C_privado/agregarAutor" method="post" enctype="multipart/form-data">
  <div class="modal fade" id="modalAgregarAutor" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
    <!--Content-->
      <div class="modal-content">
        <!--Body-->
        <div class="modal-body justify-content-center">
          <div class="row">
            <div class="col-md-12 form-group">
              <div class="custom-file">
                <input type="file" class="form-control-file" id="contenidoImagenAutor" name="contenidoImagenAutor">
              </div> 
                <input id="inputAlto"   name="inputAlto" type="hidden"  value="200">
                <input id="inputAncho"   name="inputAncho" type="hidden"  value="200">              
            </div>
            <div class="col-md-12 form-group">
                <input type="text" class="form-control" id="nombreAutor" name="nombreAutor" placeholder="Ingrese Nombre del Autor/Fuente">            
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
    <?php } ?>
    <?php } ?>
  </div>
  <?php echo form_close(); ?>

<!-- <script src="https://cdn.ckeditor.com/ckeditor5/12.3.1/decoupled-document/ckeditor.js"></script> -->
<script src="https://cdn.ckeditor.com/ckeditor5/12.3.1/classic/ckeditor.js"></script> 
<script src="<?php echo base_url().'assets/plugin/ckfinder/ckfinder.js'; ?>"></script>
<script>

function editarEditorialColumnaEntrevista() {
  
        var id_noticia = document.getElementById("id_noticia").value;
        var seccion = document.getElementById("seccion").value;
        var subseccion = document.getElementById("subseccion").value;
        var contenidoImagen = document.getElementById("contenidoImagen").value;
        var contenidoVideo = document.getElementById("contenidoVideo").value;
        var titulo = document.getElementById("titulo").value;
        var copete = document.getElementById("copete").value;
        var texto = document.getElementById("texto").value;
        var fuente = document.getElementById("fuente").value;

        document.getElementById('EditarEditorialColumnaEntrevista').action  = "<?php echo base_url() . 'index.php/C_privado/editarEditorialColumnaEntrevista'; ?>";
        document.getElementById('EditarEditorialColumnaEntrevista').method  = "post";
        document.getElementById('EditarEditorialColumnaEntrevista').enctype = "multipart/form-data";
        document.getElementById('EditarEditorialColumnaEntrevista').submit();
               
    
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
         })
        .then( editor => {
          
        } )
        .catch( error => {

        } );
</script>

<script>
  function CargarSubSeccion() {
        seccion = document.getElementById('seccion').value;
        if (seccion == "4") {
            document.getElementById('box_subseccion').style.display = "block";
        } else {
          document.getElementById('box_subseccion').style.display = "none";
          document.getElementById('subseccion').value = "";
        }

    }
</script>