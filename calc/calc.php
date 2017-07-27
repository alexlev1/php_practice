<?php
	function calculate1() 
	{
		$a = $_REQUEST["a"];
		$b = $_REQUEST["b"];
		
		switch ($_REQUEST["num"]) 
		{
			case ("+"):
				$c = $a + $b;
				break;
			case ("-"):
				$c = $a - $b;
				break;
			case ("*"):
				$c = $a * $b;
				break;
			case ("/"):
				$c = $a / $b;
				break;
		}
		return $c;
	}