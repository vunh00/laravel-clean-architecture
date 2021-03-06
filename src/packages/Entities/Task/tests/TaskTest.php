<?php

namespace MyApp\Entities\Task\Tests;

use Mockery;
use PHPUnit\Framework\TestCase;
use MyApp\Entities\Task\{Id, Task, Name, Note};

/**
 * Class TaskTest
 * @package Tests\Entities\Task
 */
class TaskTest extends TestCase
{
    /**
     * @test
     * @doesNotPerformAssertions
     */
    public function 「タスク」は必ず「タスクID」「タスク名」を持つこと()
    {
        $id = Mockery::mock(Id::class);
        $name = new Name('test');
        new class($id, $name) extends Task{};
    }

    /**
     * @test
     * @doesNotPerformAssertions
     */
    public function 「タスク」は任意で「メモ」を持てること()
    {
        $id = Mockery::mock(Id::class);
        $name = new Name('test');
        $task = new class($id, $name) extends Task{};

        $note = new Note('this is note');
        $task->updateNote($note);
    }
}
