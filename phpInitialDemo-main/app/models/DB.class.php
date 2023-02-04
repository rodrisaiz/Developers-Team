<?php


    class DB{

        public $decoded_json;


            public function read(){

                $this->decoded_json = json_decode(file_get_contents('DB.json'), true);

                return $this->decoded_json;


            }

    }

?>

