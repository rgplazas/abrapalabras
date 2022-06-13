<?php

class M_publico extends CI_Model {

    Function LeerMultimedia($valor_id_tipoMultimedia, $valor_limitePrincipal, $valor_inicio){
        $input_id_noticia = 'NULL'; 
        $input_id_seccion = 'NULL'; 
        $input_id_subseccion = 'NULL';
        $input_id_tipoMultimedia = $valor_id_tipoMultimedia; 
        $input_ordenar = 'NULL'; 
        $input_limite = $valor_limitePrincipal;
        $input_inicio = $valor_inicio;

        $sqlProcedure = "CALL u604865879_notic.Proc_LeerMultimedia(".$input_id_noticia.", ".$input_id_seccion.", ".$input_id_subseccion.", ".$input_id_tipoMultimedia.", ".$input_ordenar.", ".$input_limite.", ".$input_inicio.")";
        
        $ResultSet   =   array();

        /* execute multi query */
        if (mysqli_multi_query($this->db->conn_id, $sqlProcedure)) {
            do {
                if (false != $result = mysqli_store_result($this->db->conn_id)) {
                    while ($row = $result->fetch_assoc()) {
                        $obj = (object)[];
                        if (isset($row['id_noticia'])){
                            $obj->id_noticia = $row['id_noticia'];
                            $obj->fecha_noticias   = $row['fecha_noticias'];
                            $obj->id_seccion       = $row['id_seccion'];
                            $obj->id_subseccion    = $row['id_subseccion'];
                            $obj->destacado        = $row['destacado'];
                            $obj->volanta          = $row['volanta'];
                            $obj->titulo           = $row['titulo'];
                            $obj->copete           = $row['copete'];
                            $obj->texto            = $row['texto'];
                            $obj->fuente           = $row['fuente'];
                            $obj->id_tipoMultimedia= $row['id_tipoMultimedia'];
                            $obj->contenido        = $row['contenido'];
                            $obj->epigrafe         = $row['epigrafe'];

                            $ResultSet[] = $obj;
                        }
                    }
                }
            }
            while(mysqli_more_results($this->db->conn_id) && mysqli_next_result($this->db->conn_id));
        }

        return $ResultSet;
    }

    Function LeerMultimediaMasLeidos($valor_id_tipoMultimedia, $valor_orden, $valor_limite){

        $input_id_noticia = 'NULL'; 
        $input_id_seccion = 'NULL'; 
        $input_id_subseccion = 'NULL';
        $input_id_tipoMultimedia = $valor_id_tipoMultimedia; 
        $input_ordenar = $valor_orden; 
        $input_limite = $valor_limite;
        $input_inicio = 'NULL';

        $sqlProcedure = "CALL u604865879_notic.Proc_LeerMultimedia(".$input_id_noticia.", ".$input_id_seccion.", ".$input_id_subseccion.", ".$input_id_tipoMultimedia.", ".$input_ordenar.", ".$input_limite.", ".$input_inicio.")";
        $ResultSet   =   array();

        /* execute multi query */
        if (mysqli_multi_query($this->db->conn_id, $sqlProcedure)) {
            do {
                if (false != $result = mysqli_store_result($this->db->conn_id)) {
                    while ($row = $result->fetch_assoc()) {
                        $obj = (object)[];
                        if (isset($row['id_noticia'])){
                            $obj->id_noticia = $row['id_noticia'];
                            $obj->fecha_noticias   = $row['fecha_noticias'];
                            $obj->id_seccion       = $row['id_seccion'];
                            $obj->id_subseccion    = $row['id_subseccion'];
                            $obj->destacado        = $row['destacado'];
                            $obj->volanta          = $row['volanta'];
                            $obj->titulo           = $row['titulo'];
                            $obj->copete           = $row['copete'];
                            $obj->texto            = $row['texto'];
                            $obj->fuente           = $row['fuente'];
                            $obj->id_tipoMultimedia= $row['id_tipoMultimedia'];
                            $obj->contenido        = $row['contenido'];
                            $obj->epigrafe         = $row['epigrafe'];

                            $ResultSet[] = $obj;
                        }
                    }
                }
            }
            while(mysqli_more_results($this->db->conn_id) && mysqli_next_result($this->db->conn_id));
        }

        return $ResultSet;
    }

