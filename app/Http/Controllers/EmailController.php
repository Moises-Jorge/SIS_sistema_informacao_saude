<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function enviarEmail($corpo)
    {
        try {
            Mail::send([], [], function ($message) use ($corpo) {
                $message->to('lukokimakuntimadaniel@gmail.com')
                    ->subject('SIS, PDCO ENVIO DE LOGIN')
                    ->setBody($corpo);
            });
    
            // Email enviado com sucesso
            return "E-mail enviado com sucesso!";
        } catch (\Exception $e) {
            // Tratar erros
            return "Erro ao enviar o e-mail: " . $e->getMessage();
        }
    }
    
}
