<?php


class DB{

    public $decoded_json;
    public $users;
    public $tasks;
    public $datarequest;
    public $username = "sgil";
    public $pwd = "1234";
    public $variables;


    public function decode(){

        $this->decoded_json = json_decode(file_get_contents('DB.json'), true);

        return $this->decoded_json;


    }
    

    public function read(){

        $this->users = $this->decode()['users'];

       return $this->users;

    }



/*
    public function __construct($decoded_json, $users, $tasks , $datarequest){

        $this->decoded_json = $decoded_json;
        $this->users = $users;
        $this->tasks = $tasks;
        $this->datarequest = $datarequest;



    }



    public function decode(){

        $this->decoded_json = json_decode(file_get_contents('DB.json'), true);

        echo $decoded_json;

    }


    public function users(){

        return $this->users = $decoded_json['users'];

       

    }

/*
    public function tasks(){

        return $this->tasks = $decoded_json['tareas'];

    }

  */

    

}



    

?>

<br>
<br>
<br>

<?php
/*

$objet1 = new DB();

//echo $objet1->loging();




print_r('<br>');
print_r('<br>');
print_r('<br>');


print_r( $objet1->read());


print_r('<br>');
print_r('<br>');
print_r('<br>');




//print_r( $objet1->tasks());



/*




class DB{

    private $decoded_json;
    public $users;
    public $tasks;
    public $datarequest = "name";


        

    public function __construct($users, $tasks, $datarequest){

        $this->users = $users;
        $this->tasks = $tasks;
        $this-> $datarequest = "name";

    }   



    private function decode(){

        $this->decoded_json = json_decode(file_get_contents('DB.json'), true);

    }

    private function users(){

        return $this->users = $decoded_json['users'];

       

    }


    private function tasks(){

        return $this->tasks = $decoded_json['tareas'];

    }



    public function readData()
    {

        foreach($this->users as $user){

             $data = $user[$this->datarequest]. '.<br>'; 

            //return $data;
            //$surname = $user['surname'];
            //$tareas = $user['tareas'];
            
            
            return $data;

    }

    }



}




$db = new DB();

echo $db->readData();


//echo readData($datarequest);
*/
?>