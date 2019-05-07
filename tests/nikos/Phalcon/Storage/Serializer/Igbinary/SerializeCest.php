<?php
declare(strict_types=1);

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalconphp.com>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */

namespace Phalcon\Test\Unit\Storage\Serializer\Igbinary;

use UnitTester;

class SerializeCest
{
    /**
     * Tests Phalcon\Storage\Serializer\Igbinary :: serialize()
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2019-05-07
     */
    public function storageSerializerIgbinarySerialize(UnitTester $I)
    {
        $I->wantToTest('Storage\Serializer\Igbinary - serialize()');

        $I->skipTest('Need implementation');
    }
}
