<html>
<body>
    <p>{{ $name }}</p>
    <hr>
    <p>{!! nl2br($msg) !!}</p>
    <p style="font-weight:bold;text-decoration:underline;">Informations supplémentaires</p>
    <p><u>E-Mail</u> : <a href="mailto:{{ $email }}">{{ $email }}</a></p>
    <p><u>Date et heure</u> : {{ $dateTime }}</p>
    <p><u>Adresse Ip</u> : {{ $ip }}</p>
</body>
</html>
