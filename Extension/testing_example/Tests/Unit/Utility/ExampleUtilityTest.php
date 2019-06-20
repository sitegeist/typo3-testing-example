<?php
declare(strict_types = 1);

namespace Sitegeist\TestingExample\Tests\Unit\Utility;

use Sitegeist\TestingExample\Utility\ExampleUtility;
use TYPO3\TestingFramework\Core\Unit\UnitTestCase;

/**
 * Class ExampleUtilityTest
 */
class ExampleUtilityTest extends UnitTestCase
{

    /**
     *
     */
    public function testReturnDescription(): void
    {
        $subjectOfTest = new ExampleUtility();
        $this->assertEquals(
            'Use utilities only for static purposes.',
            $subjectOfTest::returnDescription()
        );
    }
}
