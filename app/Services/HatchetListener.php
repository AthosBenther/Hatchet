<?php

namespace App\Services;

use Exception;

class HatchetListener{

    public static function Start($parameters){
        return HatchetListener::SendMessage('start');
    }

    public static function Kill(){
        return HatchetListener::SendMessage('kill');
    }

    public static function isRunning(){
        return HatchetListener::SendMessage('isrunning');
    }

    public static function Restart(){
        return HatchetListener::SendMessage('restart');
    }

    private static function SendMessage($message){
        $socket = socket_create(AF_INET,SOCK_STREAM,SOL_TCP);

        if(!is_resource($socket)) throw new Exception("Could not create Socket");

        socket_connect($socket,env("LISTENER_URL"),env('LISTENER_PORT'));
        $response = socket_write($socket,$message);
        $response = socket_read($socket,1024);
        socket_close($socket);
        return $response;
    }
}
