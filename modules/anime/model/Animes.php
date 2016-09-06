<?php
namespace modules\anime\model;

class Animes implements \libs\database\model
{
    public function create()
    {
        return array(
            "update_at"=>"timestamp"
        );
    }
}
