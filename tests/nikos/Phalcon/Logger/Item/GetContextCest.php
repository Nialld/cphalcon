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

namespace Phalcon\Test\Unit\Logger\Item;

use UnitTester;

class GetContextCest
{
    /**
     * Tests Phalcon\Logger\Item :: getContext()
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2019-05-07
     */
    public function loggerItemGetContext(UnitTester $I)
    {
        $I->wantToTest('Logger\Item - getContext()');

        $I->skipTest('Need implementation');
    }
}
