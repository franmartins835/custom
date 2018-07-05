<?php 

//exemplo feito em linguagem PHP

//para pegar as informações que serão enviadas via requisição POST é necessário utilizar $_POST que é nativo da linguagem PHP

//agora criaremos um array onde cada chave terá o nome dos campos recebidos pela requisição post

$fields = [
    'edz_fat_cod' => $_POST['edz_fat_cod'],
    'edz_cnt_cod' => $_POST['edz_cnt_cod'],
    'edz_cli_cod' => $_POST['edz_cli_cod'],
    'edz_cli_taxnumber' => $_POST['edz_cli_taxnumber'],
    'edz_cli_rsocial' => $_POST['edz_cli_rsocial'],
    'edz_cli_email' => $_POST['edz_cli_email'],
    'edz_fat_dtcadastro' => $_POST['edz_fat_dtcadastro'],
    'edz_cli_cel' => $_POST['edz_cli_cel'],
    'edz_gtr_dist' => $_POST['edz_gtr_dist'],
    'edz_fat_status' => $_POST['edz_fat_status'],
    'edz_cli_apikey' => $_POST['edz_cli_apikey'],
    'edz_valorpago' => $_POST['edz_valorpago'],
    'edz_gtr_param1' => $_POST['edz_gtr_param1'],
    'edz_gtr_param2' => $_POST['edz_gtr_param2'],
    'edz_gtr_param3' => $_POST['edz_gtr_param3'],
    'edz_gtr_param4' => $_POST['edz_gtr_param4'],
];
$stringSid = "";
//ordenando os campos para poder gerar o sid
ksort($fields);

//concatenando os valores em um string para geração do sid
foreach ($fields as $key => $value) {
    $stringSid .= $value;
}
$sid = md5($stringSid . "SUA API KEY");

//caso queira usar o nsid faça assim
$nsid = sha1($_POST['edz_fat_cod'] . $_POST['edz_cnt_cod'] . $_POST['edz_cli_cod']);

//agora voce ja tem todos os dados enviados pela eduzz na entrega customizada

//voce pode vailidar a requisição com o $_POST['sid'] ou $_POST['nsid'] que é enviado pela eduzz, é só comparar com o $sid ou $nsid feito por voce. 

//depois de validar pode entregar o conteúdo