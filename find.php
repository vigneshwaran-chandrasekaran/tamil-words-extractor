<?php

if ($_POST['url'] != "" && isset($_POST['url']))
{
	function remove_unwanted($curl)
	{
		try
		{
			$english = array("a", "b", "c", "d", "e", "f", "g", "h", "i", "j","k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z");	
			$curl = str_ireplace($english, " ", ($curl)); // Remove English Characters
			$curl = preg_replace('/[0-9]+/', ' ', $curl); // Remove Numbers
			$special = array("<", ">", ".", "=", "'", "/", "@", ":", "_", "?","%", "!", ";", "&", "#", "{", "}", ",", "(", ")", "[", "]", "-", "$", "*", "+", "|", "‛", "»", "©", "’", "‘","–", "`","~","^","“","”","­");	
			$curl = str_ireplace($special, " ", ($curl)); // Remove Special Characters
			$curl = str_ireplace('"', " ", ($curl)); // Remove Double "
			$curl = preg_replace('/\\\\/', '', $curl); // Remove backslash
			$curl = preg_replace('!\s+!', ' ', $curl); // Multiple space into single space
			$curl = implode(' ', array_unique(explode(' ', $curl))); // Remove Duplicate Words
			$curl = trim($curl);
			return $curl;
		}

		catch(ErrorException $e)
		{
			return $e;
		}
	}

	function write_result($result)
	{
		echo '<h3>Result</h3>';
		echo '<div class="form-group">';
		echo '<textarea class="form-control" rows="20">';
		echo $result;
		echo '</textarea></div>';
	}

	// Get cURL resource

	$curl = curl_init();

	// Set some options - we are passing in a useragent too here

	curl_setopt_array($curl, array(
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_CONNECTTIMEOUT => 120,
		CURLOPT_TIMEOUT => 600,
		CURLOPT_FORBID_REUSE => true,
		CURLOPT_FRESH_CONNECT => true,
		CURLOPT_HEADER => false,
		CURLOPT_TRANSFERTEXT => true,
		CURLOPT_SSL_VERIFYPEER => false,
		CURLOPT_ENCODING => "",
		CURLOPT_URL => $_POST['url']
	));
	write_result(remove_unwanted(curl_exec($curl)));

	// Close request to clear up some resources

	curl_close($curl);
	unset($curl);
}

?>