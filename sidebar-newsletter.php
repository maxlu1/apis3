<?php
if (!is_active_sidebar('footer-newsletter')) {
    return;
}
?>
<div class="newsletter-section">

    <?php
    dynamic_sidebar('footer-newsletter');
    ?>

    <?php echo do_shortcode('[contact-form-7 id="46" title="Contact form 1_copy"]'); ?>


</div>