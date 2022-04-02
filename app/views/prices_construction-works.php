<?php
    require APPROOT . '/views/includes/header.php';
    // <!-- Header -->
    require_once APPROOT . '/views/includes/prices_header.php';

?>
  
<?php
    echo "Prices for Construction Works";
// echo $data;
    foreach ($data['pricesConstructionWorks'] as $work) {
        
        echo '<div class="card text-dark" style="margin-right: 2rem; max-width: 30rem">
        <div class="card-body">
        <blockquote class="blockquote mb-0">
                <p>' . $work->name_work . '</p>
                <footer class="blockquote-footer">' . $work->measured_by . '</footer>
            </blockquote>
            <div class="card-footer">' . $work->price . '</div>
        </div>
        </div>';

    } 

?>

<!-- Footer -->
<?php require APPROOT . '/views/includes/require.js.php'; ?>

</body>
</html>