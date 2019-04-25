<?php 

$hierarquia = array(
	array(
		'nome_cargo'=>'CEO',
		'subordinados'=>array(
			//inicio: Diretor Comercial
			array(
				'nome_cargo'=>'Diretor Comercial',	
				'subordinados'=>array(
					//inicio: Gerente de vendas
						array(

							'nome_cargo'=>'Gerente de vendas'
						)
					//Termino: Gerente de vendas	
				)
			),
			//Termino: Diretor Comercial
			//inicio: Diretor Financeiro	
			array(
				'nome_cargo'=>'Diretor Financeiro',
				'subordinados'=>array(
						//inicio: Gerente de contas a pagar	
						array(
							'nome_cargo'=>'Gerente de contas a pagar',
							'subordinados'=>array(
								// Inicio: Supervisor de pagamentos
								array(
									'nome_cargo'=>'Supervisor de Pagamentos'

								)
								// Termino: Supervisor de Pagamentos

							)


						),	
						//Termino: Gerente de contas a pagar	
						//Inicio: Gerente de Compras
						array(
							'nome_cargo'=>'Gerente de compras',
							'subordinados'=>array(
								//Inicio: supervisor de suprimentos
									array(
										'nome_cargo'=>'supervisor de suprimentos',
										'subordinados'=>array(

											array(
												'nome_cargo'=>'Funcionario'

											)	
										)
									)
								//Termino: supervisor de suprimentos	
							)
						)	
						//Termino: Gerente de Compras

				)

			)				
			//Termino: Diretor Financeiro	
		)

	)
);

function exibe($cargos){

	$html= "<ul>";

	foreach ($cargos as $cargo) {
		
		$html .= "<li>";
		$html .= $cargo['nome_cargo'];
		if (isset($cargo['subordinados']) && count($cargo['subordinados']) > 0){

			$html.= exibe($cargo['subordinados']);

		}
		$html .= "</li>";
	}

	$html .= "</ul>";

	return $html;

}

echo exibe($hierarquia);




 ?>