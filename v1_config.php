<?php

use Sami\Sami;
use Symfony\Component\Finder\Finder;
use Sami\Version\GitVersionCollection;

$dir = Finder::create()
    ->files()
    ->name('*.php')
    ->exclude('test')
    ->in(getenv("PROPEL_PATH"));

$versions = GitVersionCollection::create(getenv("PROPEL_PATH"))
    ->addFromTags('1.6.*');

return new Sami($dir, array(
    'theme'                => 'enhanced',
    'title'                => 'Propel API',
    'versions'             => $versions,
    'build_dir'            => __DIR__.'/%version%',
    'cache_dir'            => __DIR__.'/cache/%version%',
));
