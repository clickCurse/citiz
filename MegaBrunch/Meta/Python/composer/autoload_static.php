<?php
/*   
TELEGRAM @H4x0rxploit
JOIN US AT TELEGRAM GROUP : https://t.me/H4x0rxploits
*/
namespace Composer\Autoload;

class ComposerStaticInitb6ba13dcf97a07c5896fba771e94522d
{
    public static $prefixLengthsPsr4 = array (
        'J' => 
        array (
            'Jaybizzle\\CrawlerDetect\\' => 24,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Jaybizzle\\CrawlerDetect\\' => 
        array (
            0 => __DIR__ . '/..' . '/jaybizzle/crawler-detect/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb6ba13dcf97a07c5896fba771e94522d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb6ba13dcf97a07c5896fba771e94522d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb6ba13dcf97a07c5896fba771e94522d::$classMap;

        }, null, ClassLoader::class);
    }
}
