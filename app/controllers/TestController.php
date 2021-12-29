<?php

class TestController extends Controller{
    public function __construct()
    {
        // parent::__construct();
    }

    public function Me($param){
        echo "Me method from TestController ".$param."<br>";
    }
}

?>