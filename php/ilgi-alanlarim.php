<!doctype html>
<html lang="tr-TR">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://kit.fontawesome.com/d5b5e71fcf.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="shortcut icon" href="../img/favicon.ico">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Şehrim</title>
</head>
<body>
<div class="container-fluid header" id="top">
    <nav class="navbar navbar-expand-lg">
        <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="../index.html">Hakkımda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../html/cv.html">CV</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../html/sehrim.html">Şehrim<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="php/ilgi-alanlarim.php">İlgi Alanlarım</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../html/iletisim.html">İletişim</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../html/login.html">Login</a>
                </li>
            </ul>
        </div>
        <div class="social">
            <a href="https://github.com/osmancetin10"><i class="fab fa-github-square fa-2x"></i></a>
        </div>
    </nav>
</div>
<section class="py-5 text-center container">
    <div class="row py-lg-5">
        <div class="col-lg-6 col-md-8 mx-auto">
            <?php

            $curl = curl_init();

            curl_setopt_array($curl, [
            	CURLOPT_URL => "https://dog.ceo/api/breeds/image/random",
            	CURLOPT_RETURNTRANSFER => true,
            	CURLOPT_FOLLOWLOCATION => true,
            	CURLOPT_ENCODING => "",
            	CURLOPT_MAXREDIRS => 10,
            	CURLOPT_TIMEOUT => 30,
            	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            	CURLOPT_CUSTOMREQUEST => "GET",
            	CURLOPT_HTTPHEADER => [
            		"X-RapidAPI-Host: api-nba-v1.p.rapidapi.com",
            		"X-RapidAPI-Key: fe640a47e6msh178cc3f97b1ca85p19b5c6jsn3ddfd8c855df"
            	],
            ]);

            $response = curl_exec($curl);
            $err = curl_error($curl);
            $person = json_decode($response);
            curl_close($curl);

            if ($err) {
            	echo "cURL Error #:" . $err;
            } else {
                echo '<img width="30%" src="' . $person->message . '" alt="">';
            }
            ?>

            <hr>
            <h1 class="fw-light">Köpekler</h1>
            <p class="lead text-muted">Bu sayfada kullanılan görsel için ücretsiz bir API servisinden faydalanılmıştır. Sayfa her yenilendiğinde yeni bir random köpek görseli görüyor olacaksınız.</p>
        </div>
    </div>
</section>

<a href="#top">
    <div class="to-up"><i class="fas fa-angle-up fa-2x"></i></div>
</a>
<div class="container-fluid footer">
    <p><small>Osman Çetin</small></p>
</div>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
</body>
</html>