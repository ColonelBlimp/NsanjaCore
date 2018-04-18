<?php declare(strict_types = 1);

use Nsanja\Core\Collection;
use PHPUnit\Framework\TestCase;

class CollectionTest extends TestCase
{
    public function testInstantiation()
    {
        $coll = new Collection();
        $this->assertNotNull($coll);
        $this->assertEmpty($coll->all());
        $this->assertTrue($coll->count() === 0);
        $this->assertFalse($coll->offsetExists('unknown'));
        $coll->offsetSet('test', 'best');
        $this->assertTrue($coll->offsetExists('test'));
        $this->assertSame('best', $coll->offsetGet('test'));
        $coll->replace(['test' => 'west']);
        $this->assertSame('west', $coll->offsetGet('test'));
        $coll->offsetUnset('test');
        $this->assertFalse($coll->offsetExists('test'));
    }

    public function testConstructor()
    {
        $items = [
            'a' => 'aa',
            'b' => 'bb',
            'c' => 'cc'];

        $coll = new Collection($items);
        $cnt = 0;
        foreach ($coll->getIterator() as $key => $value) {
            $cnt++;
        }
        $this->assertTrue($cnt === 3);
        $coll->clear();
        $this->assertEmpty($coll->all());
    }
}
