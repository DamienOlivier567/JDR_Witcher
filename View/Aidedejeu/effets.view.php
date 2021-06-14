<?php
    require_once "../_Partials/header.view.php";
?>

    <h1>Effets</h1>

    <div class="accordion">
        <div class="accordion-item">
            <input type="checkbox" id="accordion1">
            <label for="accordion1" class="accordion-item-title"><span class="icon"></span>Au sol</label>
            <div class="accordion-item-desc">Malus –2 en attaque et en défense.
                Un autre personnage peut dépenser une action pour vous relever. Sinon sacrifiez votre mouvement pour vous remettre debout</div>
        </div>

        <div class="accordion-item">
            <input type="checkbox" id="accordion2">
            <label for="accordion2" class="accordion-item-title"><span class="icon"></span>Aveuglé</label>
            <div class="accordion-item-desc">Vos yeux sont affectés. Jusqu’à ce que vous régliez le problème, malus -3 à
                l'attaque et la défense, et –5 aux jets de Vigilance basés sur la vue.</div>
        </div>

        <div class="accordion-item">
            <input type="checkbox" id="accordion3">
            <label for="accordion3" class="accordion-item-title"><span class="icon"></span>Addiction</label>
            <div class="accordion-item-desc">Lorsque vous souffrez d’une addiction, vous ressentez quotidiennement
                le besoin irrépressible de satisfaire votre envie.
                Vous devez effectuer un jet de Volonté chaque jour où vous n’avez pas eu votre dose.
                En cas d’échec, vous ne pensez plus qu’au sujet de votre addiction et subissez un malus de –5 sur
                toutes les autres actions.
                Votre Volonté diminue de –1 (uniquement pour ce jet) par jour d’abstinence,
                ce qui accentue sans cesse la difficulté du jet. Chaque fois qu’on vous offre de
                quoi satisfaire votre désir, vous devez réaliser un jet de Volonté (modifié par le nombre de jours de manque)
                pour ne pas céder sur-le-champ. Vous pouvez vous sevrer d’une addiction en passant trois semaines sans succomber à la tentation.
                Vous n’avez pas besoin de réussir des jets d’addiction, vous devez simplement veiller à ne pas satisfaire votre envie</div>
        </div>

        <div class="accordion-item">
            <input type="checkbox" id="accordion4">
            <label for="accordion4" class="accordion-item-title"><span class="icon"></span>Empoisonné</label>
            <div class="accordion-item-desc">3 points de dégâts par round, Résilience de SD 15 Pour faire cesser les effets du poison.</div>
        </div>

        <div class="accordion-item">
            <input type="checkbox" id="accordion5">
            <label for="accordion5" class="accordion-item-title"><span class="icon"></span>Etourdis</label>
            <div class="accordion-item-desc">Vous êtes sonné et votre vision se trouble. Aucune action ou déplacement
                possible. Vous devez réussir un jet de sauvegarde qui vous prend un round entier.
                Si on vous frappe (SD 10 seulement) , vous reprenez aussitôt vos esprits.</div>
        </div>

        <div class="accordion-item">
            <input type="checkbox" id="accordion6">
            <label for="accordion6" class="accordion-item-title"><span class="icon"></span>Gel</label>
            <div class="accordion-item-desc">Votre corps est raide et glacé. VIT-3 et Réflexes -1, briser l'effet demande une action, jet Physique SD 16</div>
        </div>

        <div class="accordion-item">
            <input type="checkbox" id="accordion7">
            <label for="accordion7" class="accordion-item-title"><span class="icon"></span>Hallucination</label>
            <div class="accordion-item-desc">Effets donné par le MJ, Déduction SD 16 pour reconnaître les éléments de l'hallucination</div>
        </div>

        <div class="accordion-item">
            <input type="checkbox" id="accordion8">
            <label for="accordion8" class="accordion-item-title"><span class="icon"></span>Incinerations</label>
            <div class="accordion-item-desc">5 points de dégâts par round sur toutes les localisations de votre corps.
                L’armure absorbe les dégâts, mais le feu lui inflige 1 point de dégâts à chaque round.
                Pour éteindre le feu, vous devez passer un round à vous asperger d’eau ou à vous rouler par terre,
                ce qui vous empêche d’accomplir une autre action ou un mouvement</div>
        </div>

        <div class="accordion-item">
            <input type="checkbox" id="accordion9">
            <label for="accordion9" class="accordion-item-title"><span class="icon"></span>Inconscient</label>
            <div class="accordion-item-desc">Vous êtes inconscient. Vous finissez au sol et ne pouvez pas vous déplacer,
                ni effectuer aucune autre action, y compris les actions de défense. L’effet prend fin lorsque vous êtes stabilisé (cf. Guérison)</div>
        </div>

        <div class="accordion-item">
            <input type="checkbox" id="accordion10">
            <label for="accordion10" class="accordion-item-title"><span class="icon"></span>Mourant</label>
            <div class="accordion-item-desc">Vos PS sont tombés à 0. Vous subissez aussi les effets au sol et
                inconscient et devez réussir un jet de sauvegarde ou mourir. Lorsqu’une nouvelle attaque vous touche ou
                au début de votre tour à partir du round suivant, vous devez à nouveau réussir un jet de sauvegarde ou mourir.
                Chaque jet de sauvegarde effectué au-delà du premier subit un malus –1, qui est cumulatif.
                L’effet prend fin lorsque vous êtes stabilisé (cf. guérison) ou que vous mourez</div>
        </div>

        <div class="accordion-item">
            <input type="checkbox" id="accordion11">
            <label for="accordion11" class="accordion-item-title"><span class="icon"></span>Nausée</label>
            <div class="accordion-item-desc">Tous les 3 rounds, réussissez un jet de COR ou passer votre tour à vomir et à expectorer</div>
        </div>

        <div class="accordion-item">
            <input type="checkbox" id="accordion12">
            <label for="accordion12" class="accordion-item-title"><span class="icon"></span>Saignement</label>
            <div class="accordion-item-desc">Vous saignez. Vous subissez 2 points de dégâts par round jusqu’à ce que le
                saignement soit arrêté avec un jet de Premiers secours (SD 15) réussi (ou un sort de soin), ce qui demande une action</div>
        </div>

        <div class="accordion-item">
            <input type="checkbox" id="accordion13">
            <label for="accordion13" class="accordion-item-title"><span class="icon"></span>Stupéfaction</label>
            <div class="accordion-item-desc">Vous êtes déséquilibré, Malus –2 en attaque et en défense. Le malus disparaît
                au début de votre prochain tour et vous retrouvez vos appuis</div>
        </div>

    </div>


