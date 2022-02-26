<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Ding Done</title>

    <style type="text/css">
        @import url(http://fonts.googleapis.com/css?family=Droid+Sans);

        /* Take care of image borders and formatting */

        img {
            max-width: 600px;
            outline: none;
            text-decoration: none;
            -ms-interpolation-mode: bicubic;
        }

        a img {
            border: none;
        }

        /* General styling */

        td,
        h1,
        h2,
        h3 {
            font-family: Helvetica, Arial, sans-serif;
            font-weight: 400;
        }

        td {
            text-align: left;
        }

        body {
            -webkit-font-smoothing: antialiased;
            -webkit-text-size-adjust: none;
            width: 100%;
            height: 100%;
            color: #37302d;
            background: #ffffff;
            font-size: 18px;
        }

        table {
            border-collapse: collapse !important;
            /*border: 1px solid silver;*/
        }

        .headline {
            color: #ffffff;
            font-size: 36px;
        }

        .force-full-width {
            width: 100% !important;
        }

        .force-width-80 {
            width: 80% !important;
        }

    </style>

    <style type="text/css" media="screen">
        @media screen {

            /*Thanks Outlook 2013! http://goo.gl/XLxpyl*/
            td,
            h1,
            h2,
            h3 {
                font-family: 'Droid Sans', 'Helvetica Neue', 'Arial', 'sans-serif' !important;
            }
        }

    </style>

    <style type="text/css" media="only screen and (max-width: 480px)">
        /* Mobile styles */
        @media only screen and (max-width: 480px) {

            table[class="w320"] {
                width: 320px !important;
            }

            td[class="mobile-block"] {
                width: 100% !important;
                display: block !important;
            }


        }

    </style>
</head>

<body class="body" style="padding:0; margin:0; display:block; -webkit-text-size-adjust:none">
    <table cellpadding="0" cellspacing="0" class="force-full-width" height="100%">
        <tr>
            <td valign="top" width="100%">

                <table style="margin: 0 auto;" cellpadding="0" cellspacing="0" width="600" class="w320">
                    <tr>
                        <td valign="top">

                            <table style="margin: 0 auto;color: #2d0242" cellpadding="0" cellspacing="0"
                                class="force-full-width" bgcolor="#d1d8db">
                                <tr>
                                    <td>
                                        <img src="https://ik.imagekit.io/76b3jqi9acn/Cabecera-Confirmación-de-recibido_BpzP_86f6Yk.jpg"
                                            alt="robot picture">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <table style="margin: 0 auto;" cellpadding="0" cellspacing="0" width="75%">
                                            <tr>
                                                <td
                                                    style="color:#2d0242;line-height: 24px;font-size:16px;text-align:center;">
                                                    <p>
                                                        {{ $ecom->name . ' ' . $ecom->surname }} ha enviado el
                                                        siguiente
                                                        mensaje:<br /><br />
                                                    <div
                                                        style="background-color: #ffab00; padding: 20px; border-radius: 5px; font-size: 20px;">
                                                        {{ $ecom->message }}</div>
                                                    <br /><br />
                                                    <div style="border-bottom:1px solid #EFEFEF"></div><br /><br />La
                                                    dirección de su tienda física es:<br /><br />
                                                    <div
                                                        style="background-color: #00c28c; padding: 20px; border-radius: 5px; font-size: 20px;">
                                                        {{ $ecom->address }} </div>
                                                    <br /><br />
                                                    <div style="border-bottom:1px solid #EFEFEF"></div>
                                                    <br /><br />Puedes contactar con esta persona a través del email:
                                                    {{ $ecom->email }} o acceder a su página web: {{ $ecom->web }}
                                                    </p>
                                                    <br>
                                                    <br>
                                                </td>
                                            </tr>
                                        </table>

                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <br><br><br><br>
                                        <center>
                                            <table width="100%">
                                                <tr>
                                                    <td style="text-align:center;">
                                                        <img src="https://ik.imagekit.io/76b3jqi9acn/Logo_DingDone_VlZrHrRXS.png"
                                                            alt="logo" width="150px">
                                                    </td>
                                                </tr>
                                            </table>
                                            <br>
                                            <br>

                                            <table width="100%">
                                                <tr>
                                                    <td style="text-align:center;color: #a0a0a0;font-size:13px">
                                                        DingDone &copy; 2021 DingDine INC.
                                                    </td>
                                                </tr>
                                            </table>
                                        </center>
                                        <br>

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
