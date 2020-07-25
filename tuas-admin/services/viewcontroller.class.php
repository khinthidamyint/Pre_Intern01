<?php 
class viewcontroller extends view{

    function getViewParent($appid){
        $view = new view();
        $getpar = $view -> getParent($appid);
        return $getpar;

    }

    function getViewApplicant($appid){
        $view = new view();
        $getapp = $view -> getApplicant($appid);
        return $getapp;
    }

    
}

?>