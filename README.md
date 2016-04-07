# CodeIgniter Composer Project

This package installs the offical [CodeIgniter](https://github.com/bcit-ci/CodeIgniter) (version `3.0.*`) with secure folder structure via Composer.

You can update CodeIgniter system folder to latest version with one command.

## Folder Structure

```
codeigniter/
├── application/
├── composer.json
├── composer.lock
├── public/
│   ├── .htaccess
│   └── index.php
└── vendor/
    └── codeigniter/
        └── framework/
            └── system/
```

## Requirements

* PHP 5.4 or later
* `composer` command (See [Composer Installation](https://getcomposer.org/doc/00-intro.md#installation-linux-unix-osx))
* Git

## How to Use