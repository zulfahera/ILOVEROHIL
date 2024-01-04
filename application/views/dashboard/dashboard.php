<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>I LOVE ROHIL</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
            color: #495057;
            margin: 0;
            padding: 0;
        }

        .m-content {
            margin: 20px auto;
            padding: 20px;
            background-color: #e0f0ff;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            border-radius: 15px;
        }

        h2,
        h3,
        p,
        ul {
            margin-bottom: 15px;
            font-weight: bold;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            margin-bottom: 10px;
        }

        iframe {
            width: 100%;
            height: 300px;
            border-radius: 8px;
        }

        /* Colors */
        .welcome-section,
        .beasiswa-section,
        .video-section {
            background-color: #add8e6;
            color: #ffffff;
            padding: 20px;
            border-radius: 15px;
            margin-bottom: 20px;
        }

        .welcome-section h2,
        .beasiswa-section h3,
        .video-section h3 {
            margin-bottom: 15px;
        }

        .m-portlet {
            margin-bottom: 20px;
        }

        .m-login__logo {
            margin-bottom: 20px;
        }

        .m-login__logo img {
            width: 120px;
            height: auto;
        }
    </style>
</head>

<body>

    <div class="m-content">
        <div class="row">
            <div class="col-lg-12">
                <div class="m-portlet m-portlet--mobile m-portlet--body-progress welcome-section">
                    <div class="m-portlet__body">
                        <h2 class="h4">Welcome to I LOVE ROHIL</h2>
                        <h2 class="h4">ILOVE ROHIL (Informasi Beasiswa Lengkap, Optimal, Valid, Efisien Rokan Hilir)
                            merupakan wadah yang dirancang untuk memenuhi kebutuhan dan aspirasi masyarakat dalam
                            mencari informasi seputar beasiswa.</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"></h1>
    <div class="card mb-3" style="background-color: #e0f0ff;">
        <div class="row no-gutters">
            <div class="col-md-8">
                <div class="card-body">
                    <?php foreach ($myuser as $us): ?>
                        <div class="card mb-3" style="background-color: #add8e6;">
                            <div class="card-header" style="background-color: #5fa2db; color: #ffffff;">
                                <?= $us['universitas']; ?>
                            </div>
                            <div class="card-body">
                            <h2 class="h4">BEASISWA YANG DIBUKA SAAT INI!!!!</h2>
                            <h2 class="h4">----------------------------------</h2>
                                <p class="card-text">Waktu: <?= $us['waktu']; ?></p>
                                <p class="card-text">Kuota: <?= $us['kuota']; ?></p>
                                <p class="card-text">Syarat: <?= $us['syarat']; ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>



        <div class="row">
            <div class="col-lg-6">
                <div class="m-portlet m-portlet--mobile m-portlet--body-progress video-section">
                    <div class="m-portlet__head">
                        <div class="m-portlet__head-caption">
                            <div class="m-portlet__head-title">
                                <h3 class="h5">KATA SAMBUTAN DIREKTUR <small>Politeknik Caltex Riau</small></h3>
                            </div>
                        </div>
                    </div>
                    <div class="m-portlet__body">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item"
                                src="https://www.youtube.com/embed/Hqxm9KVLUzo?feature=shared" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="m-portlet video-section">
                    <div class="m-portlet__head">
                        <div class="m-portlet__head-caption">
                            <div class="m-portlet__head-title">
                                <h3 class="h5">VIDEO PROFIL <small>Politeknik Caltex Riau</small></h3>
                            </div>
                        </div>
                    </div>
                    <div class="m-portlet__body">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/D4HdqnHSQ0o"
                                allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>