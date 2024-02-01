<?php

namespace Blog\Test\Unit;

use Blog\Database;
use PDO;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

class DatabaseTest extends TestCase
{
    private Database $object;
    /**
     * @var MockObject|PDO
     */
    private MockObject|PDO $connection;

    protected function setUp(): void
    {
        $this->connection = $this->createMock(PDO::class);
        $this->object = new Database($this->connection);
    }

    public function testGetConnection(): void
    {
        $result = $this->object->getConnection();
        $this->assertInstanceOf(PDO::class, $result);
    }
}
