<?php

class homecontroller extends controller {
 
    public function index() {
        $dados= array();
        
        $this->loadTemplate('home', $dados);
    }
   
}

