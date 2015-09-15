# Keboola PHP Encryption [![Build Status](https://travis-ci.org/keboola/php-encryption.png?branch=master)](https://travis-ci.org/keboola/php-encryption)

Wrapper for PHP [mcrypt](http://php.net/manual/en/book.mcrypt.php) encryption algorithms.

## Currently supported ciphers
 * AES in CBC mode with [PKCS7 padding](http://en.wikipedia.org/wiki/Padding_(cryptography\)#PKCS7)
  *  Encryption strength is determined by key length. Key lengths 16, 24, 32 corresponds with 128, 192, 256 bit encryption.

## Usage

```php
    use Keboola\Encryption\AESEncryptor;
	$encryptor = new AESEncryptor('UfhZPgPLpz7YVjXwNGTpUD8WpoddfpXn'); // 256 bit key
    $encryptedMessage = $encryptor->encrypt($inputMessage);
```

## Resources
 * https://gist.github.com/RiANOl/1077723
 * http://php.net/manual/en/function.mcrypt-encrypt.php
 * https://en.wikipedia.org/wiki/Block_cipher_mode_of_operation
 * http://www.coderelic.com/2011/10/aes-256-encryption-with-php/
 * http://en.wikipedia.org/wiki/Advanced_Encryption_Standard
