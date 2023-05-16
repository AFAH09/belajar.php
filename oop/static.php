<?
class staticmethod
{
    public static function staticfunction()
    {
        echo "ini adalah static function method";
    }
}
staticmethod::staticfunction();

echo "<br>";
class staticmethod2
{
    public static $oop = "ini adalah statik function v2";
    public static function staticfunc2()
    {
        echo self::$oop;

    }
}
staticmethod2::staticfunc2();