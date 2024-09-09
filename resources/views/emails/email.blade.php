<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Email</title>
  @vite('resources/css/app.css')
</head>

<body>
  <h3>Dear {{ $name }}</h3>
  <p>{{ $messageContent }}</p>
  <p>Looking forward to seeing you there!</p>
</body>

</html>
