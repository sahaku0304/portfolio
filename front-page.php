<!-- header.php読み込み -->
<?php get_header(); ?>
<div class="keytext">
  <div class="keytext__container">
    <p>
      HTML／CSS／Sass／JavaScriptを用いて、<br class="sp">デザインカンプからのコーディングを<br class="sp">
      承っています。
    </p>
    <p>
      CSS設計を意識することで、<br class="sp">拡張・更新・保守しやすいコーディングを<br class="sp">
      心がけています。
    </p>
    <p>
      WordPress構築にも対応しています。
    </p>
  </div>

  <svg class="keytext__background pc" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" width="1440" height="706" viewBox="0 0 1440 706" fill="none">
    <path d="M718.75 169.38C380.632 180.972 98.7009 280.801 0 329.267V706C100.702 650.539 385.434 537.919 718.75 531.124C1052.07 524.329 1338.46 467.003 1440 439.189V0C1340.47 51.6301 1056.87 157.788 718.75 169.38Z" fill="#E7F1F2" />
  </svg>
  <svg class="keytext__background sp" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" width="374" height="388" viewBox="0 0 374 388" fill="none">
    <path d="M189.5 66.5C254.3 56.9 340.833 21.5 376 0V292.5C376 300.5 297 323.5 189.5 333.5C103.5 341.5 27.3333 367.5 0 387.5V97.5C17 81.5 108.5 78.5 189.5 66.5Z" fill="#E7F1F2" />
  </svg>
  <div class="contact__btn pc">
    <a href="#contact">
      <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48" fill="none">
        <g clip-path="url(#clip0_4_427)">
          <path d="M39 13H9C7.34315 13 6 14.3431 6 16V39C6 40.6569 7.34315 42 9 42H39C40.6569 42 42 40.6569 42 39V16C42 14.3431 40.6569 13 39 13Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
          <path d="M6 19L24 31L42 19" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
        </g>
        <defs>
          <clipPath id="clip0_4_427">
            <rect width="48" height="48" fill="white" />
          </clipPath>
        </defs>
      </svg>
      お問い合わせ
    </a>
  </div>
