<?php
namespace Freshdesk\tests\Resources;

use Freshdesk\Resources\SolutionArticle;
use Freshdesk\tests\TestCase;

/**
 * Business Hour resource tests
 *
 * @author Matthew Clarkson <mpclarkson@gmail.com>
 */
class SolutionArticleTest extends TestCase
{
    public function setUp()
    {
        parent::setUp();

        $this->class = SolutionArticle::class;
    }

    public function methodsThatShouldExist()
    {
        return [
            ['all'],
            ['create'],
        ];
    }
}
