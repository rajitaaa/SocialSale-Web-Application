<?php

interface Q2A_Storage_CacheDriver
{
	
	public function get($key);

	
	public function set($key, $data, $ttl);

	public function delete($key);

	
	public function clear($limit = 0, $start = 0, $expiredOnly = false);

	public function isEnabled();

	public function getError();

	
	public function getKeyPrefix();

	
	public function getStats();
}
