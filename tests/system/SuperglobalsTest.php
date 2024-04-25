<?php

declare(strict_types=1);

/**
 * This file is part of CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace CodeIgniter;

use CodeIgniter\Test\CIUnitTestCase;

/**
 * @internal
 *
 * @group Others
 */
final class SuperglobalsTest extends CIUnitTestCase
{
    public function testSetGet()
    {
        $globals = new Superglobals([], []);

        $globals->setGet('test', 'value1');

        $this->assertSame('value1', $globals->get('test'));
    }
}