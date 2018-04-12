<?php declare(strict_types = 1);

use PHPUnit\Framework\TestCase;
use Orchid\Core\Util;

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
        $this->assertTrue(count($files) === 3);
    }
}
