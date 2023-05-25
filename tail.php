<footer></footer>

<!-- body -->
</body>

</html>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.2/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.8/ScrollMagic.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.8/plugins/animation.gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.8/plugins/debug.addIndicators.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/ScrollTrigger.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/9.1.0/swiper-bundle.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/circletype@2.0.0/dist/circletype.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

<script src="<?php echo ROOT?>script/common.js"></script>
<script src="<?php echo ROOT?>script/header.js"></script>

<?php if (basename($_SERVER['PHP_SELF']) == 'index.php'): ?>
<script src="<?php echo ROOT?>script/main.js"></script>
<?php endif; ?>

<?php if (basename($_SERVER['PHP_SELF']) != 'index.php'): ?>
<script src="<?php echo ROOT?>script/works.js"></script>
<?php endif; ?>