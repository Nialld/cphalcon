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

namespace Phalcon\Test\Unit\Html\Exception;

use UnitTester;

class ToStringCest
{
    /**
     * Tests Phalcon\Html\Exception :: __toString()
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2019-05-07
     */
    public function htmlExceptionToString(UnitTester $I)
    {
        $I->wantToTest('Html\Exception - __toString()');

        $I->skipTest('Need implementation');
    }
}
