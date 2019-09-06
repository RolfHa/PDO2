<?php
abstract class Db
{
    public static $db;

    /**
     * Singleton Pattern
     */
    public static function connect()
    {
        if (!isset(self::$db)){
            self::$db = new PDO(CONNECT, DB_USER , DB_PASSWD);
            // Attribute für PDO setzen
            //self::$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        return self::$db;
    }
}
