<?php
declare(strict_types = 1);

namespace Sitegeist\TestingExample\Tests\Unit\Service;

use Sitegeist\TestingExample\Service\ExampleService;
use TYPO3\TestingFramework\Core\Unit\UnitTestCase;

/**
 * Class ExampleServiceTest
 */
class ExampleServiceTest extends UnitTestCase
{

    /**
     *
     */
    public function testReturnDescription(): void
    {
        $subjectOfTest = new ExampleService();
        $this->assertEquals(
            'Use services for non static purposes.',
            $subjectOfTest->returnDescription()
        );
    }
}
