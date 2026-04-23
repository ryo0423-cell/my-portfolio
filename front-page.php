<?php get_header(); ?>

    <main>
      <section class="hero">
        <div class="hero-container">
          <div class="hero-text">
            <p class="hero-tag">Frontend Engineer</p>

            <h1 class="hero-title">
              Ryo<br />
              Fukushima
            </h1>

            <p class="hero-copy">
              成果につながる設計と、<br />
              ユーザーに届くUIを。
            </p>

            <div class="hero-buttons">
              <a href="#works" class="btn">View Works</a>
              <a href="#contact" class="outline-btn">Contact</a>
            </div>
          </div>
          <div class="hero-bg"></div>
        </div>
      </section>

      <section class="value fade-in">
        <h2>Value</h2>
        <div class="value-grid">
          <div>
            <h3>Design</h3>
            <p>見やすさと美しさを両立したUI設計</p>
          </div>
          <div>
            <h3>Code</h3>
            <p>保守性と拡張性を意識したコーディング</p>
          </div>
          <div>
            <h3>Marketing</h3>
            <p>ユーザー行動を意識した導線設計</p>
          </div>
        </div>
      </section>

      <section id="about" class="page-content fade-in">
        <h2>About</h2>
        <div class="about-text-container">
          <p>
            現在、フロントエンドエンジニアを目指して<span class="highlight">HTML / CSS / JavaScript</span>を用いたWeb制作を学習しています。
          </p>
          <p>
            単に美しいデザインをコードで形にするだけでなく、ターゲットに情報を適切に届ける<span class="highlight">「SNSマーケティングの視点」</span>も意識したサイト設計を心がけています。
          </p>
          <p>
            また、制作を進める上では<span class="highlight">「レスポンスの速さ」</span>と<span class="highlight">「丁寧なコミュニケーション」</span>を何より大切にしています。
          </p>
        </div>
      </section>

      <section id="skills" class="page-content fade-in">
        <h2>Skills</h2>
        <ul>
          <li>HTML</li>
          <li>CSS</li>
          <li>JavaScript</li>
          <li>jQuery</li>
        </ul>
        <p class="skill-note">※レスポンシブ対応・アニメーション実装可能</p>
      </section>

      <section id="works" class="page-content fade-in">
        <h2>Works</h2>
        <div class="works-grid">
          
          <?php
          // 1. WordPressの裏側から作品データを取ってくる指示
          $args = array(
            'post_type'      => 'works', // 投稿を表示
            'posts_per_page' => -1      // 全件表示
          );
          $works_query = new WP_Query( $args );
          ?>

          <?php 
          // 2. もしデータがあったら、ある分だけ繰り返し表示する（ループ）
          if ( $works_query->have_posts() ) : 
            while ( $works_query->have_posts() ) : $works_query->the_post(); 
          ?>

            <div class="work-card">
              <div class="work-card-img-wrapper">
                <?php if ( has_post_thumbnail() ) : ?>
                  <?php the_post_thumbnail(); ?>
                <?php else : ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/work1.png" alt="No Image" />
                <?php endif; ?>
              </div>

              <h3><?php the_title(); ?></h3>
              
              <div class="work-buttons">
                <a href="<?php the_permalink(); ?>" class="btn">View</a>
              </div>
            </div>

          <?php 
            endwhile; 
            wp_reset_postdata(); // データの処理をリセット
          endif; 
          ?>

        </div>
      </section>

      <section id="contact" class="fade-in">
        <h2>Contact</h2>
        <p>お仕事のご相談・ご依頼はこちらからお願いします。</p>
        <a href="mailto:wo.shi.hangoren@gmail.com" class="btn">メールで連絡する</a>
      </section>
    </main>

<?php get_footer(); ?>