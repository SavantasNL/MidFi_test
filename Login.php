<!doctype HTML>
<html>
<head>
<title>Kiekn, spreek af om films of series te kijken</title>
<link rel="stylesheet" href="icomoon.css">
<link rel="stylesheet" href="styles.css">
</head>
<body>
<header>
		<?php include 'nav1.php';?>
</header>
<main>
    <div id="content">
        <fieldset id="login">
            <legend><h1>Login</h1></legend>
            <div>
                <label for="name">Naam</label>
                <input type="text" id="name" name="name" value="" placeholder="Vul je naam in" required="required" autofocus />
            </div>
            <div>
                <label for="password">Wachtwoord</label>
                <input type="password" id="password" name="password" value="" placeholder="********" required="required" />
            </div>
            <a class="sendfake" href="index1.php"><input type="submit" value="Log in" id="submit" /></a>
        </fieldset>
        <fieldset id="newuser">
            <legend><h1>Maak een account aan</h1></legend>
            <p>Heb je nog geen account voor Kiekn? Maak er hier meteen een aan!</p>
            <div>
                <label for="name1">Naam <span class="required">*</span> </label>
                <input type="text" id="name1" name="name1" value="" placeholder="Vul je naam in" required="required" />
            </div>
            <div>
                <label for="email">E-mail <span class="required">*</span> </label>
                <input type="email" id="email1" name="email1" value="" placeholder="jij@kiekn.nl" required="required" />
            </div>
            <a class="sendfake" href="newaccount.php"><input type="submit" value="Maak account aan" id="submit" /></a>
        </fieldset>

        <div id="disclaimer">
            <label for="disclaimer_open"><h2>Disclaimer <span class="small">Klik om te lezen</span></h2></label>
            <input type="checkbox" name="disclaimer_open" id="disclaimer_open" class="datumselect">
            <div>
                <p>Ondanks de constante zorg en aandacht die D-E-E BID DT Media besteedt aan de samenstelling van Kiekn en de site van Kiekn is het mogelijk dat de informatie die op de kiekn.nl wordt gepubliceerd onvolledig c.q. onjuist is. Fouten (in de gegevensverwerking) kunnen echter niet altijd voorkomen worden. We raden u altijd aan een (natuurgeneeskundig) arts te raadplegen als u gezondheidsklachten hebt. D-E-E BID DT Media aanvaardt geen aansprakelijkheid voor de inhoud van door derden aangeboden informatie.</p>
                <p>Beweringen en meningen, geuit in de artikelen en mededelingen op de pagina’s van deze site zijn die van de auteur(s) en niet (noodzakelijkerwijs) die van de redactie, de webmaster, de Internet-provider of Kiekn. D-E-E BID DT Media kan er niet voor instaan dat de informatie op kiekn.nl geschikt is voor het doel waarvoor de informatie door de bezoeker/ster wordt geraadpleegd. Alle informatie, producten en diensten worden aangeboden in een staat waarin deze zich feitelijk bevinden en zonder enige (impliciete) garantie of waarborg ten aanzien van hun deugdelijkheid, geschiktheid voor een bepaald doel of anderszins.</p>
                <p>D-E-E BID DT Media sluit alle aansprakelijkheid uit voor enigerlei directe of indirecte schade, van welke aard dan ook, die voortvloeit uit of in enig opzicht verband houdt met het gebruik van de Kiekn-site of informatie die door middel van deze site verkregen is of die het gevolg is van beweringen en meningen, geuit in artikelen en mededelingen op de pagina’s van kiekn.nl.</p>
                <p>D-E-E BID DT Media zal zich inspannen om de beschikbaarheid van de Kiekn-site zo groot mogelijk te doen zijn alsmede om eventuele storingen zo snel mogelijk te (doen) verhelpen. D-E-E BID DT Media is niet aansprakelijk voor directe of indirecte schade van welke aard dan ook, die voortvloeit uit of in enig opzicht verband houdt met storingen of met de onmogelijkheid de Kiekn-site te kunnen raadplegen.</p>
                <p>D-E-E BID DT Media behoudt zich het recht voor om de door derden aangeboden informatie te wijzigen en/of te verwijderen, indien de door derden aangeboden of reeds geplaatste informatie in strijd is met de wet, de belangen van overige internetgebruikers, andere derden of de algemene voorwaarden van D-E-E BID DT Media. Eventuele wijzigingen kunnen met onmiddellijke ingang en zonder enige kennisgeving worden aangebracht.</p>
                <h2>Klikgedrag</h2>
                <p>Op de website van Kiekn worden algemene bezoekgegevens, zonder dat deze bezoekers identificeren, bijgehouden, zoals de meest gevraagde pagina’s. Het doel hiervan is om de inrichting van de website te optimaliseren. Ook kunnen deze gegevens worden gebruikt om meer gerichte informatie op de site te zetten. Op deze wijze kan D-E-E BID DT Media haar dienstverlening aan u verder optimaliseren.
                Gebruik van Cookies
                D-E-E BID DT Media maakt bij het aanbieden van haar diensten gebruik van cookies. Dit is een eenvoudig klein bestandje met gegevens dat op de harde schijf van uw computer wordt opgeslagen. D-E-E BID DT Media maakt gebruik van tijdelijke cookies. Deze cookies bevatten geen persoonsgegevens en worden uitsluitend gebruikt om het gebruik van de Kiekn-site voor u gemakkelijker te maken.
                Daarnaast maakt kiekn.nl gebruik van een speciale cookie. Aan de hand van dit cookie kan onze website u herkennen, de volgende keer dat u op de site langskomt. Met behulp van dit cookie kan de site speciaal op u worden ingesteld; een hulpmiddel om het gebruik van de site voor u nog aangenamer te maken. Als u in uw browser het gebruik van cookies heeft uitgezet kunt u nog steeds de meeste onderdelen van de website bezoeken.
                Kiekn.nl en andere websites
                Op kiekn.nl treft u een aantal hyperlinks aan naar andere websites. D-E-E BID DT Media kan echter geen verantwoordelijkheid dragen met betrekking tot de omgang door die partijen met uw gegevens. Lees hiervoor het privacy statement, indien aanwezig, van de site die u bezoekt. D-E-E BID DT Media verstrekt uw persoonsgevens niet aan de verantwoordelijken voor de websites waarnaar de hyperlinks leiden.</p>
                <h2>Auteursrecht</h2>
                <p>Bezoekers kunnen materiaal (zoals meningen of artikelen) inzenden voor publicatie op de website van Kiekn, kiekn.nl. D-E-E BID DT Media behoudt het recht -tenzij anders overeen gekomen met de auteur- ingezonden materiaal in te korten, aan te passen dan wel niet te plaatsen. D-E-E BID DT Media behoudt zich tevens het recht voor – tenzij anders is overeengekomen met de auteur – materiaal te verwijderen. Dit geldt zowel voor tekst als beeldmateriaal.</p>
                <p>Bezoekers dienen ervoor in te staan dat door het publiceren van door hen ingezonden materiaal op de Kiekn-site geen rechten van derden, zoals auteursrechten, worden geschonden, en niet anderszins onrechtmatig jegens derden wordt gehandeld. Bezoekers zijn zelf aansprakelijk voor een schending van rechten van derden en/of onrechtmatig handelen jegens derden.</p>
                <p>D-E-E BID DT Media heeft het recht door derden ingezonden materiaal vrij van rechten te gebruiken in uitgaven van D-E-E BID DT Media en/of uitgaven die D-E-E BID DT Media in opdracht verzorgt.</p>
                <p>Een bezoeker/ster van kiekn.nl mag geen auteursrechtelijke beschermde werken of andere in de Kiekn-site opgeslagen informatie openbaar maken of verveelvoudigen zonder toestemming van D-E-E BID DT Media (ook niet via een eigen netwerk).</p>
            </div>
        </div>
    </div>
    <aside>
        <div id="uitleg">
            <h2>Voordelen</h2>
            <p>Als abonnee van onze site krijg je de volgende extra mogelijkheden:</p>
            <ul>
                <li>Eigen beoordelingen en recensies van films</li>
                <li>Eigen wishlist van films of series die je nog wil zien</li>
                <li>Nieuwsbrief met nieuws van films en series waarin jij ge&iuml;nteresseerd bent</li>
                <li>Samen Kiekn, regel gemakkelijk een filmdate met vrienden</li>
                <li>Inzicht in films die je vrienden al gezien hebben, of nog willen zien</li>
                <li>en nog veel meer...</li>
            </ul>
        </div>
    </aside>
</main>
		<?php include 'footer.php';?>
</body>
</html>