<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description"
        content="viho admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities." />
    <meta name="keywords"
        content="admin template, viho admin template, dashboard template, flat admin template, responsive admin template, web app" />
    <meta name="author" content="pixelstrap" />
    <link rel="icon" href="https://laravel.pixelstrap.com/viho/assets/images/favicon.png" type="image/x-icon" />
    <link rel="shortcut icon" href="https://laravel.pixelstrap.com/viho/assets/images/favicon.png"
        type="image/x-icon" />
    <title>viho - Premium Admin Template</title>
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet" />
    <style>
        body {
            width: 650px;
            font-family: work-Sans, sans-serif;
            background-color: #f6f7fb;
            display: block;
        }

        a {
            text-decoration: none;
        }

        span {
            font-size: 14px;
        }

        p {
            font-size: 13px;
            line-height: 1.7;
            letter-spacing: 0.7px;
            margin-top: 0;
        }

        .text-center {
            text-align: center;
        }

        h6 {
            font-size: 16px;
            margin: 0 0 18px 0;
        }
    </style>
</head>

<body style="margin: 30px auto;">
    <table style="width: 100%;">
        <tbody>
            <tr>
                <td>
                    <table style="background-color: #f6f7fb; width: 100%;">
                        <tbody>
                            <tr>
                                <td>
                                    <table style="width: 650px; margin: 0 auto; margin-bottom: 30px;">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <a href="index.html"><img class="img-fluid"
                                                            src="https://laravel.pixelstrap.com/viho/assets/images/logo/logo.png"
                                                            alt="" /></a>
                                                </td>
                                                <td style="text-align: right; color: #999;"><span>Perusahaan Gas
                                                        Negara</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table style="width: 650px; margin: 0 auto; background-color: #fff; border-radius: 8px;">
                        <tbody>
                            <tr>
                                <td style="padding: 30px;">
                                    <h6 style="font-weight: 600;">Gas Berlebih</h6>
                                    <p>Diberitahukan kepada customer kami {{ $pelanggan }} </p>
                                    <p>Kami memiliki sisa gas sebesar :<strong>{{ $details['gas_sisa'] }}</strong></p>
                                    <p>Apa bila anda ingin mengambil gas tersebut klik tombol di bawah ini</p>
                                    <p style="text-align: center;">
                                        <a href="{{ $details['link'] }}"
                                            style="padding: 10px; background-color: #24695c; color: #fff; display: inline-block; border-radius: 4px; font-weight: 600;">Lelang</a>
                                    </p>
                                    <p>dan masuk pada menu "Lelang Gas" dan tekan tombol "Klaim"</p>
                                    <p>Apabila tombol tidak berfungsi silahkan kunjing link ini <a
                                            href="{{ $details['link'] }}">Link</a>
                                    </p>
                                    <p style="margin-bottom: 0;">
                                        Salah Hormat,<br />
                                        Perusahaan Gas Negara
                                    </p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table style="width: 650px; margin: 0 auto; margin-top: 30px;">
                        <tbody>
                            <tr style="text-align: center;">
                                <td>
                                    <p style="color: #999; margin-bottom: 0;">Jakarta</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
        </tbody>
    </table>
</body>

</html>
