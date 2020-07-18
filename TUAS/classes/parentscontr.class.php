<?php 
    class parentscontr extends parents{
        public function createParentsAlive($data,$appid,$addid){
            $this -> setParentsAlive($data,$appid,$addid);
        }

        public function createParentsDecesed($data,$appid,$addid){
            $this -> setParentsDecesed($data,$appid,$addid);
        }


        public function editParents(){
            
        }
    }

?>