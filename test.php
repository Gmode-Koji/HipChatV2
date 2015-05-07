<?php
/**
 * HipChatのテストプログラム
 *  $room_idの部屋に$messageの通知を送ります
 */
include 'src/autoloader.php';
define('HIPCHAT_ACCESS_TOKEN', '[トークン]');
$room_id = 1234;
$message = 'HipChatV2 TEST';

$hipchat = PageBoost\HipChatV2\HipChatFactory::instance();
$hipchat->setAccessToken(HIPCHAT_ACCESS_TOKEN);
$room = $hipchat->room($room_id);
$room->send($message);
