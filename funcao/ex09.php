<?php 

$hierarquia = array(
	array(
		'nome_cargo' => 'CEO',
		'subordinados' => array(
			//Inicio Diretor Comercial
			array(
				'nome_cargo'=>'Diretor Comercial',
				'subordinados'=>array(
						//Inicio Gerente de vendas
						array(
						'nome_cargo'=>'Gerente e Vendas'
						)
						//termino gerente de vendas
					)
				),
			//Fim Diretor Comercial
			//Inicio Diretro Financeiro
			array(
				'nome_cargo'=>'Diretor Financeiro',
				'subordinados'=>array(
					//inicio gerente de contas
					array(
						'nome_cargo'=>'gerente de contas',
						'subordinados'=>array(
							//inicio supervisor de pagode
							array(
								'nome_cargo' => 'Supervisor de Pagamentos'
								 )
							//termino supervisor de pagodes
							)
					),
					//termino gerente de contas
					//inicio gerente de compras
					array(
						'nome_cargo'=>'Gerente de Compras',
						'subordinados'=>array(
							//inicio supervisor de suprimentos
							array(
								'nome_cargo'=>'Supervisor de Suprimentos'
								)
							//terminor supervisor de suprimmentos
						)

					)
					//termino gerente de compras
				)
			)
			//Termino Diretor Financeiro
		)
	)

);

//var_dump($hierarquia);

function exibe($cargos){

	$html = '<ul>';

	foreach ($cargos as $cargo) {
		$html .= "<li>";

		$html .= $cargo['nome_cargo'];

		if (isset($cargo['subordinados']) && count($cargo['subordinados']) > 0){

			$html .= exibe($cargo['subordinados']);

		}

		$html .= "</li>";

		}

	$html .= "</ul>";

	return $html;

}

echo exibe($hierarquia);

 ?>