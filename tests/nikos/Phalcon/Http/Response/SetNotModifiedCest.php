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

namespace Phalcon\Test\Unit\Http\Response;

use UnitTester;

class SetNotModifiedCest
{
    /**
     * Tests Phalcon\Http\Response :: setNotModified()
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2019-05-07
     */
    public function httpResponseSetNotModified(UnitTester $I)
    {
        $I->wantToTest('Http\Response - setNotModified()');

        $I->skipTest('Need implementation');
    }
}
