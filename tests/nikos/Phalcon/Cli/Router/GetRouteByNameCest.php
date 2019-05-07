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

namespace Phalcon\Test\Unit\Cli\Router;

use UnitTester;

class GetRouteByNameCest
{
    /**
     * Tests Phalcon\Cli\Router :: getRouteByName()
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2019-05-07
     */
    public function cliRouterGetRouteByName(UnitTester $I)
    {
        $I->wantToTest('Cli\Router - getRouteByName()');

        $I->skipTest('Need implementation');
    }
}
