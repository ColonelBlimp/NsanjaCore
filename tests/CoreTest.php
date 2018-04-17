<?php declare(strict_types = 1);

use Nsanja\Core\Constants;
use Nsanja\Core\Traits\MagicOverrideForImmutableTrait;
use Nsanja\Core\Traits\PropertySetterTrait;
use PHPUnit\Framework\TestCase;

class CoreTest extends TestCase
{
    public function testConstants()
    {
        $this->assertSame(DIRECTORY_SEPARATOR, Constants::DS);
        $this->assertSame('#', Constants::CACHEKEY_SEPARATOR);
        $this->assertSame('.json', Constants::JSON_FILE_EXT);
        $this->assertSame('category/uncategorized', Constants::DEFAULT_CATEGORY_SLUG);
        $this->assertSame('author/', Constants::URI_PREFIX_AUTHOR);
        $this->assertSame('category/', Constants::URI_PREFIX_CATEGORY);
        $this->assertSame('image/', Constants::URI_PREFIX_IMAGE);
        $this->assertSame('page/', Constants::URI_PREFIX_PAGE);
        $this->assertSame('Ymdhis', Constants::DEFAULT_DATE_FORMAT);
        $this->assertSame('label/', Constants::URI_PREFIX_LABEL);
        $this->assertSame('category/uncategorized', Constants::DEFAULT_CATEGORY_SLUG);
        $this->assertSame('Ymdhis', Constants::DEFAULT_DATE_FORMAT);
        $this->assertSame('/', Constants::STR_FORWARD_SLASH);
        $this->assertSame('/pg/', Constants::STR_PAGING_CTX);
    }

    public function testPropertySetterTrait()
    {
        $data = ['KEY_TEST' => 'test data'];
        $class = new test($data);
        $this->assertSame('test data', $class->getProperty());

        $data = ['KEY_TEST_FAIL' => 'test data'];
        $class = new test($data);
        $this->assertNull($class->getProperty());
    }

    public function testImmutability()
    {
        $data = ['KEY_TEST' => 'test data'];
        $class = new immutable($data);
        $this->assertSame('test data', $class->getProperty());

        $data = ['KEY_TEST' => 'test data'];
        $class->property = 'SOMETHING';
        unset($class->property);
    }
}

class test
{
    use PropertySetterTrait;

    private $property;

    public function __construct(array $data)
    {
        $this->setProperty('KEY_TEST', $data, $this->property);
    }

    public function getProperty()
    {
        return $this->property;
    }
}

class immutable extends test
{
    use MagicOverrideForImmutableTrait;
}
