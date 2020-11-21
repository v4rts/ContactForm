<?php

	$proffession = $_POST['proffession'];
	$exams = $_POST['exams'];
	$events = $_POST['events'];


	$proffession = htmlspecialchars($proffession);
	$exams = htmlspecialchars($exams);
	$events = htmlspecialchars($events);

	$proffession = urldecode($proffession);
	$exams = urldecode($exams);
	$events = urldecode($events);

	$proffession = trim($proffession);
	$exams = trim($exams);
	$events = trim($events);


	if (mail("v4rts@yandex.ru",
			 "Новая анкета!",
			 "Профессия: ".$proffession."\n".
			 "Экзамены: ".$exams."\n".
			 "Мероприятия: ".$events,
			 "From: no-reply@mydomain \r\n")
	){
		echo ('Successful!');
	}
?>