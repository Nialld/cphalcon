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

namespace Phalcon\Test\Unit\Service\Exception;

use UnitTester;

class GetTraceAsStringCest
{
    /**
     * Tests Phalcon\Service\Exception :: getTraceAsString()
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2019-05-07
     */
    public function serviceExceptionGetTraceAsString(UnitTester $I)
    {
        $I->wantToTest('Service\Exception - getTraceAsString()');

        $I->skipTest('Need implementation');
    }
}
