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

interface ReaderInterface
{
    /**
     * @param int $length
     * @return string
     */
    public function read($length);

    /**
     * @return int
     */
    public function size();
}
