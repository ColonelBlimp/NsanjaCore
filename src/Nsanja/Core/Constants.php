<?php declare(strict_types = 1);

namespace Nsanja\Core;

/**
 * This interface defines the constants used by the Orchid platform and are at it's core. The reason why
 * this is interface used rather than <code>define</code> within a file is that this interface can be namespaced!
 * @author Marc L. Veary
 * @namespace Nsanja\Core
 * @package Nsanja
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
     * Defines the prefix for any author URI (e.g. [FQDN]/author/slug)
     */
    public const URI_PREFIX_AUTHOR = 'author';

    /**
     * Defines the prefix for any category URI (e.g. [FQDN]/category/slug)
     */
    public const URI_PREFIX_CATEGORY = 'category';

    /**
     * Defines the prefix for any image URI (e.g. [FQDN]/image/slug)
     */
    public const URI_PREFIX_IMAGE = 'image';

    /**
     * Defines the prefix for any page URI (e.g. [FQDN]/page/slug)
     */
    public const URI_PREFIX_PAGE = 'page';

    /**
     * Defines the prefix for any label URI (e.g. [FQDN]/label/slug)
     */
    public const URI_PREFIX_LABEL = 'label';

    /**
     * Defines the URI for the default category ([FQDN]/category/uncategorized)
     */
    public const DEFAULT_CATEGORY_SLUG = Constants::URI_PREFIX_CATEGORY.'/uncategorized';

    /**
     * Defines the deafult date format.
     */
    public const DEFAULT_DATE_FORMAT = 'Ymdhis';

    /**
     * Defines a forward slash for URLs ('/').
     */
    public const STR_FORWARD_SLASH = '/';

    /**
     * Defines the context for pagination (e.g. /root_content/pg/1 = page 1 for 'root_context').
     */
    public const STR_PAGING_CTX = '/pg/';

    /**
     * Defines the mode for use with <code>mkdir</code>.
     */
    public const FILE_MODE = 0775;
}
