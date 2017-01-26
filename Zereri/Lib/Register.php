<?php
namespace Zereri\Lib;

class Register
{
    /**对象实例
     *
     * @var array
     */
    protected static $instance;


    public static function get($name)
    {
        return isset(self::$instance[ $name ]) ? self::$instance[ $name ] : "";
    }


    public static function set($name, $value)
    {
        self::$instance[ $name ] = $value;
    }


    public static function _unset($name)
    {
        unset(self::$instance[ $name ]);
    }

}