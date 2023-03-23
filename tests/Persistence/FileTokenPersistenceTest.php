<?php

namespace kamermans\OAuth2\Tests\Persistence;

use kamermans\OAuth2\Persistence\FileTokenPersistence;

class FileTokenPersistenceTest extends TokenPersistenceTestBase
{
    protected $testFile;

    public function getInstance()
    {
        return new FileTokenPersistence($this->testFile);
    }

    public function doSetUp()
    {
        $this->testFile = tempnam(sys_get_temp_dir(), "guzzle_phpunit_test_");
        if (file_exists($this->testFile)) {
            unlink($this->testFile);
        }
    }

    public function doTearDown()
    {
        if (file_exists($this->testFile)) {
            unlink($this->testFile);
        }
    }
}
