<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;
class ContactoReceived extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(Request $request)
    {
        $vista = $request["vista"];
        $tipo =  $request["tipo"];
        $texto=   $request["mensaje"];
        $imagen = $request["imagen"];
        $nombre =$request["nombres"]." ".$request["apellidos"];
        if($tipo=='3') 
        {
          $texto = "Enviado por:".$nombre." ".$request["email"]." Mensaje:".$request["mensaje"];
        }
        if($tipo=='2') 
        {
            $texto=$request["mensaje"];
        }
        return $this->view($vista)->with('texto',$texto)->with('imagen',$imagen);
    }
}
