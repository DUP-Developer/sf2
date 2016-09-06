<?php
require 'vendor/autoload.php';

if($argc < 2){
    helper();
    die();
}

//chacando as opções para poder executar as tarefas requiridas
switch ($argv[1]){
    case "run:modules":
        //verificando paths para poder gerar altomaticamentos arquivos default
        \libs\ManagerModules\ManagerModules::scan();
        break;
    case "migrate":
        //executa a migração de banco de dados
        \libs\database\Migrations::run();
        break;
}


//var_dump($argv);



/**
 * ============================================================================================================
 *              funcoes e suas chamadas globais
 * ============================================================================================================
**/
function helper(){
    print "
    ======================================================================
                                HELPER SF2
    ======================================================================
        -> migrate              usado para fazer a migraçao de dados do sistema, ou seja, \n\t\t\t\tresponsavel por ler os arquivos de models e preparar \n\t\t\t\ta base de dados.
        
        -> run:modules          usado para preparar os modulos criados com o diretoro \"_exemplo\" \n\t\t\t\tdentro de modules.                                                 
    ";
}