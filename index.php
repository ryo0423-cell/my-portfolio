<?php get_header(); ?>

<main class="page-content" style="padding-top: 150px; text-align: center; min-height: 50vh;">
  <h2>Page Not Found</h2>
  <p>お探しのページは存在しないか、移動した可能性があります。</p>
  <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn" style="margin-top: 30px;">トップページに戻る</a>
</main>

<?php get_footer(); ?>