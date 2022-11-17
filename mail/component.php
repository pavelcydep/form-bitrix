<?//require_once($_SERVER['DOCUMENT_ROOT'].'/PHPMailer/class.phpmailer.php');?>
<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
   /*отправка формы*/ 
   $mail = new PHPMailer;
   $mail->From = "no-replay@terrafrigo.ru";
   $mail->FromName = "no-replay";
   $mail->AddAddress('почта куда идут письма');

   $mail->isHTML(true);
   $mail->CharSet = 'UTF-8'; 
   $mail->Subject = 'тема письма'; 
   $mail->Body = 'Заголовки заявки:'. $_REQUEST['requestName'] .'</br>'. 
'Категория:'. $_REQUEST['category'] . '</br>' . 'Вид заявки:' . $_REQUEST['radioRequest'] .'</br>'.
'Склад поставки:' . $_REQUEST['optionSklad']. '</br>' .'Состав заявки:' . $_REQUEST['optionBrend']
.'</br>' . 'Наименование:'.$_REQUEST['brand'] . '</br>' .'Количество:'.$_REQUEST['sum']. '</br>' 
. 'Фасовка:' . $_REQUEST['fas'] . 'Клиент:' . $_REQUEST['client'] . '</br>'.'Файл:'. $_REQUEST['file'] . 
'</br>' . 'Комментарий:' . $_REQUEST['client'];

   if($mail->Send()){ 
       echo 'Отправлено';
   }
  
else{ 
   echo "Error: ".$element->LAST_ERROR.' '; 
}

$this->IncludeComponentTemplate();
