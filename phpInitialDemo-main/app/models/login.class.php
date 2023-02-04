<?php



class Login extends DB{
 


    //public $username = $_POST["user"]
    public $username = "usuario";
    public $pw = "1234";
    public $variables; 
    public $variables2; 
    public $user; 
    public $pasword;
    public $pasword1;  
    public $result; 
    public $contador = -1; 





    public function userComprobation(){

        foreach($this->read() as $variables ){  

            $this->user = $variables['user']; 

            $this->contador = $this->contador + 1;
            
            if ($this->username == $this->user){

                    $this->result = "Lo has logrado!!!!!!" . $this->contador;

                }else{

                    $this->result = "NO lo has logrado";

                }        
        }

        return $this->result;
    }





public function pwComprobation(){

    //foreach($this->read() as $variables ){  

        $this->pasword1 = $this->read()[$this->contador ]; 

                
            $this->pasword = $this->pasword1['pw']; 
        
        if ($this->pasword == $this->pwd){
        //hasta aca funciona 
            $this->result = "Lo has logrado!!!!!!";

            }else{

            $this->result = "NO lo has logrado";

            }

            return $this->result;

    

}
}



     /*   foreach($this->read() as $variables2 ){

            $this->pasword = $variables2['user'][$this->user];


            if ($this->pasword == $this->$pwd ){

                echo "Lo has logrado!!!!!!";


            }else{

            

            echo "NO lo has logrado";

        }
    }

/*

        foreach($users as $user) {
            $name = $user['name']; 
            $surname = $user['surname'];
            $tareas = $user['tareas'];
            foreach($tareas as $tarea) {
                echo $name.' tienes que '. $tarea['titulo'].' esta tarea está '.$tarea['estado'].'.<br>';
            }
        }

        return $this->variable;
    }
*/




?>

<?php



$objet1 = new Login();

echo $objet1->userComprobation();
echo $objet1->pwComprobation();


//print_r($objet1->$this->read());

?>