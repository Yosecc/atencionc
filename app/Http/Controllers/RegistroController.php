<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Personas;
use App\Estados;
use App\EstadosPaises;
use App\Paises;
use App\Municipios;
use App\Registro;
use App\Mail\ContactoReceived;
use Mail;
use Illuminate\Support\Facades\Crypt;
use Maatwebsite\Excel\Facades\Excel;

class RegistroController extends Controller
{
   public function index()
    {
      $estados = Estados::orderby('id_estado')->get();
      $paises = Paises::orderby('codigo')->get();
      return view('modules.form')->with("estados",$estados)
                                 ->with("paises",$paises);

    }
   
public function contacto(){
  return view('modules.frmregistro');
}

public function envio(Request $request)
{
  $nombre =$request["nombres"]." ".$request["apellidos"];
  $texto =  $request["mensaje"];  
  $vista = 'emails.mensaje';
  $data=[
                "email"=>$request["email"],
                "nombre"=>$nombre,
                "texto"=>$texto,
            ];

  $email = $request["email"];  
  //dd($email); 
  Mail::to($email)->send(new ContactoReceived($data));
  $email2 = "riveancfamilia@gmail.com";
  $email3 = "rivecfamiliaan@gmail.com";
  $texto = 'emails.contacto';
  $request['vista'] = 'emails.contacto';
  $request["tipo"]='3';
  
  Mail::to($email2)->send(new ContactoReceived($texto));
  Mail::to($email3)->send(new ContactoReceived($texto));

  $contacto="Mensaje Enviado";
  return view('modules.respuestas')->with("mensaje",$contacto);
}

public function store(Request $request)
   {
      //dd($request);
       $ci = Crypt::encrypt($request["cedula"]);  
       $ced = hash("sha512",$request["cedula"]);   
       $idestadopais=$request["id_estado_pais"];
       //dd($idestadopais);         
      $registro=Registro::where("cedula",$ced)->first();
      if(!isset($registro->cedula)){
        $registro = new registro($request->all());
        if(!isset($request->hijos)) $registro->hijos = 0;
        if(!isset($request->padres)) $registro->padres=0;
        if(!isset($request->abuelos)) $registro->abuelos=0;
        if(!isset($request->pareja)) $registro->pareja=0;
        if(!isset($request->otros)) $registro->otros=0;
        if(!isset($request->cne)) $registro->cne=0;
        if(!isset($request->sso)) $registro->sso=0;
        if(!isset($request->asiste)) $registro->asiste=0;
        if(!isset($request->id_estado_pais)) $registro->id_estado_pais='';
        if(!isset($request->servicio_consulado)) $registro->servicio_consulado=0;
        $registro->fecha_registro=date('Y-m-d');
        $email = $request["email"];
        $vista = 'emails.notificacion';
        $data=[
                "email"=>$email,
                "texto"=>'Registro',
                "vista"=>$vista,
            ];
      
          //$ced = hash("sha512",$request["cedula"]);
          $registro->cedula = $ced;
          $registro->ci = $ci;
          $registro->save();
          $texto="Registro";
          Mail::to($email)->send(new ContactoReceived($data));
          $mensaje="Ha sido Registrado Exítosamente";
          return view('modules.respuestas')->with("mensaje",$mensaje);
      }
      else{$error="Ya se encuentra Registrado";
      return view('modules.respuestas')->with("mensaje",$error);}
      //dd($ced);
   }


    public function buscar(Request $request)
   {
      $request->all();
      $edad=0;
      if(isset($request["cedula"])){
          $persona= Personas::cedula($request->get("cedula"))->first();

          if(!isset($persona->cedula)){
               $data["status"]='No';
                $data["result"]='';
                $data["edad"]=$edad;
          }      
          else{  
          $fecha_nacimiento = $persona->fechanac;
          list($dianaz,$mesnaz,$anonaz) = explode("/",$fecha_nacimiento); 
          $dia=date("d");
          $mes=date("m");
          $ano=date("Y");   
          if (($mesnaz == $mes) && ($dianaz > $dia)) {
            $ano=($ano-1); }
          if ($mesnaz > $mes) {
           $ano=($ano-1);}  
           $edad=($ano-$anonaz);
           
        
        $ced =hash("sha512",$request["cedula"]);             
        $registro=Registro::where("cedula",$ced)->first();
              if(isset($registro->cedula)) {
                $data["status"]='Reg';
                $data["result"]=$persona;
                $data["edad"]=$edad;
             }    
             else{
                $data["status"]='Ok';
                $data["result"]=$persona;
                $data["edad"]=$edad;
             } 
          }
                 
          return $data;
     }
     //return null;
   }
 
 public function cargamunicipios(Request $request)
 {
  $request->all();
    if(isset($request["idestado"])) $idestado=$request["idestado"];
    $municipios = Municipios::where('id_estado',$idestado)->orderby('municipio')->get();
    foreach ($municipios as $mun) {
      echo '<option value="' .$mun->id_municipio. '">' .$mun->municipio. '</option>';
    }
    return null;
   }

