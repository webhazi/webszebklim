<?php

function ki($szoveg)
{
    echo htmlspecialchars($szoveg, ENT_QUOTES);
}


$hiba = false;
$sikeres = "";
$sikertelen = "";

if (empty($_POST['name'])) {
    $hiba = true;
    $sikertelen = "<p class='text-danger'>A név mezőnek NEM szabad üresnek lennie!</p>";
}

else if (empty($_POST['email'])) {
    $hiba = true;
    $sikertelen = "<p class='text-danger'>Az email mezőnek NEM szabad üresnek lennie!</p>";
}

else if (empty($_POST['message'])) {
    $hiba = true;
    $sikertelen = "<p class='text-danger'>A szövegdoboznak NEM szabad üresnek lennie!</p>";
}

else if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    $hiba = true;
}

else if (!$hiba) {
     $sikeres = "<p class='text-success'>Sikeres küldés</p>";
}

$gomb = $_POST['gomb'] ?? false;

?>
<section id="five" class="wrapper style1 fade-up">
    <div class="inner">
        <h2>Kapcsolat</h2>
        <p>Kérem ha az oldallal kapcsolatos észrevéztele van, vagy nem találja a megfelelő szakembert jelezze nekünk!</p>
        <div class="split style1">
            <section>
                <form action = "?oldal=uzenet" method="post">

                    <div class="fields">
                        <div class="field half">
                            <label for="name">Név</label>
                            <input type="text" name="name" id="name" />
                            <p class='text-danger' id="hibaN"></p>
                        </div>
                        <div class="field half">
                            <label for="email">Email</label>
                            <input type="text" name="email" id="email" />
                            <p class='text-danger' id="hibaE"></p>
                        </div>
                        <div class="field">
                            <label for="message">Üzenet</label>
                            <textarea name="message" id="message" rows="5"></textarea>
                            <p class='text-danger' id="hibaM"></p>
                        </div>
                    </div>
                    <ul class="actions" style="list-style-type: none;">
                        <li><a href="" class="button submit" name="gomb">Üzenet küldése</a></li>
                    </ul>
                </form>
            </section>			
			
			
			
			
            <?php if ($gomb && $hiba) {
                echo $sikertelen;
            } else if ($gomb && !$hiba) {
                echo $sikeres;
            } ?>


<h2>Adatok:</h2>
<p>Ügyvezető: <strong>Szebelédi Mariann és Klimán László</strong></p>
<p>E-mail: <strong>szekl@nethely.hu</strong></p>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2726.3375296155727!2d19.66695091525771!3d46.89607994478184!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4743da7a6c479e1d%3A0xc8292b3f6dc69e7f!2sPallasz+Ath%C3%A9n%C3%A9+Egyetem+GAMF+Kar!5e0!3m2!1shu!2shu!4v1475753185783" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
<br>
<a target="_blank" href="https://www.google.hu/maps/place/Pallasz+Ath%C3%A9n%C3%A9+Egyetem+GAMF+Kar/@46.8960799,19.6669509,17z/data=!3m1!4b1!4m5!3m4!1s0x4743da7a6c479e1d:0xc8292b3f6dc69e7f!8m2!3d46.8960763!4d19.6691396?hl=hu">Nagyobb térkép</a>

