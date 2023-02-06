<?php


    class DB{

    
        public $decoded_json;

            public function read(){

                //$get_json = file_get_contents('DB.json');
                $decoded_json = json_decode(file_get_contents(__DIR__.'/DB.json'), true);
               return $decoded_json;



/*
                $get_json = file_get_contents('DB.json');
                $decoded_json = json_decode($get_json, true);
                decoded_json =  json_decode('DB.json', true);


                return $this->decoded_json;
                

                //$jason_data = file_get_contents('DB.json');
    
                $decode_data = json_decode('DB.json', JSON_OBJECT_AS_ARRAY);
                //$this->db = file_get_contents("DB.json");
                //$this->decoded_json = json_decode("DB.json",  JSON_OBJECT_AS_ARRAY);

                return $this->decoded_json;
*/

            }

            



    }

?>



