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

namespace Phalcon\Test\Unit\Html\Tag;

use UnitTester;

class ButtonCest
{
    /**
     * Tests Phalcon\Html\Tag :: button()
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2019-05-07
     */
    public function htmlTagButton(UnitTester $I)
    {
        $I->wantToTest('Html\Tag - button()');

        $I->skipTest('Need implementation');
    }
}
