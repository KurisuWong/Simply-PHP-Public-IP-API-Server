<?php
	if (is_null($_GET['key'])) {
		$result->error = "missing access key";
	}
	// remove this else if block if it is open to public
	else if (strcmp($_GET['key'], "<YOUR_OWN_SECRET_KEY>") !== 0) {
		$result->error="invalid access key";
	}
	else {
		if (isset($_SERVER['HTTP_CF_CONNECTING_IP'])) {
			$remote_ip = $_SERVER['HTTP_CF_CONNECTING_IP'];
			$result->country = $_SERVER["HTTP_CF_IPCOUNTRY"];
		}
		else {
			$remote_ip = $_SERVER['REMOTE_ADDR'];
		}

		if (!filter_var($remote_ip, FILTER_VALIDATE_IP)) {
			$result->error = "invalid ip address";
		}
		else if (!filter_var($remote_ip, FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE)) {
			$result->error="private ip address";
		}
		else if (!filter_var($remote_ip, FILTER_VALIDATE_IP, FILTER_FLAG_NO_RES_RANGE)) {
			$result->error="reserved ip address";
		}
		else {
			if (filter_var($remote_ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4)) {
				$result->ipv4 = $remote_ip;
			}

			if (filter_var($remote_ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6)) {
				$result->ipv6 = $remote_ip;
			}
		}
	}
	
	header('Content-Type: application/json');
	echo json_encode($result);
	echo "\n";
?>