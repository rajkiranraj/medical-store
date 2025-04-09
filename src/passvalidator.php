<?php
$credentials = [
    'admin' => [
        'username' => 'admin',
        'password' => 'admin123'
    ],
    'user' => [
        'username' => 'user',
        'password' => 'user123'
    ]
];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    if (validateCredentials($username, $password)) {
        $userType = ($username == 'admin') ? 'admin' : 'user';
        session_start();
        $_SESSION['userType'] = $userType;
        header("Location: adminpanel.html");
        exit();
    } else {
        $error = "Invalid username or password!";
    }
}

function validateCredentials($username, $password) {
    global $credentials;
    foreach ($credentials as $user) {
        if ($user['username'] === $username && $user['password'] === $password) {
            return true;
        }
    }
    return false;
}
?>

