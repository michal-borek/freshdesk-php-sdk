<?php
namespace Freshdesk\tests\Resources;

use Freshdesk\Resources\SolutionFolder;
use Freshdesk\tests\TestCase;

/**
 * Business Hour resource tests
 *
 * @author Matthew Clarkson <mpclarkson@gmail.com>
 */
class SolutionFolderTest extends TestCase
{
    public function setUp()
    {
        parent::setUp();

        $this->class = SolutionFolder::class;
    }

    public function methodsThatShouldExist()
    {
        return [
            ['all'],
            ['create'],
            ['view'],
        ];
    }
}
