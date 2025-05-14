<?php
use PHPUnit\Framework\TestCase;
use Collect\Collect;

class CollectTest extends TestCase
{
    public function testOnly()
    {
        $collect = new Collect([
            'name' => 'Alice',
            'age' => 30,
            'city' => 'London'
        ]);
        $only = $collect->only(['name', 'city']);
        $this->assertEquals([
            'name' => 'Alice',
            'city' => 'London'
        ], $only->toArray());
    }

    public function testFirst()
    {
        $collect = new Collect([10, 20, 30]);
        $this->assertEquals(10, $collect->first());
    }

    public function testCount()
    {
        $collect = new Collect(['a', 'b', 'c']);
        $this->assertEquals(3, $collect->count());
    }

    public function testToArray()
    {
        $data = ['x' => 100, 'y' => 200];
        $collect = new Collect($data);
        $this->assertEquals($data, $collect->toArray());
    }
}
