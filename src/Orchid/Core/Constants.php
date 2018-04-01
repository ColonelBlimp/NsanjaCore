<?php declare(strict_types = 1);

namespace Orchid\Core;

/**
 * This interface defines the constants used by the Orchid platform and are at it's core. The reason why
 * this is interface used rather than <code>define</code> within a file is that this interface can be namespaced!
 * @author Marc L. Veary
 * @namespace Orchid\Core
 * @package Orchid
 */
interface Constants
{
    /**
     * A shortened version of DIRECTORY_SEPARATOR
     */
    public const DS = DIRECTORY_SEPARATOR;

    /**
     * Defines the separator between parts of the cachekey and is used to replace '/'.
     */
    public const CACHEKEY_SEPARATOR = '#';

    /**
     * Defines the extension for JSON files.
     */
    public const JSON_FILE_EXT = '.json';

    /**
     * Defines the prefix for any category URI (e.g. [FQDN]/uri_prefix/slug)
     */
    public const URI_PREFIX_CATEGORY = 'category';

    /**
     * Defines the URI for the default category ([FQDN]/category/uncategorized)
     */
    public const DEFAULT_CATEGORY_SLUG = Constants::URI_PREFIX_CATEGORY.'/uncategorized';
}
