<?php

class Q2A_Storage_FileCacheDriver implements Q2A_Storage_CacheDriver
{
	private $enabled = false;
	private $keyPrefix = '';
	private $error;
	private $cacheDir;

	private $phpProtect = '<?php header($_SERVER[\'SERVER_PROTOCOL\'].\' 404 Not Found\'); die; ?>';

	
	public function __construct($config)
	{
		if (!$config['enabled']) {
			return;
		}

		if (isset($config['keyprefix'])) {
			$this->keyPrefix = $config['keyprefix'];
		}

		if (isset($config['dir'])) {
			$this->cacheDir = realpath($config['dir']);
			if (!is_writable($this->cacheDir)) {
				$this->error = qa_lang_html_sub('admin/caching_dir_error', $config['dir']);
			}
		} else {
			$this->error = qa_lang_html('admin/caching_dir_missing');
		}

		$this->enabled = empty($this->error);
	}


	public function get($key)
	{
		if (!$this->enabled) {
			return null;
		}

		$fullKey = $this->keyPrefix . $key;
		$file = $this->getFilename($fullKey);

		if (is_readable($file)) {
			$lines = file($file, FILE_IGNORE_NEW_LINES);
			$skipLine = array_shift($lines);
			$actualKey = array_shift($lines);

			
			if ($fullKey === $actualKey) {
				$expiry = array_shift($lines);

				if (is_numeric($expiry) && time() < $expiry) {
					$encData = implode("\n", $lines);
				
					$data = @unserialize($encData);
					if ($data !== false) {
						return $data;
					}
				}
			}
		}

		return null;
	}

	
	public function set($key, $data, $ttl)
	{
		$success = false;
		$ttl = (int) $ttl;
		$fullKey = $this->keyPrefix . $key;

		if ($this->enabled && $ttl > 0) {
			$encData = serialize($data);
			$expiry = time() + ($ttl * 60);
			$cache = $this->phpProtect . "\n" . $fullKey . "\n" . $expiry . "\n" . $encData;

			$file = $this->getFilename($fullKey);
			$dir = dirname($file);
			if (is_dir($dir) || mkdir($dir, 0777, true)) {
				$success = @file_put_contents($file, $cache) !== false;
			}
		}

		return $success;
	}

	
	public function delete($key)
	{
		$fullKey = $this->keyPrefix . $key;

		if ($this->enabled) {
			$file = $this->getFilename($fullKey);
			return $this->deleteFile($file);
		}

		return false;
	}

	
	public function clear($limit = 0, $start = 0, $expiredOnly = false)
	{
		$seek = $processed = $deleted = 0;

		
		$cacheDirs = glob($this->cacheDir . '/*/*', GLOB_ONLYDIR);
		foreach ($cacheDirs as $dir) {
			$cacheFiles = glob($dir . '/*');
			foreach ($cacheFiles as $file) {
				if ($seek < $start) {
					$seek++;
					continue;
				}

				$wasDeleted = false;
				if ($expiredOnly) {
					if (is_readable($file)) {
						$fp = fopen($file, 'r');
						$key = fgets($fp);
						$expiry = (int) trim(fgets($fp));
						if (is_numeric($expiry) && time() > $expiry) {
							$wasDeleted = $this->deleteFile($file);
						}
					}
				} else {
					$wasDeleted = $this->deleteFile($file);
				}

				if ($wasDeleted) {
					$deleted++;
				}

				$processed++;
				if ($processed >= $limit) {
					break 2;
				}
			}
		}

		
		return $deleted;
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
		if (!$this->enabled) {
			return array('files' => 0, 'size' => 0);
		}

		$totalFiles = 0;
		$totalBytes = 0;
		$dirIter = new RecursiveDirectoryIterator($this->cacheDir);
		foreach (new RecursiveIteratorIterator($dirIter) as $file) {
			if (strpos($file->getFilename(), '.') === 0) {
				
				continue;
			}

			$totalFiles++;
			$totalBytes += $file->getSize();
		}

		return array(
			'files' => $totalFiles,
			'size' => $totalBytes,
		);
	}

	
	private function deleteFile($file)
	{
		if (is_writable($file)) {
			return @unlink($file) === true;
		}

		return false;
	}

	
	private function getFilename($fullKey)
	{
		$filename = sha1($fullKey);
		return $this->cacheDir . '/' . substr($filename, 0, 1) . '/' . substr($filename, 1, 2) . '/' . $filename . '.php';
	}
}
