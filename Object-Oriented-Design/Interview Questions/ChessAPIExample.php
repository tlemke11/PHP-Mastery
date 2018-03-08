<?php
/**
 * Created by PhpStorm.
 * User: Tyler Lemke
 * Date: 3/7/18
 *
 * In a recent interview I was asked to create a Chess API that could be accessed from and used by Multiple Services
 * I Identified 3 main objects that the board game would have: Users, Board, Pieces.
 * This is an attempt to hash the idea out a little further as well as show a bit of code
 *
 *
 * API endpoints
 *
 * /v1/board/1002/user/2/move -
 *
 * body of request -
 *
 *  {
 *
 *
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

	private function promote(){
		//this is called when a pawn reached the 8th level (check has to be done on the pawn
	}
}

/**
 * Pieces
 */

abstract class GamePiece {
	protected $id;
	protected $location;
	protected $inGame;
	protected $color;

	function __construct($coords, $pieceID, $pieceColor){
		$this->location = $coords;
		$this->inGame = true;
		$this->color = $pieceColor;
		$this->id = $pieceID;
	}
	//this function will be overridden to allow for different moves, some will check for collisions
	abstract protected function move(); //do we wnat to change this to an attack movement?

	public function removeFromGame(){
		$this->inGame = false;
	}
}

class Queen extends GamePiece {
	const validDirection = ['N', 'S', 'E', 'W', 'NE', 'NW', 'SE', 'SW'];

	public function returnToGame(){
		$this->inGame = true;
	}
	public function move($x,$y){
		//the queen can move in multiple directions
	}
}

class Pawn extends GamePiece {
	const validDirection = ['N', 'NE', 'NW'];

	public function move($x,$y){

	}
}