<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Grab Business Forum Invitation</title>
  <style>
    @font-face {
      font-family: 'Grab Community Solid Bold';
      src: url('../fonts/Grab Community Solid EN-Bold.otf') format('opentype');
    }

    @font-face {
      font-family: "Grab Community Solid Medium";
      src: url("../fonts/Grab Community Solid EN-Medium.otf") format("opentype");
    }

    @font-face {
      font-family: "Grab Community Solid Regular";
      src: url("../fonts/Grab Community Solid EN-Regular.otf") format("opentype");
    }

    body {
      font-family: "Grab Community Solid Regular";
      color: black;
    }

    .email-container {
      max-width: 600px;
      margin: 0 auto;
      padding: 20px;
      background-color: #f4f4f4;
      border-radius: 10px;
      overflow: hidden;
    }

    .header {
      background-color: #005235;
      padding: 20px;
    }

    .header img {
      width: 136px;
    }

    .email-content {
      padding: 20px;
      background-color: white;
    }

    h3 {
      font-family: 'Grab Community Solid Bold';
    }

    p {
      line-height: 1.5;
    }

    .button {
      display: block;
      width: fit-content;
      background-color: #5746a6;
      color: white;
      padding: 10px 20px;
      text-decoration: none;
      border-radius: 5px;
      text-align: center;
      margin: 20px auto;
    }

    .sponsors,
    .media-partners {
      text-align: center;
      margin-top: 20px;
    }

    .footer img {
      display: block;
      margin: 0 auto;
      width: 100%;
    }
  </style>
</head>

<body>
  <div class="email-container">
    <div class="header">
      {{-- <img src="img/grab-business-forum-logo.svg" alt="Grab Business Forum Logo" /> --}}
      <img src="{{ asset('img/grab-business-forum-logo.svg') }}" alt="Grab Business Forum 2024">
    </div>
    <div class="email-content">
      <h3>Dear {{ $name }},</h3>

      <p>
        Terima kasih atas ketertarikan Anda untuk menghadiri acara Grab
        Business Forum 2024.
      </p>

      <p>
        Mohon maaf Anda belum bisa menghadiri acara secara offline. Namun,
        Anda dapat mengikuti acara secara online melalui link berikut:
      </p>

      <a href="link_here" class="button">Tonton di sini</a>

      <p>Executive Forum dapat diikuti pada pukul 09:00-12:00 WIB.</p>

      <p>Warm regards,</p>

      <div class="sponsors">
        {{-- <img src="img/supported by.svg" alt="Sponsors" /> --}}
        <img src="{{ asset('img/supported by.svg') }}" alt="Sponsors">
      </div>

      <div class="media-partners">
        {{-- <img src="img/media partner.svg" alt="Media Partners" /> --}}
        <img src="{{ asset('img/media partner.svg') }}" alt="Media Partners">
      </div>

    </div>
    <div class="footer">
      <img src="{{ asset('img/footer.svg') }}" alt="Footer" />
    </div>
  </div>
</body>

</html>
