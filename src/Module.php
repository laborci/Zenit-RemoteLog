<?php namespace Zenit\Bundle\RemoteLog;

use Zenit\Bundle\DBAccess\Interfaces\SqlLogHookInterface;
use Zenit\Bundle\RemoteLog\Component\SqlLogHook;
use Zenit\Core\Module\Interfaces\ModuleInterface;
use Zenit\Core\ServiceManager\Component\ServiceContainer;

class Module implements ModuleInterface {
	public function load($config) {
		\Zenit\Bundle\RemoteLog\Component\RemoteLog::Service()->registerErrorHandlers();
		ServiceContainer::shared(SqlLogHookInterface::class)->service(SqlLogHook::class);
		include __DIR__."/../Facade/dump.php";
	}
}
