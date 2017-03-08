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

class ReaderFilesystem implements ReaderInterface
{
    /**
     * @var string
     */
    private $filepath;

    /**
     * @var resource
     */
    private $resource;

    /**
     * @param string $string
     */
    public function setFilepath($filepath)
    {
        $this->filepath = $filepath;
    }

    /**
     * @param int $length
     * @return string
     */
    public function read($length)
    {
        if (!$this->resource) {
            $this->getResource();
        }

        return fread($this->resource, $length);
    }

    private function getResource()
    {
        if (!$this->filepath) {
            throw new \RuntimeException('no filepath set, have you called setFilepath?');
        }

        $this->resource = @fopen($this->filepath, 'rb');
        if (!$this->resource) {
            throw new \RuntimeException(sprintf('unable to open [%s]', $this->filepath));
        }
    }

    /**
     * @return int
     */
    public function size()
    {
        $size = @filesize($this->filepath);
        if (!$size) {
            throw new \RuntimeException(sprintf('failed to read size from [%s]', $this->filepath));
        }

        return $size;
    }
}
