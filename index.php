<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content= "Découvrir la gamme crédit à la consommation du crédit Lédonien (prêt personnel auto, travaux, étudiant, apprenti, rachat de crédit,...). Faites votre simulation et demande de crédit conso en ligne pour bénéficier des meilleurs taux.">
    <meta name="keywords" content="credit conso, crédit à la consommation, pret perso, lons le saunier, lédonien"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Le Crédit Lédonien - Accueil</title>
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <?php require 'menu.php'; require 'header.html'; ?>

    <div>
        <div class="slideshow-container">
            <div class="mySlides fade">
                <h1>Prêt Personnel<br>multi-projet</h1>
                <h2> <span id="grosfont">4,07% </span>TAEG fixe<br>Offre valable jusqu'au 31/08/2021</h2>
                <p>Pour 6 500€ empruntés sur 60mois</p>

                <a class="button" href="#">Découvrir</a>
            </div>

            <div class="mySlides fade">
                <h1>Un crédit rapide</h1>
                <h2>
                    Une demande 100% en Ligne, une réponse<br>sous réception de votre dossier complet
                </h2>
                <p>
                    Crédit Lédonien peut vous faire une réponse dans les 24h<br>ouvrées par SMS dans le cas d’une
                    acceptation, et par email<br>dans le cas d’un refus.
                </p>
                <a class="button" href="#">Découvrir</a>
            </div>
            <div class="mySlides fade">
                <h1>Un crédit transparent</h1>
                <h2>
                    <span id="grosfont">100%</span> de nos clients bénéficient d’un crédit<br> à taux fixe
                    et à échéance de remboursement fixe.</h2>
                <p>Aucun frais caché</p>
                <a class="button" href="#">Découvrir</a>

            </div>
            <br>

            <div style="text-align:left">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
            </div>

    </div>
    <div class="sectionOffres">
        <div id="clipped">
            <div class="offres">
                <div class="titre">
                    <h1> Découvrez nos offres <br> et services </h1>
                    <p> Auto, Travaux, Déco, le <strong> Crédit Lédonien </strong> propose une solution de <br>
                        financement pour chacun de vos projets personels.</p>
                </div>

                <!-- Boutons pour la section découverte d'offres-->
                <div class="onglets">
                    <button class="tablinks" onclick="openoffers(event, 'vehicule')" id="defaultOpen"> Trouvez votre
                        prochain véhicule ! </button>
                    <button class="tablinks" onclick="openoffers(event, 'credit')"> Prêt personel le Crédit Lédonien
                    </button>
                    <button class="tablinks" onclick="openoffers(event, 'mastercard')"> Carte de crédit Mastercard
                    </button>
                    <button class="tablinks" onclick="openoffers(event, 'travaux')"> Prêt personnel Travaux </button>
                </div>
            </div>
        </div>
        <div id="container">
            <!-- C'est pour contenir le polygone-->
        </div>
        <!-- Les offres -->
        <div class="diapo">
            <div id="vehicule" class="tabcontent">
                <img style='height: 100%; width: 100%; object-fit: contain' src="images/vehicule.jpg" alt="Un homme achetant un véhicule">
                <p> Le <strong>Crédit Lédonien</strong> vous propose une large sélection de voitures en association avec
                    nos partenaires locaux.</p> <br>
                <a href="#" class="deco">En savoir plus</a>
            </div>

            <div id="credit" class="tabcontent">
                <img style='height: 100%; width: 100%; object-fit: contain' src="images/credit.jpg" alt="Une paire de main autour d'un dessin représentant un foyer familial">
                <p> Découvrez nos solutions de prêts à la consommation : personnel, voiture et rachat de crédit. </p>
                <br>
                <a href="#" class="deco">En savoir plus</a>
            </div>

            <div id="mastercard" class="tabcontent">
                <img style='height: 100%; width: 100%; object-fit: contain' src="images/mastercard.jpg" alt="Un homme effectuant une transaction sur son téléphone">
                <p> Pour vous qui souhaitez suivre et piloter vos dépenses en temps réel, la carte Standard Mastercard
                    est une solution pratique et sécurisée.</p> <br>
                <a href="#" class="deco">En savoir plus</a>
            </div>

            <div id="travaux" class="tabcontent">
                <img style='height: 100%; width: 100%; object-fit: contain' src="images/travaux.jpg" alt="Des palettes de couleurs et matériaux pour la rénovation">
                <p> Un prêt adapté à tous vos projets, équipements ou travaux et une souscription 100% en ligne !</p>
                <br>
                <a href="#" class="deco">En savoir plus</a>
            </div>
        </div>
    </div>
    <section>
        <div class="content1">
            <h1>Comment se déroule une demande de crédit chez le Crédit Lédonien</h1>
            <p><span id="boldtext">Prêt personnel :</span> pour une demande de crédit à la consommation de plus de <span id="boldtext">5000 euros</span>. Sélectionnez
                ensuite
                le projet qui vous concerne, le montant, la durée et lancez le simulateur de crédit. Voici les
                différents types de projet que le <span id="boldtext">Crédit Lédonien</span> vous propose de
                financer via un prêt personnel
                :
                voiture et moto neuve ou d'occasion ; travaux, mobilier et décoration ; véhicule de loisirs pour un
                camping-car, une caravane ou un bateau et projet divers pour un événement de vie (un mariage,
                une
                naissance, une fête de famille, un divorce ou des funérailles) ou le financement des études
                supérieures
                de vos enfants, de voyages, de loisirs<br> ou de votre santé.</p>

            <p><span id="boldtext">Crédit renouvelable :</span> pour une somme d'argent jusqu’à <span
                    id="boldtext"></span>3000 euros que<br> vous pouvez utiliser sans
                justificatif dans l'ensemble du réseau Mastercard,<br> en boutique comme sur Internet,. Sélectionnez
                ensuite
                le montant de votre<br> choix entre <span id="boldtext">500</span> et <span id="boldtext">3000
                    euros</span> et la durée de remboursement souhaitée,<br> puis
                cliquez
                sur simuler.</p>

            <p>
                <span id="boldtext">Rachat de crédit :</span> si vous souhaitez regrouper un ou plusieurs crédits.
                Ne<br> prenez jamais un crédit à
                la
                consommation pour rembourser un crédit<br> existant ! En tant qu'organisme de crédit responsable, le
                <span id="boldtext">Crédit
                    Lédonien</span><br> vous accompagne et vous propose une offre de rachat et de regroupement<br> de
                crédits
                adaptée à
                votre situation afin de vous permettre d'honorer vos<br> échéances dans le respect de votre budget.</p>
        </div>


    </section>

    <section>
        <div class="content2">
            <img src="images/money resize-min.png" alt="Des piles croissantes de pièces de monnaie">
            <div class="content2text">
                <h1>Le crédit responsable par le Crédit Lédonien</h1>
                <p>Être<span id="boldtext"> responsable…</span> <br>
                    …cela peut paraître évident pour le <span id="boldtext">Crédit Lédonien</span> qui prône le crédit
                    responsable depuis plus de
                    <span id="boldtext">20</span>
                    ans.<br>
                    Cette posture qui nous amène à évoluer constamment au gré des aspirations et modes de vie des
                    Français,
                    a toujours été<br> portée par des actes.
                </p>
                <p>Elle revêt trois dimensions complémentaires. Tout d’abord, la <span
                        id="boldtext">responsabilité</span> pour vous, en proposant
                    des
                    solutions de<br> financement et des services qui permettent une <span id="boldtext">complète
                        maîtrise de son crédit et
                        de son
                        budget.</span><br>
                    Cette responsabilité s’exprime également pour nous, à travers une politique des ressources humaines
                    <span id="boldtext">inclusive</span> et <span id="boldtext">solidaire</span>,<br> favorisant <span
                        id="boldtext">l’épanouissement des collaborateurs.</span></p>
                <P>Enfin, une responsabilité pour tous, car nous sommes tous concernés. Nos modules d’éducation
                    financière
                    et notre présence<br> dans le <span id="boldtext">monde éducatif et professionnel</span> sont les
                    parfaits exemples de cet
                    engagement.
                </P>
                <p>Au service de nos clients, nous facilitons l’accès à une consommation plus responsable et plus
                    durable.
                    Alors soyons toujours<br> plus responsables, ensemble.</p>
                <a class="button2" href="#">En savoir plus</a>
            </div>
        </div>
    </section>

    <?php require 'footer.html'; ?>

</body>
<script src="javascript/script.js"></script>

</html>