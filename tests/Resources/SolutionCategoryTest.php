<?php
namespace Freshdesk\tests\Resources;

use Freshdesk\Resources\SolutionCategory;
use Freshdesk\tests\TestCase;

/**
 * Business Hour resource tests
 *
 * @author Matthew Clarkson <mpclarkson@gmail.com>
 */
class SolutionCategoryTest extends TestCase
{
    public function setUp()
    {
        parent::setUp();

        $this->class = SolutionCategory::class;
    }

    public function methodsThatShouldExist()
    {
        return [
            ['all'],
            ['create'],
            ['update'],
            ['view'],
        ];
    }
}
