<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="custom/custom.css"/>
    <!-- jQuery and Bootstrap JS -->
    <script type="text/javascript" src="jquery/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

</head>
<body>

<?php

// Report all PHP errors
error_reporting(E_ALL);

include 'textos.php';



?>
    <div class="row tabela">
        <div class="col-md-8 col-md-offset-2">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>d100</th>
                        <th>Background Item</th>
                        <th>Resultado</th>
                        <th>Descrição</th>
                    </tr>
                </thead>



            </table>
        </div>
    </div>

<?php

$textos_rolagem = new Textos_Rolagem();
var_dump( $textos_rolagem->getIndexValue(['pergunta_1', OPCOES]));

rolagem_de_itens_to_html_table();
$variabilus = ${"array_respostas_".$i};
var_dump( $variabilus);

function rolagem_de_itens_to_html_table(){
    for($i = 1; $i<=2;$i++){
        $variabilus = ${"array_respostas_".$i};

        $resultado = sortear_valor_array_range(${"array_respostas_".$i});
    }
}


/**
 * @param $array_opcoes recebe um array aonde as chaves são um numero, o valor maximo da na rolagem do d100 e um array com os textos desta rolagem
 *               o primeiro valor do array eh o titulo e o segundo a descrição.
 * @return mixed
 */
function sortear_valor_array_range($array_opcoes){
    $random_roll = rand(1,100);
    foreach($array_opcoes as $numero_max => $array_texto){
        if($random_roll <= $numero_max){
            return $array_texto;
        }
    }
}

?>

</body>