<?php declare(strict_types = 1);

namespace Orchid;

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
     * The filename for the default platform configuration file (PlatformConfig.php)
     */
    public const FILE_PLATFORM_CONFIG_PHP = 'PlatformConfig.php';
}
