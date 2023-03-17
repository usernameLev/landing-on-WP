<?php get_header(); ?>


<div class="about" id="about" style="background: url(<?php echo CFS()->get('background_white') ?>) center 100% repeat-x, url(<?php echo CFS()->get('background_black') ?>) center 100% repeat-x, #1d1d1d;">
  <div class="container">
    <div class="about__inner">
      <?php $loop = CFS()->get('card'); ?>
      <?php foreach ($loop as $row) : ?>
        <div class="about__item">
          <div class="about__year"><?php echo $row['card_year']; ?></div>
          <div class="about__text"><?php echo $row['card_text']; ?></div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>
<div class="team" id="team">
  <div class="container">
    <div class="block__head">
      <h2 class="block__title"><?php echo CFS()->get('team_title'); ?></h2>
      <p class="block__text"><?php echo CFS()->get('team_desc'); ?></p>
    </div>
    <div class="team__inner">

      <!-- Swiper -->
      <div class="swiper mySwiper">
        <div class="swiper-wrapper">
          <?php $loop = CFS()->get('team_card'); ?>
          <?php foreach ($loop as $row) : ?>
            <div class="swiper-slide">
              <div class="team__item">
                <img class="team__item-img" src="<?php echo $row['team_img']; ?>" alt="">
                <h3 class="team__item-title"><?php echo $row['team_name']; ?></h3>
                <p class="team__item-text"><?php echo $row['team_post']; ?></p>
                <div class="team__icon-box">
                  <?php if (!empty($row['team_twitter']['url'])) : ?>
                    <a href="<?php echo $row['team_twitter']['url']; ?>" target="<?php echo $row['team_twitter']['target']; ?>"><i class="icon-twitter"></i></a>
                  <?php endif; ?>
                  <?php if (!empty($row['team_insta']['url'])) : ?>
                    <a href="<?php echo $row['team_insta']['url']; ?>" target="<?php echo $row['team_insta']['target']; ?>"><i class="icon-instagram"></i></a>
                  <?php endif; ?>
                  <?php if (!empty($row['team_vk']['url'])) : ?>
                    <a href="<?php echo $row['team_vk']['url']; ?>" target="<?php echo $row['team_vk']['target']; ?>"><i class="icon-vkontakte"></i></a>
                  <?php endif; ?>
                  <?php if (!empty($row['team_fb']['url'])) : ?>
                    <a href="<?php echo $row['team_fb']['url']; ?>" target="<?php echo $row['team_fb']['target']; ?>"><i class="icon-facebook"></i></a>
                  <?php endif; ?>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
      </div>
    </div>
  </div>
</div>

<div class="provide" id="provide">
  <div class="container">
    <div class="block__head inverse">
      <h2 class="block__title"><?php echo CFS()->get('provide_title'); ?></h2>
      <p class="block__text"><?php echo CFS()->get('provide_text'); ?></p>
    </div>
    <div class="provide__inner">
      <?php $loop = CFS()->get('provide_card'); ?>
      <?php foreach ($loop as $row) : ?>
        <div class="provide__item">
          <img src="<?php echo $row['provide_card_img']; ?>" alt="">
          <h3 class="provide__item-title"><?php echo $row['provide_card_title']; ?></h3>
          <p class="provide__item-text"><?php echo $row['provide_card_text']; ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>
<div class="contact" id="contact">
  <div class="container">
    <div class="block__head">
      <h2 class="block__title"><?php echo CFS()->get('footer_title'); ?></h2>
      <p class="block__text"><?php echo CFS()->get('footer_text'); ?></p>
    </div>
    <div class="contact__inner">
      <div class="contact__icon-box">
        <div class="contact__item">
          <i class="icon-phone"></i>
          <div class="contact__text"><a href="tel:<?php echo CFS()->get('footer_phone'); ?>"><?php echo CFS()->get('footer_phone'); ?></a></div>
        </div>
        <div class="contact__item">
          <i class="icon-location"></i>
          <div class="contact__text">
            <?php if (!empty(CFS()->get('footer_address')['url'])) : ?>
              <a href="<?php echo CFS()->get('footer_address')['url']; ?>" target="<?php echo CFS()->get('footer_address')['target']; ?>"><?php echo CFS()->get('footer_address')['text']; ?></a>
            <?php endif; ?>
          </div>
        </div>
        <div class="contact__item">
          <i class="icon-mail-alt"></i>
          <div class="contact__text"><a href="mailto:somemail@hotmail.com"><?php echo CFS()->get('footer_email'); ?></a></div>
        </div>
      </div>

      <?php the_content(); ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>