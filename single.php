<?php get_header(); ?>

    <main class="page-content">
      
      <?php 
      // 個別ページのデータを取得するループ
      if ( have_posts() ) : 
        while ( have_posts() ) : the_post(); 
      ?>

        <div class="work-detail-container">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>#works" class="back-link">← Works一覧に戻る</a>

          <h2><?php the_title(); ?></h2>

          <div class="work-detail-content">
            <?php the_content(); ?>
          </div>

        </div>

      <?php 
        endwhile; 
      endif; 
      ?>

    </main>

<?php get_footer(); ?>