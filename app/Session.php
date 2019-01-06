<?php 

namespace App;

class Session
{
    /**
     * 
     */
    private static $instance;

    /**
     * Retourne la session après avoir utilisé le pattern singleton
     * @return mixed
     */
    public static function start()
    {
        if(isset(self::$instance)){
            return $instance;
        } else {
            self::$instance = new self;
        }
    }

    private function __construct()
    {
        if(session_id() == ''){
             session_start();
        }
        session_regenerate_id();
    }

    public static function get(string $key) : string
    {
        return isset($_SESSION[$key]) ? $_SESSION[$key] : 'Not definxed';
    }

    public static function setValue($key, $value)
    {
        $_SESSION[$key] = $value;
    }

    public static function __callStatic($name, $argues)
    {
        $name = strtolower($name);
        $name = substr($name, 3);
        self::setValue($name, $argues[0]);
    }

    public static function destroy()
    {
        unset($_SESSION);
        session_destroy();
        session_unset();
    }

    public static function displayFlash()
    {
        echo (!empty($flash = self::get('flash'))) ? $flash : '';
        self::setValue('flash', NULL);
    }
}