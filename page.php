<?php theme_include('header'); ?>
		<section id="about" class="hidden-print">
			<div class="container">
				<h3>À propos</h3>
				<p>Passionné par le web depuis l'âge de 10 ans, j'aime jouer avec les dernières nouveautés sur les Internets.</p>
				<p>Je code des sites statiques / dynamiques / interactifs / applicatifs / innovateurs / etc. en HTML5 / CSS3 / JS / PHP / NodeJS.</p>
				<p class="hidden-print"><a href="#" class="print"><span class="glyphicon glyphicon-print"></span> Imprimer mon CV</a></p>
			</div>
		</section>
		<section id="portfolio" class="hidden-print">
			<div class="container">
				<h3>Portfolio</h3>
				<ul class="projects-container no-list">
					<?php if(has_posts()): ?>
						<?php while(posts()): ?>
							<?php $image = article_custom_field('image'); $url = article_custom_field('url'); $additional_text = article_custom_field('additional_text');?>
							<li>
								<div class="row">
									<div class="col-md-6 col-sm-12">
										<?php if($url) : ?><a href="<?php echo $url; ?>" target="_blank"><?php endif; ?>
										<img src="<?php echo $image; ?>" alt="<?php echo article_title(); ?>" class="img-responsive"/>
										<?php if($url) : ?></a><?php endif; ?>
									</div>
									<div class="col-md-6 col-sm-12">
										<h4><?php echo article_title(); ?></h4>
										<?php echo article_markdown(); ?>
										<?php if($url) : ?><p><a href="<?php echo $url; ?>" target="_blank"><span class="glyphicon glyphicon-open"></span> Voir le projet<?php if($additional_text) : ?> <?php echo $additional_text; ?><?php endif; ?></a></p><?php endif; ?>
									</div>
								</div>
							</li>
						<?php endwhile; ?>
					<?php endif; ?>
				</ul>
			</div>
		</section>
		<section id="history">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<h3>Historique</h3>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3 col-sm-12">
						<h4>Éducation</h4>
						<ul class="no-list">
							<li>
								<b>Baccalauréat en communication (médias interactifs)</b>
								<p>Université du Québec à Montréal</p>
								<p>Baccalauréat de 3 ans</p>
								<p><em>En cours // Diplôme espéré 2016</em></p>
							</li>
							<li>
								<b>Mapping Vidéo - MadMapper + Resolume</b>
								<p>Société des Arts Technologiques</p>
								<p>Formation théorique et pratique de 24 heures</p>
								<p><em>Novembre 2013 - décembre 2013</em></p>
							</li>
							<li>
								<b>Techniques d'intégration multimédia</b>
								<p>Collège Édouard Montpetit</p>
								<p>DEC de 3 ans</p>
								<p><em>Gradué en 2013</em></p>
							</li>
						</ul>
					</div>
					<div class="col-md-3 col-sm-12">
						<h4>Expérience de travail</h4>
						<ul class="no-list">
							<li>
								<b>Molotov communications alternatives</b>
								<p>Coopérative de travail</p>
								<p><a href="http://molotov.ca" target="_blank"><span class="glyphicon glyphicon-open"></span> Site web</a></p>
								<p><em>Août 2013 - présent</em></p>
							</li>
							<li>
								<b>QuatreCentQuatre</b>
								<p>Production Web, Mobile</p>
								<p><a href="http://quatrecentquatre.com" target="_blank"><span class="glyphicon glyphicon-open"></span> Site web</a></p>
								<p><em>Avril 2013 - Août 2013</em></p>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</section>

<?php theme_include('footer'); ?>