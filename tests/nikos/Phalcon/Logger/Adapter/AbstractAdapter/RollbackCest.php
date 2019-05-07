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

namespace Phalcon\Test\Unit\Logger\Adapter\AbstractAdapter;

use UnitTester;

class RollbackCest
{
    /**
     * Tests Phalcon\Logger\Adapter\AbstractAdapter :: rollback()
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2019-05-07
     */
    public function loggerAdapterAbstractAdapterRollback(UnitTester $I)
    {
        $I->wantToTest('Logger\Adapter\AbstractAdapter - rollback()');

        $I->skipTest('Need implementation');
    }
}
