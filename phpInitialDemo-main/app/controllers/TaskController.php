<?php

class TaskController extends ApplicationController
{

	public $titulo;
	public $descripcion;
	public $estado;
	public $hora_inicio;
	public $hora_fin;

	public function indexAction()
	{
		
	}

	public function taskupAction()
	{
		$this->titulo = $_POST['titulo'];
		$this->descripcion = $_POST['descripcion'];
		$this->estado = $_POST['estado'];
		$this->hora_inicio = $_POST['hora_inicio'];
		$this->hora_fin = $_POST['hora_fin'];
		
        $taskup = new Taskup();
        $taskup->addTask($this->titulo, $this->descripcion, $this->estado, $this->hora_inicio, $this->hora_fin);

	}

	public function edithomeAction()
	{

		$task = new TaskRead;
		$this->view->_task = $task->taskReadAction();

	}


	public function editAction()
	{

		$titulo = $_POST['newtitulo'];
		$descripcion = $_POST['newdescripcion'];
		$estado = $_POST['newestado'];
		$hora_inicio = $_POST['newhora_inicio'];
		$hora_fin = $_POST['newhora_fin'];
		
        $taskedit = new TaskEdit();
        $taskedit->edit($titulo, $descripcion, $estado, $hora_inicio, $hora_fin);
		
	}



	
	public function checkAction()
	{
		
	}
}