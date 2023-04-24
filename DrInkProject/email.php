
<!--Riley-->
if (isset($_POST['submit'])) {
    $firstname = $_POST['firstname'];

    $lastname = $_POST['lastname'];

    $email = $_POST['email'];

    $comments = $_POST['comments'];

    if(empty($firstname) || empty($lastname) || empty($email)) {
        $error = 'You are missing one or more fields';
    } 

    else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = 'Please enter a valid email address';
    } 

    else {
        $to = 'riley.cramer10@gmail.com';
        $headers = "From: $email\r\nReply-To: $email";
    }
}
