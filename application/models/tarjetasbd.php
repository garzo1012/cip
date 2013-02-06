<?php
	/**
	* 
	*/
	class Tarjetasbd extends CI_Model
	{
		
		function __construct()
		{
			$this->load->database();
		}

		function getTarjetas(){
			$aux = 0;
			$res = mysql_query("Select * from Tarjetas");
			while ($fila = mysql_fetch_array($res)) {
				$aux++;
				$tarjetas['t'.$aux]['id'] = $fila['ID_Tarjeta'];
				$tarjetas['t'.$aux]['palabra'] = $fila['Palabra'];
				$tarjetas['t'.$aux]['desc'] = $fila['Desc'];
				$tarjetas['t'.$aux]['color'] = $fila['Color'];
				$tarjetas['t'.$aux]['tipo'] = $fila['Eneatipo'];
			}

			return $tarjetas;
		}
	}
?>