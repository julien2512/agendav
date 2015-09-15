<?php
/**
 * User: martinhalamicek
 * Date: 7/15/13
 * Time: 10:04 AM
 */

require_once __DIR__ . '/../vendor/autoload.php';

$keys = array(
	'tEhb6pAWGsZ8orFR',
	'tdyrB9JdFaQ8ArYNvKuvyuBg',
	'dTfYyTgiG7TFvoHMVVtJpw4moiRLxpEi',
);


foreach ($keys as $key) {
	echo 'Strength: ' . (strlen($key) * 8) . PHP_EOL;
	$startTime = microtime(true);
	$encryptor = new \Keboola\Encryption\AesEncryptor($key);

	$i = 0;
	do {
		$encryptedData = $encryptor->encrypt(openssl_random_pseudo_bytes(1000));
		$encryptor->decrypt($encryptedData);
	} while($i++ < 100000 );

	echo 'Done in: ' . (microtime(true) - $startTime) . PHP_EOL;
}