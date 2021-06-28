<?php
   //Variáveis que recebem os dados digitados no formulário pelo id atribuído nos input
   $from = $_REQUEST['email'];
   $name = $_REQUEST['name'];
   $csubject = $_REQUEST['subject'];
   $cmessage = $_REQUEST['message'];

mail (
    "mtbernioficial@gmail.com", //Endereço que vai receber a mensagem
    "Nome: $name
     Email: $from
     Assunto: $csubject
     Mensagem: $cmessage", "FROM:$name<$from>");
?>