<?php
namespace modules\user\model;

class Users implements \libs\database\model
{
    public function create()
    {
        return array(
            "nome"=>"varchar(255)",
            "idade"=>"int",
            "aniversario"=>"date",
            "bio"=>"text",
            "vevei"=>"text",
            "update_at"=>"timestamp"
        );
    }
}
