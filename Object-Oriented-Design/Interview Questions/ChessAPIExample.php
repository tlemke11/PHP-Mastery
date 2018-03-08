<?php
/**
 * Created by PhpStorm.
 * User: Tyler Lemke
 * Date: 3/7/18
 *
 * In a recent interview I was asked to create a Chess API that could be accessed from and used by Multiple Services
 * I Identified 3 main objects that the board game would have: Users, Board, Pieces.
 * This is an attempt to hash the idea out a little further as well as show a bit of code
 */

/**
 * Users
 */

class User {
	private $color;
	private $id;
	private $myTurn;

	function __construct($color, $id){
		//initialize user color
		//if white, allow user to choose
	}
}

/**
 * Board
 */
class GameBoard {
	function __construct($UserObject1, $UserObject2){
		//initialize all of the pieces to their proper locations
	}

	public function validateMove(){
		//validates if the move is within the boundaries of the boardgame
	}
}

/**
 * Pieces
 */

abstract class GamePiece {
	protected $location;
	protected $inGame;
	protected $orientation; //Im not sure this is the best approach, they mentioned attack movement in the interview

	function __construct($UserObject1, $UserObject2, $coords){
		//initialize all of the pieces to their proper places
		$this->location = $coords;
		$this->inGame = true;

		//set orientation based on user color
	}
	//this function will be overridden to allow for different moves, some will check for collisions
	abstract protected function move(); //do we wnat to change this to an attack movement?

	public function removeFromGame(){
		$this->inGame = false;
	}
}

class Queen extends GamePiece {
	const validDirection = [N, S, E, W, NE, NW, SE, SW];

	public function returnToGame(){
		$this->inGame = true;
	}
	public function move(){
		//the queen can move in multiple directions
	}
}