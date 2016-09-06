<?php
namespace modules\post\model;

class Posts implements \libs\database\model
{
    public function create()
    {
        return array(
            "nome"=>"varchar(255)",
            "publicado"=>"boolean",
            "data"=>"date",
            "content"=>"text",
            "comentario_id"=>"int",
            "update_at"=>"timestamp"
        );
    }

}
