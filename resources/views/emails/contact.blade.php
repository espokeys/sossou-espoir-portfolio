<!DOCTYPE html>
<html>
<head>
    <title>NessGood - Nouveau Message</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #f4f4f4; margin: 0; padding: 0;">

    <div style="max-width: 600px; margin: 20px auto; padding: 20px; background-color: #ffffff;
                border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">

        <h2 style="text-align: center; color: #333;">📩 Nouveau Message de Contact</h2>

        <div style="border-bottom: 2px solid #eee; padding-bottom: 10px; margin-bottom: 15px;">
            <p><strong style="color: #555;">Nom :</strong> {{ $name }}</p>
            <p><strong style="color: #555;">Email :</strong> <a href="mailto:{{ $email }}"
                style="color: #007bff; text-decoration: none;">{{ $email }}</a></p>
            <p><strong style="color: #555;">Sujet :</strong> {{ $subject }}</p>
        </div>

        <div style="background-color: #f9f9f9; padding: 15px; border-radius: 5px;">
            <p style="font-size: 16px; color: #333;"><strong>Message :</strong></p>
            <p style="font-size: 14px; color: #555;">{{ $messageContent }}</p>
        </div>

        <p style="text-align: center; margin-top: 20px; font-size: 12px; color: #888;">
            📧 Cet email a été envoyé via le formulaire de contact.
        </p>
    </div>

</body>
</html>
