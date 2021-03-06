<?php
declare(strict_types=1);

use PcComponentes\Migration\Migration;

class MigrationTested implements Migration
{
    private array $constructorArgs;
    private bool $upOperationCalled;
    private bool $downOperationCalled;

    public function __construct()
    {
        $this->constructorArgs = \func_get_args();
        $this->upOperationCalled = false;
        $this->downOperationCalled = false;
    }

    public function constructorArgs(): array
    {
        return $this->constructorArgs;
    }

    public function upOperationCalled(): bool
    {
        return $this->upOperationCalled;
    }

    public function downOperationCalled(): bool
    {
        return $this->downOperationCalled;
    }

    public function upOperation(): void
    {
        $this->upOperationCalled = true;
    }

    public function downOperation(): void
    {
        $this->downOperationCalled = true;
    }
}
