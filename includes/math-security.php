<?php

	class BasicMathSecurity {
		
		private $name;
		private $operand1, $operand2;
		
		public function BasicMathSecurity( $name = 'math' )
		{
			$this->name = $name;
			$this->generateNumbers();
		}
		
		public function generateNumbers()
		{
			$this->operand1 = mt_rand( 1, 9 );
			$this->operand2 = mt_rand( 1, 9 );
		}
		
		public function getField()
		{
			$label = '<label for="' . $this->name . '">' . $this->operand1 . ' + ' . $this->operand2 . ' = </label>';
			$math = '<input type="text" name="' . $this->name . '" value="" id="' . $this->name . '"></input>';
			
			$answer = '<input type="hidden" name="' . $this->name . '-answer" value="' . ( $this->operand1 + $this->operand2 ) . '"></input>';
			$string = $label . "\n" . $math . "\n" . $answer;
			
			return $string;
		}
		
		public function isCorrect()
		{
			$answer = $this->name . '-answer';
			if( !isset( $_REQUEST[ $this->name ] ) || !isset( $_REQUEST[ $answer ] ) )
				return false;
			
			return (int) $_REQUEST[ $this->name ] == (int) $_REQUEST[ $answer ];
		}
		
	}

?>