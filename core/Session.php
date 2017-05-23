<?php

class Session{
    public static function start($_DB){
        $_SESSION["role"] = $_DB["role"];
        $_SESSION["rolename"] = $_DB["rolename"];
        $_SESSION["name"] = $_DB["name"];
        $_SESSION["email"] = $_DB["email"];
        $_SESSION["avatar"] = 'source/img/avatar/'.$_DB["avatar"];
    }
    public static function destroy(){
        $_SESSION = array();
        session_destroy();
    }

    public static function noAccess(callable $callback){
        if(!isset($_SESSION["role"])){
            $callback();
        }else{
            Flight::redirect('/');
        }
    }

    public static function noAccessControlled(callable $callback, callable $logged){
        if(!isset($_SESSION["role"])){
            $callback();
        }else{
            $logged();
        }
    }

    public static function access($dataAccess,callable $callback){
        if(isset($_SESSION["role"])){
            if( in_array($_SESSION["role"],$dataAccess["minRole"]) ){
                $callback();
            }else{
                Flight::redirect('/inaccesible');
            }
        }else{
            Flight::redirect('/iniciarSesion');
        }
    }

    public static function accessControlled($dataAccess,callable $callback,callable $noPermission, callable $noLogged){
        if(isset($_SESSION["role"])){
            if( in_array($_SESSION["role"],$dataAccess["minRole"]) ){
                $callback();
            }else{
                $noPermission();
            }
        }else{
            $noLogged();
        }
    }

    public static function roleName($num){
        return Config::roles[$num];
    }
}