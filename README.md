# Propel API

This repository is __unofficial__. It contains the Propel API (from version 1.6.0 to 1.6.9 and also the master API). It's generated thanks to [Sami](https://github.com/fabpot/Sami). You can generate it using a Shell script:

```bash
$ build-api v1
$ build-api v2
```

It will automatically clone the repo of the specific version from GitHub and then generate the API. You can open the `index.html` file at the root of this repo to browse the API.

Note that I'm very bad at creating Shell scripts so it may not work properly on your machine. Feel free to fix it!

> You may encounter issues when generating the 1.6 API because of an issue with the file names and the `json_encode` function.
