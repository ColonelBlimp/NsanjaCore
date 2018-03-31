<?php declare(strict_types = 1);

namespace Orchid\Core;

/**
 * This interface defines the constants used by the Orchid platform. The reason why this is used rather than
 * <code>define</code> within a file is that this interface can be namespaced!
 * @author Marc L. Veary
 * @namespace Orchid
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
}