</div>
<!-- メインコンテンツ -->
<main>
  <!-- aboutセクション -->
  <section id="about" class="about">
    <div class="common__ttl">
      <h2 class="common__ttl-head">about</h2>
      <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" width="102" height="10" viewBox="0 0 102 10" fill="none">
        <path d="M101 4.84C97.7559 9.96 94.5118 9.96 91.2676 4.84C88.0235 -0.28 84.7794 -0.28 81.5353 4.84C78.2912 9.96 75.047 9.96 71.8029 4.84C68.5588 -0.28 65.3147 -0.28 62.0706 4.84C58.8264 9.96 55.5823 9.96 52.3382 4.84C49.0941 -0.28 45.85 -0.28 42.6058 4.84C39.3617 9.96 36.1176 9.96 32.8735 4.84C29.6294 -0.28 26.3852 -0.28 23.1411 4.84C19.897 9.96 16.6529 9.96 13.4088 4.84C10.1646 -0.28 6.92052 -0.28 3.6764 4.84L1 9" stroke="#006F62" stroke-width="2" />
      </svg>
    </div>
    <div class="about__container">
      <div class="about__container-img">
        <img src="<?php echo get_template_directory_uri(); ?>/asset/images/oikawa.jpg" alt="自分の画像">
      </div>
      <p class="about__container-text">
        宮城県気仙沼市出身の24歳です。<br>
        東日本大震災を経験し、沢山の人の支えに助けられた学生時代でした。<br>
        今後は私自身が誰かの支えになることができるよう、WEB制作を通してたくさんの人と関わっていけたらと思います。
      </p>
    </div>
  </section>
  <!-- /aboutセクションここまで -->

  <!-- serviceセクション -->
  <section id="service" class="service">
    <div class="service__contents">
      <div class="service__content">
        <h2 class="service__content-head">
          HTML/CSS/<br class="sp">
          Sass/JavaScript<br class="sp">を用いて<br class="pc">
          デザインを再現する<br class="sp">コーディング
        </h2>
        <div class="service__items">
          <div class="service__item">
            <img src="<?php echo get_template_directory_uri(); ?>/asset/images/codeing.png" alt="PCアイコン" class="service__item-img">
            <p class="service__item-text">
              デザインカンプを忠実に再現するコーディングをしていきます。
            </p>
          </div>
          <div class="service__item">
            <img src="<?php echo get_template_directory_uri(); ?>/asset/images/key.png" alt="鍵アイコン" class="service__item-img">
            <p class="service__item-text">
              保守性、拡張性などを考え、可読性の高いコーディングを心がけております。
            </p>
          </div>
          <div class="service__item">
            <img src="<?php echo get_template_directory_uri(); ?>/asset/images/css.png" alt="CSSアイコン" class="service__item-img">
            <p class="service__item-text">
              BEMやFLOCSSを使って、CSS設計を意識した コーディングを心がけております。
            </p>
          </div>
        </div>
      </div>
      <div class="service__content">
        <h2 class="service__content-head">
          WordPressを用いた<br class="sp">
          WEBサイト構築
        </h2>
        <div class="service__items">
          <div class="service__item">
            <img src="<?php echo get_template_directory_uri(); ?>/asset/images/wordpress.png" alt="WordPressアイコン" class="service__item-img">
            <p class="service__item-text">
              静的サイトのWordPress化、オリジナルテーマのコーディングも承っております。
            </p>
          </div>
          <div class="service__item">
            <img src="<?php echo get_template_directory_uri(); ?>/asset/images/pcicon.png" alt="画面アイコン" class="service__item-img">
            <p class="service__item-text">
              運用する方のことを考え、管理画面にも気を配って 構築しております。
            </p>
          </div>
        </div>
      </div>
      <div class="service__content">
        <h2 class="service__content-head">
          HP修正
        </h2>
        <div class="service__items">
          <div class="service__item">
            <img src="<?php echo get_template_directory_uri(); ?>/asset/images/mentenance.png" alt="設定アイコン" class="service__item-img">
            <p class="service__item-text">
              更新にあたっての表示崩れや機能拡張に伴う修正を承っております。
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="service__mountain-icon">
      <img src="<?php echo get_template_directory_uri(); ?>/asset/images/mountain.svg" alt="山のアイコン">
      <img src="<?php echo get_template_directory_uri(); ?>/asset/images/mountain.svg" alt="山のアイコン">
      <img src="<?php echo get_template_directory_uri(); ?>/asset/images/mountain.svg" alt="山のアイコン">
    </div>
  </section>
  <!-- /serviceセクションここまで -->

  <!-- worksセクション -->
  <section id="works" class="works">
    <div class="works__container">
      <svg class="works__background pc" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" width="1440" height="1074" viewBox="0 0 1440 1074" fill="none">
        <path d="M723.751 128.44C1061.87 144.852 1341.3 216.751 1440 285.367V1074C1339.3 995.48 1057.07 981.168 723.751 971.548C390.436 961.927 101.535 885.484 0 846.106V0C99.5345 73.0964 385.634 112.029 723.751 128.44Z" fill="#F3F4EA" />
      </svg>
      <svg class="works__background sp" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" width="374" height="1528" viewBox="0 0 374 1528" fill="none">
        <path d="M230 33C140 33 39.1667 11 0 0V1453.5C71.5 1487 123 1476 209.5 1489C278.7 1499.4 351 1521.67 378.5 1527.5V74C366.5 60.3333 320 33 230 33Z" fill="#F3F4EA" />
      </svg>
      <div class="common__ttl">
        <h2 class="common__ttl-head">works</h2>
        <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" width="102" height="10" viewBox="0 0 102 10" fill="none">
          <path d="M101 4.84C97.7559 9.96 94.5118 9.96 91.2676 4.84C88.0235 -0.28 84.7794 -0.28 81.5353 4.84C78.2912 9.96 75.047 9.96 71.8029 4.84C68.5588 -0.28 65.3147 -0.28 62.0706 4.84C58.8264 9.96 55.5823 9.96 52.3382 4.84C49.0941 -0.28 45.85 -0.28 42.6058 4.84C39.3617 9.96 36.1176 9.96 32.8735 4.84C29.6294 -0.28 26.3852 -0.28 23.1411 4.84C19.897 9.96 16.6529 9.96 13.4088 4.84C10.1646 -0.28 6.92052 -0.28 3.6764 4.84L1 9" stroke="#006F62" stroke-width="2" />
        </svg>
      </div>
      <!-- 制作実績取得ループ -->
      <div class="works__items">
        <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post(); ?>
            <!-- 繰り返し処理する内容 -->
            <div class="works__item">
              <?php if (has_post_thumbnail()) : ?>
                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
              <?php else : ?>
                <a href="https://sahaku-portfolio.conohawing.com/practice/">
                  <img src="<?php echo get_template_directory_uri(); ?>/asset/images/practice.jpg" alt="ダミー画像" class="works__img">
                </a>
              <?php endif; ?>
              <h3 class="works__head"><?php the_title(); ?></h3>
              <div class="works__text">
                <?php the_content(); ?>
              </div>
            </div>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </div>
  </section>
<!-- /worksセクションここまで -->

<!-- contactセクション -->
  <sction id="contact" class="contact">
    <div class="contact__container">
      <div class="common__ttl">
        <h2 class="common__ttl-head">contact</h2>
        <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" width="102" height="10" viewBox="0 0 102 10" fill="none">
          <path d="M101 4.84C97.7559 9.96 94.5118 9.96 91.2676 4.84C88.0235 -0.28 84.7794 -0.28 81.5353 4.84C78.2912 9.96 75.047 9.96 71.8029 4.84C68.5588 -0.28 65.3147 -0.28 62.0706 4.84C58.8264 9.96 55.5823 9.96 52.3382 4.84C49.0941 -0.28 45.85 -0.28 42.6058 4.84C39.3617 9.96 36.1176 9.96 32.8735 4.84C29.6294 -0.28 26.3852 -0.28 23.1411 4.84C19.897 9.96 16.6529 9.96 13.4088 4.84C10.1646 -0.28 6.92052 -0.28 3.6764 4.84L1 9" stroke="#006F62" stroke-width="2" />
        </svg>
      </div>
      <?php echo do_shortcode('[contact-form-7 id="e3da8c7" title="お問合せフォーム"]'); ?>
    </div>
  </sction>
  <!-- /contactセクションここまで -->
</main>
<!-- footer.phpよみこみ -->
<?php get_footer(); ?>