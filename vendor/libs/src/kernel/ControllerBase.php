<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 05/09/16
 * Time: 16:43
 */

namespace libs\kernel;
use \libs\database\DB;

class ControllerBase{

    public static function db()
    {
        return DB::instance();
    }
}