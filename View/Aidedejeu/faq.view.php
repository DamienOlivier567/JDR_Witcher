<?php
require_once "../_Partials/header.view.php"
?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../assets/css/faq.css">
    <title>FAQ</title>
</head>
<body>
<section class="faq-section">
    <div class="container">
        <div class="row">
            <!-- ***** FAQ Start ***** -->
            <div class="col-md-6 offset-md-3">

                <div class="faq-title text-center pb-3">
                    <h2>FAQ</h2>
                </div>
            </div>
            <div class="col-md-6 offset-md-3">
                <div class="faq" id="accordion">
                    <div class="card">
                        <div class="card-header" id="faqHeading-1">
                            <div class="mb-0">
                                <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-1" data-aria-expanded="true" data-aria-controls="faqCollapse-1">
                                    <span class="badge">1</span>Est-ce que je peux faire une sorceleuse?
                                </h5>
                            </div>
                        </div>
                        <div id="faqCollapse-1" class="collapse" aria-labelledby="faqHeading-1" data-parent="#accordion">
                            <div class="card-body">
                                <p> Historiquement, tous les sorceleurs que nous connaissons sont des hommes, un état de fait qui serait dû à la nature de l’Épreuve des Herbes.
                                    Cependant, nous laissons au MJ le soin de décider si oui ou non il veut inclure des femmes sorceleurs dans sa campagne. </p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="faqHeading-2">
                            <div class="mb-0">
                                <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-2" data-aria-expanded="false" data-aria-controls="faqCollapse-2">
                                    <span class="badge">2</span> Qu'est-ce que la persévérance?
                                </h5>
                            </div>
                        </div>
                        <div id="faqCollapse-2" class="collapse" aria-labelledby="faqHeading-2" data-parent="#accordion">
                            <div class="card-body">
                                <p>C'est une autre traduction pour la Détermination qui sert pour les combats verbaux. </p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="faqHeading-3">
                            <div class="mb-0">
                                <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-3" data-aria-expanded="false" data-aria-controls="faqCollapse-3">
                                    <span class="badge">3</span>Combien de points sont nécéssaires pour augmenter une capacite qui a un bonus ?
                                </h5>
                            </div>
                        </div>
                        <div id="faqCollapse-3" class="collapse" aria-labelledby="faqHeading-3" data-parent="#accordion">
                            <div class="card-body">
                                <p>Si un personnage a une compétence au niveau 5 avec un bonus de 1, ce qui lui fait avoir un 6 en maîtrise de la compétence,
                                    pour augmenter son niveau il devra dépenser 5 points pour passer au niveau 7. Le point bonus se rajoute "dynamiquement" au montant de la maitrise.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="faqHeading-4">
                            <div class="mb-0">
                                <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-4" data-aria-expanded="false" data-aria-controls="faqCollapse-4">
                                    <span class="badge">4</span> Comment puis-je augmenter ma vigeur ?
                                </h5>
                            </div>
                        </div>
                        <div id="faqCollapse-4" class="collapse" aria-labelledby="faqHeading-4" data-parent="#accordion">
                            <div class="card-body">
                                <p>Les sorceleurs, mages et prêtres peuvent augmenter leur vigueur. Le sorceleur à la compétence
                                    "Source magique" dans son arbre de compétence exclusif qui l'augmente.
                                    Le mage à la compétence exclusif "Contact magique" qui augmente égallement.
                                    Pour le prêtre ça sera sa compétence exlusif "Harmonisation naturelle</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="faqHeading-5">
                            <div class="mb-0">
                                <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-5" data-aria-expanded="false" data-aria-controls="faqCollapse-5">
                                    <span class="badge">5</span> Comment un personnage non sorceleur peut-il faire des dégâts en argent ?
                                </h5>
                            </div>
                        </div>
                        <div id="faqCollapse-5" class="collapse" aria-labelledby="faqHeading-5" data-parent="#accordion">
                            <div class="card-body">
                                <p> Il faut compter 2 lingots d’argent pour réaliser un placage sur une arme à une main
                                    et 4 lingots d’argent pour une arme à deux mains. 1 lingot d’argent permet de réaliser un placage sur 10 pointes de flèches ou de carreaux.
                                    Un Artisan peut réaliser la compétence Plaqué Argent (Tech) pour créer un placage d’argent sur une arme pourvu qu’il ait accès à une forge
                                    et à un nombre suffisant de lingots d’argent.
                                    Le SD du jet est de 16. S’il réussit, l’arme inflige +1d6 dégâts d’argent supplémentaires par tranche de 3 points au-dessus du SD,
                                    avec un maximum de 5d6. En cas d’échec, l’arme se brise.
                                    Si un morceau d’argent (une pièce par exemple) se retrouve à l’intérieur d’un monstre,
                                    il subit des dégâts comme s’il était empoisonné jusqu’à ce qu’il réussisse à la faire sortir."</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="faqHeading-6">
                            <div class="mb-0">
                                <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-6" data-aria-expanded="false" data-aria-controls="faqCollapse-6">
                                    <span class="badge">6</span> Est ce qu'un PNJ peut utiliser les attaques rapides et fortes ?
                                </h5>
                            </div>
                        </div>
                        <div id="faqCollapse-6" class="collapse" aria-labelledby="faqHeading-6" data-parent="#accordion">
                            <div class="card-body">
                                <p>Les adversaires monstrueux et humanoïdes attaquent différemment des PJ.
                                    Ces adversaires possèdent un " nombre d'attaques par round " pour chacune de leurs armes.
                                    Cela permet de savoir combien de fois cette arme peut attaquer dans le round.
                                    Ces adversaires ne peuvent pas également utiliser des frappes puissantes et rapides.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="faqHeading-7">
                            <div class="mb-0">
                                <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-7" data-aria-expanded="false" data-aria-controls="faqCollapse-7">
                                    <span class="badge">7</span> En cas d'égalite sur des jets d'opposition ?
                                </h5>
                            </div>
                        </div>
                        <div id="faqCollapse-7" class="collapse" aria-labelledby="faqHeading-7" data-parent="#accordion">
                            <div class="card-body">
                                <p>
                                    Quand vous affrontez un adversaire, lancez 1d10 et ajoutez votre niveau de
                                    compétence ainsi que votre valeur de caractéristique appropriée.
                                    Comparez ensuite votre résultat à celui de l'adversaire.
                                    Celui qui obtient le meilleur score remporte le test. En cas d'égalité, le defenseur gagne.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
</html>





