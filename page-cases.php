<?php
/* Template Name: Cases */
get_header(); ?>

<div class="container-cases">
    <div class="customers">
        <div class="section-title">
            <span>Exempel</span>
            <h2>Våra Kunder</h2>
        </div>
        <?php echo do_shortcode('[show_cases]'); ?>
    </div>
    <div class="stories">
        <div class="section-title">
            <span>Arbetsflöde</span>
            <h2>Utvalda Stories</h2>
        </div>
        <?php echo do_shortcode('[show_stories]'); ?>
    </div>
    <div class="cases-contact">
        <div class="cases-contact-text">
            <h2>Vill du bli vår nya kund?</h2>
            <p>Vi ser fram emot att arbeta tillsammans!</p>
        </div>
        <div class="cases-contact-btn">
            <a href="#" class="contact-btn">Kontakta oss</a>
            <!-- <a href="#">Read More</a> -->
        </div>
    </div>
</div>
<?php get_footer(); ?>