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

namespace Phalcon\Test\Unit\Mvc\Collection;

use UnitTester;

class CountCest
{
    /**
     * Tests Phalcon\Mvc\Collection :: count()
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2019-05-07
     */
    public function mvcCollectionCount(UnitTester $I)
    {
        $I->wantToTest('Mvc\Collection - count()');

        $I->skipTest('Need implementation');
    }
}