 public function cargaciudades(Request $request)
 {
  $request->all();
    if(isset($request["idpais"])) $idpais=$request["idpais"];
    $ciudades = EstadosPaises::where('codigo_pais',$idpais)->orderby('ciudad')->get();
    foreach ($ciudades as $ciudad) {
      echo '<option value="' .$ciudad->id. '">' .$ciudad->ciudad. '</option>';
    }
    return null;
  }

public function vista(){
  return view('emails.contacto');
}

public function reporte(){
  
  $registro = Registro::get();
  echo "<table border='1'>";
  echo "<tr>";
  echo "<td>"."Cedula</td>";
  echo "<td>"."Nombres</td>";
  echo "<td>"."Apellidos</td>";
  echo "<td>". "Sexo</td>";
  echo "<td>"."Edad</td>";
  echo "<td>"."Estado</td>";
  echo "<td>"."Municipio</td>";
  echo "<td>". "Pais Actual</td>";
  echo "<td>"."Localidad Reside</td>";
  echo "<td>"."Profesion</td>";
  echo "<td>"."Email</td>";
  echo "<td>". "Hijos</td>";
  echo "<td>"."Padres</td>";
  echo "<td>"."Abuelos</td>";
  echo "<td>"."Otros</td>";
  echo "<td>". "Pareja</td>";
  echo "<td>"."CNE</td>";
  echo "<td>"."SSO</td>";
  echo "<td>". "Tiempo</td>";
  echo "<td>"."Asiste</td>";
  echo "<td>"."Servicio Consulado</td>";
  echo "</tr>";
  foreach ($registro as $reg) {
    echo "<tr>";
    $ci = Crypt::decrypt($reg->ci);
    $persona= Personas::cedula($ci)->first();
    $idestado = $reg->id_estado;
    $estado = Estados::where('id_estado',$idestado)->first();
    $destado = $estado->estado;
    $pais = Paises::where('codigo',$reg->id_pais)->first();
    $dpais = $pais->descripcion;
    $municipio = Municipios::where('id_municipio',$reg->id_municipio)->first();
    $dmunicipio = $municipio->municipio;
    $localidad = EstadosPaises::find($reg->id_estado_pais);
    $dlocalidad = $localidad->ciudad;
    switch ($reg->servicio_consulado) {
      case '1':
        $consulado = 'Bueno';
        break;
      case '2':
        $consulado = 'Regular';
        break;
      case '3':
        $consulado = 'Deficiente';
        break;

      default:
        $consulado="";
        break;
    }
    echo "<td>".$ci."</td>";
    echo "<td>".$persona->primernombre." ".$persona->segundonombre."</td>";
    echo "<td>".$persona->primerapellido." ".$persona->segundoapellido."</td>";
    echo "<td>".$persona->sexo. "</td>";
    echo "<td>".$reg->edad."</td>";
    echo "<td>".$destado."</td>";
    echo "<td>".$dmunicipio."</td>";
    echo "<td>".$dpais. "</td>";
    echo "<td>".$dlocalidad."</td>";
    echo "<td>".$reg->profesion."</td>";
    echo "<td>".$reg->email."</td>";
    echo "<td>".$reg->hijos."</td>";
    echo "<td>".$reg->padres."</td>";
    echo "<td>".$reg->abuelos."</td>";
    echo "<td>".$reg->otros."</td>";
    echo "<td>".$reg->pareja."</td>";
    echo "<td>".$reg->cne."</td>";
    echo "<td>".$reg->sso."</td>";
    echo "<td>".$reg->tiempo."</td>";
    echo "<td>".$reg->asiste."</td>";
    echo "<td>".$consulado."</td>";
    echo "</tr>";
  }
  
}

 public function Enviar_excel()
 {

  Excel::create('Listado de RIVE-'.date('d-m-Y'), function($excel) { 
    $excel->setTitle('Listado de Registrados');
    $excel->sheet('Sheetname', function($sheet)
    {
      $cabeceras = array();   
      $sheet->fromArray($cabeceras, null, 'A1', false, false);
      $registro = Registro::get();
      foreach ($registro as $reg) {
        $ci = Crypt::decrypt($reg->ci);
        $persona= Personas::cedula($ci)->first();
        $idestado = $reg->id_estado;
        $estado = Estados::where('id_estado',$idestado)->first();
        $destado = $estado->estado;
        $pais = Paises::where('codigo',$reg->id_pais)->first();
        $dpais = $pais->descripcion;
        $municipio = Municipios::where('id_municipio',$reg->id_municipio)->first();
        $dmunicipio = $municipio->municipio;
        $localidad = EstadosPaises::find($reg->id_estado_pais);
        $dlocalidad = $localidad->ciudad;
        switch ($reg->servicio_consulado) {
          case '1':
          $consulado = 'Bueno';
          break;
          case '2':
          $consulado = 'Regular';
          break;
          case '3':
          $consulado = 'Deficiente';
          break;

          default:
          $consulado="";
          break;
        }       
        $nombres = $persona->primernombre." ".$persona->segundonombre;
        $apellidos = $persona->primerapellido." ".$persona->segundoapellido;
        $sexo = $persona->sexo;
        $cuerpo = array();  
        array_push($cuerpo, array(html_entity_decode($ci) ,html_entity_decode($apellidos),html_entity_decode($nombres),html_entity_decode($sexo),html_entity_decode($reg->edad),html_entity_decode($destado),html_entity_decode($dmunicipio),html_entity_decode($dpais),html_entity_decode($dlocalidad),html_entity_decode($reg->profesion),html_entity_decode($reg->email),html_entity_decode($reg->hijos),html_entity_decode($reg->padres),html_entity_decode($reg->abuelos),html_entity_decode($reg->otros),html_entity_decode($reg->pareja),html_entity_decode($reg->cne),html_entity_decode($reg->sso),html_entity_decode($reg->tiempo),html_entity_decode($reg->asiste),html_entity_decode($consulado)));
        $sheet->fromArray($cuerpo, null, '', false, false);      
      }
    });
  })->export('xls');

  }
}
