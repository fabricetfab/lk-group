<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';  // Ensure the path is correct for your setup

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $service = $_POST['service'];
    $message = $_POST['message'];

    // Set up PHPMailer
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();  // Use SMTP
        $mail->Host = 'smtp.hostinger.com';  // Hostinger SMTP server
        $mail->SMTPAuth = true;
        $mail->Username = 'no-reply@lkgroupworld.com';  // Your Hostinger email address
        $mail->Password = 'Media@lkrw2024';  // Your email password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;  // Use SSL encryption
        $mail->Port = 465;  // SMTP Port (SSL)

        // Recipients
        $mail->setFrom('no-reply@lkgroupworld.com', 'Website Contact Form');  // Sender email
        $mail->addAddress('contact@lkgroupworld.com', 'LK GROUP');  // Recipient email (you)

        // Create a "mailto" link for the sender's email
        $mailtoLink = '<a href="mailto:' . $email . '">' . $email . '</a>';

        // Content
        $mail->isHTML(true);  // Send email as HTML
        $mail->Subject = "New message from $name regarding $subject";

        // Email body with HTML and CSS styling for a more appealing design
        $mail->Body    = '
        <html>
        <head>
        <style>
            body {
                font-family: Arial, sans-serif;
                color: #333;
                background-color: #f4f4f4;
                margin: 0;
                padding: 0;
            }
            .email-container {
                background-color: #ffffff;
                border-radius: 8px;
                max-width: 600px;
                margin: 20px auto;
                padding: 20px;
                box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            }
            .header {
                text-align: center;
                background-color: #007BFF;
                color: white;
                padding: 20px;
                border-radius: 8px 8px 0 0;
            }
            .header h2 {
                margin: 0;
            }
            .content {
                padding: 20px;
                font-size: 16px;
                line-height: 1.5;
            }
            .content p {
                margin: 10px 0;
            }
            .content strong {
                color: #007BFF;
            }
            .button {
                display: inline-block;
                padding: 10px 20px;
                background-color: #007BFF;
                color: white;
                text-decoration: none;
                font-weight: bold;
                border-radius: 5px;
                margin-top: 20px;
                text-align: center;
            }
            .footer {
                text-align: center;
                font-size: 12px;
                color: #777;
                margin-top: 20px;
            }
            a {
                color: #007BFF;
                text-decoration: none;
            }
        </style>
        </head>
        <body>
            <div class="email-container">
                <div class="header">
                    <h2>New Contact Form Submission</h2>
                </div>
                <div class="content">
                    <p>You have received a new message from your website contact form.</p>
                    <p><strong>Name:</strong> ' . $name . '</p>
                    <p><strong>Email:</strong> ' . $mailtoLink . '</p>
                    <p><strong>Subject:</strong> ' . $subject . '</p>
                    <p><strong>Service:</strong> ' . $service . '</p>
                    <p><strong>Message:</strong><br>' . nl2br($message) . '</p>
                    <p>If you wish to reply, click the button below to send an email directly to ' . $email . '.</p>
                    <p><a href="mailto:' . $email . '" class="button">Reply to ' . $name . '</a></p>
                </div>
                <div class="footer">
                    <p>For further assistance, visit <a href="https://www.lkgroupworld.com">LK Group</a>.</p>
                </div>
            </div>
        </body>
        </html>';

        // Send email
        if ($mail->send()) {
            echo json_encode(['status' => 'success', 'message' => 'Message has been sent successfully!']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Message could not be sent. Please try again!']);
        }
    } catch (Exception $e) {
        echo json_encode(['status' => 'error', 'message' => 'Mailer Error: ' . $mail->ErrorInfo]);
    }
}
?>
