# CodeIgniter Composer Project

[![Latest Stable Version](https://poser.pugx.org/eihror/codeigniter-project/v/stable)](https://packagist.org/packages/eihror/codeigniter-project) [![Total Downloads](https://poser.pugx.org/eihror/codeigniter-project/downloads)](https://packagist.org/packages/eihror/codeigniter-project) [![Latest Unstable Version](https://poser.pugx.org/eihror/codeigniter-project/v/unstable)](https://packagist.org/packages/eihror/codeigniter-project) [![License](https://poser.pugx.org/eihror/codeigniter-project/license)](https://packagist.org/packages/eihror/codeigniter-project)

This package installs the offical [CodeIgniter](https://github.com/bcit-ci/CodeIgniter) (version `3.0.*`) with secure folder structure via Composer.
Also, this package is based on [Kenji´s project](https://github.com/kenjis/codeigniter-composer-installer) (v0.4.2), please check his other project too. <Enter>

#### Extras Packages
* [Slugify](https://packagist.org/packages/cocur/slugify) (version `2.0`).

* [Compress Image](https://packagist.org/packages/eihror/compress-image) (version `0.0.4`).

## Requirements

* PHP 5.5.9 or later
* `composer` command (See [Composer Installation](https://getcomposer.org/doc/00-intro.md#installation-linux-unix-osx))
* Git

## How to Use

### Install CodeIgniter Project

```
$ composer create-project Eihror/codeigniter-project project_folder
```

### Run Scripts to create a Codeigniter Basic Structure ( Only if system don´t run this automatically )

```
$ cd /path/to/project_folder
$ composer run-script post-install-cmd
```


## Folder Final Structure

```
project_folder/
├── application/
├── composer.json
├── composer.lock
├── .htaccess
├── index.php
└── vendor/
    └── cocur/
        └── slugify/
    └── codeigniter/
        └── framework/
            └── system/
```


Above command installs `.htaccess` to remove `index.php` in your URL. If you don't need it, please remove it.

And it changes `application/config/config.php`:

~~~
$config['composer_autoload'] = FALSE;
↓
$config['composer_autoload'] = realpath(APPPATH . '../vendor/autoload.php');
~~~

~~~
$config['index_page'] = 'index.php';
↓
$config['index_page'] = '';
~~~


#### Update CodeIgniter
You can update CodeIgniter system folder to latest version with one command.

```
$ cd /path/to/project_folder
$ composer update
```

#### Install Translation Messages

If you want to install translations for system messages:

```
$ cd /path/to/project_folder
$ php bin/install.php translations 3.0.0
```
