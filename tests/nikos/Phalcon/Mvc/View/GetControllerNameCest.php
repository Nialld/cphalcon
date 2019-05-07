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

namespace Phalcon\Test\Unit\Mvc\View;

use UnitTester;

class GetControllerNameCest
{
    /**
     * Tests Phalcon\Mvc\View :: getControllerName()
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2019-05-07
     */
    public function mvcViewGetControllerName(UnitTester $I)
    {
        $I->wantToTest('Mvc\View - getControllerName()');

        $I->skipTest('Need implementation');
    }
}
