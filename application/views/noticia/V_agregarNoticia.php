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
<form class="was-validated" action="agregarNoticia" method="post" enctype="multipart/form-data">
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-3 form-group">
            <select class="custom-select" id="seccion" name="seccion" required>
              <option value="">Seleccione Secci&oacute;n</option>
              <option value="1">Pol&iacute;tica</option>
              <option value="2">Econom&iacute;a</option>
              <option value="3">Varios</option>
            </select>
				</div>
				<div class="col-md-3 form-group">
          <select class="custom-select" id="subseccion" name="subseccion" required>
              <option value="">Seleccione Sub-Secci&oacute;n</option>
              <option value="1">Municipal</option>
              <option value="2">Provincial</option>
              <option value="3">Nacional</option>
              <option value="4">Internacional</option>
            </select>
				</div>
				<div class="col-md-3 form-group">
          <select class="custom-select" id="destacado" name="destacado" onclick="CargarOrdenDestacado();">
              <option value="">Seleccione si es Destacado</option>
              <option value="1">Primicia[1]</option>
              <option value="2">Principal[5]</option>
              <option value="3">Izquierdo[5]</option>
            </select>
				</div>
        <div class="col-md-3 form-group" id="box_Destacado" style="display: none">
          <select class="custom-select" id="ordenDestacadoDestacado" name="ordenDestacadoDestacado">
              <option value="">Seleccione el orden si es Destacado</option>
              <option value="1" selected="selected" >Primero</option> 
            </select>
				</div>
        <div class="col-md-3 form-group" id="box_Principal" style="display: none">
          <select class="custom-select" id="ordenDestacadoPrincipal" name="ordenDestacadoPrincipal">
              <option value="">Seleccione el orden si es Destacado</option>
              <option value="1">Primero</option>
              <option value="2">Segundo</option>
              <option value="3">Tercero</option>
              <option value="4">Cuarto</option>
              <option value="5">Quinto</option>
            </select>
				</div>
        <div class="col-md-3 form-group" id="box_Izquierda" style="display: none">
          <select class="custom-select" id="ordenDestacadoIzquierdo" name="ordenDestacadoIzquierdo">
              <option value="">Seleccione el orden si es Destacado</option>
              <option value="1">Primero</option>
              <option value="2">Segundo</option>
              <option value="3">Tercero</option>
              <option value="4">Cuarto</option>
              <option value="5">Quinto</option>
            </select>
				</div>
			</div><hr>
      <div class="row">
				<div class="col-md-12 ">
          <div class="mb-3">
            <label for="validationTextarea">ETIQUETAS (no es obligatorio ingresar etiquetas y/o todas las etiquetas)</label>
            <div class="row">
              <div class="col-md-4 form-group">
                <input type="text" class="form-control" id="etiqueta1" name="etiqueta1" placeholder="Ingrese 1ra Etiqueta">
              </div>
              <div class="col-md-4 form-group">
                <input type="text" class="form-control" id="etiqueta2" name="etiqueta2" placeholder="Ingrese 2da Etiqueta">
              </div>
              <div class="col-md-4 form-group">
                <input type="text" class="form-control" id="etiqueta3" name="etiqueta3" placeholder="Ingrese 3ra Etiqueta">
              </div>
              <div class="col-md-4 form-group">
                <input type="text" class="form-control" id="etiqueta4" name="etiqueta4" placeholder="Ingrese 4ta Etiqueta">
              </div>
              <div class="col-md-4 form-group">
                <input type="text" class="form-control" id="etiqueta5" name="etiqueta5" placeholder="Ingrese 5ta Etiqueta">
              </div>
              <div class="col-md-4 form-group">
                <input type="text" class="form-control" id="etiqueta6" name="etiqueta6" placeholder="Ingrese 6ta Etiqueta">
              </div>
            </div>
          </div>
				</div>
			</div><hr>
			<div class="row">
				<div class="col-md-12">
          <div class="mb-3">
            <label for="validationTextarea">VOLANTA</label>
            <textarea class="form-control is-invalid" id="volanta" name="volanta" placeholder="Ingrese la Volanta"></textarea>
          </div>
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
            <label for="validationTextarea">COPETE</label>
            <textarea class="form-control is-invalid" id="copete" name="copete" placeholder="Ingrese el Copete" required></textarea>
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
            <label for="validationTextarea">FUENTE</label>
            <textarea class="form-control is-invalid" id="fuente" name="fuente" placeholder="Ingrese la Fuente"></textarea>
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
            mediaEmbed: {
            // configuration...
        }
         })
        .then( editor => {
          
        } )
        .catch( error => {

        } );
</script>

<script>

function CargarOrdenDestacado() {
        tipoDestacado = document.getElementById('destacado').value;
        if (tipoDestacado == "1") {
            document.getElementById('box_Destacado').style.display = "block";
            document.getElementById('ordenDestacadoPrincipal').value = "";
            document.getElementById('ordenDestacadoIzquierdo').value = "";
        } else {
            document.getElementById('box_Destacado').style.display = "none";
            document.getElementById('ordenDestacadoDestacado').value = "";
        }

        if (tipoDestacado == "2") {
            document.getElementById('box_Principal').style.display = "block";
            document.getElementById('ordenDestacadoDestacado').value = "";
            document.getElementById('ordenDestacadoIzquierdo').value = "";
        } else {
            document.getElementById('box_Principal').style.display = "none";
            document.getElementById('ordenDestacadoPrincipal').value = "";
        }

        if (tipoDestacado == "3") {
            document.getElementById('box_Izquierda').style.display = "block";
            document.getElementById('ordenDestacadoDestacado').value = "";
            document.getElementById('ordenDestacadoPrincipal').value = "";
        } else {
            document.getElementById('box_Izquierda').style.display = "none";
            document.getElementById('ordenDestacadoIzquierdo').value = "";
        }

    }
</script>