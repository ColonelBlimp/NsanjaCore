<?php declare(strict_types = 1);

namespace Nsanja\Core;

/**
 * This interface defines the constants used by the Nsanja platform and are at it's core. The reason why
 * this is interface used rather than <code>define</code> within a file is that this interface can be namespaced!
 * @author Marc L. Veary
 * @namespace Nsanja\Core
 * @package Nsanja
 */
interface Constants
{
    /**
     * @var string A shortened version of DIRECTORY_SEPARATOR
     */
    public const DS = DIRECTORY_SEPARATOR;

    /**
     * @var string Defines the separator between parts of the cachekey and is used to replace '/'.
     */
    public const CACHEKEY_SEPARATOR = '#';

    /**
     * @var string Defines the extension for JSON files.
     */
    public const JSON_FILE_EXT = '.json';

    /**
     * @var string Defines the prefix for any author URI (e.g. author/{slug})
     */
    public const URI_PREFIX_AUTHOR = 'author/';

    /**
     * @var string Defines the prefix for any category URI (e.g. category/{slug})
     */
    public const URI_PREFIX_CATEGORY = 'category/';

    /**
     * @var string Defines the prefix for any image URI (e.g. image/{slug})
     */
    public const URI_PREFIX_IMAGE = 'image/';

    /**
     * @var string Defines the prefix for any page URI (e.g. page/{slug})
     */
    public const URI_PREFIX_PAGE = 'page/';

    /**
     * @var string Defines the prefix for any label URI (e.g. label/{slug})
     */
    public const URI_PREFIX_LABEL = 'label/';

    /**
     * @var string Defines the URI for the default category (category/uncategorized)
     */
    public const DEFAULT_CATEGORY_SLUG = Constants::URI_PREFIX_CATEGORY.'uncategorized';

    /**
     * @var string Defines the deafult date format.
     */
    public const DEFAULT_DATE_FORMAT = 'Ymdhis';

    /**
     * @var string Defines a forward slash for URLs ('/').
     */
    public const STR_FORWARD_SLASH = '/';

    /**
     * @var string Defines the context for pagination (e.g. /root_content/pg/1 = page 1 for 'root_context').
     */
    public const STR_PAGING_CTX = '/pg/';

    /**
     * @var int Defines the mode (0775) for use with <code>mkdir</code>.
     */
    public const FILE_MODE = 0775;
}
