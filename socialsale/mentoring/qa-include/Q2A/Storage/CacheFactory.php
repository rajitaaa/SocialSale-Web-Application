<?php

class Q2A_Storage_CacheFactory
{
	private static $cacheDriver = null;

	
	public static function getCacheDriver()
	{
		if (self::$cacheDriver === null) {
			$config = array(
				'enabled' => (int) qa_opt('caching_enabled') === 1,
				'keyprefix' => QA_FINAL_MYSQL_DATABASE . '.' . QA_MYSQL_TABLE_PREFIX . '.',
				'dir' => defined('QA_CACHE_DIRECTORY') ? QA_CACHE_DIRECTORY : null,
			);

			$driver = qa_opt('caching_driver');

			switch($driver)
			{
				case 'memcached':
					self::$cacheDriver = new Q2A_Storage_MemcachedDriver($config);
					break;

				case 'filesystem':
				default:
					self::$cacheDriver = new Q2A_Storage_FileCacheDriver($config);
					break;
			}

		}

		return self::$cacheDriver;
	}
}
