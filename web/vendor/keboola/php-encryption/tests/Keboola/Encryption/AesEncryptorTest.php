<?php
/**
 * User: martinhalamicek
 * Date: 7/12/13
 * Time: 3:32 PM
 */

namespace Keboola\Encryption\Tests;

use Keboola\Encryption\AesEncryptor;

class AesEncryptorTest extends \PHPUnit_Framework_TestCase
{

	private $key128bit = 'u7Vd3wukDDghgMzZ';

	public function testEncryptedMessageShouldNotBeEqualToSourceMessage()
	{
		$encryptor = new AesEncryptor($this->key128bit);
		$inputMessage = 'someMessage';
		$this->assertNotEquals($inputMessage, $encryptor->encrypt($inputMessage));
	}

	/**
	 * @dataProvider inputMessages
	 * @param $inputMessage
	 */
	public function testEncryptionShouldNotChangeMessage($inputMessage)
	{
		$encryptor = new AesEncryptor($this->key128bit);
		$this->assertEquals($inputMessage, $encryptor->decrypt($encryptor->encrypt($inputMessage)));
	}

	public function inputMessages()
	{
		return array_map(function($item) { return array($item); }, array(
			'some message',
			' message with spaces ',
			"with line

			break \0\0"
		));
	}

	public function testEncryptedMessageIsDifferentForSameInputs()
	{
		$inputMessage = 'someMessage';

		$encryptor = new AesEncryptor($this->key128bit);
		$this->assertNotEquals($encryptor->encrypt($inputMessage), $encryptor->encrypt($inputMessage));
	}

	/**
	 *  @expectedException \InvalidArgumentException
	 */
	public function testExceptionShouldBeThrownOnInvalidKeyLength()
	{
		new AesEncryptor('key');
	}

}