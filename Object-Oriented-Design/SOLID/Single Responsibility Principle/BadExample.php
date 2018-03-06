<?php
/**
 * Created by PhpStorm.
 * User: tylerlemke
 * Date: 3/5/18
 * Time: 11:08 PM
 */
//An example of complete disregard for the Single Responsibility Principle
//Inspired by Uncle Bob's bad example -https://8thlight.com/blog/uncle-bob/2014/05/08/SingleReponsibilityPrinciple.html


//This Class does 3 things, It calculates pay, stores data, and resports the hours worked
//SRP is about people and separating responsibilities
namespace SOLID\SRP;

class Exmployee {
	public function calculatePay(){
		//calculate the employees salary/wages - CFO is responsible for the business rules
	};
	public function save() {
		//save Data stored by the BadExample Object - CTO requests changes to this method
	};
	public function reportHours(){
		//report the hours worked by the employee - the COO requests changes to this method
	};
}