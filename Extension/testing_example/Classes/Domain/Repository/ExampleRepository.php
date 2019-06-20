<?php
declare(strict_types = 1);

namespace Sitegeist\TestingExample\Domain\Repository;

use TYPO3\CMS\Core\Database\ConnectionPool;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Persistence\Repository;

/**
 * Class ExampleRepository
 *
 * As this class is only a wrapper for core provided functionality
 * (and we assume they know how to do the job), nothing is tested
 * here directly.
 */
class ExampleRepository extends Repository
{

    /**
     * @return array
     */
    public function getAllExampleEntriesFromDatabase(): array
    {
        $queryBuilder = GeneralUtility::makeInstance(ConnectionPool::class)
            ->getQueryBuilderForTable('tx_testing_example_domain_model_example');
        return $queryBuilder
            ->select('*')
            ->from('tx_testing_example_domain_model_example')
            ->where(
                $queryBuilder
                    ->expr()
                    ->like(
                        'string',
                        $queryBuilder->createNamedParameter('%example%')
                    )
            )
            ->execute()
            ->fetchAll();
    }
}
