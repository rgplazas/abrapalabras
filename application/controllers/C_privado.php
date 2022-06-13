<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_privado extends CI_Controller {
        function __construct() {
                parent::__construct();
                $this->load->model('M_privado');
                $this->load->model('M_publico');
                $this->load->library('session');
        
        } 

        public function index() {
                if ($this->session->userdata('is_logged_in') !== 1) {                  
                    $dataSesion['error']   =   'no';
                    $this->load->view('login/cabecera');
                    $this->load->view('login/contenedor', $dataSesion);
                    $this->load->view('login/pie');
                } else {
                        $datosDolar['dolarHoy'] =   $this->M_publico->LeerDolarHoy();
                        $this->load->view('plantilla/cabecera', $datosDolar);
                        $this->load->view('login/V_vistaOpciones');
                        $this->load->view('plantilla/pie');
                }
        }

        public function logout() {                
             $this->session->sess_destroy();
             redirect(base_url());
        }

        public function validarEntrada() {
                
                $username                =   $this->input->post('inputUsuario');
                $password                =   SHA1($this->input->post('inputPassword'));
                $consulta                =   $this->M_privado->ValidarEntrada($username, $password); 
                
                if (!empty($consulta)) {
                    $datos_usuario   =   $this->M_privado->ObtenerDatosUsuario();
                    $this->session->set_userdata($datos_usuario);
                    $datosDolar['dolarHoy'] =   $this->M_publico->LeerDolarHoy();
                    $this->load->view('plantilla/cabecera', $datosDolar);
                    $this->load->view('login/V_vistaOpciones');
                    $this->load->view('plantilla/pie');
                } else {
                    $dataSesion['error']   =   'si';
                    $this->load->view('login/cabecera');
                    $this->load->view('login/contenedor', $dataSesion);
                    $this->load->view('login/pie');
                }
        }

        public function actualizarDolar(){
                date_default_timezone_set("America/Argentina/Buenos_Aires");
                $dolarCompra               =   $this->input->post('inputDolarCompra');
                $dolarVenta                =   $this->input->post('inputDolarVenta');
                $fechaHoraActual           =   date("Y-m-d H:i:s");

                $actualizacion             =   $this->M_privado->ActualizarPrecioDolar($dolarCompra, $dolarVenta, $fechaHoraActual);
                if ($actualizacion == 1) {
                        redirect(base_url());
                }else{
                        redirect(base_url());
                }
        }

        public function eliminarNoticia(){

                date_default_timezone_set("America/Argentina/Buenos_Aires");
                $fechaHoraActual           =   date("Y-m-d H:i:s");
                $id_noticia = $this->uri->segment(3);

                $eliminacion             =   $this->M_privado->EliminarNoticia($id_noticia);
                if ($eliminacion == 1) {
                        redirect(base_url());
                }else{
                        redirect(base_url());
                }
        }

        public function vistaAgregarNoticia(){

                $datosDolar['dolarHoy']                                        =   $this->M_publico->LeerDolarHoy();
                $this->load->view('plantilla/cabecera', $datosDolar);
                $this->load->view('noticia/V_agregarNoticia');
                $this->load->view('plantilla/pie');
        }

        public function agregarNoticia(){
                date_default_timezone_set("America/Argentina/Buenos_Aires");
                $fechaHoraActual        =   date("Y-m-d H:i:s");
                $seccion                =   $this->input->post('seccion');
                $subseccion             =   $this->input->post('subseccion');
                $destacado              =   $this->input->post('destacado');
                $ordenDestacado = "";
                if(($this->input->post('ordenDestacadoDestacado') == "" ) or ($this->input->post('ordenDestacadoDestacado') == 1 )){
                        $ordenDestacado         =   1;
                }
                if($this->input->post('ordenDestacadoPrincipal')){
                        $ordenDestacado         =   $this->input->post('ordenDestacadoPrincipal');
                }
                if($this->input->post('ordenDestacadoIzquierdo')){
                        $ordenDestacado         =   $this->input->post('ordenDestacadoIzquierdo');
                }

                $etiqueta1              =   $this->input->post('etiqueta1');
                $etiqueta2              =   $this->input->post('etiqueta2');
                $etiqueta3              =   $this->input->post('etiqueta3');
                $etiqueta4              =   $this->input->post('etiqueta4');
                $etiqueta5              =   $this->input->post('etiqueta5');
                $etiqueta6              =   $this->input->post('etiqueta6');

                $volanta                =   $this->input->post('volanta');
                $contenidoImagen        =   "";
                $contenidoVideo         =   $this->input->post('contenidoVideo');
                $titulo                 =   $this->input->post('titulo');
                $copete                 =   $this->input->post('copete');
                $texto                  =   $this->input->post('texto');
                $fuente                 =   $this->input->post('fuente');
                
                /*Inicio Subir imagen al Servidor*/
                $config['upload_path'] = './assets/img/';
                $config['allowed_types'] = 'gif|jpg|png|jpeg|webp';
                $config['max_size'] = '2048';
                $config['encrypt_name'] = TRUE;
                $this->load->library('upload', $config);
                if (!$this->upload->do_upload("contenidoImagen")) {
                //echo $this->upload->display_errors(); exit();
                $contenidoImagen        =   "";
                } else {     
                $data = array('upload_data' => $this->upload->data());
                $img_full_path = $config['upload_path'] . $data['upload_data']['file_name'];
                
                $contenidoImagen       =   $data['upload_data']['file_name']; /*Nombre del archivo guardado*/

                
                // REDIMENSIONAMOS
                $config['image_library'] = 'gd2';
                $config['source_image'] = $img_full_path;
                $config['maintain_ratio'] = TRUE;
                $config['width'] = 1250;
                $config['height'] = 850;
                $config['new_image'] = './assets/img/'. $data['upload_data']['file_name'];
                $img_redim1 = $config['new_image'];
                $this->load->library('image_lib', $config);
                if (!$this->image_lib->resize()) {
                        @unlink($img_full_path);
                        echo $this->image_lib->display_errors(); exit();
                }
                $this->image_lib->clear();

                // REDIMENSIONAMOS DE NUEVO
                $config['image_library'] = 'gd2';
                $config['source_image'] = $img_full_path;
                $config['maintain_ratio'] = TRUE;
                $config['width'] = 1250;
                $config['height'] = 850;
                $config['new_image'] = './assets/img/'. $data['upload_data']['file_name'];
                $this->image_lib->initialize($config); /// <<- IMPORTANTE
                if (!$this->image_lib->resize()) {
                        @unlink($img_full_path);
                        @unlink($img_redim1);
                        echo $this->image_lib->display_errors(); exit();
                }
                }
                /*Fin Subir imagen al Servidor*/     

                

                $agregar             =   $this->M_privado->AgregarNoticia($fechaHoraActual, $seccion, $subseccion, $destacado, $volanta, $contenidoImagen, $contenidoVideo, $titulo, $copete, $texto, $fuente, $ordenDestacado, $etiqueta1, $etiqueta2, $etiqueta3, $etiqueta4, $etiqueta5, $etiqueta6);
                if ($agregar == 1) {
                        redirect(base_url());
                }else{
                        redirect(base_url());
                }
        }

        public function actualizarPlublicidad(){
                
                $id_seccion = $this->input->post('inputSeccion');
                $orden      = $this->input->post('inputOrden');
                $linck      = $this->input->post('inputlinck');
                $ancho      = $this->input->post('inputAlto');
                $alto       = $this->input->post('inputAncho');
                $contenidoImagen        =   $this->input->post('contenidoImagen');

                /*Inicio Subir imagen al Servidor*/
                $config['upload_path'] = './assets/img/';
                // $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['allowed_types'] = '*';
                $config['max_size'] = '2048';
                $config['encrypt_name'] = TRUE;
                $this->load->library('upload', $config);
                if (!$this->upload->do_upload("contenidoImagen")) {
                echo $this->upload->display_errors(); exit();
                } else {     
                $data = array('upload_data' => $this->upload->data());
                $img_full_path = $config['upload_path'] . $data['upload_data']['file_name'];
                
                $contenidoImagen       =   $data['upload_data']['file_name']; /*Nombre del archivo guardado*/

                
                // REDIMENSIONAMOS
                $config['image_library'] = 'gd2';
                $config['source_image'] = $img_full_path;
                $config['maintain_ratio'] = TRUE;
                $config['width'] = $ancho;
                $config['height'] = $alto;
                $config['new_image'] = './assets/img/'. $data['upload_data']['file_name'];
                $img_redim1 = $config['new_image'];
                $this->load->library('image_lib', $config);
                if (!$this->image_lib->resize()) {
                        @unlink($img_full_path);
                        echo $this->image_lib->display_errors(); exit();
                }
                $this->image_lib->clear();

                // REDIMENSIONAMOS DE NUEVO
                $config['image_library'] = 'gd2';
                $config['source_image'] = $img_full_path;
                $config['maintain_ratio'] = TRUE;
                $config['width'] = $ancho;
                $config['height'] = $alto;
                $config['new_image'] = './assets/img/'. $data['upload_data']['file_name'];
                $this->image_lib->initialize($config); /// <<- IMPORTANTE
                if (!$this->image_lib->resize()) {
                        @unlink($img_full_path);
                        @unlink($img_redim1);
                        echo $this->image_lib->display_errors(); exit();
                }
                }
                /*Fin Subir imagen al Servidor*/
                $agregar             =   $this->M_privado->AgregarPublicidad($id_seccion, $contenidoImagen, $orden, $linck);
                if ($agregar == 1) {
                        redirect(base_url());
                }else{
                        redirect(base_url());
                }     
        }

        public function vistaAgregarEditorialColumnaEntrevista(){
                               
                $datosEditorialColumnistaEntrevista['editorialColumnistaEntrevista'] =   $this->M_privado->LeerAutor();
                
                $datosDolar['dolarHoy']                                              =   $this->M_publico->LeerDolarHoy();
                $this->load->view('plantilla/cabecera', $datosDolar);
                $this->load->view('noticia/V_agregarEditorialColumnaEntrevista', $datosEditorialColumnistaEntrevista);
                $this->load->view('plantilla/pie');
        }

        public function agregarEditorialColumnaEntrevista(){
                date_default_timezone_set("America/Argentina/Buenos_Aires");
                $fechaHoraActual        =   date("Y-m-d H:i:s");
                $seccion                =   $this->input->post('seccion');
                $subseccion             =   $this->input->post('subseccion');
                $contenidoImagen        =   "";
                $contenidoVideo         =   $this->input->post('contenidoVideo');
                $titulo                 =   $this->input->post('titulo');
                $copete                 =   $this->input->post('copete');
                $texto                  =   $this->input->post('texto');
                $fuente                 =   $this->input->post('fuente');
                
                /*Inicio Subir imagen al Servidor*/
                $config['upload_path'] = './assets/img/';
                $config['allowed_types'] = 'gif|jpg|png|jpeg|webp';
                $config['max_size'] = '2048';
                $config['encrypt_name'] = TRUE;
                $this->load->library('upload', $config);
                if (!$this->upload->do_upload("contenidoImagen")) {
                //echo $this->upload->display_errors(); exit();
                $contenidoImagen        =   "";
                } else {     
                $data = array('upload_data' => $this->upload->data());
                $img_full_path = $config['upload_path'] . $data['upload_data']['file_name'];
                
                $contenidoImagen       =   $data['upload_data']['file_name']; /*Nombre del archivo guardado*/

                
                // REDIMENSIONAMOS
                $config['image_library'] = 'gd2';
                $config['source_image'] = $img_full_path;
                $config['maintain_ratio'] = TRUE;
                $config['width'] = 1250;
                $config['height'] = 850;
                $config['new_image'] = './assets/img/'. $data['upload_data']['file_name'];
                $img_redim1 = $config['new_image'];
                $this->load->library('image_lib', $config);
                if (!$this->image_lib->resize()) {
                        @unlink($img_full_path);
                        echo $this->image_lib->display_errors(); exit();
                }
                $this->image_lib->clear();

                // REDIMENSIONAMOS DE NUEVO
                $config['image_library'] = 'gd2';
                $config['source_image'] = $img_full_path;
                $config['maintain_ratio'] = TRUE;
                $config['width'] = 1250;
                $config['height'] = 850;
                $config['new_image'] = './assets/img/'. $data['upload_data']['file_name'];
                $this->image_lib->initialize($config); /// <<- IMPORTANTE
                if (!$this->image_lib->resize()) {
                        @unlink($img_full_path);
                        @unlink($img_redim1);
                        echo $this->image_lib->display_errors(); exit();
                }
                }
                /*Fin Subir imagen al Servidor*/
                
                     
                $agregar             =   $this->M_privado->AgregarEditorialColumnaEntrevista($fechaHoraActual, $seccion, $subseccion, $contenidoImagen, $contenidoVideo, $titulo, $copete, $texto, $fuente);
                if ($agregar == 1) {
                        redirect(base_url());
                }else{
                        redirect(base_url());
                }
        }

        public function agregarAutor(){
        
                $ancho      = $this->input->post('inputAlto');
                $alto       = $this->input->post('inputAncho');
                $contenidoImagen        =   $this->input->post('contenidoImagenAutor');
                $nombreAutor        =   $this->input->post('nombreAutor');

                /*Inicio Subir imagen al Servidor*/
                $config['upload_path'] = './assets/img/';
                // $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['allowed_types'] = '*';
                $config['max_size'] = '2048';
                $config['encrypt_name'] = TRUE;
                $this->load->library('upload', $config);
                if (!$this->upload->do_upload("contenidoImagenAutor")) {
                echo $this->upload->display_errors(); exit();
                } else {     
                $data = array('upload_data' => $this->upload->data());
                $img_full_path = $config['upload_path'] . $data['upload_data']['file_name'];
                
                $contenidoImagen       =   $data['upload_data']['file_name']; /*Nombre del archivo guardado*/

                
                // REDIMENSIONAMOS
                $config['image_library'] = 'gd2';
                $config['source_image'] = $img_full_path;
                $config['maintain_ratio'] = TRUE;
                $config['width'] = $ancho;
                $config['height'] = $alto;
                $config['new_image'] = './assets/img/'. $data['upload_data']['file_name'];
                $img_redim1 = $config['new_image'];
                $this->load->library('image_lib', $config);
                if (!$this->image_lib->resize()) {
                        @unlink($img_full_path);
                        echo $this->image_lib->display_errors(); exit();
                }
                $this->image_lib->clear();

                // REDIMENSIONAMOS DE NUEVO
                $config['image_library'] = 'gd2';
                $config['source_image'] = $img_full_path;
                $config['maintain_ratio'] = TRUE;
                $config['width'] = $ancho;
                $config['height'] = $alto;
                $config['new_image'] = './assets/img/'. $data['upload_data']['file_name'];
                $this->image_lib->initialize($config); /// <<- IMPORTANTE
                if (!$this->image_lib->resize()) {
                        @unlink($img_full_path);
                        @unlink($img_redim1);
                        echo $this->image_lib->display_errors(); exit();
                }
                }
                /*Fin Subir imagen al Servidor*/
                $agregar             =   $this->M_privado->AgregarAutor($nombreAutor, $contenidoImagen);
                if ($agregar == 1) {
                        redirect(base_url());
                }else{
                        redirect(base_url());
                }     
        }
        
        public function vistaEditarNoticia(){

                $id_noticia = $this->uri->segment(3);
                $id_seccion = $this->uri->segment(4);
                $id_subseccion = $this->uri->segment(5);
                $limitePrincipal = 'NULL';

                $datosDolar['dolarHoy']                  =   $this->M_publico->LeerDolarHoy();
                $datosNoticia['noticias']                =   $this->M_publico->LeerNoticiaEspecifica($id_noticia, $id_seccion, $id_subseccion, $limitePrincipal);
                $datosNoticia['noticiasEtiqueta']        =   $this->M_publico->LeerNoticiaEspecificaEtiqueta($id_noticia);
               
                
                $this->load->view('plantilla/cabecera', $datosDolar);
                $this->load->view('noticia/V_editarNoticia', $datosNoticia);
                $this->load->view('plantilla/pie');
        }

        public function editarNoticia(){

                $id_noticia = $this->input->post('id_noticia');
                date_default_timezone_set("America/Argentina/Buenos_Aires");
                $fechaHoraActual        =   date("Y-m-d H:i:s");
                $seccion                =   $this->input->post('seccion');
                $subseccion             =   $this->input->post('subseccion');
                $destacado              =   $this->input->post('destacado');
                $ordenDestacado = $this->input->post('ordenDestacadoDestacado');
                if($this->input->post('ordenDestacadoDestacado')){
                        $ordenDestacado         =   $this->input->post('ordenDestacadoDestacado');
                }
                if($this->input->post('ordenDestacadoPrincipal')){
                        $ordenDestacado         =   $this->input->post('ordenDestacadoPrincipal');
                }
                if($this->input->post('ordenDestacadoIzquierdo')){
                        $ordenDestacado         =   $this->input->post('ordenDestacadoIzquierdo');
                }
                $id_noticiaEtiqueta1       =   $this->input->post('id_noticiaEtiqueta1');
                $etiqueta1                =   $this->input->post('etiqueta1');
                
                $id_noticiaEtiqueta2       =   $this->input->post('id_noticiaEtiqueta2');
                $etiqueta2                =   $this->input->post('etiqueta2');
                
                $id_noticiaEtiqueta3       =   $this->input->post('id_noticiaEtiqueta3');
                $etiqueta3                =   $this->input->post('etiqueta3');
                
                $volanta                  =   $this->input->post('volanta');
                $contenidoImagen        =   $this->input->post('contenidoImagen');
                $contenidoVideo         =   $this->input->post('contenidoVideo');
                $titulo                 =   $this->input->post('titulo');
                $copete                 =   $this->input->post('copete');
                $texto                  =   $this->input->post('texto');
                $fuente                 =   $this->input->post('fuente');
                
                $edicion             =   $this->M_privado->EditarNoticia($id_noticia, $fechaHoraActual, $seccion, $subseccion, $destacado, $volanta, $contenidoImagen, $contenidoVideo, $titulo, $copete, $texto, $fuente, $ordenDestacado, $etiqueta1, $etiqueta2, $etiqueta3, $id_noticiaEtiqueta1, $id_noticiaEtiqueta2, $id_noticiaEtiqueta3);
                if ($edicion == 1) {
                        redirect(base_url());
                }else{
                        redirect(base_url());
                }
        }
        
        public function vistaEditarEditorialColumnistaEntrevista(){

                $id_noticia = $this->uri->segment(3);
                $id_seccion = $this->uri->segment(4);
                $id_subseccion = $this->uri->segment(5);
                $limitePrincipal = 'NULL';

                $datosDolar['dolarHoy']                  =   $this->M_publico->LeerDolarHoy();
                $datosNoticia['noticias']                =   $this->M_publico->LeerNoticiaEspecifica($id_noticia, $id_seccion, $id_subseccion, $limitePrincipal);
                $datosNoticia['editorialColumnistaEntrevista'] =   $this->M_privado->LeerAutor();
                
                
                $this->load->view('plantilla/cabecera', $datosDolar);
                $this->load->view('noticia/V_editarEditorialColumnaEntrevista', $datosNoticia);
                $this->load->view('plantilla/pie');
        }

        public function editarEditorialColumnaEntrevista(){

                $id_noticia = $this->input->post('id_noticia');
                date_default_timezone_set("America/Argentina/Buenos_Aires");
                $fechaHoraActual        =   date("Y-m-d H:i:s");
                $seccion                =   $this->input->post('seccion');
                $subseccion             =   $this->input->post('subseccion');
                $contenidoImagen        =   $this->input->post('contenidoImagen');
                $contenidoVideo         =   $this->input->post('contenidoVideo');
                $titulo                 =   $this->input->post('titulo');
                $copete                 =   $this->input->post('copete');
                $texto                  =   $this->input->post('texto');
                $fuente                 =   $this->input->post('fuente');

                $edicion             =   $this->M_privado->EditarEditorialColumnaEntrevista($id_noticia, $fechaHoraActual, $seccion, $subseccion, $contenidoImagen, $contenidoVideo, $titulo, $copete, $texto, $fuente);
                if ($edicion == 1) {
                        redirect(base_url());
                }else{
                        redirect(base_url());
                }
        }

        public function eliminarEditorialColumnaEntrevista(){

                date_default_timezone_set("America/Argentina/Buenos_Aires");
                $fechaHoraActual           =   date("Y-m-d H:i:s");
                $id_noticia = $this->uri->segment(3);

                $eliminacion             =   $this->M_privado->EliminarEditorialColumnaEntrevista($id_noticia);
                if ($eliminacion == 1) {
                        redirect(base_url());
                }else{
                        redirect(base_url());
                }
        }
        
}
