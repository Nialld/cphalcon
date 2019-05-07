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

namespace Phalcon\Test\Unit\Helper\Exception;

use UnitTester;

class ConstructCest
{
    /**
     * Tests Phalcon\Helper\Exception :: __construct()
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2019-05-07
     */
    public function helperExceptionConstruct(UnitTester $I)
    {
        $I->wantToTest('Helper\Exception - __construct()');

        $I->skipTest('Need implementation');
    }
}
