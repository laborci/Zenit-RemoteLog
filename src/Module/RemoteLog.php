<?php namespace Zenit\Bundle\RemoteLog\Module;

use Zenit\Bundle\DBAccess\Interfaces\SqlLogHookInterface;
use Zenit\Bundle\RemoteLog\Component\SqlLogHook;
use Zenit\Core\Module\Interfaces\ModuleInterface;
use Zenit\Core\ServiceManager\Component\ServiceContainer;

class RemoteLog implements ModuleInterface {
	public function load($config) {
		\Zenit\Bundle\RemoteLog\Component\RemoteLog::Service()->registerErrorHandlers();
		ServiceContainer::shared(SqlLogHookInterface::class)->service(SqlLogHook::class);
	}
}
