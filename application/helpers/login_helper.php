<?php
function is_logged_in() {
    // Get current CodeIgniter instance
    $CI =& get_instance();
    // We need to use $CI->session instead of $session
    $user = $CI->session->userdata('is_loged_in');
    if (!isset($user)) { return false; } else { return true; }
}
function obtener_permisos_x_modulo($id_modulo,$id_usuario)
{  
    $ci=& get_instance();
    $ci->load->database(); 
    
    $misql='select * from permisos_modulos_gestion where id_usuario='.$id_usuario.' and id_modulo='.$id_modulo;
    $query = $ci->db->query($misql);
    return $query->row();
}
function obtener_id_modulo_x_nombre_modulo($nombre)
{  
    $ci=& get_instance();
    $ci->load->database(); 
    
    $misql='select * from modulos_gestion where nombre='.$nombre;
    //$ci->db->where('id_usuario',$UserId);
    $ci->db->where('nombre',$nombre);
    $query= $ci->db->get('modulos_gestion');
    return $query->row();
}

function check_module($nombre_modulo,$UserId)
{
    $ci=& get_instance();
    $ci->load->database(); 

    //$id_modulo=obtener_id_modulo_x_nombre_modulo($nombre_modulo)->id;
    $resultado=obtener_id_modulo_x_nombre_modulo($nombre_modulo);
    if ($resultado)
    {
        $id_modulo=$resultado->id;

        $ci->db->where('id_usuario',$UserId);
        $ci->db->where('id_modulo',$id_modulo);
        $query= $ci->db->get('permisos_modulos_gestion');
        return $query->row();
    }
    else{
        return null;
    }

}

function generar_permisos($modulo,$id_usuario,$texto_add)
{
    //var_dump($permisos);
    $permisos['crear']=true;
    $permisos['editar']=true;
    $permisos['eliminar']=true;
    $permisos['listar']=true;
    $boton_agregar='';
    $opc_borrar='';
    $opc_editar='';
    $permisos=check_module($modulo, $id_usuario);

    if($permisos)
        {
            if($permisos->crear==true)
            {
                $boton_agregar='<button class="btn btn-primary" onclick="add()" id="agregar" >
                <i class="fa fa-plus"></i>'.$texto_add.'</button>';
            }
            else
                $boton_agregar='';

            if($permisos->editar) 
                {
                    $opc_editar=' <button class="btn btn-info btn-xs" onclick="edit($1)" id="editar"> <i class="fa fa-pencil"></i> Edita </button> ';
                    //$opc_editar= "<a  href='javascript:void()' onclick='edit($1)'><i class='fa fa-pen'></i></a>";
                }
            else
                $opc_editar='';
            if ($permisos->eliminar)
            {
                $opc_borrar=' <button class="btn btn-danger btn-xs" onclick="eliminar($1)" id="agregar"> <i class="fa fa-trash"></i> Eliminar </button> ';

                //$opc_borrar=" <a href='javascript:void()' onclick='eliminar($1)'><i class='fa fa-trash-alt' style='color:red' data-id='$1'></i>";
            }
            else
            $opc_borrar='';
        }
    else
    {
        $opc_editar='';
        $opc_borrar='';
    }
    $salida['permisos']=$permisos;
    $salida['botones']=array('boton_agregar'=>$boton_agregar,'opc_editar'=>$opc_editar,'opc_borrar'=>$opc_borrar);
    return $salida;

}
