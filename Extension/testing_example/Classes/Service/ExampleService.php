<?php
declare(strict_types = 1);

namespace Sitegeist\TestingExample\Service;

use Sitegeist\TestingExample\Domain\Repository\ExampleRepository;

/**
 * Class ExampleService
 */
class ExampleService
{
    /**
     * @var ExampleRepository
     */
    protected $exampleRepository;

    /**
     * @return string
     */
    public function returnDescription(): string
    {
        return 'Use services for non static purposes.';
    }

    /**
     * @return int
     */
    public function countExampleDatabaseRows(): int
    {
        $examples = $this->exampleRepository->getAllExampleEntriesFromDatabase();
        return count($examples);
    }

    /**
     * @param ExampleRepository $exampleRepository
     */
    public function injectExampleRepository(ExampleRepository $exampleRepository): void
    {
        $this->exampleRepository = $exampleRepository;
    }
}
