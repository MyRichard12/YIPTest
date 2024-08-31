<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link type="text/css" rel="stylesheet" href="/app/templates/styles/form.css" />
</head>
<body>

<div class="container">
    <h2 class="success-heading">Registration Successful</h2>
    <p class="thank-you">Thank you, {$username|upper}!</p>
    <p class="user-email">Your email: {$email|escape}</p>
    <a href="http://127.0.0.1:5051">Submit another data</a>
</div>
</body>
</html>