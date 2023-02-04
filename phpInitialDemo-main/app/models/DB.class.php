<?php


class DB{

    public $decoded_json;
    public $users;
    public $tasks;
    public $datarequest;


    public function decode(){

        $this->decoded_json = json_decode(file_get_contents('DB.json'), true);

        return $this->decoded_json;


    }
    

    public function read(){

        $this->users = $this->decode()['users'];

       return $this->users;

    }

}




?>

