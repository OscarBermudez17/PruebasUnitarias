<?php
class TddTests  extends PHPUnit_Framework_TestCase{
	
	
		public function test_cargar(){
		//$valor= ""false"";

		$variable = 'ggtexto';

         $this->assertEquals('texto', $variable);
	
		}


}

?>