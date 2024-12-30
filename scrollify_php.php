<!-- =========================================================

    SCROLLIFY-PHP - Scroll Progress Indicator for Web Pages
    ===========================================================
    This script enables a modern, lightweight scroll progress indicator on webpages.

    Based on the Scrollify JS library:
    https://github.com/emmanpbarrameda/scrollify-js

    Author: emmanpbarrameda
    Personal website: https://emmanpbarrameda.github.io/

============================================================ -->

<!-- ==================== HOW TO USE ==================== -->
<!-- 
    To integrate the scroll progress bar into your webpage, include the following PHP code in your page:
    <?php include 'scrollify_php.php'; ?>
    This will automatically add the necessary HTML, CSS, and JavaScript for the scroll progress bar.
    Ensure that the paths to the CSS and JS files are correctly specified.
-->


<!-- ==================== SCROLL PROGRESS BAR ELEMENT ==================== -->
<div 
    class="scrollify_scroll_progress" 
    data-height="4px"           
    data-background="linear-gradient(to left, #B374F8, #4da3ff)"
    data-z-index="999"          
    data-top="89px">
</div>

<!-- ==================== CSS & JS INCLUSION ==================== -->
<!-- Make sure to change these paths to reflect the correct asset locations in your project -->
<link rel="stylesheet" href="assets/css/scrollify-scrollprogress-indicator.css?v=1.1.0">
<script src="assets/js/scrollify-scrollprogress-indicator.js?v=1.1.0"></script>
