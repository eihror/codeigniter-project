<?php

namespace bin;

use Composer\Script\Event;
use Composer\Installer\PackageEvent;
use ComposerScriptEvent;

class Installer {
    
    public static function preInstall(Event $event) {
        // provides access to the current ComposerIOConsoleIO
        // stream for terminal input/output
        $io = $event->getIO();
        if ($io->askConfirmation("Are you sure you want to proceed? ", false)) {
            // ok, continue on to composer install
            return true;
        }
        // exit composer and terminate installation process
        exit;
    }

    public static function postUpdate(Event $event) {
        $composer = $event->getComposer();
        // do stuff
    }

    public static function postAutoloadDump(Event $event) {
        $vendorDir = $event->getComposer()->getConfig()->get('vendor-dir');
        require $vendorDir . '/autoload.php';

        some_function_from_an_autoloaded_file();
    }

    public static function postPackageInstall(PackageEvent $event) {
        $installedPackage = $event->getOperation()->getPackage();
        // do stuff
    }

    public static function warmCache(Event $event) {
        // make cache toasty
    }

}
