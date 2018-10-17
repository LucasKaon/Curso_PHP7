<?php

	function test($callback){

		//Processo a ser realizado

		$callback();

	}


	test(function(){

		echo "Terminou";

	});
?>