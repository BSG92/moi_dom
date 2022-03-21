<?php
    require APPROOT . '/views/includes/header.php';
    require APPROOT . '/views/includes/navigation.php';
    // Content START
    require APPROOT . '/views/includes/public-content.php';

    //     // var_dump($data);
    // foreach ($data['reviews'] as $review) {
    //     echo $review->id . ' || Name: ' . $review->name .
    //             ' || Review: ' . $review->review;
    //     echo '<br>';
    // }
?>

<!-- Footer -->
<?php require APPROOT . '/views/includes/require.js.php'; ?>
<script src="<?php echo URLROOT;?>/public/assets/slick.min.js"></script>
<!-- Initialize the welcome-slider -->
<script>
    $(document).ready(function(){
        $(".welcome-slider").slick({
            autoplay: true,
            autoplaySpeed: 3000
        });
        $(".reviews-slider").slick({
            autoplay: true,
            autoplaySpeed: 5000,
            infinite: false
        });
});
</script>

</body>
</html>