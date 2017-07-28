<?php
	function calculate1() 
	{
		global $a;
	    global $b;

	    $a = $_REQUEST["a"];
		$b = $_REQUEST["b"];

		if(is_numeric($a) && is_numeric($b)) {
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
        else {
            $c = "Введите цифры";
            return $c;
        }
	}