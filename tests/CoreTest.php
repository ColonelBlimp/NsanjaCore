<?php declare(strict_types = 1);

use Orchid\Core\Constants;
use PHPUnit\Framework\TestCase;

class CoreTest extends TestCase
{
    public function testConstants()
    {
        $this->assertSame(DIRECTORY_SEPARATOR, Constants::DS);
        $this->assertSame('#', Constants::CACHEKEY_SEPARATOR);
        $this->assertSame('.json', Constants::JSON_FILE_EXT);
        $this->assertSame('category/uncategorized', Constants::DEFAULT_CATEGORY_SLUG);
        $this->assertSame('author', Constants::URI_PREFIX_AUTHOR);
        $this->assertSame('category', Constants::URI_PREFIX_CATEGORY);
        $this->assertSame('image', Constants::URI_PREFIX_IMAGE);
        $this->assertSame('page', Constants::URI_PREFIX_PAGE);
    }
}
