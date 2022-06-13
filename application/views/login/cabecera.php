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
<html lang="es">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Abra palabras | Todo por decir</title>

  <!-- Bootstrap core CSS -->
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i|Roboto:400,400i,700,700i,900,900i&display=swap" rel="stylesheet"> <!-- FUENTES -->
  <link href="<?php echo base_url().'assets/bootstrap/css/bootstrap.min.css'; ?>" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="<?php echo base_url().'assets/css/shop-homepage.css'; ?>" rel="stylesheet">
  <!-- icons Fontawesome 5 Icons -->
  <link href="<?php echo base_url().'assets/plugin/fontawesome/css/all.min.css'; ?>" rel="stylesheet" type="text/css" />
  <!-- Estilo Propio CSS -->
  <link href="<?php echo base_url().'assets/css/estilos.css'; ?>" rel="stylesheet" type="text/css" />
  <body>
  <div id="fb-root"></div>
  <!-- Navigation -->
  <nav class="navbar navbar-light bg-white fixed-top" style='background-color: #ffffff'>
    <div class="container-fluid">
      <div  class="col-12"><!--solo se visualiza modo mobil-->
          <a href="<?php echo base_url()?>">
            <img src="<?php echo base_url().'assets/img/abrapalabras.svg'; ?>"class="img-fluid rounded mx-auto d-block" width="300" height="300" alt="Logo del sitio">
          </a>
      </div>
    </div>
  </nav>
</head>
