<?php

class TaskEdit extends DB
{

    public $tarea = array();
    public $userPosition; 
    public $titulo;
    public $descripcion;
    public $estado;
    public $hora_inicio;
    public $hora_fin;
    public $gatetask = 0;
    public $taskPosition;
    public $tareas = array();


    public function session()
    {

        $this->userPosition =  $_SESSION["userPosition"];

    }

    public function sessionTask()
    {

        $this->taskPosition = $_SESSION["counttask"];

    }


    function edit($titulo, $descripcion, $estado, $hora_inicio, $hora_fin)
    {
        $this->session();
        $this->sessionTask();
       
        $decoded_json = $this->read();
        
        //$posicionFinalTarea = $this->contadortask ;

        //echo $this->contadortask ;

        $tarea = array(
            'titulo' => $titulo,
            'descripcion' => $descripcion,
            'estado' => $estado,
            'hora_inicio' => $hora_inicio,
            'hora_fin' => $hora_fin,
        );

        $decoded_json[$this->userPosition]['tareas'][$this->taskPosition] = $tarea;
        //$decoded_json[$this->userPosition]['tareas'][3] = $tarea;
        //$this->read()[$this->userPosition]['tareas'][$this->taskPosition]

        $write = $this->write($decoded_json);
        
        header('Location:/web/home');

        

        /*

        function addTask($titulo, $descripcion, $estado, $hora_inicio, $hora_fin)
    {

        $this->session();
       
        $decoded_json = $this->read();
        
        $posicionFinalTarea = count($decoded_json[$this->userPosition]['tareas']);

        $tarea = array(
            'titulo' => $titulo,
            'descripcion' => $descripcion,
            'estado' => $estado,
            'hora_inicio' => $hora_inicio,
            'hora_fin' => $hora_fin,
        );

        $decoded_json[$this->userPosition]['tareas'][$posicionFinalTarea] = $tarea;

        $write = $this->write($decoded_json);
        
        header('Location:/web/home');

    }

        */

    }
   
}

?>

