<?php

class Task{
	public $description;

	public $title;

	public $moreDescription;

	public $completed = false;

	public function __construct($title, $description, $moreDescription)
	{
		$this->title = $title; 
		$this->description = $description;
		$this->moreDescription = $moreDescription;
	}

	public function complete()
	{
		$this->completed = true;
	}
}

$task = new Task('Learn OOP', 'longer description', 'even more descriptions');

$task->complete();

var_dump($task->completed);
var_dump($task->title);
var_dump($task->description);
var_dump($task->moreDescription);
