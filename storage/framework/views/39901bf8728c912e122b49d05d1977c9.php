<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Max Sports</title>
    <link rel="stylesheet" href="<?php echo e(asset('/css/styles.css')); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <!-- Header -->
    <?php echo $__env->yieldContent('nav'); ?>
    <!-- Header End -->

    <!-- Hero Section -->
    <div class="hero" aria-label="Hero section">
        <div class="hero-overlay">
            <div class="hero-content">
                <p>MAU FITNESS TAPI GAMAU KELUAR RUMAH?</p>
                <h1>SEWA DI MAX SPORTS AJA</h1>
                <button>RENT NOW</button>
            </div>
        </div>
    </div>
    <!-- Hero Section End -->

    <!-- Product Section -->
    <?php echo $__env->yieldContent('product'); ?>
    <!-- Product Section End -->
    
    <!-- Contact Section -->
    <?php echo $__env->yieldContent('contact'); ?>
    <!-- Contact Section End -->

    <!-- Footer -->
    <?php echo $__env->yieldContent('footer'); ?>
    <!-- Footer End -->    
</body>
</html>
<?php /**PATH C:\xampp\htdocs\rekap itho\olah_store\resources\views/fe/master.blade.php ENDPATH**/ ?>