<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name='viewport' content='width=320,initial-scale=1,user-scalable=0'>
        <link href="reset.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        <style>
            body {
                font-size: 100%;
                line-height: 1.4em;
                background-color: #112D5C;
                color: #FFFFFF;
                font-family: "Open Sans";
            }
            .nederland-schoon-banner {
                background-color: #ADEA33;
                padding: 30px;
                text-align: center;
            }
            header {
                text-align: center;
                margin-top: 80px;
            }
            h1 {
                font-size: 2em;
                line-height: 1em;
                font-weight: 900;
                margin: 40px 0;
            }
            h2 {
                font-size: 1.4em;
                font-weight: 700;
                margin-top: 20px;
                color: #ADEA33;
            }
            main {
                max-width: 800px;
                margin: auto;
            }
            section {
                margin: 10px;
            }
            p {
                margin-top: 10px;
            }
            .bestellen {
                display: block;
                padding: 0 40px;
                background: #ADEA33;
                border: 0;
                border-radius: 10px;
                font-size: 2em;
                color: #112D5C;
                height: 3em;
                text-decoration: none;
                line-height: 3em;
                text-align: center;
                margin: 20px auto;
            }
        </style>
        <style>
            @media screen and (max-width: 480px) {
                /*void*/
            }
        </style>
    </head>
    <body>
        <div class="nederland-schoon-banner">
            <?php include('logo-schoon.html'); ?>
        </div>
        <header>
            <?php include('logo-bak.html'); ?>
            <?php include('logo-basis.html'); ?>
            <?php include('logo-soap.html'); ?>
            <h1>Samen houden we<br><span style="color: #ADEA33">Amsterdam</span> schoon</h1>
        </header>
        <main>
            <section>
                <p>Het is druk in Amsterdam. Het toegenomen toerisme zorgt voor meer vuilnis in de straten. Vooral op plaatsen waar op straat wordt gegeten en gedronken. In die straten is er extra inspanning nodig om het schoon te houden. En dat gaan we dus doen!</p>
                <p>De Gemeente Amsterdam wil dat iedereen zijn verantwoordelijkheid neemt: gemeente, bewoners, bezoekers en ondernemers. Wij denken dat goed voorbeeld doet volgen. Daarom zetten wij de eerste stap. En we vragen u als Amsterdamse ondernemer om ons daarbij te helpen.</p>
            </section>
            <section>
                <h1>Dit gaan wij doen</h1>
                <h2>Zwerfvuil oprapen</h2>
                <p>Vuilnis gooi je gewoon in de vuilnisbak. Toch gebeurt dit niet altijd. Om dit te laten zien, beginnen wij met het oprapen van zwerfvuil en gooien we dit in de vuilnisbak.</p>
                <h2>Zakken verwisselen</h2>
                <p>De ondernemersbakken...</p>
                <p>Volle vuilnisbakken zijn geen porem. Maar soms heeft u het als ondernemer even druk. Dat begrijpen we. Daarom verwisselen wij de zak voor u.</p>
                <h2>Mensen aanspreken</h2>
                <p>Af en toe is het goede voorbeeld geven niet genoeg. Of maakt iemand het wel erg bont. In die gevallen spreken wij die persoon aan op zijn gedrag.</p>
                <h2>Kosten in kaart brengen</h2>
                <p>Amsterdammers betalen voor het schoonhouden van de straten. In gebieden met veel consumerende bezoekers is het normale proces onvoldoende. Daar moet wat extra's gebeuren.</p>
                <p>De kosten die daarmee samenhangen, gaan we duidelijk in beeld brengen. Dat maakt discussies daarover mogelijk.</p>
            </section>
            <section>
                <h1>Dit vragen we van u</h1>
                <h2>Een schone stoep</h2>
                <p>Een schone straat begint met een schone stoep. Wij vragen u daarom uw stoep ook zelf netjes te houden.</p>
                <h2>Een vuilnisbak plaatsen</h2>
                <p>Hoe meer bakken op straat, hoe minder zwerfvuil. Wij leveren u graag een bak. Doet u de bak, dan doen wij de zak.</p>
                <p>
                    <a class="bestellen" href="bestellen.php">BAK BESTELLEN</a>
                </p>
                <h2>Mensen aanspreken</h2>
                <p>Een vriendelijk verzoek werkt vaak beter dan geboden en verboden. Wij vragen u om uw klanten te wijzen op de vuilnisbakken.</p>
                <h2>Vuilnis melden</h2>
                <p>Een volle bak of een berg zakken? Laat het ons direct weten.</p>
            </section>
            <?php include('meerinfo.html'); ?>
        </main>
        <?php /* include('logo-schoon.html'); */ ?>
    </body>
</html>