    Function LeerPublicidadSecciones($valor_seccion,$valor_limite){
        $input_id_seccion = $valor_seccion; 
        $input_limite = $valor_limite;

        $sqlProcedure = "CALL u604865879_notic.Proc_LeerPublicidadSeccion(".$input_id_seccion.", ".$input_limite.")";
        $ResultSet   =   array();

        /* execute multi query */
        if (mysqli_multi_query($this->db->conn_id, $sqlProcedure)) {
            do {
                if (false != $result = mysqli_store_result($this->db->conn_id)) {
                    while ($row = $result->fetch_assoc()) {
                        $obj = (object)[];
                        if (isset($row['id_noticiasMultimedia'])){
                            $obj->id_noticiasMultimedia = $row['id_noticiasMultimedia'];
                            $obj->id_seccion   = $row['id_seccion'];
                            $obj->contenido   = $row['contenido'];
                            $obj->linck   = $row['linck'];
                            $obj->orden    = $row['orden'];

                            $ResultSet[] = $obj;
                        }
                    }
                }
            }
            while(mysqli_more_results($this->db->conn_id) && mysqli_next_result($this->db->conn_id));
        }

        return $ResultSet;
    }

    Function LeerNoticiaMasLeidos($valor_orden, $valor_limite){

        $input_id_noticia = 'NULL'; 
        $input_id_seccion = 'NULL'; 
        $input_id_subseccion = 'NULL';
        $input_id_tipoMultimedia = 'NULL'; 
        $input_ordenar = $valor_orden; 
        $input_limite = $valor_limite;

        $sqlProcedure = "CALL u604865879_notic.Proc_LeerNoticia(".$input_id_noticia.", ".$input_id_seccion.", ".$input_id_subseccion.", ".$input_id_tipoMultimedia.", ".$input_ordenar.", ".$input_limite.")";
        $ResultSet   =   array();

        /* execute multi query */
        if (mysqli_multi_query($this->db->conn_id, $sqlProcedure)) {
            do {
                if (false != $result = mysqli_store_result($this->db->conn_id)) {
                    while ($row = $result->fetch_assoc()) {
                        $obj = (object)[];
                        if (isset($row['id_noticia'])){
                            $obj->id_noticia = $row['id_noticia'];
                            $obj->fecha_noticias   = $row['fecha_noticias'];
                            $obj->id_seccion       = $row['id_seccion'];
                            $obj->id_subseccion    = $row['id_subseccion'];
                            $obj->destacado        = $row['destacado'];
                            $obj->volanta          = $row['volanta'];
                            $obj->titulo           = $row['titulo'];
                            $obj->copete           = $row['copete'];
                            $obj->texto            = $row['texto'];
                            $obj->fuente           = $row['fuente'];
                            $obj->id_tipoMultimedia= $row['id_tipoMultimedia'];
                            $obj->contenido        = $row['contenido'];
                            $obj->epigrafe         = $row['epigrafe'];

                            $ResultSet[] = $obj;
                        }
                    }
                }
            }
            while(mysqli_more_results($this->db->conn_id) && mysqli_next_result($this->db->conn_id));
        }

        return $ResultSet;
    }

