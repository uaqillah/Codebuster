<?PHP
$sender = 'aidatulkhairina@gmail.com.tld';
$recipient = 'aidatulkhairina@gmail.com.tld';

$subject = "php mail test";
$message = "php test message";
$headers = 'From:' . $sender;

if (mail($recipient, $subject, $message, $headers))
{
    echo "Message accepted";
}
else
{
    echo "Error: Message not accepted";
}
?>