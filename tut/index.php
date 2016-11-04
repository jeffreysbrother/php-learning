<?php

require 'functions.php';

// variable
$greeting = "hello!";

// array
$names = ['jeff', 'james', 'joe'];

// associative array
$person = [
	'age' => 33,
	'hair' => 'brownish',
	'job' => 'web developer',
	'hasThreeLegs' => false
];

$animals = ["cat", "dog"];

class Task {
	protected $description;

	protected $completed = false;

	// the __constructor() method is triggered automaticaly upon instantiation
	public function __constructor($value='')
	{
		$this->description = $description;
	}

	public function complete()
	{
		$this->completed = true;
	}

	public function isComplete()
	{
		return $this->completed;
	}
}



$task = new Task('Go to the store');
// dd($task);
$task->complete();
var_dump($task->isComplete());

// require 'index.view.php';