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

                <?php echo rolagem_de_itens_to_html_table(); ?>

            </table>
        </div>
    </div>

<?php





function rolagem_de_itens_to_html_table(){
    $textos_rolagem = new Textos_Rolagem();

    $texto_tabela = "";

    for($i = 1; $i<=2;$i++){
        $random_roll = rand(1,100);

        $texto_tabela = $texto_tabela . "<tr>";

        $titulo = $textos_rolagem->getIndexValue(['pergunta_'.$i, TITULO]);
        $descricao = $textos_rolagem->getIndexValue(['pergunta_'.$i, DESCRICAO]);
        $opcoes = $textos_rolagem->getIndexValue(['pergunta_'.$i, OPCOES]);

        $resultado = sortear_valor_array_range($opcoes, $random_roll);
        $texto_tabela = $texto_tabela . "<td>$random_roll</td><td>$titulo</td><td>$resultado[0]</td><td>$resultado[1]</td>";
        $texto_tabela = $texto_tabela . "</tr>";

    }


    return $texto_tabela;
}


/**
 * @param $array_opcoes recebe um array aonde as chaves são um numero, o valor maximo da na rolagem do d100 e um array com os textos desta rolagem
 *               o primeiro valor do array eh o titulo e o segundo a descrição.
 * @param $random_roll uma rolagem de d100
 * @return mixed
 */
function sortear_valor_array_range($array_opcoes, $random_roll){
    foreach($array_opcoes as $numero_max => $array_texto){
        if($random_roll <= $numero_max){
            return $array_texto;
        }
    }
}

?>

</body>