    Function LeerNoticiaEspecifica($valor_id_noticia, $valor_id_seccion, $valor_id_subseccion, $valor_limite){
        $input_id_noticia = $valor_id_noticia; 
        $input_id_seccion = $valor_id_seccion; 
        $input_id_subseccion = $valor_id_subseccion;
        $input_id_tipoMultimedia = 'NULL'; 
        $input_ordenar = 'NULL'; 
        $input_limite = $valor_limite;
        if (($input_id_seccion == 4) or ($input_id_seccion == 5) or ($input_id_seccion == 6)) {
            $sqlProcedure = "CALL u604865879_notic.Proc_LeerEditorialColumnaEntrevista(".$input_id_noticia.", ".$input_id_seccion.", ".$input_id_subseccion.", ".$input_id_tipoMultimedia.", ".$input_ordenar.", ".$input_limite.")";
                
            $ResultSet   =   array();
    
            /* execute multi query */
            if (mysqli_multi_query($this->db->conn_id, $sqlProcedure)) {
                do {
                    if (false != $result = mysqli_store_result($this->db->conn_id)) {
                        while ($row = $result->fetch_assoc()) {
                            $obj = (object)[];
                            if (isset($row['subseccion'])){
                                $obj->id_noticia = $row['id_noticia'];
                                $obj->fecha_noticias   = $row['fecha_noticias'];
                                $obj->id_seccion       = $row['id_seccion'];
                                $obj->seccion          = $row['seccion'];
                                $obj->id_subseccion    = $row['id_subseccion'];
                                $obj->subseccion       = $row['subseccion'];
                                $obj->destacado        = $row['destacado'];
                                $obj->titulo           = $row['titulo'];
                                $obj->copete           = $row['copete'];
                                $obj->texto            = $row['texto'];
                                $obj->id_autor          = $row['id_autor'];
                                $obj->fuente           = $row['fuente'];
                                $obj->fuenteImagen     = $row['fuenteImagen'];
                                $obj->id_tipoMultimedia= $row['id_tipoMultimedia'];
                                $obj->contenido        = $row['contenido'];
                                $obj->epigrafe         = $row['epigrafe'];
    
                                $ResultSet[] = $obj;
                            }else{
                                $obj->id_noticia = $row['id_noticia'];
                                $obj->fecha_noticias   = $row['fecha_noticias'];
                                $obj->id_seccion       = $row['id_seccion'];
                                $obj->seccion          = $row['seccion'];
                                $obj->id_subseccion    = $row['id_subseccion'];
                                $obj->subseccion       = NULL;
                                $obj->destacado        = $row['destacado'];
                                $obj->titulo           = $row['titulo'];
                                $obj->copete           = $row['copete'];
                                $obj->texto            = $row['texto'];
                                $obj->id_autor          = $row['id_autor'];
                                $obj->fuente           = $row['fuente'];
                                $obj->fuenteImagen     = $row['fuenteImagen'];
                                $obj->id_tipoMultimedia= $row['id_tipoMultimedia'];
                                $obj->contenido        = $row['contenido'];
                                $obj->epigrafe         = $row['epigrafe'];

                                $ResultSet[] = $obj;
                            }
                        }
                    }
                }
                while(mysqli_more_results($this->db->conn_id) && mysqli_next_result($this->db->conn_id));
            }
        }else{
        $sqlProcedure = "CALL u604865879_notic.Proc_LeerNoticia(".$input_id_noticia.", ".$input_id_seccion.", ".$input_id_subseccion.", ".$input_id_tipoMultimedia.", ".$input_ordenar.", ".$input_limite.")";
        
        $ResultSet   =   array();

        /* execute multi query */
        if (mysqli_multi_query($this->db->conn_id, $sqlProcedure)) {
            do {
                if (false != $result = mysqli_store_result($this->db->conn_id)) {
                    while ($row = $result->fetch_assoc()) {
                        $obj = (object)[];
                        if (isset($row['id_noticia'])){
                            $obj->id_noticia = $row['id_noticia'];
                            $obj->fecha_noticias   = $row['fecha_noticias'];
                            $obj->id_seccion       = $row['id_seccion'];
                            $obj->seccion          = $row['seccion'];
                            $obj->id_subseccion    = $row['id_subseccion'];
                            $obj->subseccion       = $row['subseccion'];
                            $obj->destacado        = $row['destacado'];
                            $obj->orden            = $row['orden'];
                            $obj->volanta          = $row['volanta'];
                            $obj->titulo           = $row['titulo'];
                            $obj->copete           = $row['copete'];
                            $obj->texto            = $row['texto'];
                            $obj->fuente           = $row['fuente'];
                            $obj->id_tipoMultimedia= $row['id_tipoMultimedia'];
                            $obj->contenido        = $row['contenido'];
                            $obj->epigrafe         = $row['epigrafe'];

                            $ResultSet[] = $obj;
                        }
                    }
                }
            }
            while(mysqli_more_results($this->db->conn_id) && mysqli_next_result($this->db->conn_id));
        }
        }
        return $ResultSet;
    }

