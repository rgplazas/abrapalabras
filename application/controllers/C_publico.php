<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_publico extends CI_Controller {
        function __construct() {
                parent::__construct();
                $this->load->model('M_publico');
        
        } 

	public function index()
	{
                $id_noticiaDestacada = 1;
                $id_noticiaRelevantes = 2;
                $id_noticiaRelevantesMenuIzquierdo = 3;
                $id_noticiaRelevantesMenuDerecha = 1;
                $id_seccion = 0;
                $id_seccion_editorial = 5;
                $id_seccion_columnista = 6;
                $id_seccion_entrevista = 4;
                $limiteMasLeidos = 5;
                $id_tipoMultimedia = 1;
                $primerInicio  = 1;
                $segundoInicio = 4;
                $terceroInicio = 7;
                $cuartoInicio = 10;
                $limitePrincipal = 3;

                $datosDolar['dolarHoy']                                        =   $this->M_publico->LeerDolarHoy();
                $datosInicio['noticiasDestacadas']                             =   $this->M_publico->LeerNoticiaDestacada($id_noticiaDestacada);
                $datosInicio['noticiasRelevantes']                             =   $this->M_publico->LeerNoticiaDestacada($id_noticiaRelevantes);
                $datosInicio['noticiasRelevantesMenuIzquierdo']                =   $this->M_publico->LeerNoticiaDestacada($id_noticiaRelevantesMenuIzquierdo);
                $datosInicio['noticiasRelevantesMenuDerechaEditorial']         =   $this->M_publico->LeerNoticiaDestacadaECE($id_seccion_editorial, $id_noticiaRelevantesMenuDerecha);
                $datosInicio['noticiasRelevantesMenuDerechaColumnista']        =   $this->M_publico->LeerNoticiaDestacadaECE($id_seccion_columnista, $id_noticiaRelevantesMenuDerecha);
                $datosInicio['noticiasRelevantesMenuDerechaEntrevista']        =   $this->M_publico->LeerNoticiaDestacadaECE($id_seccion_entrevista, $id_noticiaRelevantesMenuDerecha);
                $datosInicio['noticiasPlublicidades']                          =   $this->M_publico->LeerPublicidadSecciones($id_seccion,$limiteMasLeidos);
                $datosInicio['multimedias1']                                   =   $this->M_publico->LeerMultimedia($id_tipoMultimedia, $limitePrincipal, $primerInicio);
                $datosInicio['multimedias2']                                   =   $this->M_publico->LeerMultimedia($id_tipoMultimedia, $limitePrincipal, $segundoInicio);
                $datosInicio['multimedias3']                                   =   $this->M_publico->LeerMultimedia($id_tipoMultimedia, $limitePrincipal, $terceroInicio);
                $datosInicio['multimedias4']                                   =   $this->M_publico->LeerMultimedia($id_tipoMultimedia, $limitePrincipal, $cuartoInicio);
                
                $this->load->view('plantilla/cabecera', $datosDolar);
                $this->load->view('plantilla/contenedor',  $datosInicio);
                $this->load->view('plantilla/pie');
        }
        
        public function multimedia()
        {       
                // variables
                $id_tipoMultimedia = $this->uri->segment(3);
                $ordenar = 1;
                $limitePrincipal = 15;
                $limiteMasLeidos = 5;
                $seccion = 7;
                $primerInicio  = 'NULL';

                $datosDolar['dolarHoy']                                        =   $this->M_publico->LeerDolarHoy();
                $datosMulimedia['multimedias']         =   $this->M_publico->LeerMultimedia($id_tipoMultimedia, $limitePrincipal, $primerInicio);
                $datosMulimedia['multimediasLeidos']   =   $this->M_publico->LeerMultimediaMasLeidos($id_tipoMultimedia, $ordenar, $limiteMasLeidos);
                $datosMulimedia['multimediasPlublicidades']   =   $this->M_publico->LeerPublicidadSecciones($seccion,$limiteMasLeidos);
                $datosMulimedia['noticiasLeidos']   =   $this->M_publico->LeerNoticiaMasLeidos($ordenar, $limiteMasLeidos);      
                $this->load->view('plantilla/cabecera', $datosDolar);
                $this->load->view('multimedia/V_multimedia', $datosMulimedia);
                $this->load->view('plantilla/pie');
        }
        
        public function noticiaEspecifica()
        {       
                // variables
                $id_noticia = $this->uri->segment(3);
                $id_seccion = $this->uri->segment(4);
                $id_subseccion = $this->uri->segment(5);
                $ordenar = 1;
                $limiteMasLeidos = 5;
                $limitePrincipal = 'NULL';
                
                $datosNoticia['dolarHoy']                =   $this->M_publico->LeerDolarHoy();
                $datosNoticia['noticias']                =   $this->M_publico->LeerNoticiaEspecifica($id_noticia, $id_seccion, $id_subseccion, $limitePrincipal);
                $datosNoticia['noticiasEtiqueta']        =   $this->M_publico->LeerNoticiaEspecificaEtiqueta($id_noticia);
                $datosNoticia['noticiasLeidos']          =   $this->M_publico->LeerNoticiaMasLeidosSeccion($id_seccion,$id_subseccion, $ordenar, $limiteMasLeidos);
                $datosNoticia['noticiasPlublicidades']   =   $this->M_publico->LeerPublicidadSecciones($id_seccion,$limiteMasLeidos);
                $datosNoticia['noticiasMasLeidos']       =   $this->M_publico->LeerNoticiaMasLeidos($ordenar, $limiteMasLeidos);      
                //$this->load->view('plantilla/cabecera', $datosDolar);
                $this->load->view('noticia/V_noticia', $datosNoticia);
                $this->load->view('plantilla/pie');
        }
        
        public function leerContenidoSeccion()
        {       
                // variables
                $id_noticia = 'NULL';
                $id_seccion = $this->uri->segment(3);
                $id_subseccion = $this->uri->segment(4);
                $ordenar = 1;
                $limitePrincipal = 15;
                $limiteMasLeidos = 5;
                if (($id_seccion == 4) or ($id_seccion == 5) or ($id_seccion == 6)) {

                        $datosSeccion['secciones']                 =   $this->M_publico->LeerNoticiaEspecifica($id_noticia, $id_seccion, $id_subseccion, $limitePrincipal);
                        $datosSeccion['seccionesLeidos']           =   $this->M_publico->LeerNoticiaMasLeidosSeccion($id_seccion,$id_subseccion, $ordenar, $limiteMasLeidos);
                        $datosSeccion['seccionesPlublicidades']    =   $this->M_publico->LeerPublicidadSecciones($id_seccion,$limiteMasLeidos);

                }else{
                        $datosSeccion['secciones']                 =   $this->M_publico->LeerNoticiaEspecifica($id_noticia, $id_seccion, $id_subseccion, $limitePrincipal);
                        $datosSeccion['seccionesLeidos']           =   $this->M_publico->LeerNoticiaMasLeidosSeccion($id_seccion,$id_subseccion, $ordenar, $limiteMasLeidos);
                        $datosSeccion['seccionesPlublicidades']    =   $this->M_publico->LeerPublicidadSecciones($id_seccion,$limiteMasLeidos);
                        
                }
                        $datosDolar['dolarHoy']                                        =   $this->M_publico->LeerDolarHoy();
                        $datosSeccion['seccionesMasLeidos']        =   $this->M_publico->LeerNoticiaMasLeidos($ordenar, $limiteMasLeidos);
                
                $this->load->view('plantilla/cabecera', $datosDolar);
                $this->load->view('seccion/V_seccion', $datosSeccion);
                $this->load->view('plantilla/pie');
        }
        
        public function leerBusquedaNoticia()
        {       
                // variables

                $busqueda = $this->input->post('hidden_buscar');
                
                $datosbusqueda['buscador']                 =   $this->M_publico->LeerBuscador($busqueda);
                
                $datosDolar['dolarHoy']                                        =   $this->M_publico->LeerDolarHoy();
                $this->load->view('plantilla/cabecera', $datosDolar);
                $this->load->view('seccion/V_buscarNoticia', $datosbusqueda);
                $this->load->view('plantilla/pie');
        }

        public function leerBusquedaNoticiaEtiqueta()
        {       
                // variables

                $busqueda = $this->input->post('hidden_buscarEtiqueta');
                
                $datosbusqueda['buscador']                 =   $this->M_publico->LeerBuscador($busqueda);
                
                $datosDolar['dolarHoy']                                        =   $this->M_publico->LeerDolarHoy();
                $this->load->view('plantilla/cabecera', $datosDolar);
                $this->load->view('seccion/V_buscarNoticia', $datosbusqueda);
                $this->load->view('plantilla/pie');
        }
        
        public function vistaContacto(){
                $datosDolar['dolarHoy']                                        =   $this->M_publico->LeerDolarHoy();
                $this->load->view('plantilla/cabecera', $datosDolar);
                $this->load->view('plantilla/contacto');
                $this->load->view('plantilla/pie');
    
        }
        
        public function enviarContacto(){
                if (isset($_POST['fname'])){
                        $nombres=htmlentities($_POST['fname']);
                        $email_cliente=htmlentities($_POST['email']);
                        $telefono=htmlentities($_POST['phone']);
                        $subject=utf8_decode($_POST['subject']);
                        $mensaje=htmlentities($_POST['message']);
        
                        
                /*SIGUE RECOLECTANDO DATOS PARA FUNCION MAIL*/
                $message = '';
                $message .= '<p>Hola, ha sido registrado un nuevo mensaje desde el abrapalabras.com.ar, según el detalle siguiente:</p> ';
                $message .= '<p>Cliente: '.$nombres.'</p> ';
                $message .= '<p>Email: '.$email_cliente.'</p> ';
                $message .= '<p>Teléfono: '.$telefono.'</p> ';
                $message .= '<p>Mensaje: '.$mensaje.'</p> ';
                
                
        
                
                $header = "MIME-Version: 1.0\r\n";
                $header .= "Content-type: text/html; charset=UTF-8\r\n";
                $header .= "From: ". $nombres . " <" . $email_cliente . ">\r\n";
                //$email='rgplazas1990@gmail.com';//Ingresa tu dirección de correo
                $email='crcesarlopez@hotmail.com';//Ingresa tu dirección de correo
                
                                
                if (mail($email,$subject,$message,$header)){
                        //echo 'success';
                        redirect(base_url("index.php/C_publico/vistaContacto"));
                }	 else {
                        //echo 'No se pudo enviar el mensaje.';
                        redirect(base_url("index.php/C_publico/vistaContacto"));
                }
                /*FINALIZA RECOLECTANDO DATOS PARA FUNCION MAIL*/
                                
                }   
        }

}
