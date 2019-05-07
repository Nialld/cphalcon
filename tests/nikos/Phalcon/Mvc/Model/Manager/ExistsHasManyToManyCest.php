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

namespace Phalcon\Test\Unit\Mvc\Model\Manager;

use UnitTester;

class ExistsHasManyToManyCest
{
    /**
     * Tests Phalcon\Mvc\Model\Manager :: existsHasManyToMany()
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2019-05-07
     */
    public function mvcModelManagerExistsHasManyToMany(UnitTester $I)
    {
        $I->wantToTest('Mvc\Model\Manager - existsHasManyToMany()');

        $I->skipTest('Need implementation');
    }
}
