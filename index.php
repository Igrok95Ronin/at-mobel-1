<?php
$site_data      = json_decode(file_get_contents('http://templates.jquery.link/api/' . $_SERVER['HTTP_HOST']), true);

$phone_name     = $site_data['phone_name'];
$phone_href     = $site_data['phone_href'];

$text           = str_replace('+', ' ', trim($_GET['t'] ?? 'MÖBELMONTEUR'));
$city           = str_replace('+', ' ', trim($_GET['n'] ?? ''));

$title = $text . ' ' . $city;
?>

<!DOCTYPE html>
<html lang="at">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <?= $site_data['html'] ?>
    <title><?= $title ?></title>
</head>
<?= $phone_href ?>
<?= $phone_name ?>
<body>

    <!--Шапка сайта-->
    <header class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col container container--flex">
                    <img class="header__logo header__logo--display-none" src="assets/img/a01dd824b83df9d5143546e1be361501.png" alt="">
                    <a href="<?= $phone_href ?>" class="button header__logo--display-none"><?= $phone_name ?></a>

                    <div class="d-grid col-12 fixed-top d-sm-none">
                        <a class="btn btn-danger btn-size" href="<?= $phone_href ?>" ><?= $phone_name ?></a>
                      </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Раздел страницы-->
    <section class="first-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col container">
                    <div class="first-box">
                        <div class="first-top-inner">
                            <h1 class="first-top-inner__title"><?= $title ?></h1>
                            <p class="first-top-inner__description">Leistungen auf höchstem Niveau</p>
                            <p class="first-top-inner__text">Möbelmonteure in Wien gesucht?<br>
                                Wir sind Ihr zuverlässiger Partner wenn es um den professionellen, hochwertigen und vor
                                allem preiswerten Montageservice in Wien und Umgebung gehen soll.</p>
                        </div>
                        <div class="d-none d-md-block">
                            <div class="firs-bottom-inner mt-5 ">
                                <img class="firs-bottom-inner__img" src="assets/img/person.svg" alt="">
                                <div>
                                    <h2 class="firs-bottom-inner__title">Individuelle Beratungen</h2>
                                    <p class="firs-bottom-inner__description">Hinterlassen Sie eine Anfrage auf der
                                        Website und wir beraten Sie</p>
                                </div>
                            </div>
                            <div class="firs-bottom-inner">
                                <img class="firs-bottom-inner__img" src="assets/img/cash-stack.svg" alt="">
                                <div>
                                    <h2 class="firs-bottom-inner__title">Niedrigste Preise</h2>
                                    <p class="firs-bottom-inner__description">Nur bei uns sind die Preise am niedrigsten
                                    </p>
                                </div>
                            </div>
                            <div class="firs-bottom-inner">
                                <img class="firs-bottom-inner__img" src="assets/img/clipboard-data.svg" alt="">
                                <div>
                                    <h2 class="firs-bottom-inner__title">100% Qualitätsgarantie</h2>
                                    <p class="firs-bottom-inner__description">Unser Unternehmen bietet 100%
                                        Qualitätsgarantie</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="second-section my-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col container">
                    <div class="second-box">
                        <h2 class="second__title"><span>M</span>öbelmontage, Ladenbau, Umzug und vieles mehr mit den
                        </h2>
                        <h3 class="second__title-2">Möbelmonteur Wein</h3>
                        <p class="second__text">Sie benötigen Hilfe bei der Montage Ihrer Möbel oder Küche und
                            Realisierung Ihres Projektes?
                            Gerne stehen wir Ihnen mit unseren gelernten Montagetischlern zur Seite.</p>
                        <a href="<?= $phone_href ?>" class="second-button"><?= $phone_name ?></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="third-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col container">
                    <h2 class="third__title my-5"><span>P</span>rofessionell, bequem und fachgerecht durchführen lassen
                    </h2>
                    <div class="third-box">
                        <div class="third-left-wrapper">
                            <img class="third-left-wrapper__img" src="assets/img/b475642b08125cc83b4c780c5f55621e.jpeg"
                                alt="">
                        </div>
                        <div class="third-right-wrapper">
                            <div class="third-right-inner">
                                <p class="third-right-inner__name">Küchenmontage</p>
                                <p class="third-right-inner__text">Unsere Küchenmonteure sind echte Profis im Bereich
                                    Montageservice und passen Ihre Küche den neuen Raumanforderungen an, sodass Ihnen
                                    der Kauf einer neuen Küche erspart bleibt.</p>
                            </div>
                            <div class="third-right-inner">
                                <p class="third-right-inner__name">Möbelmontage</p>
                                <p class="third-right-inner__text">Warum sich auch an verschiedene Firmen wenden, wenn
                                    es genügt, sich auf uns zu verlassen und die zuständigen Handwerker ins Haus, in die
                                    Wohnung geschickt zu bekommen? Wir als Montageservice in Wien wissen genau was
                                    richtig ist und was wir ausführen, um unseren Kunden bei seinen Problemen zu helfen.
                                    Gerne finden wir mit Ihnen zusammen Lösungen und das zusammen mit den besten
                                    Handwerkern.</p>
                            </div>
                            <div class="third-right-inner">
                                <p class="third-right-inner__name">Umzug </p>
                                <p class="third-right-inner__text">Ein Umzug innerhalb von Wien oder außerhalb nach
                                    Wien, muss nicht negativer Stress sein oder Probleme mitbringen. Umzug Wien wird mit
                                    der richtigen Organisation perfekt gelingen.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="fourth-section my-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col container">
                    <div class="fourth-box">
                        <div class="fourth-left-block">
                            <img class="fourth-left-block__img" src="assets/img/067dd3305646a33a493d25513e51bd13.jpg"
                                alt="">
                        </div>
                        <div class="fourth-right-block">
                            <h2 class="fourth-right-block__title"><span>S</span>ie suchen eine kompetente, flexible und
                                eine rund um die Uhr erreichbare Umzugssfirma, die Ihr Möbelaufbau, Möbelmontage und
                                Möbeldemontage, Einpackungs-Problem auf schnellster und glanzvollster Weise löst?</h2>
                            <p class="fourth-right-block__text mt-5">Neue Möbel einkaufen macht Spass, Möbel
                                transportieren und danach montieren beziehungsweise zusammenbauen weniger. Wir liefern
                                Ihre neuen Möbel und montieren sie vor Ort. Auf Wunsch können wir Ihr nicht mehr
                                benötigtes Mobiliar demontieren und fachgerecht entsorgen.
                                Wer das Möbelpuzzle also nicht als Spass empfindet, kann professionellen,
                                kostengünstigen Möbelmonteur Service bestellen.</p>
                            <div class="d-grid col-12 mt-5">
                                <a class="btn btn-danger" href="#link">Kontakt Uns</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="fifth-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 container">
                    <h2 class="fifth-title"><span> M</span>öbelmonteur?</h2>
                    <p class="fifth-text">Eine Umzugsservice und Möbelmonteur Firma , die durch Qualität überzeugt.</p>
                    <div class="fifth-box my-5">
                        <article class="fifth-item">
                            <img class="fifth-item__img" src="assets/img/1bar-chart-line-fill.svg" alt="">
                            <h3 class="fifth-item__title">Professionalität</h3>
                            <p class="fifth-item__description">Mit unserer langjährigen Erfahrung und einem erfahrenen
                                Team sind wir uns sicher, jede Aufgabe professionell zu lösen.</p>
                        </article>
                        <article class="fifth-item">
                            <img class="fifth-item__img" src="assets/img/2gear-fill.svg" alt="">
                            <h3 class="fifth-item__title">Rundumservice</h3>
                            <p class="fifth-item__description">Möbelmontage, Umzug, Ladenbau oder etwas anderes, wir
                                bieten einen kompletten service regional, national und europaweit</p>
                        </article>
                        <article class="fifth-item">
                            <img class="fifth-item__img" src="assets/img/3search.svg" alt="">
                            <h3 class="fifth-item__title">Qualität garantiert</h3>
                            <p class="fifth-item__description">Unsere beste Werbung sind unsere zufriedenen Kunden. Wir
                                tun unser Bestes, um unsere Arbeit bestmöglich zu erledigen, und das haben unsere Kunden
                                erkannt, und das können Sie anhand der Bewertungen, die sie uns hinterlassen haben,
                                sicher sein.</p>
                        </article>
                        <article class="fifth-item">
                            <img class="fifth-item__img" src="assets/img/4bullseye.svg" alt="">
                            <h3 class="fifth-item__title">Richtigkeit</h3>
                            <p class="fifth-item__description">Wir werden alles in unserer Macht Stehende tun, um die
                                Aufgaben schnellstmöglich und termingerecht abzuschließen. unsere Kunden haben dies
                                erkannt und empfehlen uns daher sehr gerne weiter</p>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="sixth-section pb-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 container">
                    <h2 class="sixth-title"><span>B</span>uchen Sie noch Heute eine von unsere Service.</h2>
                    <div class="sixth-box">
                        <article class="sixth-item">
                            <img class="sixth-item__img" src="assets/img/019a2feb00ea1eb31f3eb46facf686cce5.jpg" alt="">
                            <div class="sixth-item__inner">
                                <h3 class="sixth-item__title">Möbelmontage</h3>
                                <p class="sixth-item__text">Sie suchen jemanden der Ihre Möbel aufbaut, damit Sie Ihre
                                    Zeit sparen? Dann sind Sie bei uns richtig. Wir bieten fachgerechte Montage
                                    unbhängig vom Hersteller.</p>
                                <div class="d-grid col-12 mt-5">
                                    <a class="btn btn-danger" href="#link">Kontakt Uns</a>
                                </div>
                            </div>
                        </article>
                        <article class="sixth-item">
                            <img class="sixth-item__img" src="assets/img/020a59303358c0764fb01d502543db96af.jpg" alt="">
                            <div class="sixth-item__inner">
                                <h3 class="sixth-item__title">Küchenmontage</h3>
                                <p class="sixth-item__text">Durch unsere langjährige Erfahrung in den Bereichen
                                    Küchenmontage und Möbelmontage sowie den damit verbundenen Tischlerarbeiten,
                                    unterstützen wir Sie professionell bei der Planung und Durchführung.</p>
                                <div class="d-grid col-12 mt-5">
                                    <a class="btn btn-danger" href="#link">Kontakt Uns</a>
                                </div>
                            </div>
                        </article>
                        <article class="sixth-item">
                            <img class="sixth-item__img" src="assets/img/03.jpg" alt="">
                            <div class="sixth-item__inner">
                                <h3 class="sixth-item__title">Büroumzug</h3>
                                <p class="sixth-item__text">Mit einem Büro umzuziehen ist nicht einfach. Dabei gibt es
                                    viel Sachen, welche zu beachten sind. Wir können Ihnen dabei helfen. Profitieren Sie
                                    von unserer Erfahrung</p>
                                <div class="d-grid col-12 mt-5">
                                    <a class="btn btn-danger" href="#link">Kontakt Uns</a>
                                </div>
                            </div>
                        </article>
                        <article class="sixth-item">
                            <img class="sixth-item__img" src="assets/img/04cd90dc893c33a8da5e707b5777b39b26.jpeg"
                                alt="">
                            <div class="sixth-item__inner">
                                <h3 class="sixth-item__title">Büromöbelmontage</h3>
                                <p class="sixth-item__text">Haben Sie Büromöbel zum montieren? Kein Problem. Unser Team,
                                    bestehend aus Experten hilft Ihnen gerne dabei. Erfahren und zum fairen Preis,
                                    montieren wir Ihre Möbeln transparent und professionell.</p>
                                <div class="d-grid col-12 mt-5">
                                    <a class="btn btn-danger" href="#link">Kontakt Uns</a>
                                </div>
                            </div>
                        </article>
                        <article class="sixth-item">
                            <img class="sixth-item__img" src="assets/img/05.png" alt="">
                            <div class="sixth-item__inner">
                                <h3 class="sixth-item__title">Umzugsservice</h3>
                                <p class="sixth-item__text">Umzugsservice auf Spitzenniveau. Unser professionelles
                                    Montageteam besitzt für alle Wände das benötigte Befestigungsmaterial. Wir haften
                                    und garantieren auf alle Wandmontagen die wir durchführen.</p>
                                <div class="d-grid col-12 mt-5">
                                    <a class="btn btn-danger" href="#link">Kontakt Uns</a>
                                </div>
                            </div>
                        </article>
                        <article class="sixth-item">
                            <img class="sixth-item__img" src="assets/img/06Nicoll_Stewart_094-e1601997532451(1).jpg" alt="">
                            <div class="sixth-item__inner">
                                <h3 class="sixth-item__title">Wandmontage</h3>
                                <p class="sixth-item__text">Unser professionelles Montageteam besitzt für alle Wände das
                                    benötigte Befestigungsmaterial. Wir haften und garantieren auf alle Wandmontagen die
                                    wir durchführen.</p>
                                <div class="d-grid col-12 mt-5">
                                    <a class="btn btn-danger" href="#link">Kontakt Uns</a>
                                </div>
                            </div>
                        </article>
                        <article class="sixth-item">
                            <img class="sixth-item__img" src="assets/img/071-2-1024x768.jpg" alt="">
                            <div class="sixth-item__inner">
                                <h3 class="sixth-item__title">Ladenbau</h3>
                                <p class="sixth-item__text">Ladenbau ist eine sehr genaue sowie anspruchsvolle Arbeit,
                                    die Erfahrung und Geschicklichkeit voraussetzt. Wir bieten Ihnen hochwertige, genaue
                                    sowie zuverlässige Montagearbeiten für Ihr Ladenbauprojekt.</p>
                                <div class="d-grid col-12 mt-5">
                                    <a class="btn btn-danger" href="#link">Kontakt Uns</a>
                                </div>
                            </div>
                        </article>
                        <article class="sixth-item">
                            <img class="sixth-item__img" src="assets/img/088feec62fd7348a84478b2cdc5d4a0fb0.jpg" alt="">
                            <div class="sixth-item__inner">
                                <h3 class="sixth-item__title">Reparaturen</h3>
                                <p class="sixth-item__text">Unser Team besteht aus ausgebildetem Personal, welches
                                    jahrelang in diesem Bereich tätig ist. Kontaktieren Sie uns bezüglich der Reparatur
                                    und profitieren Sie von unserem Können. Unser Team hilft Ihnen gerne weiter.</p>
                                <div class="d-grid col-12 mt-5">
                                    <a class="btn btn-danger" href="#link">Kontakt Uns</a>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="seventh-section pb-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 container">
                    <h2 class="seventh-title"><span>R</span>EFERENZEN – DAS SAGEN UNSERE KUNDEN</h2>
                    <div class="seventh-box">
                        <article class="seventh-items">
                            <h3 class="seventh-items__title">Gudrun Martin</h3>
                            <div class="seventh-items__date">2022-03-07</div>
                            <img class="seventh-items__img" src="assets/img/chrome_91tWCoh1Up.png" alt="">
                            <p class="seventh-items__message">Ich hatte beim Otto einen 6 türigen Schrank bestellt...
                                Und danach erst die Monteure... welche von gebr. Weisz waren. Zu zweit... Und in einer
                                halben Stunde ist der Kasten aufgebaut gewesen. Danach das ganze verpackungsmaterial
                                zusammen geräumt und mitgenommen.
                                sehr freundlich und flott waren die zwei.
                                ich bin froh und begeistert....</p>
                        </article>
                        <article class="seventh-items">
                            <h3 class="seventh-items__title">David O.</h3>
                            <div class="seventh-items__date">2021-12-19</div>
                            <img class="seventh-items__img" src="assets/img/chrome_91tWCoh1Up.png" alt="">
                            <p class="seventh-items__message">Der Monteur hat in wenigen Stunden mehrere Aufgaben in
                                ausgezeichneter Qualität ausgeführt. Einen Schrank zusammengebaut, Lampen installiert,
                                TV-Wandhalter angebracht. Bin sehr zufrieden.</p>
                        </article>
                        <article class="seventh-items">
                            <h3 class="seventh-items__title">Pia Went</h3>
                            <div class="seventh-items__date">2021-11-09</div>
                            <img class="seventh-items__img" src="assets/img/chrome_91tWCoh1Up.png" alt="">
                            <p class="seventh-items__message">Nachdem mich eine andere Firma im Stich gelassen hatte,
                                sprang diese Firma am selben Tag ein und der Einbau des offenen Schranksystems wurde
                                perfekt erledigt.Verhältnis Preis-Leistung gut.</p>
                        </article>
                        <article class="seventh-items">
                            <h3 class="seventh-items__title">Johannes Thaler</h3>
                            <div class="seventh-items__date">2021-10-13</div>
                            <img class="seventh-items__img" src="assets/img/chrome_91tWCoh1Up.png" alt="">
                            <p class="seventh-items__message">Unglaublich was Haris so drauf hat. Er hat in kürzester
                                (Rekord) Zeit String-Regale zusammengebaut, einen riesigen Kasten zerlegt und gegenüber
                                wieder aufgestellt, Lampen montiert (alles Millimetergenau) und nicht viel dafür
                                verlangt. Kann ich nur jedem empfehlen! Fünf Sterne plus</p>
                        </article>
                        <article class="seventh-items">
                            <h3 class="seventh-items__title">johann 1946</h3>
                            <div class="seventh-items__date">2021-10-04</div>
                            <img class="seventh-items__img" src="assets/img/chrome_91tWCoh1Up.png" alt="">
                            <p class="seventh-items__message">Wohnungsumzug hat hervorragend geklappt. Es wurde sehr
                                professionell gearbeitet. Die Möbelpacker mussten das Inventar durch eine Wohnstraße
                                (200 m) transportieren und sperrige Teile in den 7. Stock tragen. Preis/Leistung stimmt
                                auf jeden Fall. Kann ich nur weiterempfehlen.</p>
                        </article>
                        <article class="seventh-items">
                            <h3 class="seventh-items__title">Barbara Sattler</h3>
                            <div class="seventh-items__date">2021-09-10</div>
                            <img class="seventh-items__img" src="assets/img/chrome_91tWCoh1Up.png" alt="">
                            <p class="seventh-items__message">Herr Elvis hat sich sämtlicher Spezial-Wünsche überaus
                                freundlich und geduldig angenommen und für alles eine perfekte Lösung gefunden.
                                Uneingeschränkte Empfehlung!</p>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="eight-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 container">
                    <div class="eight-box">
                        <div class="eight-forms">
                            <form id="jq_form" class="mt-5">
                                <h6 class="forms__h6 text-center forms-box__title"><span>H</span>ier haben Sie die
                                    Möglichkeit und Ihre Anfrage zu senden.</h6>
                                        <div class="my-3">
                                            <input class="form-control" placeholder="Vorname" name="jq_name"
                                                type="text">
                                            <div id="jq_name"
                                                style="font-weight:700;font-size:15px;color:red;padding-top:2px;display:none">
                                                Dies ist ein Pflichtfeld.</div>
                                        </div>
                                        <div class="my-4">
                                            <input class="form-control" placeholder="Telefon" name="jq_phone"
                                                type="text">
                                            <div id="jq_phone"
                                                style="font-weight:700;font-size:15px;color:red;padding-top:2px;display:none">
                                                Dies ist ein Pflichtfeld.</div>
                                        </div>
                                        <div class="my-4">
                                            <input class="form-control" placeholder="Straße" name="jq_street"
                                                type="text">
                                        </div>
                                        <div class="my-4">
                                            <input class="form-control" placeholder="PLZ / Ort" name="jq_city"
                                                type="text">
                                        </div>
                                        <div class="my-4">
                                            <input class="form-control" placeholder="E-Mail" name="jq_email"
                                                type="text">
                                        </div>
                                        <div class="my-4">
                                            <textarea rows="3" class="form-control" name="jq_text"
                                                placeholder="Nachricht"></textarea>
                                            <div id="jq_text"
                                                style="font-weight:700;font-size:15px;color:red;padding-top:2px;display:none">
                                                Dies ist ein Pflichtfeld.</div>
                                        </div>
                                        <div class="wer"><input
                                                class="btn success text-uppercase fw-bold mb-5 px-3 py-2 fourth-forms-button"
                                                type="submit" id="jq_submit" value="Senden"> </div>
                                        <div id="jq_success" style="display:none">Vielen Dank für deine Nachricht. Sie
                                            wurde gesendet.</div>
                                </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ninth-section py-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 container">
                    <h2 class="ninth-section__title"><span>V</span>ERTRAUEN BEI GROßEN UND KLEINEN UNTERNEHMEN</h2>
                    <div class="ninth-section__inner mt-5">
                        <img class="ninth-section__img" src="assets/img/001obb.jpg" alt="">
                        <img class="ninth-section__img" src="assets/img/002louis-poulse-1-logo.png" alt="">
                        <img class="ninth-section__img" src="assets/img/003dan-kuchen-1-logo.png" alt="">
                        <img class="ninth-section__img" src="assets/img/004marco-tozzi-1-logo-1.png" alt="">
                        <img class="ninth-section__img" src="assets/img/005peek-cloppenburg-1-logo.png" alt="">
                        <img class="ninth-section__img" src="assets/img/006rimadesio-1-logo.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">2022</div>
            </div>
        </div>
    </footer>
    <!--Style-->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
</body>

</html>