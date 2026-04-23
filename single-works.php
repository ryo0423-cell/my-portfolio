<?php get_header(); ?>

<main class="page-content">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <div class="work-detail-container">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>#works" class="back-link">← Works一覧に戻る</a>
      
      <h2><?php the_title(); ?></h2>

      <?php if( get_field('work_summary') ): ?>
        <p class="work-summary"><?php echo nl2br(esc_html(get_field('work_summary'))); ?></p>
      <?php endif; ?>

      <div class="work-detail-content">
        <?php the_content(); ?>
      </div>

      <div class="work-info">
        
        <?php if( get_field('work_overview') ): ?>
          <div class="info-block">
            <h3>概要</h3>
            <p><?php echo nl2br(esc_html(get_field('work_overview'))); ?></p>
          </div>
        <?php endif; ?>

        <?php if( get_field('work_target') ): ?>
          <div class="info-block">
            <h3>ターゲット</h3>
            <p><?php echo nl2br(esc_html(get_field('work_target'))); ?></p>
          </div>
        <?php endif; ?>

        <?php if( get_field('work_issue') ): ?>
          <div class="info-block">
            <h3>課題</h3>
            <p><?php echo nl2br(esc_html(get_field('work_issue'))); ?></p>
          </div>
        <?php endif; ?>

        <?php if( get_field('work_solution') ): ?>
          <div class="info-block pickup-box">
            <h3>解決・工夫</h3>
            <p><?php echo nl2br(esc_html(get_field('work_solution'))); ?></p>
          </div>
        <?php endif; ?>

        <?php if( get_field('work_design') ): ?>
          <div class="info-block">
            <h3>デザイン意図</h3>
            <p><?php echo nl2br(esc_html(get_field('work_design'))); ?></p>
          </div>
        <?php endif; ?>

        <?php if( get_field('work_tech') ): ?>
          <div class="info-block pickup-box">
            <h3>技術ポイント</h3>
            <p><?php echo nl2br(esc_html(get_field('work_tech'))); ?></p>
          </div>
        <?php endif; ?>

      </div>
    </div>

  <?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>