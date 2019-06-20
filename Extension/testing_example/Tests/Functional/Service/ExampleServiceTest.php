<?php
declare(strict_types = 1);

namespace Sitegeist\TestingExample\Tests\Functional\Service;

use Sitegeist\TestingExample\Domain\Repository\ExampleRepository;
use Sitegeist\TestingExample\Service\ExampleService;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Object\ObjectManager;
use TYPO3\TestingFramework\Core\Functional\FunctionalTestCase;

/**
 * Class ExampleServiceTest
 */
class ExampleServiceTest extends FunctionalTestCase
{
    /**
     * @var array
     */
    protected $testExtensionsToLoad = [ 'typo3conf/ext/testing_example' ];

    /**
     *
     */
    public function testCountDataBaseRows(): void
    {
        $this->importCSVDataSet(__DIR__ . '/../Fixtures/Example.csv');
        $subjectToTest = new ExampleService;
        $subjectToTest->injectExampleRepository(GeneralUtility::makeInstance(ObjectManager::class)->get(ExampleRepository::class));
        $this->assertEquals(
            3,
            $subjectToTest->countExampleDatabaseRows()
        );
    }
}
