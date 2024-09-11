<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Grab Business Forum Invitation</title>
  <style>
    @font-face {
      font-family: 'Grab Community EN v2.0 Inline';
      src: url('../fonts/Grab Community EN v2.0-Inline.otf') format('opentype');
    }

    @font-face {
      font-family: 'Grab Community Solid Bold';
      src: url('../fonts/Grab Community Solid EN-Bold.otf') format('opentype');
    }

    @font-face {
      font-family: 'Grab Community Solid Heavy';
      src: url('../fonts/Grab Community Solid EN-Heavy.otf') format('opentype');
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
      font-family: 'Grab Community Solid Medium';
      src: url('../fonts/Grab Community Solid EN-Medium.otf') format('opentype');
      color: black;
    }

    .email-container {
      max-width: 600px;
      margin: 0 auto;
      padding: 20px;
      background-color: #f4f4f4;
    }

    .header {
      background-color: #005537;
      color: white;
      padding: 20px;
      text-align: center;
    }

    .header img {
      width: 100px;
    }

    .email-content {
      background-color: white;
      padding: 20px;
      border-radius: 8px;
    }

    p {
      line-height: 1.5;
    }

    .qr-code {
      text-align: center;
      margin-top: 20px;
    }

    .qr-code img {
      width: 150px;
      height: 150px;
    }

    ul li {
      list-style: none;
    }
  </style>
</head>

<body>
  <div class="email-container">
    <div class="header">
      <img src="/img/grab-business-forum-logo.svg" alt="Grab Business Forum 2024">
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

      <p><strong>Grand Ballroom is located at the west Mall, different from the Kempinski Hotel Lobby.</strong></p>

      <p>Please note that you are eligible to attend the Executive Forum and all Business Talks Sessions.</p>

      <p>Below is your exclusive QR code used for validating your registration. Please ensure to bring it along on the
        event day for registration purposes. Kindly note that this invitation is personal and non-transferable.</p>

      <div class="qr-code">
        <img src="{{ $qrCodeUrl }}" alt="QR Code for {{ $name }}">
      </div>

      <p><strong>*Please bring your ID Card / KTP & make sure your name matches when registering.</strong></p>

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

      <img src="{{ asset('img/supported by.svg') }}" alt="Supported By">
      <img src="{{ asset('img/media partner.svg') }}" alt="Media Partner">
      <img src="{{ asset('img/footer.svg') }}" alt="Footer">
    </div>
  </div>
</body>

</html>
