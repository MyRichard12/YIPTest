<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link type="text/css" rel="stylesheet" href="{$server_url}/app/templates/styles/form.css" />
</head>
<body>

<div class="form-container">
    <h1>Register</h1>
    <form action="{$registration_script}" method="post">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" required>
        
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>

        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>

        <button type="submit">Register</button>
    </form>

    {if isset($errors)}
        <div class="error-list">
            <ul>
                {foreach from=$errors item=error}
                    <li>{$error}</li>
                {/foreach}
            </ul>
        </div>
    {/if}
</div>

</body>
</html>
