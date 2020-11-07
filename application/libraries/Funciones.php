<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of funciones
 *
 * @author sebastian
 */
class Funciones {
    //put your code here
        var $unidades=array(
            'codigo'=>1,'nombre'=>'Un',
            'codigo'=>2,'nombre'=>'Kg',
            'codigo'=>3,'nombre'=>'Lt',
            'codigo'=>4,'nombre'=>'Pack'
        );
        var $tipos_despacho=array(
            'codigo'=>1,'nombre'=>'Por Cuenta del Receptor del Documento',
            'codigo'=>2,'nombre'=>'Por cuenta del Emisor a Intalaciones del Cliente',
            'codigo'=>3,'nombre'=>'Por Cuenta del Emisor a otras instalaciones' 
        );
        var $tipos_traslados=array(
            'codigo'=>1,'nombre'=>'Operacion constituye Venta',
            'codigo'=>2,'nombre'=>'Venta por efectuar',
            'codigo'=>3,'nombre'=>'Consignacion',
            'codigo'=>4,'nombre'=>'Promocion o donacion',
            'codigo'=>5,'nombre'=>'Traslado interno',
            'codigo'=>6,'nombre'=>'Otros traslados no Venta',
            'codigo'=>9,'nombre'=>'Guia de Devolucion'
            
        );
        
    public function check_token($token)
    {
        
        if($token != $_SESSION['token'])
            return false;
        else
            return true;
    }
    public function desglosa_fecha($anfecha)
    {
        
    }

    public function check_user()
    {

        $retorno=true;
        if (!$_SESSION)
        {
         $retorno= false;   
        }
        else
        {
			$retorno= isset($_SESSION['is_logued_in']) ? $_SESSION['is_logued_in'] : false ;
        }
        $retorno=true;
        //echo($retorno);
        return $retorno;

    }
    public function crear_popup($campo_valor,$campo_nombre,$seleccionado,$data) 
    {
        //var_dump($data);
        if (!$data) {
                $salida = '<option selected="true" value="-1">Seleccione una opcion</option>';
                $cuenta=-1;
        } else {
            $salida = '';
            $cuenta = '';
            $numero = 0;
            //var_dump($data);
            if($seleccionado==-1)
            {
                $salida = $salida . '<option selected="true" value="-1">Seleccione una opcion</option>';
            }
            foreach ($data as $row) {
               //var_dump($row);
                if (!$seleccionado) {
                    if ($numero == 0) {
                        $salida = $salida . '<option selected="true" value="' . $row->$campo_valor . '">' . $row->$campo_nombre . '</option>';
                        $cuenta = $row->$campo_valor;
                        $numero = 1;
                    } else {
                        $salida = $salida . '<option value="' . $row->$campo_valor . '">' . $row->$campo_nombre . '</option>';
                    }
                } else {
                    if ($seleccionado == $row->$campo_valor) {
                        $salida = $salida . '<option selected="true" value="' . $row->$campo_valor . '">' . $row->$campo_nombre . '</option>';
                        $cuenta =$row->$campo_valor;
                    } else {
                        $salida = $salida . '<option value="' . $row->$campo_valor . '">' . $row->$campo_nombre . '</option>';
                    }
                }
            }
            //$salida = $salida . '</select>';
            //$salida = $salida . '<br></br>';
        }
        $retorno = array('seleccionada' => $cuenta, 'popup' => $salida);
        //$retorno = $salida;
        return $retorno;
        
        
    }
    public function unidades_array()
    {
        return $this->arrayToObject($this->unidades);
    }
    public function get_unidad_by_codigo($cod)
    {
        $key = array_search($cod, array_column($this->unidades, 'codigo'));
        return $key;
    }
    
    function days_in_month($month, $year)
    {
        // calculate number of days in a month
        return $month == 2 ? ($year % 4 ? 28 : ($year % 100 ? 29 : ($year % 400 ? 28 : 29))) : (($month - 1) % 7 % 2 ? 30 : 31);
    }
    
    public function meses_array()
    {
        $month[] =array('mes'=>1 ,'nombre' => 'Enero');
        $month[] =array('mes'=>2 ,'nombre'=> 'Febrero');
        $month[] =array('mes'=>3 ,'nombre'=> 'Marzo');
        $month[] =array('mes'=>4 ,'nombre'=> 'Abril');
        $month[] =array('mes'=>5 ,'nombre'=> 'Mayo');
        $month[] =array('mes'=>6 ,'nombre'=> 'Junio');
        $month[] =array('mes'=>7 ,'nombre'=> 'Julio');
        $month[] =array('mes'=>8 ,'nombre'=> 'Agosto');
        $month[] =array('mes'=>9 ,'nombre'=> 'Septiembre');
        $month[] =array('mes'=>10,'nombre' => 'Octubre');
        $month[] =array('mes'=>11,'nombre' => 'Noviembre');
        $month[] =array('mes'=>12,'nombre' => 'Diciembre');
		//var_dump($month);
        return $month;
    }
    public function meses_popup($seleccionado)
    {
        $arr = $this->meses_array();
        //var_dump($arr);
        $myobject = $this->arrayToObject($arr);
        
        $data=$this->crear_popup('mes','nombre',$seleccionado,$myobject  );
        return $data;
    }

