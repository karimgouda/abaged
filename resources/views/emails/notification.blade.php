<!-- resources/views/emails/notification.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Application</title>
</head>
<body>
<h1>New Application</h1>

<p>Dear Abjed,</p>

<p>Alert: A new Application has been filled by {{$data['fname'].' '.$data['lname']}} <a href="https://abjed.online/admin/contacts">Read more</a>.</p>


<p>Best regards,</p>
<p>Abjed Team</p>
</body>
</html>
