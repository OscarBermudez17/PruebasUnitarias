<?php
class TddTests  extends PHPUnit_Framework_TestCase{
	
	
		public function testcargar(){
		//$valor= ""false"";

		$variable = 'texto';

         $this->assertEquals('texto', $variable);
	
		}


}

?>