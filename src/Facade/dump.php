<?php

use Zenit\Bundle\RemoteLog\Component\RemoteLog;
use Zenit\Core\ServiceManager\Component\ServiceContainer;

function dump(...$messages) {
	$remoteLog = ServiceContainer::get(RemoteLog::class);
	foreach ($messages as $message) {
		(function (RemoteLog $remoteLog, $message) { $remoteLog->dump($message); })($remoteLog, $message);
	}
}