    function LeerNoticiaEspecificaEtiqueta($valor_id_noticia){

        $input_id_noticia = $valor_id_noticia;
        $sqlProcedure = "CALL u604865879_notic.Proc_LeerNoticiaEtiqueta(".$input_id_noticia.")";
        
        $ResultSet   =   array();

        /* execute multi query */
        if (mysqli_multi_query($this->db->conn_id, $sqlProcedure)) {
            do {
                if (false != $result = mysqli_store_result($this->db->conn_id)) {
                    while ($row = $result->fetch_assoc()) {
                        $obj = (object)[];
                        if (isset($row['id_noticia'])){
                            $obj->id_noticia            = $row['id_noticia'];
                            $obj->etiquetaDescripcion   = $row['etiquetaDescripcion'];
                            $obj->id_noticiaEtiqueta            = $row['id_noticiaEtiqueta'];

                            $ResultSet[] = $obj;
                        }
                    }
                }
            }
            while(mysqli_more_results($this->db->conn_id) && mysqli_next_result($this->db->conn_id));
        }

        return $ResultSet; 
    }

    Function LeerNoticiaMasLeidosSeccion($valor_id_seccion,$valor_id_subseccion, $valor_ordenar, $valor_limiteMasLeidos){

        $input_id_noticia = 'NULL'; 
        $input_id_seccion = $valor_id_seccion; 
        $input_id_subseccion = $valor_id_subseccion;
        $input_id_tipoMultimedia = 'NULL'; 
        $input_ordenar = $valor_ordenar; 
        $input_limite = $valor_limiteMasLeidos;

        if (($input_id_seccion == 4) or ($input_id_seccion == 5) or ($input_id_seccion == 6)) {
            $sqlProcedure = "CALL u604865879_notic.Proc_LeerEditorialColumnaEntrevista(".$input_id_noticia.", ".$input_id_seccion.", ".$input_id_subseccion.", ".$input_id_tipoMultimedia.", ".$input_ordenar.", ".$input_limite.")";
            $ResultSet   =   array();
    
            /* execute multi query */
            if (mysqli_multi_query($this->db->conn_id, $sqlProcedure)) {
                do {
                    if (false != $result = mysqli_store_result($this->db->conn_id)) {
                        while ($row = $result->fetch_assoc()) {
                            $obj = (object)[];
                            if (isset($row['id_noticia'])){
                                $obj->id_noticia = $row['id_noticia'];
                                $obj->fecha_noticias   = $row['fecha_noticias'];
                                $obj->id_seccion       = $row['id_seccion'];
                                $obj->id_subseccion    = $row['id_subseccion'];
                                $obj->destacado        = $row['destacado'];
                                $obj->titulo           = $row['titulo'];
                                $obj->copete           = $row['copete'];
                                $obj->texto            = $row['texto'];
                                $obj->fuente           = $row['fuente'];
                                $obj->id_tipoMultimedia= $row['id_tipoMultimedia'];
                                $obj->contenido        = $row['contenido'];
                                $obj->epigrafe         = $row['epigrafe'];
    
                                $ResultSet[] = $obj;
                            }
                        }
                    }
                }
                while(mysqli_more_results($this->db->conn_id) && mysqli_next_result($this->db->conn_id));
            }
        }else{
        $sqlProcedure = "CALL u604865879_notic.Proc_LeerNoticia(".$input_id_noticia.", ".$input_id_seccion.", ".$input_id_subseccion.", ".$input_id_tipoMultimedia.", ".$input_ordenar.", ".$input_limite.")";
        $ResultSet   =   array();

        /* execute multi query */
        if (mysqli_multi_query($this->db->conn_id, $sqlProcedure)) {
            do {
                if (false != $result = mysqli_store_result($this->db->conn_id)) {
                    while ($row = $result->fetch_assoc()) {
                        $obj = (object)[];
                        if (isset($row['id_noticia'])){
                            $obj->id_noticia = $row['id_noticia'];
                            $obj->fecha_noticias   = $row['fecha_noticias'];
                            $obj->id_seccion       = $row['id_seccion'];
                            $obj->id_subseccion    = $row['id_subseccion'];
                            $obj->destacado        = $row['destacado'];
                            $obj->volanta          = $row['volanta'];
                            $obj->titulo           = $row['titulo'];
                            $obj->copete           = $row['copete'];
                            $obj->texto            = $row['texto'];
                            $obj->fuente           = $row['fuente'];
                            $obj->id_tipoMultimedia= $row['id_tipoMultimedia'];
                            $obj->contenido        = $row['contenido'];
                            $obj->epigrafe         = $row['epigrafe'];

                            $ResultSet[] = $obj;
                        }
                    }
                }
            }
            while(mysqli_more_results($this->db->conn_id) && mysqli_next_result($this->db->conn_id));
        }
        }
            return $ResultSet;
    }

