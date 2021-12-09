<?php
/* Template Name: Cases */
get_header(); ?>

<div class="container">
    <div class="customers">
        <div class="section-title">
            <span>Examples</span>
            <h2>Our Customers</h2>
        </div>
        <?php echo do_shortcode('[show_cases]'); ?>
    </div>
    <div class="stories">
        <div class="section-title">
            <span>Workflow</span>
            <h2>Some Stories</h2>
        </div>
        <?php echo do_shortcode('[show_stories]'); ?>
    </div>
    <div class="cases-contact">
        <div class="cases-contact-text">
            <h2>Want to become our new customer?</h2>
            <p>We’re looking forward to working with you!</p>
        </div>
        <div class="cases-contact-btn">
            <a href="#" class="contact-btn">Contact Us</a>
            <!-- <a href="#">Read More</a> -->
        </div>
    </div>
</div>
<?php get_footer(); ?>