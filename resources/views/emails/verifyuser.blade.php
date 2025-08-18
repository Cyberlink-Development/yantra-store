<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Verify your email address</title>
    <style type="text/css" rel="stylesheet" media="all">
        /* Base ------------------------------ */
        *:not(br):not(tr):not(html) {
            font-family: Arial, 'Helvetica Neue', Helvetica, sans-serif;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
        }
        body {
            width: 100% !important;
            height: 100%;
            margin: 0;
            line-height: 1.4;
            background-color: #F5F7F9;
            color: #839197;
            -webkit-text-size-adjust: none;
        }
        a {
            color: #414EF9;
        }

        /* Layout ------------------------------ */
        .email-wrapper {
            width: 100%;
            margin: 0;
            padding: 0;
            background-color: #F5F7F9;
        }
        .email-content {
            width: 100%;
            margin: 0;
            padding: 0;
        }

        /* Masthead ----------------------- */
        .email-masthead {
            padding: 25px 0;
            text-align: center;
        }
        .email-masthead_logo {
            max-width: 400px;
            border: 0;
        }
        .email-masthead_name {
            font-size: 16px;
            font-weight: bold;
            color: #839197;
            text-decoration: none;
            text-shadow: 0 1px 0 white;
        }

        /* Body ------------------------------ */
        .email-body {
            width: 100%;
            margin: 0;
            padding: 0;
            border-top: 1px solid #E7EAEC;
            border-bottom: 1px solid #E7EAEC;
            background-color: #FFFFFF;
        }
        .email-body_inner {
            width: 570px;
            margin: 0 auto;
            padding: 0;
        }
        .email-footer {
            width: 570px;
            margin: 0 auto;
            padding: 0;
            text-align: center;
        }
        .email-footer p {
            color: #839197;
        }
        .body-action {
            width: 100%;
            margin: 30px auto;
            padding: 0;
            text-align: center;
        }
        .body-sub {
            margin-top: 25px;
            padding-top: 25px;
            border-top: 1px solid #E7EAEC;
        }
        .content-cell {
            padding: 35px;
        }
        .align-right {
            text-align: right;
        }

        /* Type ------------------------------ */
        h1 {
            margin-top: 0;
            color: #292E31;
            font-size: 19px;
            font-weight: bold;
            text-align: left;
        }
        h2 {
            margin-top: 0;
            color: #292E31;
            font-size: 16px;
            font-weight: bold;
            text-align: left;
        }
        h3 {
            margin-top: 0;
            color: #292E31;
            font-size: 14px;
            font-weight: bold;
            text-align: left;
        }
        p {
            margin-top: 0;
            color: #839197;
            font-size: 16px;
            line-height: 1.5em;
            text-align: left;
        }
        p.sub {
            font-size: 12px;
        }
        p.center {
            text-align: center;
        }

        /* Buttons ------------------------------ */
        .button {
            display: inline-block;
            width: 200px;
            background-color: #414EF9;
            border-radius: 3px;
            color: #ffffff;
            font-size: 15px;
            line-height: 45px;
            text-align: center;
            text-decoration: none;
            -webkit-text-size-adjust: none;
            mso-hide: all;
        }
        .button--green {
            background-color: #28DB67;
        }
        .button--red {
            background-color: #FF3665;
        }
        .button--blue {
            background-color: #414EF9;
        }

        /*Media Queries ------------------------------ */
        @media only screen and (max-width: 600px) {
            .email-body_inner,
            .email-footer {
                width: 100% !important;
            }
        }
        @media only screen and (max-width: 500px) {
            .button {
                width: 100% !important;
            }
        }
    </style>
</head>
<body>
<table class="email-wrapper" width="100%" cellpadding="0" cellspacing="0">
    <tr>
        <td align="center">
            <table class="email-content" width="100%" cellpadding="0" cellspacing="0">
                <!-- Logo -->
                <tr>
                    <td class="email-masthead">
                        <img src="{{ asset('theme-assets/img/logo-white.jpg') }}" style="max-height: 40px" alt="Yantra Store">
                        <a class="email-masthead_name">Yantra Store</a>
                    </td>
                </tr>
                <!-- Email Body -->
                <tr>
                    <td class="email-body" width="100%">
                        <table class="email-body_inner" align="center" width="570" cellpadding="0" cellspacing="0" style="background-color:#ffffff; border-radius:8px; padding:30px; font-family:Arial, sans-serif;">
                            <!-- Body content -->
                            <tr>
                                <td class="content-cell" style="font-size:16px; line-height:1.5; color:#333;">
                                    <h1 style="font-size:24px; font-weight:bold; margin-bottom:20px; color:#222;">Verify your email address</h1>
                                    
                                    <p style="margin-bottom:15px;">
                                        Hi <strong>{{ $name }}</strong>,
                                    </p>
                                    
                                    <p style="margin-bottom:15px;">
                                        Thanks for signing up for <strong>E-commerce</strong>! We’re excited to have you on board.
                                    </p>
                                    
                                    <p style="margin-bottom:15px;">
                                        Your registered email is: <strong>{{ $email }}</strong>
                                    </p>

                                    <p style="margin-bottom:15px;">
                                        Your account password is:  
                                        <span style="display:inline-block; background-color:#f4f4f4; padding:5px 10px; border-radius:4px; font-weight:bold;">
                                            {{ $password }}
                                        </span>
                                    </p>

                                    <p style="margin-bottom:20px;">
                                        Please click the button below to verify your email account:
                                    </p>

                                    <!-- Action Button -->
                                    <table class="body-action" align="center" cellpadding="0" cellspacing="0" style="margin: 20px 0;">
                                        <tr>
                                            <td align="center">
                                                <a href="{{ route('verify-user', $token) }}" style="display:inline-block; background-color:#007BFF; color:#fff; font-size:16px; font-weight:bold; padding:12px 25px; border-radius:5px; text-decoration:none;" target="_blank">
                                                    Verify Email
                                                </a>
                                            </td>
                                        </tr>
                                    </table>

                                    <p style="margin-top:20px;">
                                        If you didn’t create an account, you can safely ignore this email.
                                    </p>

                                    <p style="margin-top:30px;">
                                        Thanks,<br>
                                        <strong>Yantra Store</strong>
                                    </p>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td>
                        <table class="email-footer" align="center" width="570" cellpadding="0" cellspacing="0">
                            <tr>
                                <td class="content-cell">
                                    <p class="sub center">
                                       Yantra Store
                                        <br>Kathmandu
                                    </p>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
</body>
</html>
