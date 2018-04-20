<?php declare(strict_types = 1);

use Nsanja\Core\Util;
use PHPUnit\Framework\TestCase;
use Nsanja\Core\UtilAwareAbstract;

class UtilTest extends TestCase
{
    private $mdText = "**bold**
*italics*
# H1
## H2
### H3
#### H4
* Item 1
* Item 2
1. Point 1
2. Point 2
~~strike~~
";

    public function testStartsWith()
    {
        $util = new Util();
        $this->assertTrue($util->startswith('wibble wobble', 'wib'));
        $this->assertFalse($util->startswith('wibble wobble', 'ibb'));
    }

    public function testEndsWith()
    {
        $util = new Util();
        $this->assertTrue($util->endswith('wibble wobble', 'ble'));
        $this->assertFalse($util->endswith('wibble wobble', 'ibb'));
    }

    function testMarkdownToTextEmptyInput()
    {
        $util = new Util();
        $str = $util->markdownToText('');
        $this->assertEmpty($str);
    }

    function testMarkdownToTextMdInput()
    {
        $util = new Util();
        $str = $util->markdownToText($this->mdText);
        $this->assertNotEmpty($str);
        $this->assertContains('**bold**', $this->mdText);
        $this->assertFalse(strpos($str, '**bold**'));
        $this->assertTrue(strpos($str, 'bold') >= 0);
        $this->assertFalse(strpos($str, '#### H4'));
        $this->assertTrue(strpos($str, ' H4') > 0);
    }

    function testMarkdownToTextPlainInput()
    {
        $plain = "This is some\nplain text with newlines\n";
        $util = new Util();
        $str = $util->markdownToText($plain);
        $this->assertNotEmpty($str);
        $this->assertEquals($plain, $str);
    }

    public function testScanDir()
    {
        $util = new Util();
        $files = $util->scanDirectory(__DIR__);
        $this->assertTrue(count($files) === 4);
    }

    public function testTeaser()
    {
        $util = new Util();
        $text = $this->mdText.' this is a load of rubbish padded in to this string to give the length that is needed.';
        $teaser = $util->createTeaser($text);
        $this->assertTrue(strlen($teaser) === 150);
    }

    public function testUtilAware()
    {
        $util = new Util();
        $class = new UtilAware();
        $class->setUtil($util);
        $this->assertInstanceOf(Util::class, $class->getUtil());
    }

    /**
     * @expectedException Exception
     * @expectedExceptionMessage Util instance not set. Please call 'setUtil()' first
     */
    public function testUtilAwareException()
    {
        $util = new Util();
        $class = new UtilAware();
        $class->getUtil();
    }
}

class UtilAware extends UtilAwareAbstract
{

}
