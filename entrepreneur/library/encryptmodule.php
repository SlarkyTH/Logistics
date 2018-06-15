<?php
	function encrypt($txt,$CRYPT_KEY){
		if (!$txt && $txt != "0"){
			return false;
			exit;
		}
		
		if (!$CRYPT_KEY){
			return false;
			exit;
		}
		
		$kv = keyvalue($CRYPT_KEY);
		$estr = "";
		$enc = "";

    	for ($i=0; $i<strlen($txt); $i++) {
			$e = ord(substr($txt, $i, 1));
			$e = $e + $kv[1];
			$e = $e * $kv[2];
			(double)microtime()*1000000;
			$rstr = chr(rand(65, 90));
			$estr .= "$rstr$e";
		}

		return $estr;
	}

	function decrypt($txt, $CRYPT_KEY){
		if (!$txt && $txt != "0"){
			return false;
			exit;
		}
		
		if (!$CRYPT_KEY){
			return false;
			exit;
		}
		
		$kv = keyvalue($CRYPT_KEY);
		$estr = "";
		$tmp = "";

		for ($i=0; $i<strlen($txt); $i++) {
			if ( ord(substr($txt, $i, 1)) > 64 && ord(substr($txt, $i, 1)) < 91 ) {
				if ($tmp != "") {
					$tmp = $tmp / $kv[2];
					$tmp = $tmp - $kv[1];
					$estr .= chr($tmp);
					$tmp = "";
				}
			} else {
				$tmp .= substr($txt, $i, 1);
			}
		}

					$tmp = $tmp / $kv[2];
					$tmp = $tmp - $kv[1];
		$estr .= chr($tmp);

		return $estr;
	}

/* -----------------------------------------------
   @Name: keyvalue()
   @Args: $CRYPT_KEY -> String used to generate a encryption key.
   @Returns: $keyvalue -> Array containing 2 encryption keys.
  ----------------------------------------------- */
	
	function keyvalue($CRYPT_KEY){
	$keyvalue = "";
	$keyvalue[1] = "0";
	$keyvalue[2] = "0";
	for ($i=1; $i<strlen($CRYPT_KEY); $i++) {
		$curchr = ord(substr($CRYPT_KEY, $i, 1));
		$keyvalue[1] = $keyvalue[1] + $curchr;
		$keyvalue[2] = strlen($CRYPT_KEY);
	}
		return $keyvalue;
	}
?>