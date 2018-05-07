<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package SUP
 */

?>

<footer class="footer">
    <div class="footer-top">
        <div class="wrap">
            <div class="footer__membership"> <a href="#">Membership aplication</a></div>
            <div class="footer-social"><a class="footer__vk" href="http://vk.com"><img class="footer-social__img" src="<?php bloginfo('template_directory') ?>/img/vk.svg" alt="VK"></a><a class="footer__fb" href="http://facebook.com"><img class="footer-social__img" src="<?php bloginfo('template_directory') ?>/img/facebook.svg" alt="Facebook"></a><a class="footer__inst" href="http://instagram.com"><img class="footer-social__img" src="<?php bloginfo('template_directory') ?>/img/instagram.svg" alt="Instagram"></a><a class="footer__linkedin" href="http://facebook.com"><img class="footer-social__img" src="<?php bloginfo('template_directory') ?>/img/linkedin.svg" alt="LinkedIn"></a></div>
            <div class="footer-links"><a class="footer-links__link" href="#">Terms &amp; Conditions</a><a class="footer-links__link" href="#">Privacy Policy</a></div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="wrap">
            <p class="footer-bottom__year">Copyright @ 2017 SUP<br>All Rights Reserved</p>
            <p class="footer-bottom__mainsite"> <a href="https://sup-student.pl" target="_blank">sup-student.pl</a></p>
            <p class="footer-bottom__dev">Разработка сайта: <a target="_blank" href="http://grad-agency.com">Grad Agency</a></p>
        </div>
    </div>
</footer>
</div>

<?php wp_footer(); ?>
<script src="<?php bloginfo('template_directory') ?>/js/main.min.js"></script>
</body>
</html>
