<?php

$edad = 54;
$genero = "F";

if($genero == "M"){
	if($edad>=60){
		echo "puedes juvilarte";
	}else{
		echo "no puedes juvilarte";
	}

}elseif($genero == "F"){
	if($edad>54){
		echo "puedes juvilarte";
	}else{
		echo "no puedes juvilarte";
	}
}else{
	echo "deves de ingresar un genero valido F o M";
}