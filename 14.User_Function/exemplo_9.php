<?php

	$hierarquia = array(

		array(
			'nome_cargo' => 'CEO',
			'subordinados' => array(
								//Inicio Diretor Comercial
								array(
									'nome_cargo' => 'Diretor Comercial',
									'subordinados' => array(
										//Inicio Gerente de Vendas
										array(
											'nome_cargo' => 'Gerente de Vendas'
										)
										//Termino
									)
								), 
								//Termino
								//Inicio Diretor Financeiro
								array(
									'nome_cargo' =>'Diretor Financeiro',
									'subordinados' =>array(

										array(
											'nome_cargo' => 'Gerente de Contas a Pagar',
											'subordinados' => array(

												array(
													'nome_cargo' => 'Supervisor de pagamentos'
												)

											)
										)

									)
								),
								//Termino
								//Inicio Gerente de Compras
								array(
									'nome_cargo' => 'Gerente de Compras',
									'subordinados' => array(

										array(
											'nome_cargo'=>'Supervisor de Suprimentos'
										)

									)
								)
								//Termino
								) 
								
		)

	);

	function exibe($cargos){

		$html = '<ul>';


		foreach ($cargos as $cargo) {
			$html .= "<li>"; 

			$html .= $cargo['nome_cargo'];

			if (isset($cargo['subordinados']) && count($cargo['subordinados']) > 0) {
				
				$html .= exibe($cargo['subordinados']);

			}

			$html .= "</li>"; 
		}


		$html .= '</ul>';

		return $html;
	}

	echo exibe($hierarquia);
?>