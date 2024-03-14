<?php
/* model de base */ ?>
<?php get_header() ?>

<div id="accueil" class="global">
  <section class="accueil__section">
    <h2>Accueil</h2>
    <div class="section__cours">

      <?php if (have_posts()) :
        while (have_posts()) : the_post();
      ?>
          <div class="carte">
            <h3><?php the_title(); ?></h3>
            <h5><?php the_content(); ?></h5>
          </div>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
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