/**
 * Author: Nicolas Ménard-Guy
 * Date: 12-11-25
 * Time: 18:25
 */
var sentences = [
    "C'est un dossier complexe",
    "J'estime toujours avoir agi avec une grande diligence",
    "Comme en politique, il faut agir avec compromis et parfois ça oblige des choix difficiles",
    "Mon rôle à partir de maintenant est de rassembler tout ce beau monde, les étudiants, les syndicats, les partenaires du milieu de l'éducation, pour qu'on aille plus loin",
    "C'est sûr que c'est tout un changement de vie, c'est un tout nouveau monde, de nouveaux collègues, mais je suis heureux de voir que beaucoup de gens au Québec ont le cœur à l'action, c'est plaisant de voir des initiatives pousser un peu partout au Québec",
    "On axe souvent sur le négatif, sur les problèmes, mais on réalise que les gens se prennent en main et veulent améliorer leur sort",
    "Je ne suis pas désabusé",
    "Il y a quantité d'initiatives sur notre grand territoire, autant en éducation, en santé, qu'en entrepreneuriat",
    "Ce ne sont pas toujours des initiatives qui se retrouvent sous les projecteurs",
    "J'ai surtout appris à voir la société différemment ou encore pourquoi telle ou telle décision est prise",
    "Je bénéficie du respect de mes collègues et de leurs conseils",
    "J'apprends sur le tas parfois parce que je n'ai pas l'expérience des vieux routiers, mais j'espère que ce n'est que le début d'une grande aventure",
    "La grève a démontré que nous avions raison de dire que le dialogue était rompu entre les générations",
    "On a pu voir qu'il y avait du cynisme dans plusieurs sphères, pas seulement en politique",
    "Moi, je veux amener une autre image de la politique, montrer que c'est un domaine qui n'est pas seulement réservé à l'élite",
    "J'espère que d'autres jeunes s'en inspireront et seront tentés de s'impliquer en politique",
    "Je suis surtout heureux que les affrontements soient terminés, qu'on se dirige vers un dialogue et un retour à la paix sociale, même si les Libéraux sont durs et qu'ils cherchent à susciter d'autre grogne",
    "Il sera question de la qualité de l'éducation, de l'accessibilité aux études, de la gouvernance et du rôle des universités",
    "C'est une initiative qui a été bien accueillie par les acteurs du milieu de l'éducation",
    "À ce moment, j’étais en négociations avec le gouvernement, a raconté le député",
    "Les manifestations à Victoriaville ont été très difficiles pour tout le monde",
    "J’ai pu constater l’importance du dialogue entre les différentes parties",
    "On a toujours été dans l'intérêt de la population étudiante, mais j'ai fait le choix d'adopter une attitude modérée et ça, ç'a embêté plusieurs représentants étudiants qui étaient un peu plus radicaux",
    "Je pense que les gens nous en auraient voulu, si pour des raisons financières, on avait compromis des interventions publiques ou des manifestations",
    "On a fait le choix de dire: \"Cette cause-là est tellement importante, que ça vaut la peine d'aller jusqu'au bout\"",
    "Lorsque j'étais président, certains me reprochaient de ne pas diffuser sur Internet certains dossiers stratégiques, certains plans d'action",
    "Mais imaginez si, par exemple, un parti politique mettait en ligne toute sa stratégie électorale",
    "Il y a certains éléments qu'on ne veut pas que les adversaires politiques connaissent",
    "Ça compromet la mission de l'organisation sinon",
    "Ce n’est pas une guerre de drapeaux, mais c’est plutôt parce que l’Assemblée nationale, c’est l’assemblée des Québécois",
    "Le drapeau canadien n’y était pas avant le milieu des années 80 et ce que l’on veut, c’est que le Parlement soit vraiment le lieu du peuple québécois",
    "On sent qu’Ottawa délaisse le champ d’action de la coopération internationale, comme aider les autres nations",
    "Il ne le fait pas nécessairement pour des intérêts économiques à court terme",
    "Alors, c’est important que le Québec joue un rôle actif sur la scène internationale",
    "Ce qui me touche, c’est qu’on dépeint souvent le Québec, surtout avec un gouvernement du Parti québécois, comme un lieu qui se referme sur le monde, alors que c’est tout le contraire"
];

$(function () {
    generate();

    $('input#nbSentences').change(function () {
        if (isNaN(this.value)) {
            this.value = 5;
        }else if(this.value>100){
            this.value = 100;
        }
        generate();
    });
    $('input#nbParagraphs').change(function () {
        if (isNaN(this.value)) {
            this.value = 5;
        }else if(this.value>100){
            this.value = 100;
        }
        generate();
    });
});

var generate = function () {
    var nbSentences = $('input#nbSentences').val();
    var nbParagraphs = $('input#nbParagraphs').val();

    var lastSentence = -1;

    $('div#LeoIpsum').empty();
    for (var i = 0; i < nbParagraphs; i++) {
        var paragraph = $('<p/>');
        var text = "";
        for (var j = 0; j < nbSentences; j++) {
            var newSentence = Math.floor(Math.random() * sentences.length);
            while (lastSentence == newSentence) {
                newSentence = Math.floor(Math.random() * sentences.length);
            }
            text += sentences[newSentence] + '. ';
            lastSentence = newSentence;
        }
        $('div#LeoIpsum').append(paragraph.text(text));
    }
}