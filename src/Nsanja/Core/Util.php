<?php declare(strict_types = 1);

namespace Nsanja\Core;

/**
 * @author Marc L. Veary
 * @namespace Nsanja\Core
 * @package Nsanja
 */
final class Util
{
    /**
     * Creates a teaser (stripped of markdown) to the given length.
     * @param string $string
     * @param int $length The default length is 150 characters.
     * @return string Returns the teaser string, or an empty string.
     */
    public function createTeaser(string $string, int $length = 150): string
    {
        $string = $this->markdownToText($string);
        $suffix = ' ';

        if (strlen($string) > $length) {
            $length = $length - 4;
            $suffix = '... ';
        }

        return substr($string, 0, $length).$suffix;
    }

    /**
     * Scans the given directory and its sub-directories and returns a list of all the files
     * @return array
     */
    public function scanDirectory(string $path): array
    {
        $files = [];

        $rdi = new \RecursiveDirectoryIterator(
            $path,
            \FilesystemIterator::SKIP_DOTS |
            \FilesystemIterator::KEY_AS_FILENAME |
            \FilesystemIterator::CURRENT_AS_FILEINFO
        );

        $rii = new \RecursiveIteratorIterator($rdi);

        foreach ($rii as $fileInfo) {
            $files[] = $fileInfo;
        }

        return $files;
    }

    /**
     * Strips the given text of the markdown but not '\n'.
     * @param string $markdown
     * @return string
     */
    public function markdownToText(string $markdown): string
    {
        if (empty($markdown)) {
            return '';
        }

        $pattern = array(
            '/(\.|)#/',
            '/(\.|)\*/',
            '/(\.|)~/'
        );

        return preg_replace($pattern, '', $markdown);
    }

    /**
     * String startswith.
     * @param string $haystack The input string.
     * @param string $needle The string search for.
     * @return bool Returns true if the $haystack ends with the $needle, otherwise false.
     */
    public function startswith(string $haystack, string $needle) : bool
    {
        return (substr($haystack, 0, strlen($needle)) === $needle);
    }

    /**
     * String endswith.
     * @param string $haystack The input string.
     * @param string $needle The string search for.
     * @return bool Returns true if the $haystack starts with the $needle, otherwise false.
     */
    public function endswith(string $haystack, string $needle) : bool
    {
        return (substr($haystack, -1 * strlen($needle)) === $needle);
    }
}
