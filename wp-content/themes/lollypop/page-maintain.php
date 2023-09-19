<?php
/**
 * Template Name: Maintain
 */
get_header();
?>
<style>
  .pr-70 {
    padding-right: 30%;
  }

  @media(max-width:1280px) {
    .pr-70 {
      padding-right: 15%;
    }
  }

  @media(max-width:767px) {
    .pr-70 {
      padding-right: 0;
    }
  }

  @media screen and (max-width: 428px) {}
</style>

<main class="main" style="background:#F7F5F3">
  <!-- banner section -->
  <section class="sec-pd sec-bnr p-r-80">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-11 col-lg-10 mx-auto">
          <div class="row">
            <div class="col-12 col-md-11 offset-md-1">
              <h1 class="fnt-50 fnt-800 mb-3 mb-md-4 red-stroke red-stroke--small13 px-md-0"><?php the_field('title'); ?></h1>
              <p class="fnt-24 pr-70"><?php the_field('content');?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>
  
</main>

<?php get_footer(); ?>