<?php
include("traitement_inscription.php");
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inscription</title>
</head>
<body>
    <h1>Inscription</h1>
    <pre><?php //print_r($erreurs); ?></pre>
    <?php if(!empty($erreurs)): ?>
    <div style="border:1px solid red;">
    <ul>
        <?php foreach ($erreurs as $key => $value): ?>
        <?php if(is_array($value)): ?>
            <li><?= $key ?></li>
            <ul>
            <?php foreach ($value as $err): ?>
                <li><?= $err ?></li>
            <?php endforeach ?>
            </ul>
        <?php  else: ?>
            <li><?= "$key : $value" ?></li>
        <?php endif ?>
        <?php endforeach ?>
    </ul>
    </div>
    <?php endif ?>
    <!-- faire ensemble la vérification des erreurs sauf file -->
    <!-- afficher la liste des erreurs (et sous-erreurs...) ou ok -->

    <!-- intégrer le code de traitement dans inscription.php -->
    <!-- mettre la liste des erreurs dans une div spéciale -->
    <!-- include et require -->
    <!-- mettre les erreurs en regard des champs du formulaire -->

    <!-- mettres les pages dans un répertoire pages/ -->
    <!-- faire faire login sur le même modèle -->

    <form action="inscription.php" method="POST">

    <label for="civilite">Civilité</label>
    <select name="civilite" id="civilite">
        <option default></option>
        <option value="M">M.</option>
        <option value="Mme">Mme</option>
    </select>
    <br>
    <label for="nom">Nom</label>
    <input type="text" name="nom" id="nom">
    <br>
    <label for="prenom">Prénom</label>
    <input type="text" name="prenom" id="prenom">

    <label for="adresse">Adresse</label>
    <input type="text" name="adresse" id="adresse">

    <label for="cp">Code postal</label>
    <input type="text" name="cp" id="cp">

    <label for="ville">Ville</label>
    <input type="text" name="ville" id="ville">

    <label for="naissance">Date de naissance</label>
    <input type="date" name="naissance" id="naissance">

    <label for="age">age</label>
    <input type="number" name="age" id="age" min="18">

    <input type="radio" id="masculin" name="sexe" value="masculin">
    <label for="masculin">Masculin</label>

    <input type="radio" id="feminin" name="sexe" value="feminin">
    <label for="feminin">Féminin</label>

    <label for="infos">Informations</label>
    <textarea name="infos" id="infos" cols="30" rows="10"></textarea>

    <label for="newsletter">Informations</label>
    <input type="checkbox" name="newsletter" id="newsletter">

    <label for="email">Email</label>
    <input type="text" name="email" id="email">

    <label for="pseudo">Pseudo</label>
    <input type="text" name="pseudo" id="pseudo">

    <label for="password">Mot de passe</label>
    <input type="password" name="password" id="password">

    <label for="confirmation">Confirmation du mot de passe</label>
    <input type="password" name="confirmation" id="confirmation">

    <label for="photo">Photo</label>
    <input type="file" name="photo" id="photo">

    <label for="tel">Téléphone</label>
    <input type="tel" name="tel" id="tel">

    <label for="mob">Mobile</label>
    <input type="tel" name="mob" id="mob">

    <label for="categories">Categories</label>
    <select name="categories" id="categories" multiple>
        <option value="A cappella">A cappella</option>
        <option value="Acid blues">Acid blues</option>
        <option value="Acid breaks">Acid breaks</option>
        <option value="Acid house">Acid house</option>
        <option value="Acid jazz">Acid jazz</option>
        <option value="Acid rock">Acid rock</option>
        <option value="Acid techno">Acid techno</option>
        <option value="Acid trance">Acid trance</option>
        <option value="Acidcore">Acidcore</option>
        <option value="Adult contemporary">Adult contemporary</option>
        <option value="Afrobeat">Afrobeat</option>
        <option value="Afropop">Afropop</option>
        <option value="Afrotrap">Afrotrap</option>
        <option value="Allaoui">Allaoui</option>
        <option value="Ambient">Ambient</option>
        <option value="Ambient house">Ambient house</option>
        <option value="Ambient jungle">Ambient jungle</option>
        <option value="Ambient techno">Ambient techno</option>
        <option value="Americana">Americana</option>
        <option value="Anarcho-punk">Anarcho-punk</option>
        <option value="Anti-folk">Anti-folk</option>
        <option value="Arena rock">Arena rock</option>
        <option value="Art punk">Art punk</option>
        <option value="Art rock">Art rock</option>
        <option value="Austropop">Austropop</option>
        <option value="Avant-garde jazz">Avant-garde jazz</option>
        <option value="Avanthop">Avanthop</option>
        <option value="Axé">Axé</option>
        <option value="Bachata">Bachata</option>
        <option value="Bachatango">Bachatango</option>
        <option value="Baggy">Baggy</option>
        <option value="Baile funk">Baile funk</option>
        <option value="Bakersfield sound">Bakersfield sound</option>
        <option value="Balearic beat">Balearic beat</option>
        <option value="Balearic trance">Balearic trance</option>
        <option value="Ballade">Ballade</option>
        <option value="Ballet">Ballet</option>
        <option value="Baltimore club">Baltimore club</option>
        <option value="Bass music">Bass music</option>
        <option value="Bassline">Bassline</option>
        <option value="Bay Area thrash metal">Bay Area thrash metal</option>
        <option value="Beat">Beat</option>
        <option value="Bebop">Bebop</option>
        <option value="Berceuse">Berceuse</option>
        <option value="Big band">Big band</option>
        <option value="Big beat">Big beat</option>
        <option value="Big room house">Big room house</option>
        <option value="Biguine">Biguine</option>
        <option value="Black metal">Black metal</option>
        <option value="Black metal norvégien">Black metal norvégien</option>
        <option value="Black metal symphonique">Black metal symphonique</option>
        <option value="Bluegrass">Bluegrass</option>
        <option value="Blues">Blues</option>
        <option value="Blues africain">Blues africain</option>
        <option value="Blues électrique">Blues électrique</option>
        <option value="Blues rock">Blues rock</option>
        <option value="Blues touareg">Blues touareg</option>
        <option value="Blues traditionnel">Blues traditionnel</option>
        <option value="Boléro">Boléro</option>
        <option value="Boogaloo">Boogaloo</option>
        <option value="Boogie-woogie">Boogie-woogie</option>
        <option value="Bossa nova">Bossa nova</option>
        <option value="Bounce music">Bounce music</option>
        <option value="Brass band">Brass band</option>
        <option value="Breakbeat">Breakbeat</option>
        <option value="Breakbeat hardcore">Breakbeat hardcore</option>
        <option value="Breakcore">Breakcore</option>
        <option value="Britpop">Britpop</option>
        <option value="Broken beat">Broken beat</option>
        <option value="Brutal death metal">Brutal death metal</option>
        <option value="Bubblegum pop">Bubblegum pop</option>
        <option value="Bubblegum dance">Bubblegum dance</option>
        <option value="C86">C86</option>
        <option value="C-pop">C-pop</option>
        <option value="Calypso">Calypso</option>
        <option value="Cantopop">Cantopop</option>
        <option value="Cello rock">Cello rock</option>
        <option value="Cha-cha-cha">Cha-cha-cha</option>
        <option value="Chaâbi algérien">Chaâbi algérien</option>
        <option value="Chaâbi marocain">Chaâbi marocain</option>
        <option value="Changüí">Changüí</option>
        <option value="Chanson française">Chanson française</option>
        <option value="Chant grégorien">Chant grégorien</option>
        <option value="Chicago blues">Chicago blues</option>
        <option value="Chicago house">Chicago house</option>
        <option value="Chill-out">Chill-out</option>
        <option value="Chillstep">Chillstep</option>
        <option value="Chillwave">Chillwave</option>
        <option value="Chiptune (ou musique 8-bit)">Chiptune (ou musique 8-bit)</option>
        <option value="Classic rag">Classic rag</option>
        <option value="Cloud rap">Cloud rap</option>
        <option value="Cold wave">Cold wave</option>
        <option value="College rock">College rock</option>
        <option value="Complextro">Complextro</option>
        <option value="Concerto">Concerto</option>
        <option value="Contradanza">Contradanza</option>
        <option value="Cool jazz">Cool jazz</option>
        <option value="Country">Country</option>
        <option value="Country alternative">Country alternative</option>
        <option value="Country folk">Country folk</option>
        <option value="Country néo traditionnelle">Country néo traditionnelle</option>
        <option value="Country pop">Country pop</option>
        <option value="Country rap">Country rap</option>
        <option value="Country rock">Country rock</option>
        <option value="Country soul">Country soul</option>
        <option value="Coupé-décalé">Coupé-décalé</option>
        <option value="Cowpunk">Cowpunk</option>
        <option value="Crossover">Crossover</option>
        <option value="Crossover thrash">Crossover thrash</option>
        <option value="Crunk">Crunk</option>
        <option value="Crunk'n'b">Crunk'n'b</option>
        <option value="Crunkcore">Crunkcore</option>
        <option value="Crust punk">Crust punk</option>
        <option value="Cumbia">Cumbia</option>
        <option value="D-beat">D-beat</option>
        <option value="Dance (ou EDM)">Dance (ou EDM)</option>
        <option value="Dance-pop">Dance-pop</option>
        <option value="Dance-punk">Dance-punk</option>
        <option value="Dance-rock">Dance-rock</option>
        <option value="Dancehall">Dancehall</option>
        <option value="Dangdut">Dangdut</option>
        <option value="Danzón">Danzón</option>
        <option value="Dark ambient">Dark ambient</option>
        <option value="Dark metal">Dark metal</option>
        <option value="Dark psytrance">Dark psytrance</option>
        <option value="Dark wave">Dark wave</option>
        <option value="Dark wave néo-classique">Dark wave néo-classique</option>
        <option value="Darkcore (ou darkside)">Darkcore (ou darkside)</option>
        <option value="Darkcore (ou doomcore)">Darkcore (ou doomcore)</option>
        <option value="Darkstep">Darkstep</option>
        <option value="Death-doom">Death-doom</option>
        <option value="Death metal">Death metal</option>
        <option value="Death metal mélodique">Death metal mélodique</option>
        <option value="Death metal technique">Death metal technique</option>
        <option value="Death 'n' roll">Death 'n' roll</option>
        <option value="Death rock">Death rock</option>
        <option value="Deathcore">Deathcore</option>
        <option value="Deathcountry">Deathcountry</option>
        <option value="Deathgrind">Deathgrind</option>
        <option value="Deep house">Deep house</option>
        <option value="Deepkho">Deepkho</option>
        <option value="Delta blues">Delta blues</option>
        <option value="Detroit blues">Detroit blues</option>
        <option value="Digital hardcore">Digital hardcore</option>
        <option value="Dirty South">Dirty South</option>
        <option value="Disco">Disco</option>
        <option value="Disco house">Disco house</option>
        <option value="Disco polo">Disco polo</option>
        <option value="Diva house">Diva house</option>
        <option value="Dixieland">Dixieland</option>
        <option value="Djent">Djent</option>
        <option value="Doo-wop">Doo-wop</option>
        <option value="Doom metal">Doom metal</option>
        <option value="Downtempo">Downtempo</option>
        <option value="Dream pop">Dream pop</option>
        <option value="Dream trance">Dream trance</option>
        <option value="Drill">Drill</option>
        <option value="Drill and bass">Drill and bass</option>
        <option value="Drone">Drone</option>
        <option value="Drum and bass">Drum and bass</option>
        <option value="Drumfunk">Drumfunk</option>
        <option value="Drumstep">Drumstep</option>
        <option value="Dub">Dub</option>
        <option value="Dub poetry">Dub poetry</option>
        <option value="Dub techno">Dub techno</option>
        <option value="Dubstep">Dubstep</option>
        <option value="Dubstyle">Dubstyle</option>
        <option value="Dunedin sound">Dunedin sound</option>
        <option value="Dutch house">Dutch house</option>
        <option value="Early hardcore">Early hardcore</option>
        <option value="Easycore">Easycore</option>
        <option value="Electro">Electro</option>
        <option value="Electro house">Electro house</option>
        <option value="Electro swing">Electro swing</option>
        <option value="Electroclash">Electroclash</option>
        <option value="Electronic body music (EBM)">Electronic body music (EBM)</option>
        <option value="Electronica">Electronica</option>
        <option value="Electronicore">Electronicore</option>
        <option value="Emo">Emo</option>
        <option value="Emo pop">Emo pop</option>
        <option value="Éthio-jazz">Éthio-jazz</option>
        <option value="Ethno-jazz">Ethno-jazz</option>
        <option value="Euro disco">Euro disco</option>
        <option value="Eurobeat">Eurobeat</option>
        <option value="Eurodance">Eurodance</option>
        <option value="Europop">Europop</option>
        <option value="Extratone">Extratone</option>
        <option value="Fado">Fado</option>
        <option value="Fanfare">Fanfare</option>
        <option value="Fidget house">Fidget house</option>
        <option value="Filin">Filin</option>
        <option value="Flamenco">Flamenco</option>
        <option value="Folk">Folk</option>
        <option value="Folk metal">Folk metal</option>
        <option value="Folk progressif">Folk progressif</option>
        <option value="Folk psychédélique">Folk psychédélique</option>
        <option value="Folk rock">Folk rock</option>
        <option value="Freakbeat">Freakbeat</option>
        <option value="Free jazz">Free jazz</option>
        <option value="Freeform hardcore">Freeform hardcore</option>
        <option value="Freestyle">Freestyle</option>
        <option value="French touch">French touch</option>
        <option value="Frenchcore">Frenchcore</option>
        <option value="Fun-punk">Fun-punk</option>
        <option value="Funk">Funk</option>
        <option value="Funk rock">Funk rock</option>
        <option value="Funk metal">Funk metal</option>
        <option value="Funktronica">Funktronica</option>
        <option value="Funky house">Funky house</option>
        <option value="Future garage">Future garage</option>
        <option value="Future house">Future house</option>
        <option value="G-funk">G-funk</option>
        <option value="Gabber">Gabber</option>
        <option value="Gaelic punk">Gaelic punk</option>
        <option value="Gangsta rap">Gangsta rap</option>
        <option value="Garage house">Garage house</option>
        <option value="Garage punk">Garage punk</option>
        <option value="Garage rock">Garage rock</option>
        <option value="Geek rock">Geek rock</option>
        <option value="Ghetto house">Ghetto house</option>
        <option value="Ghettotech">Ghettotech</option>
        <option value="Glam metal">Glam metal</option>
        <option value="Glam punk">Glam punk</option>
        <option value="Glam rock">Glam rock</option>
        <option value="Glitch">Glitch</option>
        <option value="Glitch-hop">Glitch-hop</option>
        <option value="Goregrind">Goregrind</option>
        <option value="Gospel">Gospel</option>
        <option value="Gospel blues">Gospel blues</option>
        <option value="Gothabilly">Gothabilly</option>
        <option value="Grebo">Grebo</option>
        <option value="Grime">Grime</option>
        <option value="Grindcore">Grindcore</option>
        <option value="Grindie">Grindie</option>
        <option value="Groove metal">Groove metal</option>
        <option value="Grunge">Grunge</option>
        <option value="Guajira">Guajira</option>
        <option value="Guaracha">Guaracha</option>
        <option value="Gypsy punk">Gypsy punk</option>
        <option value="Handsup">Handsup</option>
        <option value="Happy gabber">Happy gabber</option>
        <option value="Happy hardcore">Happy hardcore</option>
        <option value="Hard bop">Hard bop</option>
        <option value="Hard house">Hard house</option>
        <option value="Hard rock">Hard rock</option>
        <option value="Hard trance">Hard trance</option>
        <option value="Hardbag">Hardbag</option>
        <option value="Hardcore chrétien">Hardcore chrétien</option>
        <option value="Hardcore mélodique">Hardcore mélodique</option>
        <option value="Hardstep">Hardstep</option>
        <option value="Hardstyle">Hardstyle</option>
        <option value="Hardtechno">Hardtechno</option>
        <option value="Heartland rock">Heartland rock</option>
        <option value="Heavy metal">Heavy metal</option>
        <option value="Heavy metal traditionnel">Heavy metal traditionnel</option>
        <option value="Hi-NRG">Hi-NRG</option>
        <option value="Hip-hop">Hip-hop</option>
        <option value="Hip-hop alternatif">Hip-hop alternatif</option>
        <option value="Hip-hop chrétien">Hip-hop chrétien</option>
        <option value="Hip-hop expérimental">Hip-hop expérimental</option>
        <option value="Hip-hop old-school">Hip-hop old-school</option>
        <option value="Hip-hop orchestral">Hip-hop orchestral</option>
        <option value="Hip-hop psychédélique">Hip-hop psychédélique</option>
        <option value="Hip-hop sud-coréen">Hip-hop sud-coréen</option>
        <option value="Hip-house">Hip-house</option>
        <option value="Hiplife">Hiplife</option>
        <option value="Hipster-hop">Hipster-hop</option>
        <option value="Honky tonk">Honky tonk</option>
        <option value="Horror punk">Horror punk</option>
        <option value="Horrorcore">Horrorcore</option>
        <option value="House">House</option>
        <option value="House progressive">House progressive</option>
        <option value="Illbient">Illbient</option>
        <option value="Indie dance">Indie dance</option>
        <option value="Indie folk">Indie folk</option>
        <option value="Indie pop">Indie pop</option>
        <option value="Industrial hardcore">Industrial hardcore</option>
        <option value="Intelligent dance music (IDM)">Intelligent dance music (IDM)</option>
        <option value="Italo dance">Italo dance</option>
        <option value="Italo disco">Italo disco</option>
        <option value="Italo house">Italo house</option>
        <option value=""></option>
        <option value="J-core">J-core</option>
        <option value="J-pop">J-pop</option>
        <option value="J-rock">J-rock</option>
        <option value="Jangle pop">Jangle pop</option>
        <option value="Jazz">Jazz</option>
        <option value="Jazz afro-cubain">Jazz afro-cubain</option>
        <option value="Jazz blues">Jazz blues</option>
        <option value="Jazz-funk">Jazz-funk</option>
        <option value="Jazz fusion (ou jazz-rock)">Jazz fusion (ou jazz-rock)</option>
        <option value="Jazz manouche">Jazz manouche</option>
        <option value="Jazz modal">Jazz modal</option>
        <option value="Jazz Nouvelle-Orléans">Jazz Nouvelle-Orléans</option>
        <option value="Jazz punk">Jazz punk</option>
        <option value="Jazz rap">Jazz rap</option>
        <option value="Jazz vocal">Jazz vocal</option>
        <option value="Jazz West Coast">Jazz West Coast</option>
        <option value="Jazzstep">Jazzstep</option>
        <option value="Jump blues">Jump blues</option>
        <option value="Jump-up">Jump-up</option>
        <option value="Jumpstyle">Jumpstyle</option>
        <option value="Jungle">Jungle</option>
        <option value="K-pop">K-pop</option>
        <option value="Kaneka">Kaneka</option>
        <option value="Kansas City blues">Kansas City blues</option>
        <option value="Kawaii metal">Kawaii metal</option>
        <option value="Kizomba">Kizomba</option>
        <option value="Klezmer">Klezmer</option>
        <option value="Kompa">Kompa</option>
        <option value="Krautrock">Krautrock</option>
        <option value="Kuduro">Kuduro</option>
        <option value="Kwaito">Kwaito</option>
        <option value="Latin house">Latin house</option>
        <option value="Latin jazz">Latin jazz</option>
        <option value="Latin metal">Latin metal</option>
        <option value="Lento violento">Lento violento</option>
        <option value="Liquid funk">Liquid funk</option>
        <option value="Livetronica">Livetronica</option>
        <option value="Lo-fi">Lo-fi</option>
        <option value="Logobi">Logobi</option>
        <option value="Louisiana blues">Louisiana blues</option>
        <option value="Lounge">Lounge</option>
        <option value="Luk thung">Luk thung</option>
        <option value="Madchester">Madchester</option>
        <option value="Mainstream">Mainstream</option>
        <option value="Mainstream hardcore">Mainstream hardcore</option>
        <option value="Makina">Makina</option>
        <option value="Maloya">Maloya</option>
        <option value="Mambo">Mambo</option>
        <option value="Mandopop">Mandopop</option>
        <option value="Mangue beat">Mangue beat</option>
        <option value="Marche">Marche</option>
        <option value="Mashup">Mashup</option>
        <option value="Math rock">Math rock</option>
        <option value="Mathcore">Mathcore</option>
        <option value="Mbalax">Mbalax</option>
        <option value="Medieval rock">Medieval rock</option>
        <option value="Memphis blues">Memphis blues</option>
        <option value="Merengue">Merengue</option>
        <option value="Merenhouse">Merenhouse</option>
        <option value="Metal alternatif">Metal alternatif</option>
        <option value="Metal avant-gardiste">Metal avant-gardiste</option>
        <option value="Metal celtique">Metal celtique</option>
        <option value="Metal chrétien">Metal chrétien</option>
        <option value="Metal extrême">Metal extrême</option>
        <option value="Metal gothique">Metal gothique</option>
        <option value="Metal industriel">Metal industriel</option>
        <option value="Metal néo-classique">Metal néo-classique</option>
        <option value="Metal oriental">Metal oriental</option>
        <option value="Metal progressif">Metal progressif</option>
        <option value="Metal symphonique">Metal symphonique</option>
        <option value="Metalcore">Metalcore</option>
        <option value="Metalcore mélodique">Metalcore mélodique</option>
        <option value="Miami bass">Miami bass</option>
        <option value="Microhouse">Microhouse</option>
        <option value="Midwest rap">Midwest rap</option>
        <option value="Milonga">Milonga</option>
        <option value="Minneapolis Sound">Minneapolis Sound</option>
        <option value="Moombahcore">Moombahcore</option>
        <option value="Moombahton">Moombahton</option>
        <option value="Mozambique">Mozambique</option>
        <option value="Murga">Murga</option>
        <option value="Musette">Musette</option>
        <option value="Música popular brasileira (MPB)">Música popular brasileira (MPB)</option>
        <option value="Musique acoustique">Musique acoustique</option>
        <option value="Musique aléatoire">Musique aléatoire</option>
        <option value="Musique alternative">Musique alternative</option>
        <option value="Musique arabo-andalouse">Musique arabo-andalouse</option>
        <option value="Musique bretonne">Musique bretonne</option>
        <option value="Musique bruitiste (ou noise music)">Musique bruitiste (ou noise music)</option>
        <option value="Musique cadienne (ou musique Cajun)">Musique cadienne (ou musique Cajun)</option>
        <option value="Musique celtique">Musique celtique</option>
        <option value="Musique chrétienne contemporaine (ou CCM)">Musique chrétienne contemporaine (ou CCM)</option>
        <option value="Musique classique">Musique classique</option>
        <option value="Musique concrète">Musique concrète</option>
        <option value="Musique cubaine">Musique cubaine</option>
        <option value="Musique de jeu vidéo">Musique de jeu vidéo</option>
        <option value="Musique de variétés">Musique de variétés</option>
        <option value="Musiques du monde">Musiques du monde</option>
        <option value="Musique électroacoustique">Musique électroacoustique</option>
        <option value="Musique électronique">Musique électronique</option>
        <option value="Musique émergente">Musique émergente</option>
        <option value="Musique expérimentale">Musique expérimentale</option>
        <option value="Musique gothique">Musique gothique</option>
        <option value="Musique industrielle">Musique industrielle</option>
        <option value="Musique instrumentale">Musique instrumentale</option>
        <option value="Musique irlandaise">Musique irlandaise</option>
        <option value="Musique latine">Musique latine</option>
        <option value="Musique minimaliste">Musique minimaliste</option>
        <option value="Musique post-industrielle">Musique post-industrielle</option>
        <option value="Musique progressive">Musique progressive</option>
        <option value="Musique romantique">Musique romantique</option>
        <option value="Musique spectrale">Musique spectrale</option>
        <option value="Nardcore">Nardcore</option>
        <option value="Nashville sound">Nashville sound</option>
        <option value="National socialist black metal (NSBM)">National socialist black metal (NSBM)</option>
        <option value="Nazi punk">Nazi punk</option>
        <option value="Nederpop">Nederpop</option>
        <option value="Negro spiritual">Negro spiritual</option>
        <option value="Néo-bop">Néo-bop</option>
        <option value="Néo-classicisme">Néo-classicisme</option>
        <option value="Neo-psychedelia">Neo-psychedelia</option>
        <option value="Neo soul">Neo soul</option>
        <option value="Néo-trad">Néo-trad</option>
        <option value="Néofolk">Néofolk</option>
        <option value="Nerdcore">Nerdcore</option>
        <option value="Neue Deutsche Härte">Neue Deutsche Härte</option>
        <option value="Neue Deutsche Welle">Neue Deutsche Welle</option>
        <option value="Neurofunk">Neurofunk</option>
        <option value="New age">New age</option>
        <option value="New beat">New beat</option>
        <option value="New jack swing">New jack swing</option>
        <option value="New prog">New prog</option>
        <option value="New wave">New wave</option>
        <option value="New wave of American heavy metal (NWOAHM)">New wave of American heavy metal (NWOAHM)</option>
        <option value="New wave of British heavy metal (NWOBHM)">New wave of British heavy metal (NWOBHM)</option>
        <option value="New York blues">New York blues</option>
        <option value="New York hardcore">New York hardcore</option>
        <option value="Nightcore">Nightcore</option>
        <option value="Nintendocore">Nintendocore</option>
        <option value="Nocturne">Nocturne</option>
        <option value="No wave">No wave</option>
        <option value="Noise pop">Noise pop</option>
        <option value="Noise rock">Noise rock</option>
        <option value="Northern soul">Northern soul</option>
        <option value="Nu-disco">Nu-disco</option>
        <option value="Nu-NRG">Nu-NRG</option>
        <option value="Nu jazz">Nu jazz</option>
        <option value="Nu metal">Nu metal</option>
        <option value="Nueva trova">Nueva trova</option>
        <option value="Oi!">Oi!</option>
        <option value="Old-time">Old-time</option>
        <option value="Opéra">Opéra</option>
        <option value="Opéra-rock">Opéra-rock</option>
        <option value="Oratorio">Oratorio</option>
        <option value="Outlaw country">Outlaw country</option>
        <option value="Pachanga">Pachanga</option>
        <option value="Paisley Underground">Paisley Underground</option>
        <option value="Paso doble">Paso doble</option>
        <option value="Piano blues">Piano blues</option>
        <option value="Piano rock">Piano rock</option>
        <option value="Piano stride">Piano stride</option>
        <option value="Piedmont blues">Piedmont blues</option>
        <option value="Pirate metal">Pirate metal</option>
        <option value="Polonaise">Polonaise</option>
        <option value="Pop">Pop</option>
        <option value="Pop baroque">Pop baroque</option>
        <option value="Pop latino">Pop latino</option>
        <option value="Pop metal">Pop metal</option>
        <option value="Pop progressive">Pop progressive</option>
        <option value="Pop psychédélique">Pop psychédélique</option>
        <option value="Pop punk">Pop punk</option>
        <option value="Pop-rap">Pop-rap</option>
        <option value="Pop rock">Pop rock</option>
        <option value="Pornogrind">Pornogrind</option>
        <option value="Post-bop">Post-bop</option>
        <option value="Post-disco">Post-disco</option>
        <option value="Post-grunge">Post-grunge</option>
        <option value="Post-hardcore">Post-hardcore</option>
        <option value="Post-metal">Post-metal</option>
        <option value="Post-punk">Post-punk</option>
        <option value="Post-rock">Post-rock</option>
        <option value="Power ballad">Power ballad</option>
        <option value="Power metal">Power metal</option>
        <option value="Power pop">Power pop</option>
        <option value="Powerviolence">Powerviolence</option>
        <option value="Prélude">Prélude</option>
        <option value="Progressive psytrance">Progressive psytrance</option>
        <option value="Protopunk">Protopunk</option>
        <option value="Psychobilly">Psychobilly</option>
        <option value="Pub rock">Pub rock</option>
        <option value="Punk blues">Punk blues</option>
        <option value="Punk celtique">Punk celtique</option>
        <option value="Punk chrétien">Punk chrétien</option>
        <option value="Punk folk">Punk folk</option>
        <option value="Punk hardcore (ou hardcore)">Punk hardcore (ou hardcore)</option>
        <option value="Punk rock">Punk rock</option>
        <option value="Punta rock">Punta rock</option>
        <option value="Punto guajiro">Punto guajiro</option>
        <option value="Queercore">Queercore</option>
        <option value="Quiet storm">Quiet storm</option>
        <option value="Rabiz">Rabiz</option>
        <option value="Raga rock">Raga rock</option>
        <option value="Ragga">Ragga</option>
        <option value="Ragtime">Ragtime</option>
        <option value="Raï">Raï</option>
        <option value="Raï'n'B">Raï'n'B</option>
        <option value="Rap East Coast">Rap East Coast</option>
        <option value="Rap hardcore">Rap hardcore</option>
        <option value="Rap metal">Rap metal</option>
        <option value="Rap politique">Rap politique</option>
        <option value="Rap rock">Rap rock</option>
        <option value="Rap West Coast">Rap West Coast</option>
        <option value="Rapcore">Rapcore</option>
        <option value="Rave">Rave</option>
        <option value="Rawstyle">Rawstyle</option>
        <option value="Rebetiko">Rebetiko</option>
        <option value="Red dirt">Red dirt</option>
        <option value="Reggae">Reggae</option>
        <option value="Reggae fusion">Reggae fusion</option>
        <option value="Reggaecrunk">Reggaecrunk</option>
        <option value="Reggaeton">Reggaeton</option>
        <option value="Rhapsodie">Rhapsodie</option>
        <option value="Rhythm and blues">Rhythm and blues</option>
        <option value="Riot grrrl">Riot grrrl</option>
        <option value="RnB contemporain">RnB contemporain</option>
        <option value="Rock">Rock</option>
        <option value="Rock alternatif">Rock alternatif</option>
        <option value="Rock alternatif latino">Rock alternatif latino</option>
        <option value="Rock anticommuniste (RAC)">Rock anticommuniste (RAC)</option>
        <option value="Rock brésilien">Rock brésilien</option>
        <option value="Rock canadien">Rock canadien</option>
        <option value="Rock celtique">Rock celtique</option>
        <option value="Rock chilien">Rock chilien</option>
        <option value="Rock chinois">Rock chinois</option>
        <option value="Rock chrétien">Rock chrétien</option>
        <option value="Rock communiste">Rock communiste</option>
        <option value="Rock électronique">Rock électronique</option>
        <option value="Rock en espagnol">Rock en espagnol</option>
        <option value="Rock expérimental">Rock expérimental</option>
        <option value="Rock gothique">Rock gothique</option>
        <option value="Rock in opposition">Rock in opposition</option>
        <option value="Rock indépendant">Rock indépendant</option>
        <option value="Rock industriel">Rock industriel</option>
        <option value="Rock instrumental">Rock instrumental</option>
        <option value="Rock 'n' roll">Rock 'n' roll</option>
        <option value="Rock néo-progressif">Rock néo-progressif</option>
        <option value="Rock progressif">Rock progressif</option>
        <option value="Rock progressif espagnol">Rock progressif espagnol</option>
        <option value="Rock progressif français">Rock progressif français</option>
        <option value="Rock progressif italien">Rock progressif italien</option>
        <option value="Rock psychédélique">Rock psychédélique</option>
        <option value="Rock sudiste">Rock sudiste</option>
        <option value="Rock suédois">Rock suédois</option>
        <option value="Rock symphonique">Rock symphonique</option>
        <option value="Rock turc">Rock turc</option>
        <option value="Rock wagnérien">Rock wagnérien</option>
        <option value="Rockabilly">Rockabilly</option>
        <option value="Rocksteady">Rocksteady</option>
        <option value="Rondo">Rondo</option>
        <option value="Roots rock">Roots rock</option>
        <option value="Rumba">Rumba</option>
        <option value="Rumba catalane">Rumba catalane</option>
        <option value="Rumba congolaise">Rumba congolaise</option>
        <option value="Rumba flamenca">Rumba flamenca</option>
        <option value="Sadcore">Sadcore</option>
        <option value="Saint Louis blues">Saint Louis blues</option>
        <option value="Salegy">Salegy</option>
        <option value="Salsa">Salsa</option>
        <option value="Salsa-ragga">Salsa-ragga</option>
        <option value="Salsaton">Salsaton</option>
        <option value="Samba">Samba</option>
        <option value="Samba rock">Samba rock</option>
        <option value="Sambass">Sambass</option>
        <option value="Scherzo">Scherzo</option>
        <option value="Schlager">Schlager</option>
        <option value="Schranz">Schranz</option>
        <option value="Screamo">Screamo</option>
        <option value="Séga">Séga</option>
        <option value="Seggae">Seggae</option>
        <option value="Semba">Semba</option>
        <option value="Shibuya-kei">Shibuya-kei</option>
        <option value="Shock rock">Shock rock</option>
        <option value="Shoegazing">Shoegazing</option>
        <option value="Ska">Ska</option>
        <option value="Ska-jazz">Ska-jazz</option>
        <option value="Ska punk">Ska punk</option>
        <option value="Skate punk">Skate punk</option>
        <option value="Skiffle">Skiffle</option>
        <option value="Slam">Slam</option>
        <option value="Slow">Slow</option>
        <option value="Slow fox (ou foxtrot)">Slow fox (ou foxtrot)</option>
        <option value="Slowcore">Slowcore</option>
        <option value="Sludge metal">Sludge metal</option>
        <option value="Smooth jazz">Smooth jazz</option>
        <option value="Snap">Snap</option>
        <option value="Soca">Soca</option>
        <option value="Soft rock">Soft rock</option>
        <option value="Son cubain">Son cubain</option>
        <option value="Sonate">Sonate</option>
        <option value="Songo">Songo</option>
        <option value="Sophisti-pop">Sophisti-pop</option>
        <option value="Soukous">Soukous</option>
        <option value="Soul">Soul</option>
        <option value="Soul blues">Soul blues</option>
        <option value="Soul jazz">Soul jazz</option>
        <option value="Soul psychédélique">Soul psychédélique</option>
        <option value="Southern gospel">Southern gospel</option>
        <option value="Space rock">Space rock</option>
        <option value="Speed garage">Speed garage</option>
        <option value="Speed metal">Speed metal</option>
        <option value="Speedcore">Speedcore</option>
        <option value="Splittercore">Splittercore</option>
        <option value="Stoner rock">Stoner rock</option>
        <option value="Street punk">Street punk</option>
        <option value="Subground">Subground</option>
        <option value="Sunshine pop">Sunshine pop</option>
        <option value="Surf">Surf</option>
        <option value="Swamp blues">Swamp blues</option>
        <option value="Swamp pop">Swamp pop</option>
        <option value="Swing">Swing</option>
        <option value="Symphonie">Symphonie</option>
        <option value="Synthpop (ou electropop ou technopop)">Synthpop (ou electropop ou technopop)</option>
        <option value="Synthpunk (ou electropunk)">Synthpunk (ou electropunk)</option>
        <option value="Synthwave">Synthwave</option>
        <option value="T-pop">T-pop</option>
        <option value="Tango">Tango</option>
        <option value="Taqwacore">Taqwacore</option>
        <option value="Tarentelle">Tarentelle</option>
        <option value="Tech house">Tech house</option>
        <option value="Tech trance">Tech trance</option>
        <option value="Techno">Techno</option>
        <option value="Techno de Détroit">Techno de Détroit</option>
        <option value="Techno hardcore">Techno hardcore</option>
        <option value="Techno minimale">Techno minimale</option>
        <option value="Techstep">Techstep</option>
        <option value="Tecno-brega">Tecno-brega</option>
        <option value="Teen pop">Teen pop</option>
        <option value="Terrorcore">Terrorcore</option>
        <option value="Texas blues">Texas blues</option>
        <option value="Thrash metal">Thrash metal</option>
        <option value="Thrash metal allemand">Thrash metal allemand</option>
        <option value="Thrashcore">Thrashcore</option>
        <option value="Timba">Timba</option>
        <option value="Toccata">Toccata</option>
        <option value="Trallpunk">Trallpunk</option>
        <option value="Trance">Trance</option>
        <option value="Trance Goa">Trance Goa</option>
        <option value="Trance psychédélique">Trance psychédélique</option>
        <option value="Trance vocale">Trance vocale</option>
        <option value="Trap">Trap</option>
        <option value="Tribal house">Tribal house</option>
        <option value="Tribe">Tribe</option>
        <option value="Trip hop">Trip hop</option>
        <option value="Tropical house">Tropical house</option>
        <option value="Tropipop">Tropipop</option>
        <option value="Tumba francesa">Tumba francesa</option>
        <option value="Twee pop">Twee pop</option>
        <option value="UK garage">UK garage</option>
        <option value="UK hardcore">UK hardcore</option>
        <option value="Unblack metal">Unblack metal</option>
        <option value="Uplifting trance">Uplifting trance</option>
        <option value="Vaporwave">Vaporwave</option>
        <option value="Viking metal">Viking metal</option>
        <option value="Visual kei">Visual kei</option>
        <option value="Vocal house">Vocal house</option>
        <option value="West Coast blues">West Coast blues</option>
        <option value="Western Swing">Western Swing</option>
        <option value="Witch house">Witch house</option>
        <option value="Wizard rock">Wizard rock</option>
        <option value="Wonky">Wonky</option>
        <option value="Wonky pop">Wonky pop</option>
        <option value="World music">World music</option>
        <option value="Yéla">Yéla</option>
        <option value="Yéyé">Yéyé</option>
        <option value="Youth crew">Youth crew</option>
        <option value="Zarico (ou zydeco)">Zarico (ou zydeco)</option>
        <option value="Zeuhl">Zeuhl</option>
        <option value="Ziglibithy">Ziglibithy</option>
        <option value="Zouglou">Zouglou</option>
        <option value="Zouk">Zouk</option>
        <option value="Zumba">Zumba</option>
    </select>

    <label for="cgv">CGV</label>
    <input type="checkbox" name="cgv" id="cgv">
    
    <input type="submit" name="submit" value="Envoyer">

    </form>
</body>
</html>