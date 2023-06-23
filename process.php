<?php
if(isset($_POST['input-29']) != ""){
			$to = "qooobo@ya.ru";
			$from =  $_POST["input-30"];
			$message = "&nbsp;&nbsp;&nbsp;&nbsp;<strong>ФИО пациента: </strong>".$_POST["input-29"]."<br />";
			$message .= "&nbsp;&nbsp;&nbsp;&nbsp;<strong>Email адрес: </strong>".$_POST["input-30"]."<br />";
			$message .= "&nbsp;&nbsp;&nbsp;&nbsp;<strong>Номер телефона: </strong>".$_POST["input-31"]."<br />";
			$message .= "&nbsp;&nbsp;&nbsp;&nbsp; <strong>Желаемая дата приёма: </strong>".$_POST["datepicker"]."<br />";
			$message .= "&nbsp;&nbsp;&nbsp;&nbsp; <strong>Специалист: </strong>".$_POST["textarea"]."<br />";
			$subject = 'ЗАПИСЬ НА ПРИЁМ';		
			$headers = "From: ".$_POST["input-30"]."\n";
			$headers .= "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
			
			$send =	mail($to,$subject,$message,$headers);
	
	
	
	if($send)
	{
		echo "success";
	}
	else
	{
		echo "error";
	}
}

if(isset($_POST['contact_name']) != ""){
			$to = "qooobo@ya.ru";
			$from =  $_POST["contact_email"];
			$message = "&nbsp;&nbsp;&nbsp;&nbsp;<strong>Имя клиента: </strong>".$_POST["contact_name"]."<br />";
			$message .= "&nbsp;&nbsp;&nbsp;&nbsp;<strong>Email адрес клиента: </strong>".$_POST["contact_email"]."<br />";
			$message .= "&nbsp;&nbsp;&nbsp;&nbsp;<strong>Тема обращения: </strong>".$_POST["contact_subject"]."<br />";
			$message .= "&nbsp;&nbsp;&nbsp;&nbsp; <strong>Сообщение: </strong>".$_POST["message"]."<br />";
			$subject = 'Клиент дал обратную связь!';		
			$headers = "From: ".$_POST["contact_email"]."\n";
			$headers .= "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
			
			$send =	mail($to,$subject,$message,$headers);
	
	
	
	if($send)
	{
		echo "success";
	}
	else
	{
		echo "error";
	}
}


if(isset($_POST['subscribe_name']) != ""){
			$to = "qooobo@ya.ru";
			$from =  $_POST["subscribe_email"];
			$message = "&nbsp;&nbsp;&nbsp;&nbsp;<strong>Имя клиента: </strong>".$_POST["subscribe_name"]."<br />";
			$message .= "&nbsp;&nbsp;&nbsp;&nbsp;<strong>Email адрес клиента: </strong>".$_POST["subscribe_email"]."<br />";
			$subject = 'Клиент оформил подписку на новости';		
			$headers = "From: ".$_POST["subscribe_email"]."\n";
			$headers .= "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
			
			$send =	mail($to,$subject,$message,$headers);
	
	
	
	if($send)
	{
		echo "success";
	}
	else
	{
		echo "error";
	}
}


?>