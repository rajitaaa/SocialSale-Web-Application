<?php

class Q2A_Storage_MemcachedDriver implements Q2A_Storage_CacheDriver
{
	private $memcached;
	private $enabled = false;
	private $keyPrefix = '';
	private $error;
	private $flushed = false;

	const HOST = '127.0.0.1';
	const PORT = 11211;

	
	public function __construct($config)
	{
		if (!$config['enabled']) {
			return;
		}

		if (isset($config['keyprefix'])) {
			$this->keyPrefix = $config['keyprefix'];
		}

		if (extension_loaded('memcached')) {
			$this->memcached = new Memcached;
			$this->memcached->addServer(self::HOST, self::PORT);
			if ($this->memcached->set($this->keyPrefix . 'test', 'TEST')) {
				$this->enabled = true;
			} else {
				$this->setMemcachedError();
			}
		} else {
			$this->error = qa_lang_html('admin/no_memcached');
		}
	}

	
	public function get($key)
	{
		if (!$this->enabled) {
			return null;
		}

		$result = $this->memcached->get($this->keyPrefix . $key);

		if ($result === false) {
			$this->setMemcachedError();
			return null;
		}

		return $result;
	}

	
	public function set($key, $data, $ttl)
	{
		if (!$this->enabled) {
			return false;
		}

		$ttl = (int) $ttl;
		$expiry = time() + ($ttl * 60);
		$success = $this->memcached->set($this->keyPrefix . $key, $data, $expiry);

		if (!$success) {
			$this->setMemcachedError();
		}

		return $success;
	}

	
	public function delete($key)
	{
		if (!$this->enabled) {
			return false;
		}

		$success = $this->memcached->delete($this->keyPrefix . $key);

		if (!$success) {
			$this->setMemcachedError();
		}

		return $success;
	}

	
	public function clear($limit = 0, $start = 0, $expiredOnly = false)
	{
		if ($this->enabled && !$expiredOnly && !$this->flushed) {
			$success = $this->memcached->flush();
			// avoid multiple calls to flush()
			$this->flushed = true;

			if (!$success) {
				$this->setMemcachedError();
			}
		}

		return 0;
	}

	
	public function isEnabled()
	{
		return $this->enabled;
	}

	
	public function getError()
	{
		return $this->error;
	}

	
	public function getKeyPrefix()
	{
		return $this->keyPrefix;
	}

	
	public function getStats()
	{
		$totalFiles = 0;
		$totalBytes = 0;

		if ($this->enabled) {
			$stats = $this->memcached->getStats();
			$key = self::HOST . ':' . self::PORT;

			$totalFiles = isset($stats[$key]['curr_items']) ? $stats[$key]['curr_items'] : 0;
			$totalBytes = isset($stats[$key]['bytes']) ? $stats[$key]['bytes'] : 0;
		}

		return array(
			'files' => $totalFiles,
			'size' => $totalBytes,
		);
	}

	
	private function setMemcachedError()
	{
		$this->error = qa_lang_html_sub('admin/memcached_error', $this->memcached->getResultMessage());
	}
}
