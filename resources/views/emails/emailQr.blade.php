<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Grab Business Forum Invitation</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet">

  <style>
    @font-face {
      font-family: 'Grab Community Solid Bold';
      src: url('../fonts/Grab Community Solid EN-Bold.otf') format('opentype');
    }

    @font-face {
      font-family: 'Grab Community Solid Medium';
      src: url('../fonts/Grab Community Solid EN-Medium.otf') format('opentype');
    }

    @font-face {
      font-family: 'Grab Community Solid Regular';
      src: url('../fonts/Grab Community Solid EN-Regular.otf') format('opentype');
    }

    body {
      font-family: 'Grab Community Solid Regular';
      color: black;
    }

    .email-container {
      max-width: 600px;
      margin: 0 auto;
      padding: 20px;
      background-color: #f4f4f4;
    }

    .header {
      background-color: #005235;
      padding: 20px;
    }

    .header img {
      width: 136px;
    }

    .email-content {
      background-color: white;
      padding: 20px;
      border-radius: 8px;
    }

    h3 {
      font-family: 'Grab Community Solid Bold';
    }

    p {
      line-height: 1.5;
    }

    .qr-code {
      text-align: center;
    }

    .qr-code img {
      width: 300px;
      height: 300px;
    }

    ul li {
      list-style: none;
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

      <p>We are delighted to inform you that your registration has been successfully confirmed to attend the Grab
        Business Forum 2024 with the topic "Resilient Business Forward: Paving the Way to the Bolder Future".</p>

      <p>Here are the complete details of the event we are eagerly anticipating your presence at:</p>

      <ul>
        <li>Date: Tuesday, May 14th, 2024</li>
        <li>Time: From 08:00 to 18:00 WIB</li>
        <li>Venue: Grand Ballroom Kempinski Hotel Jakarta</li>
      </ul>

      <p>For the arrival of VIPs, you can enter through:</p>
      <ul>
        <li>- Enter the West Mall, through entry gate Jalan Teluk Betung I</li>
        <li>- Head to the Drop-off at the Kempinski - Grand Ballroom Lobby</li>
        <li>- Take the elevator to the Kempinski Grand Ballroom</li>
      </ul>

      <p><strong>Grand Ballroom is located at the west Mall, different from the Kempinski Hotel
          Lobby.</strong></p>

      <p>Please note that you are eligible to attend the Executive Forum and all Business Talks Sessions.</p>

      <p>Below is your exclusive QR code used for validating your registration. Please ensure to bring it along on the
        event day for registration purposes. Kindly note that this invitation is personal and non-transferable.</p>

      <div class="qr-code">
        <img src="{{ $qrCodeUrl }}" alt="QR Code for {{ $name }}">
        {{-- <img src="attachments/QR_Keysha.png" alt="QR Code"> --}}
      </div>

      <p><strong>*Please bring your ID Card / KTP & make sure your name matches when
          registering.</strong></p>

      <p>In addition to gaining valuable insights, also anticipate exciting door prizes to be announced at the end of
        the
        executive forum session, limited to lucky attendees present.</p>

      <p>Use the voucher code "<strong>GBF2024</strong>" to get a discount of <strong>IDR 25,000</strong>. Terms and
        Conditions:
      <ul>
        <li>* Promo is only valid for <strong>May 14, 2024</strong>.</li>
        <li>* Promo can only be used <strong>2x/user</strong> during the period.</li>
        <li>* Promo can be used for all <strong>GrabBike</strong> and <strong>GrabCar</strong> services</li>
        <li>* Promo is only valid for destinations to and from Hotel Indonesia Kempinski Grand Indonesia (Kempinski
          Grand Ballroom)</li>
      </ul>
      </p>

      For further information, please visit our official website at grabbusinessforum.id.

      We trust your presence will significantly contribute to the success of this event. Thank you for your
      participation, and we eagerly look forward to welcoming you at the Grab Business Forum 2024.

      <p><strong>Event Rundown:</strong></p>
      <ul>
        <li>09:00 - 12:00 WIB Executive Forum</li>
        <li>13:30 - 17:00 WIB Business Talks</li>
      </ul>

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
