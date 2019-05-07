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

namespace Phalcon\Test\Unit\Mvc\View\Exception;

use UnitTester;

class ToStringCest
{
    /**
     * Tests Phalcon\Mvc\View\Exception :: __toString()
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2019-05-07
     */
    public function mvcViewExceptionToString(UnitTester $I)
    {
        $I->wantToTest('Mvc\View\Exception - __toString()');

        $I->skipTest('Need implementation');
    }
}
