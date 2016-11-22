<?php
	class calculadora
	{	
		var $op1;
		var $op2;
		var $res;
		
		function sumar($valor1,$valor2)
		{
			$this->op1=$valor1+$valor2;
		}
		function multiplicar($valor1,$valor2)
		{
			$this->op2=$valor1*$valor2;
		}
		function resultado($valor1,$valor2)
		{
			$this->res=$this->op1+$this->op2;
			echo $this->res;
		}
	}
$clase=new calculadora;
$clase->sumar(2,2);
$clase->multiplicar(4,4)
	
?>