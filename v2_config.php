<?php

use Sami\Sami;
use Symfony\Component\Finder\Finder;
use Sami\Version\GitVersionCollection;

$dir = Finder::create()
    ->files()
    ->name('*.php')
    ->exclude('features')
    ->exclude('tests')
    ->in(getenv("PROPEL_PATH"));

$versions = GitVersionCollection::create(getenv("PROPEL_PATH"))
    ->add('master', 'master branch');
    // Add other branches if needed

return new Sami($dir, array(
    'theme'                => 'enhanced',
    'title'                => 'Propel 2 API',
    'versions'             => $versions,
    'build_dir'            => __DIR__.'/2.0-%version%',
    'cache_dir'            => __DIR__.'/cache/2.0-%version%',
));
