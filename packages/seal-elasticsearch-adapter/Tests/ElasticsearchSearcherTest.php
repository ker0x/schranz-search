<?php

declare(strict_types=1);

namespace Schranz\Search\SEAL\Adapter\Elasticsearch\Tests;

use Schranz\Search\SEAL\Adapter\Elasticsearch\ElasticsearchAdapter;
use Schranz\Search\SEAL\Testing\AbstractSearcherTestCase;

class ElasticsearchSearcherTest extends AbstractSearcherTestCase
{
    public static function setUpBeforeClass(): void
    {
        $client = ClientHelper::getClient();
        self::$adapter = new ElasticsearchAdapter($client);

        parent::setUpBeforeClass();
    }
}