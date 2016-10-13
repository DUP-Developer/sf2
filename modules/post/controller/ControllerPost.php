<?php

namespace modules\post\controller;
use \libs\kernel\ControllerBase as CB;

class ControllerPost extends CB{

    public function index($app){
        print "oier";
        self::db()->insert("post", [
            "nome"=>"joao",
            "publicado"=>"true",
            "data"=>"1994-08-28",
            "content"=>"Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado. Se popularizou na década de 60, quando a Letraset lançou decalques contendo passagens de Lorem Ipsum, e mais recentemente quando passou a ser integrado a softwares de editoração eletrônica como Aldus PageMaker.",
            "comentario_id"=>"2"
        ]);
    }
}