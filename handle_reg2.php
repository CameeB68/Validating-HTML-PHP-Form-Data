<!DOCTYPE html>
<html>
<head>
    <title>Registration Results</title>
</head>
<body>

<?php

// Step 1: Check if form was submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Step 2: Validate first name
    if (empty($_POST['first_name'])) {
        print '<p><b>Error:</b> You forgot to enter your first name.</p>';
    } else {
        $first_name = trim($_POST['first_name']);
    }

    // Step 3: Validate last name
    if (empty($_POST['last_name'])) {
        print '<p><b>Error:</b> You forgot to enter your last name.</p>';
    } else {
        $last_name = trim($_POST['last_name']);
    }

    // Step 4: Validate email
    if (empty($_POST['email'])) {
        print '<p><b>Error:</b> You forgot to enter your email address.</p>';
    } else {
        $email = trim($_POST['email']);
    }

    // Step 5: Validate age (numeric)
    if (empty($_POST['age'])) {
        print '<p><b>Error:</b> You forgot to enter your age.</p>';
    } elseif (!is_numeric($_POST['age'])) {
        print '<p><b>Error:</b> Age must be a number.</p>';
    } else {
        $age = $_POST['age'];
    }

    // Step 6: If everything is set, display results
    if (isset($first_name) && isset($last_name) && isset($email) && isset($age)) {
        print "<p>Thank you, <b>$first_name $last_name</b>.</p>";
        print "<p>Your email address is <b>$email</b>.</p>";
        print "<p>Your age is <b>$age</b>.</p>";
    }

} else {
    print '<p>This page was accessed incorrectly.</p>';
}

?>

</body>
</html>
