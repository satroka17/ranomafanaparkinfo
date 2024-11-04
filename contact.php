<?php include 'header.php'; ?>

<?php
// Inclure l’autoloader de Composer
require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Vérifie si le formulaire est soumis
$messageSent = false; // Variable pour vérifier l'envoi du message

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Configure PHPMailer
    $mail = new PHPMailer(true);

    try {
        // Configuration SMTP
        $mail->isSMTP();

        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Définir l’expéditeur
        $mail->setFrom('noreply@ranomafanainfo.com', 'Ranomafana Info');
        $mail->addAddress('contact@ranomafanainfo.com'); // Destinataire

        // Contenu de l’e-mail
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body    = "
            <h3>New Contact Request</h3>
            <p><strong>Name:</strong> {$name}</p>
            <p><strong>Email:</strong> {$email}</p>
            <p><strong>Phone Number:</strong> {$phone}</p>
            <p><strong>Message:</strong> {$message}</p>
        ";

        // Envoi de l’e-mail
        $mail->send();
        $messageSent = true; // Marquer le message comme envoyé
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>

<!-- Contact page content -->
<div class="back_re">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="title">
               <h2>Contact Us</h2>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="contact">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="contact-section">
               <p>For any inquiries or donations, please contact us through the following methods:</p>
               <br>
            </div>
         </div>
      </div>
      <div class="row">
             <!-- Affiche une notification de succès si le message est envoyé -->
    <?php if ($messageSent): ?>
        <p style="color: green; font-weight: bold;">Votre message a été envoyé avec succès !</p>
    <?php endif; ?>
               <div class="col-md-12">
               <form id="request" class="main_form" method="POST">
    <div class="row">
        <div class="col-md-6">
            <input class="contactus" placeholder="Name" type="text" name="name"> 
        </div>
        <div class="col-md-6">
            <input class="contactus" placeholder="Email" type="email" name="email"> 
        </div>
        <div class="col-md-6">
            <input class="contactus" placeholder="Phone Number" type="text" name="phone">                          
        </div>
        <div class="col-md-6">
            <input class="contactus" placeholder="Subject" type="text" name="subject">                          
        </div>
        <div class="col-md-12">
            <textarea class="textarea" placeholder="Message" name="message"></textarea>
        </div>
        <div class="col-md-12">
            <button class="send_btn" type="submit">Send</button>
        </div>
    </div>
</form>

               </div>
            </div>
   </div>
</div>

<?php include 'footer.php'; ?>
