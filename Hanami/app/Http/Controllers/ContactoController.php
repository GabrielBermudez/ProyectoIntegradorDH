<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactoController extends Controller
{

    public function EnviarCorreo(Request $request){
        
        $subject = "Consulta del Cliente " . $request["nombre"];
        $for = "gabrielbermudez0@gmail.com";
        Mail::send('plantillaEmail',$request->all(), function($msj) use($subject,$for){
            $msj->from("gabrielbermudez0@gmail.com","DigitalStore");
            $msj->subject($subject);
            $msj->to($for);
        });
        return redirect()->back();
    }
}
