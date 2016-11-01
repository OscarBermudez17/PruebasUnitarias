<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ClaseCon
 *
 * @author oscar
 */ 
class ClaseCon  extends PHPUnit_Framework_TestCase{
    //put your code here
    function  test_consulta(){
    
      require ('Valor.php');
     
     $dataValores = new Valor();


//echo 'Consulta ----->>  '.$consulta;
$con=mysql_connect($dataValores->getHost(),$dataValores->getUser(),$dataValores->getPass()) or die ("problemas al conectar");
 mysql_select_db($dataValores->getDb(),$con)or die ("Problemas al conectar la bd");
 if($con== null){

     $con=null;
 }else{

 	$con='valido';
 }
 $this->assertEquals('valido', $con);

} 
}