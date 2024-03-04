<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Theme name</title>
  <!--   
  <link rel="stylesheet" href="normalize.css">
  <link rel="stylesheet" href="style.css">
  -->
  <link rel="stylesheet" href=" <?php echo get_template_directory_uri() .  '/normalize.css'; ?>">
  <link rel="stylesheet" href=" <?php echo get_template_directory_uri() .  '/style.css'; ?>">
</head>

<body>
  <div id="entete" class="global">
    <header class="entete__header">
      <!--       <button class="button-1" role="button">Button 1</button>
      <button class="button-2" role="button">Button 2</button>
      <button class="button-3" role="button">Button 3</button> POUR LAB 2 -->
      <h1 class="bgc-texte">Thème Mathi</h1>
      <h2 class="bgc-texte">4W4 - Conception d'interface <span>et développement web</span></h2>
      <h3 class="bgc-texte">TIM - Collège de Maisonneuves</h3>
      <button class="entete__button">Événements</button>
    </header>
    <div class="vague">
      <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
        <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" style="fill: var(--couleur-arriere-accueil);"></path>
      </svg>
    </div>
  </div>
  <div id="accueil" class="global">
    <section class="accueil__section">
      <h2>Accueil</h2>
      <div class="section__cours">
        <!--         /* if (have_posts()) {
        while (have_posts()) {
        the_post();
        the_title('<p>', '</p>');
        $contenue = get_the_content();
        $contenue = wp_trim_words($contenue, 10);
        echo $contenue;
        }
        } */ -->
        <?php if (have_posts()) :
          while (have_posts()) : the_post();
            // sigle c'est 585-2w2 (7 premiers caractères)
            // Extraire le signe 0 jusqu'à 7 caractères
            $titre = get_the_title();
            $sigle = substr($titre, 0, 7);
            $titreCours = substr($titre, strlen($sigle), -6);
            $pos_parenthese = strpos($titre, '(');
            $duree = substr($titre, $pos_parenthese + 1, -1);
            $titre = substr($titre, 7, $pos_parenthese - 7);
        ?>
            <div class="carte">
              <h5><?php echo $sigle; ?></h5>
              <h3><?php echo $titre; ?></h3>
              <h5><?php echo wp_trim_words(get_the_content(), 10); ?></h5>
              <h3>Durée: <?php echo $duree; ?></h3>
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
    <div class="vague">
      <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
        <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" style="fill: var(--couleur-arriere-footer);"></path>
      </svg>
    </div>
  </div>
  <div id="footer" class="global">
    <section>
      <footer class="footer__section">
        <h2>Footer</h2>
        <blockquote>
          <h3>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Possimus harum incidunt, vero, quae veniam reiciendis neque distinctio maiores qui alias quod deserunt perferendis itaque dolores dolore quisquam tempore iste repellat!</h3>
        </blockquote>
        <form class="recherche" action="">
          <input class="recherche__input" type="search" name="" id="" placeholder="Recherche">
          <button class="recherche__button">
            <a href="#"><svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" color="#000">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
              </svg></a>
          </button>
        </form>
        <div class="sociaux">
          <!-- Please refer: https://github.com/shubhamjain/svg-loader -->
          <a href="#"><svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" color="#000">
              <path fill="none" d="M0 0h24v24H0z"></path>
              <path d="M22 12c0-5.52-4.48-10-10-10S2 6.48 2 12c0 4.84 3.44 8.87 8 9.8V15H8v-3h2V9.5C10 7.57 11.57 6 13.5 6H16v3h-2c-.55 0-1 .45-1 1v2h3v3h-3v6.95c5.05-.5 9-4.76 9-9.95z"></path>
            </svg></a>
          <a href="#"><svg width="24" height="24" role="img" viewBox="0 0 24 24" fill="currentColor" color="#000" xmlns="http://www.w3.org/2000/svg">
              <title>WordPress icon</title>
              <path d="M21.469 6.825c.84 1.537 1.318 3.3 1.318 5.175 0 3.979-2.156 7.456-5.363 9.325l3.295-9.527c.615-1.54.82-2.771.82-3.864 0-.405-.026-.78-.07-1.11m-7.981.105c.647-.03 1.232-.105 1.232-.105.582-.075.514-.93-.067-.899 0 0-1.755.135-2.88.135-1.064 0-2.85-.15-2.85-.15-.585-.03-.661.855-.075.885 0 0 .54.061 1.125.09l1.68 4.605-2.37 7.08L5.354 6.9c.649-.03 1.234-.1 1.234-.1.585-.075.516-.93-.065-.896 0 0-1.746.138-2.874.138-.2 0-.438-.008-.69-.015C4.911 3.15 8.235 1.215 12 1.215c2.809 0 5.365 1.072 7.286 2.833-.046-.003-.091-.009-.141-.009-1.06 0-1.812.923-1.812 1.914 0 .89.513 1.643 1.06 2.531.411.72.89 1.643.89 2.977 0 .915-.354 1.994-.821 3.479l-1.075 3.585-3.9-11.61.001.014zM12 22.784c-1.059 0-2.081-.153-3.048-.437l3.237-9.406 3.315 9.087c.024.053.05.101.078.149-1.12.393-2.325.609-3.582.609M1.211 12c0-1.564.336-3.05.935-4.39L7.29 21.709C3.694 19.96 1.212 16.271 1.211 12M12 0C5.385 0 0 5.385 0 12s5.385 12 12 12 12-5.385 12-12S18.615 0 12 0"></path>
            </svg></a>
          <a href="#"><svg width="24" height="24" role="img" viewBox="0 0 24 24" fill="currentColor" color="#000" xmlns="http://www.w3.org/2000/svg">
              <title>GitHub icon</title>
              <path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"></path>
            </svg></a>
          <a href="#"><svg width="24" height="24" role="img" viewBox="0 0 24 24" fill="currentColor" color="#000" xmlns="http://www.w3.org/2000/svg">
              <title>Pinterest icon</title>
              <path d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 5.079 3.158 9.417 7.618 11.162-.105-.949-.199-2.403.041-3.439.219-.937 1.406-5.957 1.406-5.957s-.359-.72-.359-1.781c0-1.663.967-2.911 2.168-2.911 1.024 0 1.518.769 1.518 1.688 0 1.029-.653 2.567-.992 3.992-.285 1.193.6 2.165 1.775 2.165 2.128 0 3.768-2.245 3.768-5.487 0-2.861-2.063-4.869-5.008-4.869-3.41 0-5.409 2.562-5.409 5.199 0 1.033.394 2.143.889 2.741.099.12.112.225.085.345-.09.375-.293 1.199-.334 1.363-.053.225-.172.271-.401.165-1.495-.69-2.433-2.878-2.433-4.646 0-3.776 2.748-7.252 7.92-7.252 4.158 0 7.392 2.967 7.392 6.923 0 4.135-2.607 7.462-6.233 7.462-1.214 0-2.354-.629-2.758-1.379l-.749 2.848c-.269 1.045-1.004 2.352-1.498 3.146 1.123.345 2.306.535 3.55.535 6.607 0 11.985-5.365 11.985-11.987C23.97 5.39 18.592.026 11.985.026L12.017 0z"></path>
            </svg></a>
          <a href="#"><svg width="24" height="24" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" color="#000">
              <title>Genius icon</title>
              <path d="M12.897 1.235c-.36.001-.722.013-1.08.017-.218-.028-.371.225-.352.416-.035 1.012.023 2.025-.016 3.036-.037.841-.555 1.596-1.224 2.08-.5.345-1.118.435-1.671.663.121.78.434 1.556 1.057 2.07 1.189 1.053 3.224.86 4.17-.426.945-1.071.453-2.573.603-3.854.286-.48.937-.132 1.317-.49-.34-1.249-.81-2.529-1.725-3.472a11.125 11.125 0 00-1.08-.04zm-10.42.006C.53 2.992-.386 5.797.154 8.361c.384 2.052 1.682 3.893 3.45 4.997.134-.23.23-.476.09-.73-.95-2.814-.138-6.119 1.986-8.19.014-.986.043-1.976-.003-2.961l-.188-.214c-1.003-.051-2.008 0-3.01-.022zm17.88.055l-.205.356c.265.938.6 1.862.72 2.834.58 3.546-.402 7.313-2.614 10.14-1.816 2.353-4.441 4.074-7.334 4.773-2.66.66-5.514.45-8.064-.543-.068.079-.207.237-.275.318 2.664 2.629 6.543 3.969 10.259 3.498 3.075-.327 5.995-1.865 8.023-4.195 1.935-2.187 3.083-5.07 3.125-7.992.122-3.384-1.207-6.819-3.636-9.19z"></path>
            </svg></a>
        </div>
      </footer>
    </section>

  </div>
</body>

</html>