<?php


class Q2A_Util_Metadata
{
	const METADATA_FILE_JSON = 'metadata.json';

	
	public function fetchFromAddonPath($path)
	{
		$metadataFile = $path . '/' . self::METADATA_FILE_JSON;
		if (!is_file($metadataFile)) {
			return array();
		}

		$content = file_get_contents($metadataFile);
		return $this->getArrayFromJson($content);
	}

	
	public function fetchFromUrl($url, $type = 'Plugin')
	{
		$contents = qa_retrieve_url($url);
		$metadata = $this->getArrayFromJson($contents);

		
		if (empty($metadata)) {
			$metadata = qa_addon_metadata($contents, $type);
		}

		return $metadata;
	}

	
	private function getArrayFromJson($json)
	{
		$result = json_decode($json, true);
		return is_array($result) ? $result : array();
	}
}
