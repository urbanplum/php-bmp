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

namespace Urbanplum\Bmp;

use Urbanplum\Bmp\Reader\ReaderString;
use Urbanplum\Bmp\Reader\ReaderFilesystem;
use Urbanplum\Bmp\Reader\ReaderInterface;
use Urbanplum\Bmp\Parser\Parser;

class Bmp
{
    /**
     * @param string $filepath
     * @return resource
     */
    public function createFromFile($filepath)
    {
        $reader = new ReaderFilesystem();
        $reader->setFilepath($filepath);

        return $this->create($reader);
    }

    /**
     * @param string $string
     * @return resource
     */
    public function createFromString($string)
    {
        $reader = new ReaderString();
        $reader->setString($string);

        return $this->create($reader);
    }

    /**
     * @param ReaderInterface $reader
     * @return resource
     */
    private function create(ReaderInterface $reader)
    {
        $parser = new Parser();
        return $parser->parse($reader);
    }
}
