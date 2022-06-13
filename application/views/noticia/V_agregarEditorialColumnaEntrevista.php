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
<form class="was-validated" action="agregarEditorialColumnaEntrevista" method="post" enctype="multipart/form-data">
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-6 form-group">
            <select class="custom-select" id="seccion" name="seccion" onclick="CargarSubSeccion();" required>
              <option value="">Seleccione Secci&oacute;n</option>
              <option value="4">Entrevistas</option>
              <option value="5">Editorial</option>
              <option value="6">Columnistas</option>
            </select>
				</div>
				<div class="col-md-6 form-group" id="box_subseccion" style="display: none">
          <select class="custom-select" id="subseccion" name="subseccion">
              <option value="">Seleccione Sub-Secci&oacute;n [Solo para Entrevista]</option>
              <option value="1">Municipal</option>
              <option value="2">Provincial</option>
              <option value="3">Nacional</option>
              <option value="4">Internacional</option>
            </select>
				</div>
			</div><hr>
			<div class="row">
				<div class="col-md-6 form-group">
          <div class="custom-file">
            <input type="file" class="custom-file-input" id="contenidoImagen" name="contenidoImagen">
            <label class="custom-file-label" for="validatedCustomFile">Elija el archivo...</label>
          </div>
        </div>
        <div class="col-md-6 form-group">
          <input type="text" class="form-control" id="contenidoVideo" name="contenidoVideo" placeholder="Ingrese ID Youtube">  
				</div>
			</div><hr>
			<div class="row">
				<div class="col-md-12">
          <div class="mb-3">
            <label for="validationTextarea">TITULO</label>
            <textarea class="form-control is-invalid" id="titulo" name="titulo" placeholder="Ingrese el T&iacute;tulo" required></textarea>
          </div>
				</div>
			</div><hr>
			<div class="row">
				<div class="col-md-12">
          <div class="mb-3">
            <label for="validationTextarea">TEXTO TITULO</label>
            <textarea class="form-control is-invalid" id="copete" name="copete" placeholder="Ingrese Alg&uacute;n Texto Alternativo"></textarea>
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
                    <textarea class="form-control is-invalid" id="texto" name="texto" required>Este es el contenido inicial del editor</textarea>
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
                <?php if($editorialColumnistaEntrevista): foreach($editorialColumnistaEntrevista as $autor):?>
                  <option value="<?php echo $autor->id;?>"><?php echo $autor->nombre;?></option>
                <?php endforeach; endif;?>
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
			<button type="submit" class="btn btn-success btn-lg active btn-block">
				AGREGAR CONTENIDO
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
  </div>
</form>

<!-- <script src="https://cdn.ckeditor.com/ckeditor5/12.3.1/decoupled-document/ckeditor.js"></script> -->
<script src="https://cdn.ckeditor.com/ckeditor5/12.3.1/classic/ckeditor.js"></script> 
<script src="<?php echo base_url().'assets/plugin/ckfinder/ckfinder.js'; ?>"></script>
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