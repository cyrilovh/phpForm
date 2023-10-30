<?php
namespace trait;
/**
 * https://github.com/cyrilovh/geneager/blob/dev/src/trait/enumList.php
 */
trait enumList
{
    public static function names(): array
    {
        return array_column(self::cases(), 'name');
    }

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }

    public static function array(): array
    {
        return array_combine(self::names(), self::values());
    }

    public static function arrayVN(): array
    {
        return array_combine(self::values(), self::names());
    }
}

?>