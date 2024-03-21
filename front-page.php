<?php
/* model de base */ ?>
<?php get_header() ?>
<div id="entete" class="global">
  <section class="entete__header">
    <div class="entete__header__texte">
      <!--       <button class="button-1" role="button">Button 1</button>
      <button class="button-2" role="button">Button 2</button>
      <button class="button-3" role="button">Button 3</button> POUR LAB 2 -->
      <h1 class="bgc-texte"><?php echo get_bloginfo("name") ?></h1>
      <h2 class="bgc-texte"><?php echo get_bloginfo("description") ?></h2>
      <h3 class="bgc-texte">TIM - Collège de Maisonneuves</h3>
      <button class="entete__button">Événements</button>
    </div>
  </section>
  <?php get_template_part("gabarit/vague"); ?>
</div>
<div id="accueil" class="global">
  <section class="accueil__section">
    <h2>Accueil</h2>
    <div class="section__pays">
      <?php
      /*     get_the_title(); retourne une chaine de caractères qui contient le titre
    the_title; Lui il affiche le titre (echo) */
      ?>

      <?php if (have_posts()) :
        while (have_posts()) : the_post();
      ?>
          <div class="carte">
            <h3><?php the_title(); ?></h3>
            <h5><?php echo wp_trim_words(get_the_content(), 10); ?></h5>
            <p><a href="<?php echo get_permalink(); ?>">Voir la suite...</a></p>
            <?php the_category(); ?>
          </div>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>

  </section>
</div>
<div id="galerie" class="global diagonal">
  <section class="galerie__section">
    <h2>Galerie</h2>
    <nav class="menu">
      <a href="https://github.com/">Github</a>
      <a href="https://developer.mozilla.org/en-US/">MDN</a>
      <a href="https://www.w3schools.com/">W3School</a>
      <a href="https://css-tricks.com/">Csstricks</a>
    </nav>
  </section>
</div>
<div id="evenement" class="global">
  <section class="evenement__section">
    <h2>Événement</h2>
    <blockquote cite="https://www.brainyquote.com/authors/erin_cummings">
      <p>
        At the end of the day, you are solely responsible for your success and your failure.
      </p>
    </blockquote>
    <h3>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sit, iste sint? Nam, blanditiis? Quod, a modi, quia soluta atque odio iure architecto sapiente, repellat pariatur placeat. Mollitia vitae asperiores deserunt.</h3>
  </section>
  <?php get_template_part("gabarit/vague"); ?>
</div>



<?php get_footer(); ?>