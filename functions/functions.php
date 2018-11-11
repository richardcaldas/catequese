<?php 
	
	function getOnlyNumber($str) {
    	return preg_replace("/[^0-9]/", "", $str);
	}
	
	function formatCPF($value){
		$parte_um     = substr($value, 0, 3);
		$parte_dois   = substr($value, 3, 3);
		$parte_tres   = substr($value, 6, 3);
		$parte_quatro = substr($value, 9, 2);

		$cpf = "$parte_um.$parte_dois.$parte_tres-$parte_quatro";
		return $cpf;
	}
	
	
	function sendMail($to, $subject, $message){
		$header = "From:catequese@catequeseinfantilsaodimas.com.br \r\n";
        $header .= "MIME-Version: 1.0\r\n";
        $header .= "Content-type: text/html;charset=utf-8 \r\n";
         
        $retval = mail ($to,$subject,$message,$header);
		
		return $retval;
		
	}

	function showBoolean($num){
		if ($num == 1){
			return "Sim";
		}else{
			return "Não";
		}
	}

	function getDiaSemana($num){
		if ($num == 2){
			return "Segunda-feira";
		}else if ($num == 3){
			return "Terça-feira";
		}else if ($num == 4){
			return "Quarta-feira";
		}else if ($num == 5){
			return "Quinta-feira";
		}else if ($num == 6){
			return "Sexta-feira";
		}else if ($num == 7){
			return "Sábado";
		} else if ($num == 1){
		    return "Domingo";
        }
	}

	function setNull($value){
		if ($value == ""){
			return null;
		}
	}

	
?>