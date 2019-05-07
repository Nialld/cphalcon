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

namespace Phalcon\Test\Unit\Http\Cookie;

use UnitTester;

class GetPathCest
{
    /**
     * Tests Phalcon\Http\Cookie :: getPath()
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2019-05-07
     */
    public function httpCookieGetPath(UnitTester $I)
    {
        $I->wantToTest('Http\Cookie - getPath()');

        $I->skipTest('Need implementation');
    }
}
