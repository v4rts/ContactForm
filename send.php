<?php

	$profession = $_POST['profession'];
	$exams = $_POST['exams'];
	$events = $_POST['events'];


	$profession = htmlspecialchars($profession);
	$exams = htmlspecialchars($exams);
	$events = htmlspecialchars($events);

	$profession = urldecode($profession);
	$exams = urldecode($exams);
	$events = urldecode($events);

	$profession = trim($profession);
	$exams = trim($exams);
	$events = trim($events);


	if (mail("v4rts@yandex.ru",
			 "Новая анкета!",
			 "Профессия: ".$profession."\n".
			 "Экзамены: ".$exams."\n".
			 "Мероприятия: ".$events,
			 "From: no-reply@mydomain \r\n")
	){
		echo ('Successful!');
	}
?>