<?php

/**
 * This file is part of urbanplum/php-bmp.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @license https://github.com/urbanplum/php-bmp/blob/master/LICENSE.md
 * @link https://github.com/urbanplum/php-bmp
 */

namespace Urbanplum\Bmp\Reader;

class ReaderString implements ReaderInterface
{
    /**
     * @var string
     */
    private $string;

    /**
     * @var int
     */
    private $pointer;

    /**
     * @param string $string
     */
    public function setString($string)
    {
        $this->string = $string;
        $this->pointer = 0;
    }

    /**
     * @param int $length
     * @return string
     */
    public function read($length)
    {
        if (!isset($this->string)) {
            throw new \RuntimeException('no string set, have you called setString?');
        }
        
        $string = substr($this->string, $this->pointer, $length);
        $this->pointer += $length;

        return $string;
    }

    /**
     * @return int
     */
    public function size()
    {
        return strlen($this->string);
    }
}
