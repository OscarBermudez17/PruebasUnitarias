<?php
class TddTests  extends PHPUnit_Framework_TestCase{
	
	
		public function test_cargar(){
		//$valor= ""false"";

		$variable = 'texto';

         $this->assertEquals('texto', $variable);
	
		}


}

?>