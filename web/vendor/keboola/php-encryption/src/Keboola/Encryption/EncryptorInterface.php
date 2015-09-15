<?php
/**
 * User: martinhalamicek
 * Date: 7/8/13
 * Time: 3:06 PM
 */

namespace Keboola\Encryption;

interface EncryptorInterface
{
	/**
	 * @param $data string data to encrypt
	 * @return string encrypted data
	 */
	public function encrypt($data);

	/**
	 * @param $encryptedData string
	 * @return string decrypted data
	 */
	public function decrypt($encryptedData);

}