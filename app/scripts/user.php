<?php
namespace YipTest\scripts;

// this is required to plaster the global class installations
// being the backend
require __DIR__.'/../../vendor/autoload.php';

use YipTest\bootstrap;
use YipTest\models\User;

$smarty = bootstrap::loadSmarty();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    $user = new User($username, $email, $password);
    $errors = [];

    // Validate input
    if (!$user->validateUsername()) {
        $errors[] = 'Username must be alphanumeric and between 3-20 characters.';
    }

    if (!$user->validateEmail()) {
        $errors[] = 'Invalid email format.';
    }

    if (!$user->validatePassword()) {
        $errors[] = 'Password must be at least 8 characters long and contain both letters and numbers.';
    }

    if (empty($errors)) {
        // Display confirmation template
        $smarty->assign('username', $user->username);
        $smarty->assign('email', $user->email);
        $smarty->display('confirmation.tpl');
    } else {
        // Re-display the form with error messages
        $smarty->assign('errors', $errors);
        $smarty->assign('username', $username);
        $smarty->assign('email', $email);
        $smarty->display('form.tpl');
    }
} else {
    
}