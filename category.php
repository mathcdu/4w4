<?php
/* model de base */ ?>
<?php get_header() ?>
<h2>Category</h2>
<div id="accueil" class="global">
  <section class="accueil__section">
    <h2>Accueil</h2>
    <div class="section__pays">
      <?php if (have_posts()) :
        while (have_posts()) : the_post();
      ?>
          <div class="carte">
            <h3><?php the_title(); ?></h3>
            <h5><?php echo wp_trim_words(get_the_content(), 10); ?></h5>
            <p><a href="<?php echo get_permalink(); ?>">Voir la suite...</a></p>
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
    <h2>Catégories</h2>
    <div class="section__cat">
      <!--     <h2>Événement</h2>
    <blockquote cite="https://www.brainyquote.com/authors/erin_cummings">
      <p>
        At the end of the day, you are solely responsible for your success and your failure.
      </p>
    </blockquote>
    <h3>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sit, iste sint? Nam, blanditiis? Quod, a modi, quia soluta atque odio iure architecto sapiente, repellat pariatur placeat. Mollitia vitae asperiores deserunt.</h3> -->
      <?php
      $categories = get_categories();
      foreach ($categories as $category) {
        $category_link = get_category_link($category->term_id);
        $category_name = $category->name;
        $category_description = wp_trim_words($category->description, 10);
        $category_count = $category->count;
      ?>
        <div class="carte">
          <h3><?php echo $category_name; ?></h3>
          <p><?php echo $category_description; ?></p>
          <p><a href="<?php echo $category_link; ?>">Voir les destinations de cette catégorie</a></p>
          <p>Nombre d'articles : <?php echo $category_count; ?></p>
        </div>
      <?php } ?>
  </section>
  <?php get_template_part("gabarit/vague"); ?>
</div>
</div>



<?php get_footer(); ?>