# [Propel API](http://api.propelorm.org)

This repository contains the Propel API (from version 1.6.0 to 1.7.1 ans 2.0@dev and also
the master API). It's generated thanks to [Sami]. You can browse the API on
[api.propelorm.org][api].

## Regenerate the API

If you want to regenerate the API (to be up to date with master for instance),
first setup Composer and install the necessary dependencies:

~~~bash
$ curl -sS https://getcomposer.org/installer | php
$ php composer.phar install
~~~

Then generate the structure using the `build-api` script:

~~~bash
$ build-api v1
$ build-api v2
~~~

It will automatically clone the repo of the specific version from GitHub and then
generate the API. Finally, You can open the `index.html` file at the root of this
repo to browse the API.

> You may encounter issues when generating the 1.6 API because of an issue with
the file names and the `json_encode` function.

## License

Please see the [Propel] and [Propel2] repositories for further information.

[Sami]: https://github.com/fabpot/Sami
[api]: http://api.propelorm.org
[Propel]: https://github.com/propelorm/Propel
[Propel2]: https://github.com/propelorm/Propel2
