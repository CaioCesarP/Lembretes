<?php
/*Mensagem já configurada com o formato de texto de envio para email.*/
$message = wordwrap($_POST['lemb'], 70, "\r\n");
/*destinatário*/
$to ='caiocesarworks@gmail.com';
/*assunto da mensagem*/
$subject = 'Lembrete';
/*headers, informações necessárias para email identificar meio de envio.*/
$headers = array(
    'From' => 'caiocesarworks@gmail.com',
    'Reply-To' => 'caiocesarworks@gmail.com',
    'X-Mailer' => 'PHP/' . phpversion()
);
// print_r($_POST['lemb']);
/*função que verifica se existe mensagem. Caso exista, cria uma variavel para função mail() e retorna*/
if(isset($_POST['lemb']) && !empty($_POST['lemb'])  ){ 
    $enviar = mail('caiocesarworks@gmail.com', 'Lembrete', $message, $headers);
    echo "enviado com sucesso\n";
    //echo $message;
    return  $enviar;
} else{
    echo "Erro de envio: Mensagem não encontrada.";
}
return 
?>
