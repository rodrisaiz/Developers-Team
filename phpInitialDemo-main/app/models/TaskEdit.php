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
    public $contadortask;
    public $tareas = array();


    public function session()
    {

        $this->userPosition =  $_SESSION["userPosition"];

    }

    function taskcount()
    {

        $this->contadortask = $_GET["item"];
    }


    function edit($titulo, $descripcion, $estado, $hora_inicio, $hora_fin)
    {
        $this->session();
        $this->taskcount();
       
        $decoded_json = $this->read();
        
        
        $tarea = array(
            'titulo' => $titulo,
            'descripcion' => $descripcion,
            'estado' => $estado,
            'hora_inicio' => $hora_inicio,
            'hora_fin' => $hora_fin,
        );

        $decoded_json[$this->userPosition]['tareas'][$this->contadortask] = $tarea;

        $write = $this->write($decoded_json);
        
        header('Location:/web/home');

    }

}

?>