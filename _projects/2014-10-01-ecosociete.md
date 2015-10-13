---
layout: post
title:  "Écosocieté"
order: 3
image:
    url: "/content/ecosociete.png"
    alt: "Écosociété"
link: "http://ecosociete.org"
---

Site vitrine et outil de recherche de livres pour l'éditeur Écosociété réalisé chez [Molotov](http://molotov.ca). Le design a été réalisé par [Nicolas Bonnet](http://www.tostaky.co/nicolas/), l'intégration front-end et la programmation back-end par moi-même.
Premier projet réalisé en [Ruby](https://www.ruby-lang.org/fr/) pour moi, j'ai développé un CMS complet basé sur le framework [Rails](http://rubyonrails.org/), utilisant l'interface d'administration [ActiveAdmin](http://activeadmin.info/). La recherche est supportée par [Elasticsearch](http://elasticsearch.org), permettant une grande optimisation des ressources ainsi que de meilleurs resultats.
C'est sur le conseil de mon collègue [Guillaume Coderre](https://github.com/gcoderre) que j'ai développé ce site en Ruby on Rails au lieu de PHP. Les gains sont nombreux, autant au début du développement que lors des maintenances post-lancement.
Le tout est compilé et déployé sur [Heroku](http://heroku.com) et les ressources tels que les pochettes de livres sont distribuées par le CDN [Amazon S3](http://aws.amazon.com/fr/s3/).