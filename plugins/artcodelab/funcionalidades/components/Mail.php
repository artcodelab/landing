<?php namespace Artcodelab\Funcionalidades\Components;

use Cms\Classes\ComponentBase;

class Mail extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Correo de formulario',
            'description' => 'Envía correo de formulario de contacto.'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onSend()
    {
        $nombre = strtoupper(input('nombre'));

        if($nombre){
            $correo = input('correo');
            $asunto = strtoupper(input('asunto'));
            $mensaje = strtoupper(input('mensaje'));
            $movil = strtoupper(input('movil'));

            $contacto = \Mail::send('artcodelab', ['nombre' =>  $nombre, 'correo' =>  $correo, 'asunto' =>  $asunto, 'mensaje' =>  $mensaje, 'movil' =>  $movil], function ($message) use ($correo) {
                $message->to($correo, 'artCodelab Contacto')->subject('Contacto a través de la página web de artCodelab');
                $message->bcc('connect@artcodelab.com','esanchez.parrazales@gmail.com');
            });
                \Flash::success('Correo enviado!');
        }


    }

}