    Function LeerNoticiaDestacada($valor_id_noticiaDestacada){
        
        $input_id_destacado = $valor_id_noticiaDestacada;

        $sqlProcedure = "CALL u604865879_notic.Proc_LeerNoticiaDestacada(".$input_id_destacado.")";
        
        $ResultSet   =   array();

        /* execute multi query */
        if (mysqli_multi_query($this->db->conn_id, $sqlProcedure)) {
            do {
                if (false != $result = mysqli_store_result($this->db->conn_id)) {
                    while ($row = $result->fetch_assoc()) {
                        $obj = (object)[];
                        if (isset($row['id_noticia'])){
                            $obj->id_noticia = $row['id_noticia'];
                            $obj->fecha_noticias   = $row['fecha_noticias'];
                            $obj->id_seccion       = $row['id_seccion'];
                            $obj->seccion          = $row['seccion'];
                            $obj->id_subseccion    = $row['id_subseccion'];
                            $obj->subseccion       = $row['subseccion'];
                            $obj->destacado        = $row['destacado'];
                            $obj->orden            = $row['orden'];
                            $obj->volanta          = $row['volanta'];
                            $obj->titulo           = $row['titulo'];
                            $obj->copete           = $row['copete'];
                            $obj->texto            = $row['texto'];
                            $obj->fuente           = $row['fuente'];
                            $obj->id_tipoMultimedia= $row['id_tipoMultimedia'];
                            $obj->contenido        = $row['contenido'];
                            $obj->epigrafe         = $row['epigrafe'];

                            $ResultSet[] = $obj;
                        }
                    }
                }
            }
            while(mysqli_more_results($this->db->conn_id) && mysqli_next_result($this->db->conn_id));
        }

        return $ResultSet;
    }

