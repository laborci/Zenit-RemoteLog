<?php namespace Zenit\Bundle\RemoteLog\Component;

use Zenit\Bundle\DBAccess\Interfaces\SqlLogHookInterface;

class SqlLogHook implements SqlLogHookInterface{

	/** @var \Zenit\Bundle\RemoteLog\Component\RemoteLog */
	private $logger;
	public function __construct(RemoteLog $logger){ $this->logger = $logger; }
	public function log($sql){ $this->logger->sql($sql); }

}