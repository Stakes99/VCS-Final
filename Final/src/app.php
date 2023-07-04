<?php
if(isset($_POST['submit'])){
    $vardas = trim($_POST['name']);
    $email = trim($_POST['email']);
    $message = trim($_POST['message']);
    $subject = trim($_POST['subject']);

    if (!empty($vardas) && !empty($email) && !empty($message)) {
        if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
            include 'db.php';
            $from = "$email";
            $to = "kes.kirna@gmail.com";
            $subject = "Nauja žinutė";
            $autorius = 'Nuo: ' . $vardas . ', ' . $email;
            $zinute = htmlspecialchars($message);
            //mail($to, $subject, $autorius, $zinute, $from);
            //echo "<script>alert('Ačiū, gavome.');</script>";
        }
        
    }
}
?>