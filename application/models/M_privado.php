<?php

class M_privado extends CI_Model {


    Function ValidarEntrada($username, $password) {
        $input_id_username = "'".$username."'";
        $input_id_contraseña = "'".$password."'";
        $sqlProcedure = "CALL u604865879_notic.Proc_LeerUsuario(".$input_id_username.", ".$input_id_contraseña.")";
        
        $ResultSet   =   array();
        
        /* execute multi query */
        if (mysqli_multi_query($this->db->conn_id, $sqlProcedure)) {
            do {
                if (false != $result = mysqli_store_result($this->db->conn_id)) {
                    while ($row = $result->fetch_assoc()) {
                        $obj = (object)[];
                        if (isset($row['id_usuario'])){
                            $obj->id_usuario = $row['id_usuario'];
                            $obj->nombreUsuario     = $row['nombreUsuario'];
                            $obj->contrasenia       = $row['contrasenia'];
                            $obj->id_perfil         = $row['id_perfil'];
                            $obj->is_logged_in      = true;
                        
                            $ResultSet[] = $obj;
                        }
                    }
                }
            }
            while(mysqli_more_results($this->db->conn_id) && mysqli_next_result($this->db->conn_id));
        }

        return $ResultSet;

    }

    public function ObtenerDatosUsuario(){
        $this->db->select('u.id_usuario, 
                           u.nombreUsuario, 
                           u.contrasenia,
                           u.id_perfil');
        $this->db->from('vadt_usuarios as u');
        $this->db->where('u.nombreusuario', $this->input->post('inputUsuario'));
        $this->db->where('u.contrasenia', SHA1($this->input->post('inputPassword')));
        $this->db->where('u.activo', 1);
        $consulta   =   $this->db->get();

        if (count($consulta->result()) > 0) {
            foreach ($consulta->result() as $resultado):
                
                //Se arma un array con todos los datos del usuario.
                $datos   =   array('id_usuario'        =>   $resultado->id_usuario,
                                   'nombreUsuario'     =>   $resultado->nombreUsuario,
                                   'contrasenia'       =>   $resultado->contrasenia,
                                   'is_logged_in'      =>   1,
                                   'id_perfil'         =>   $resultado->id_perfil
                );
                return $datos;
            endforeach;
        }
    }

    Function ActualizarPrecioDolar($dolarCompra, $dolarVenta, $fechaHoraActual) {
        $input_dolarCompra = "'".$dolarCompra."'";
        $input_dolarVenta = "'".$dolarVenta."'";
        $input_fechaHoraActual = "'".$fechaHoraActual."'";
        
        $sqlProcedure = "CALL u604865879_notic.Proc_ActualizarDolarHoy(".$input_dolarCompra.", ".$input_dolarVenta.", ".$input_fechaHoraActual.")";
        
        $ResultSet   =   array();
        
        /* execute multi query */
        if (mysqli_multi_query($this->db->conn_id, $sqlProcedure)) {
			do {
				if (false != $result = mysqli_store_result($this->db->conn_id)) {
					while ($row = $result->fetch_assoc()) {
						if (isset($row['resultado'])){
							$ResultSet = $row['resultado'];
						}
					}
				}
			}
			while(mysqli_more_results($this->db->conn_id) && mysqli_next_result($this->db->conn_id));
		}else{
			echo '0';
		}

        return $ResultSet;

    }

    Function EliminarNoticia($id_noticia) {
        $input_id_noticia = "'".$id_noticia."'";
        $input_fechaHoraActual = "'".$fechaHoraActual."'";
        
        $sqlProcedure = "CALL u604865879_notic.Proc_EliminarNoticia(".$input_id_noticia.")";
        
        $ResultSet   =   array();
        
        /* execute multi query */
        if (mysqli_multi_query($this->db->conn_id, $sqlProcedure)) {
			do {
				if (false != $result = mysqli_store_result($this->db->conn_id)) {
					while ($row = $result->fetch_assoc()) {
						if (isset($row['resultado'])){
							$ResultSet = $row['resultado'];
						}
					}
				}
			}
			while(mysqli_more_results($this->db->conn_id) && mysqli_next_result($this->db->conn_id));
		}else{
			echo '0';
		}

        return $ResultSet;

    }

    Function EditarNoticia($id_noticia, $fechaHoraActual, $seccion, $subseccion, $destacado, $volanta, $contenidoImagen, $contenidoVideo, $titulo, $copete, $texto, $fuente, $ordenDestacado, $etiqueta1, $etiqueta2, $etiqueta3, $id_noticiaEtiqueta1, $id_noticiaEtiqueta2, $id_noticiaEtiqueta3) {
        $input_id_noticia = "'".$id_noticia."'";
        $input_fechaHoraActual = "'".$fechaHoraActual."'";
        $input_seccion         = "'".$seccion."'";
        $input_subseccion      = "'".$subseccion."'";
        $input_destacado       = "'".$destacado."'";
        $input_volanta         = "'".$volanta."'";
        $input_contenidoImagen = "'".$contenidoImagen."'";
        $input_contenidoVideo  = "'".$contenidoVideo."'";
        $input_titulo          = "'".$titulo."'";
        $input_copete          = "'".$copete."'";
        $input_texto           = "'".$texto."'";
        $input_fuente          = "'".$fuente."'";
        $input_ordenDestacado  = "'".$ordenDestacado."'";
        $input_etiqueta1  = "'".$etiqueta1."'";
        $input_etiqueta2  = "'".$etiqueta2."'";
        $input_etiqueta3  = "'".$etiqueta3."'";
        $input_id_noticiaEtiqueta1  = "'".$id_noticiaEtiqueta1."'";
        $input_id_noticiaEtiqueta2  = "'".$id_noticiaEtiqueta2."'";
        $input_id_noticiaEtiqueta3  = "'".$id_noticiaEtiqueta3."'";
        
        $sqlProcedure = "CALL u604865879_notic.Proc_EditarNoticia(".$input_id_noticia.", ".$input_fechaHoraActual.", ".$input_seccion.", ".$input_subseccion.", ".$input_destacado.", ".$input_volanta.", ".$input_contenidoImagen.", ".$input_contenidoVideo.", ".$input_titulo.", ".$input_copete.", ".$input_texto.", ".$input_fuente.", ".$input_ordenDestacado.", ".$input_etiqueta1.", ".$input_etiqueta2.", ".$input_etiqueta3.", ".$input_id_noticiaEtiqueta1.", ".$input_id_noticiaEtiqueta2.", ".$input_id_noticiaEtiqueta3.")";
        
        $ResultSet   =   array();
        
        /* execute multi query */
        if (mysqli_multi_query($this->db->conn_id, $sqlProcedure)) {
			do {
				if (false != $result = mysqli_store_result($this->db->conn_id)) {
					while ($row = $result->fetch_assoc()) {
						if (isset($row['resultado'])){
							$ResultSet = $row['resultado'];
						}
					}
				}
			}
			while(mysqli_more_results($this->db->conn_id) && mysqli_next_result($this->db->conn_id));
		}else{
			echo '0';
		}

        return $ResultSet;

    }

    Function AgregarNoticia($fechaHoraActual, $seccion, $subseccion, $destacado, $volanta, $contenidoImagen, $contenidoVideo, $titulo, $copete, $texto, $fuente, $ordenDestacado, $etiqueta1, $etiqueta2, $etiqueta3, $etiqueta4, $etiqueta5, $etiqueta6) {
        $input_fechaHoraActual = "'".$fechaHoraActual."'";
        $input_seccion         = "'".$seccion."'";
        $input_subseccion      = "'".$subseccion."'";
        $input_destacado       = "'".$destacado."'";
        $input_volanta         = "'".$volanta."'";
        $input_contenidoImagen = "'".$contenidoImagen."'";
        $input_contenidoVideo  = "'".$contenidoVideo."'";
        $input_titulo          = "'".$titulo."'";
        $input_copete          = "'".$copete."'";
        $input_texto           = "'".$texto."'";
        $input_fuente          = "'".$fuente."'";
        $input_ordenDestacado  = "'".$ordenDestacado."'";
        $input_etiqueta1       = "'".$etiqueta1."'";
        $input_etiqueta2       = "'".$etiqueta2."'";
        $input_etiqueta3       = "'".$etiqueta3."'";
        $input_etiqueta4       = "'".$etiqueta4."'";
        $input_etiqueta5       = "'".$etiqueta5."'";
        $input_etiqueta6       = "'".$etiqueta6."'";
        
        
        $sqlProcedure = "CALL u604865879_notic.Proc_AgregarNoticia(".$input_fechaHoraActual.", ".$input_seccion.", ".$input_subseccion.", ".$input_destacado.", ".$input_volanta.", ".$input_contenidoImagen.", ".$input_contenidoVideo.", ".$input_titulo.", ".$input_copete.", ".$input_texto.", ".$input_fuente.", ".$input_ordenDestacado.", ".$input_etiqueta1.", ".$input_etiqueta2.", ".$input_etiqueta3.", ".$input_etiqueta4.", ".$input_etiqueta5.", ".$input_etiqueta6.")";
        
        $ResultSet   =   array();
        
        /* execute multi query */
        if (mysqli_multi_query($this->db->conn_id, $sqlProcedure)) {
			do {
				if (false != $result = mysqli_store_result($this->db->conn_id)) {
					while ($row = $result->fetch_assoc()) {
						if (isset($row['resultado'])){
							$ResultSet = $row['resultado'];
						}
					}
				}
			}
			while(mysqli_more_results($this->db->conn_id) && mysqli_next_result($this->db->conn_id));
		}else{
			echo '0';
		}

        return $ResultSet;

    }

    Function AgregarPublicidad($seccion, $contenidoImagen, $ordenDestacado, $linck) {
        $input_seccion         = "'".$seccion."'";
        $input_contenidoImagen = "'".$contenidoImagen."'";
        $input_ordenDestacado  = "'".$ordenDestacado."'";
        $input_linck = "'".$linck."'";
        
        
        $sqlProcedure = "CALL u604865879_notic.Proc_AgregarPublicidad(".$input_seccion.", ".$input_contenidoImagen.", ".$input_ordenDestacado.", ".$input_linck.")";
        
        $ResultSet   =   array();
        
        /* execute multi query */
        if (mysqli_multi_query($this->db->conn_id, $sqlProcedure)) {
			do {
				if (false != $result = mysqli_store_result($this->db->conn_id)) {
					while ($row = $result->fetch_assoc()) {
						if (isset($row['resultado'])){
							$ResultSet = $row['resultado'];
						}
					}
				}
			}
			while(mysqli_more_results($this->db->conn_id) && mysqli_next_result($this->db->conn_id));
		}else{
			echo '0';
		}

        return $ResultSet;

    }

    Function LeerAutor(){
        
        $sqlProcedure = "CALL u604865879_notic.Proc_LeerAutor()";
        
        $ResultSet   =   array();

        /* execute multi query */
        if (mysqli_multi_query($this->db->conn_id, $sqlProcedure)) {
            do {
                if (false != $result = mysqli_store_result($this->db->conn_id)) {
                    while ($row = $result->fetch_assoc()) {
                        $obj = (object)[];
                        if (isset($row['id'])){
                            $obj->id            = $row['id'];
                            $obj->nombre        = $row['nombre'];
                            $obj->imagen        = $row['imagen'];

                            $ResultSet[] = $obj;
                        }
                    }
                }
            }
            while(mysqli_more_results($this->db->conn_id) && mysqli_next_result($this->db->conn_id));
        }

        return $ResultSet;
    }

    Function AgregarEditorialColumnaEntrevista($fechaHoraActual, $seccion, $subseccion, $contenidoImagen, $contenidoVideo, $titulo, $copete, $texto, $fuente) {
        $input_fechaHoraActual = "'".$fechaHoraActual."'";
        $input_seccion         = "'".$seccion."'";
        $input_subseccion      = "'".$subseccion."'";
        $input_contenidoImagen = "'".$contenidoImagen."'";
        $input_contenidoVideo  = "'".$contenidoVideo."'";
        $input_titulo          = "'".$titulo."'";
        $input_copete          = "'".$copete."'";
        $input_texto           = "'".$texto."'";
        $input_fuente          = "'".$fuente."'";
        
        
        $sqlProcedure = "CALL u604865879_notic.Proc_AgregarEditorialColumnaEntrevista(".$input_fechaHoraActual.", ".$input_seccion.", ".$input_subseccion.", ".$input_contenidoImagen.", ".$input_contenidoVideo.", ".$input_titulo.", ".$input_copete.", ".$input_texto.", ".$input_fuente.")";
        
        $ResultSet   =   array();
        
        /* execute multi query */
        if (mysqli_multi_query($this->db->conn_id, $sqlProcedure)) {
			do {
				if (false != $result = mysqli_store_result($this->db->conn_id)) {
					while ($row = $result->fetch_assoc()) {
						if (isset($row['resultado'])){
							$ResultSet = $row['resultado'];
						}
					}
				}
			}
			while(mysqli_more_results($this->db->conn_id) && mysqli_next_result($this->db->conn_id));
		}else{
			echo '0';
		}

        return $ResultSet;

    }

    Function AgregarAutor($nombreAutor, $contenidoImagen) {
        $input_nombreAutor         = "'".$nombreAutor."'";
        $input_contenidoImagen = "'".$contenidoImagen."'";
        
        
        $sqlProcedure = "CALL u604865879_notic.Proc_AgregarAutor(".$input_nombreAutor.", ".$input_contenidoImagen.")";
        
        $ResultSet   =   array();
        
        /* execute multi query */
        if (mysqli_multi_query($this->db->conn_id, $sqlProcedure)) {
			do {
				if (false != $result = mysqli_store_result($this->db->conn_id)) {
					while ($row = $result->fetch_assoc()) {
						if (isset($row['resultado'])){
							$ResultSet = $row['resultado'];
						}
					}
				}
			}
			while(mysqli_more_results($this->db->conn_id) && mysqli_next_result($this->db->conn_id));
		}else{
			echo '0';
		}

        return $ResultSet;

    }

    Function EditarEditorialColumnaEntrevista($id_noticia, $fechaHoraActual, $seccion, $subseccion, $contenidoImagen, $contenidoVideo, $titulo, $copete, $texto, $fuente) {
        $input_id_noticia = "'".$id_noticia."'";
        $input_fechaHoraActual = "'".$fechaHoraActual."'";
        $input_seccion         = "'".$seccion."'";
        $input_subseccion      = "'".$subseccion."'";
        $input_contenidoImagen = "'".$contenidoImagen."'";
        $input_contenidoVideo  = "'".$contenidoVideo."'";
        $input_titulo          = "'".$titulo."'";
        $input_copete          = "'".$copete."'";
        $input_texto           = "'".$texto."'";
        $input_fuente          = "'".$fuente."'";
        
        $sqlProcedure = "CALL u604865879_notic.Proc_EditarEditorialColumnaEntrevista(".$input_id_noticia.", ".$input_fechaHoraActual.", ".$input_seccion.", ".$input_subseccion.", ".$input_contenidoImagen.", ".$input_contenidoVideo.", ".$input_titulo.", ".$input_copete.", ".$input_texto.", ".$input_fuente.")";
        
        $ResultSet   =   array();
        
        /* execute multi query */
        if (mysqli_multi_query($this->db->conn_id, $sqlProcedure)) {
			do {
				if (false != $result = mysqli_store_result($this->db->conn_id)) {
					while ($row = $result->fetch_assoc()) {
						if (isset($row['resultado'])){
							$ResultSet = $row['resultado'];
						}
					}
				}
			}
			while(mysqli_more_results($this->db->conn_id) && mysqli_next_result($this->db->conn_id));
		}else{
			echo '0';
		}

        return $ResultSet;

    }

    Function EliminarEditorialColumnaEntrevista($id_noticia) {
        $input_id_noticia = "'".$id_noticia."'";
        
        $sqlProcedure = "CALL u604865879_notic.Proc_EliminarEditorialColumnaEntrevista(".$input_id_noticia.")";
        
        $ResultSet   =   array();
        
        /* execute multi query */
        if (mysqli_multi_query($this->db->conn_id, $sqlProcedure)) {
			do {
				if (false != $result = mysqli_store_result($this->db->conn_id)) {
					while ($row = $result->fetch_assoc()) {
						if (isset($row['resultado'])){
							$ResultSet = $row['resultado'];
						}
					}
				}
			}
			while(mysqli_more_results($this->db->conn_id) && mysqli_next_result($this->db->conn_id));
		}else{
			echo '0';
		}

        return $ResultSet;

    }

}
