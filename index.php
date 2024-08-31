<?php
// load the right smarty class
require __DIR__.'/vendor/autoload.php';

// where the app boots from
// require __DIR__.'/app/bootstrap.php';

use YipTest\bootstrap;

// bootstrap with the landing page
new bootstrap('form');