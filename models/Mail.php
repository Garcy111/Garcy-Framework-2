<?php
namespace App\models;

class Mail {
	
	public static function sendMessage($name, $email, $subject, $body) {
		$from = $email;
		$subject = $subject;
		$header = "From: $from\r\nReply-to: $from\r\nContent-type: text/plain; charset=utf-8\r\n";
		$message = "$name\r\n$email\r\n$phone\r\n$body\r\n";
		mail(__EMAIL__, $subject, $message, $header);
	}
		
}