    public function meses_popup_con_todos($seleccionado)
        {
            $arr = $this->meses_array();
            $arr[]=array('mes'=>13,'nombre'=>'Todos');
            //var_dump($arr);
            $myobject = $this->arrayToObject($arr);
            
            $data=$this->crear_popup('mes','nombre',$seleccionado,$myobject  );
            return $data;
        }
    public function anios_popup($seleccionado=2017,$inicial=2017,$final=2017)
    {
        $anios=array();
        for ($i=$inicial;$i<=$final;$i++)
        {
            $anios[]=array('anio'=>$i,'valor'=>$i);
        }
        //var_dump($anios);
        $myobject = $this->arrayToObject($anios);
        $data=  $this->crear_popup('valor', 'anio', $seleccionado, $myobject);
        //var_dump($data);
        return $data;
    }
    public function terminales_popup($lista_terminales,$seleccionado)
    {
       
        $data=$this->crear_popup('id','nombre',$seleccionado,$lista_terminales);
        return $data;
    }
    public function cualquier_popup($campo_valor,$campo_nombre,$lista,$seleccionado)
    {
       
        $data=$this->crear_popup($campo_valor,$campo_nombre,$seleccionado,$lista);
        return $data;
    }
    
    public function nav_bar_segun_roles($rol)
    {
        switch ($rol) {
            case 'administrador':
                $nav_bar='commons/nav_var_admin';
                break;
            case 'editor':
                $nav_bar='commons/nav_var_editor';
                break;
            case 'suscriptor':
                $nav_bar='commons/nav_var_subscriptor';
                break;
        }
        return $nav_bar;
    }
    function array_to_obj($array, &$obj)
    {
      foreach ($array as $key => $value)
      {
        if (is_array($value))
        {
        $obj->$key = new stdClass();
        $this->array_to_obj($value, $obj->$key);
        }
        else
        {
          $obj->$key = $value;
        }
      }
    return $obj;
    }

function arrayToObject($array)
{
 $object= new stdClass();
 return $this->array_to_obj($array,$object);
}    

public function firmar()
    {
        require(dirname(__FILE__) . '/../xmlseclibs.php'); 

        if (file_exists(dirname(__FILE__) . '/sign-basic-test.xml')) { 
            unlink(dirname(__FILE__) . '/sign-basic-test.xml'); 
        } 

        $doc = new DOMDocument(); 

        $doc->load(dirname(__FILE__) . '/basic-doc.xml'); 

        $doc->loadXML($xml); 

        $objDSig = new XMLSecurityDSig(); 

        $objDSig->setCanonicalMethod(XMLSecurityDSig::C14N); 

        $objDSig->addReference($doc, XMLSecurityDSig::SHA1); 

        $objKey = new XMLSecurityKey(XMLSecurityKey::RSA_SHA1, array('type'=>'private')); 
        /* load private key */ 
        $objKey->loadKey(dirname(__FILE__) . '/privkey.pem', TRUE); 

        /* if key has Passphrase, set it using $objKey->passphrase = <passphrase> " */ 

        $objDSig->sign($objKey); 

        /* Add associated public key */ 
        $objDSig->add509Cert(file_get_contents(dirname(__FILE__) . '/mycert.pem')); 

        $objDSig->appendSignature($doc->documentElement); 
        $doc->save(dirname(__FILE__) . '/sign-basic-test.xml'); 

        $sign_output = file_get_contents(dirname(__FILE__) . '/sign-basic-test.xml'); 
        $sign_output_def = file_get_contents(dirname(__FILE__) . '/sign-basic-test.res'); 
        if ($sign_output != $sign_output_def) { 
            //echo "NOT THE SAME"; 
        }      
    }

public function limpia_datos_numerico($dato)
    {
        $legalChars = "%[^0-9\\-\\. ]%";
        $str=preg_replace($legalChars,"",$dato);
        return $str;
        
    }
    public function get_iva_x_tipo_doc($tipoDc=33,$def=19)
    {
        switch ($tipoDc) {
            case 34:
                $valor=0;
                break;
            case 38:
                $valor=0;
                break;
            case 41:
                $valor=0;
                break;
            default:
                $valor=$def;
                break;
        }
        return $valor;
    }

}