    Function LeerNoticiaDestacadaECE($valor_id_seccion, $valor_id_noticiaDestacada){
        
        $input_id_seccion   = $valor_id_seccion;
        $input_id_destacado = $valor_id_noticiaDestacada;


        $sqlProcedure = "CALL u604865879_notic.Proc_LeerECEDestacada(".$input_id_seccion.",".$input_id_destacado.")";
        
        $ResultSet   =   array();

        /* execute multi query */
        if (mysqli_multi_query($this->db->conn_id, $sqlProcedure)) {
            do {
                if (false != $result = mysqli_store_result($this->db->conn_id)) {
                    while ($row = $result->fetch_assoc()) {
                        $obj = (object)[];
                        if (isset($row['id_editorialColumnistaEntrevista'])){
                            $obj->id_editorialColumnistaEntrevista = $row['id_editorialColumnistaEntrevista'];
                            $obj->fecha_editorialColumnaEntrevista   = $row['fecha_editorialColumnaEntrevista'];
                            $obj->id_seccion       = $row['id_seccion'];
                            $obj->seccion          = $row['seccion'];
                            $obj->id_subseccion    = $row['id_subseccion'];
                            $obj->subseccion       = $row['subseccion'];
                            $obj->destacado        = $row['destacado'];
                            $obj->titulo           = $row['titulo'];
                            $obj->copete           = $row['copete'];
                            $obj->texto            = $row['texto'];
                            $obj->autor            = $row['autor'];
                            $obj->autorImagen      = $row['autorImagen'];
                            $obj->id_tipoMultimedia= $row['id_tipoMultimedia'];
                            $obj->contenido        = $row['contenido'];
                            $obj->epigrafe         = $row['epigrafe'];

                            $ResultSet[] = $obj;
                        }
                    }
                }
            }
            while(mysqli_more_results($this->db->conn_id) && mysqli_next_result($this->db->conn_id));
        }

        return $ResultSet;
    }

    Function LeerDolarHoy(){
        
        $sqlProcedure = "CALL u604865879_notic.Proc_LeerDolarHoy()";
       
        $ResultSet   =   array();

        /* execute multi query */
        if (mysqli_multi_query($this->db->conn_id, $sqlProcedure)) {
            do {
                if (false != $result = mysqli_store_result($this->db->conn_id)) {
                    while ($row = $result->fetch_assoc()) {
                        $obj = (object)[];
                        if (isset($row['id_dolarHoy'])){
                            $obj->id_dolarHoy            = $row['id_dolarHoy'];
                            $obj->dolarCompra            = $row['dolarCompra'];
                            $obj->dolarVenta             = $row['dolarVenta'];
                            $obj->fechaHoraActualizacion = $row['fechaHoraActualizacion'];

                            $ResultSet[] = $obj;
                        }
                    }
                }
            }
            while(mysqli_more_results($this->db->conn_id) && mysqli_next_result($this->db->conn_id));
        }

        return $ResultSet;
    }

    Function LeerBuscador($valor_buscar){
        
        $input_buscar = $valor_buscar; 

        $sqlProcedure = "CALL u604865879_notic.Proc_LeerNoticiaBuscador('".$input_buscar."')";
        $ResultSet   =   array();

        /* execute multi query */
        if (mysqli_multi_query($this->db->conn_id, $sqlProcedure)) {
            do {
                if (false != $result = mysqli_store_result($this->db->conn_id)) {
                    while ($row = $result->fetch_assoc()) {
                        $obj = (object)[];
                        if (isset($row['id_noticia'])){
                            $obj->id_noticia = $row['id_noticia'];
                            $obj->fecha_noticias   = $row['fecha_noticias'];
                            $obj->id_seccion       = $row['id_seccion'];
                            $obj->seccion          = $row['seccion'];
                            $obj->id_subseccion    = $row['id_subseccion'];
                            $obj->subseccion       = $row['subseccion'];
                            $obj->destacado        = $row['destacado'];
                            $obj->volanta          = $row['volanta'];
                            $obj->titulo           = $row['titulo'];
                            $obj->copete           = $row['copete'];
                            $obj->texto            = $row['texto'];
                            $obj->fuente           = $row['fuente'];
                            $obj->id_tipoMultimedia= $row['id_tipoMultimedia'];
                            $obj->contenido        = $row['contenido'];
                            $obj->epigrafe         = $row['epigrafe'];

                            $ResultSet[] = $obj;
                        }
                    }
                }
            }
            while(mysqli_more_results($this->db->conn_id) && mysqli_next_result($this->db->conn_id));
        }

        return $ResultSet;
    }


}
