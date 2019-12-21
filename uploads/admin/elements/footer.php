<?php include_once ($_SERVER['DOCUMENT_ROOT'] . '/ecommerce/config.php');?>

<!-- Bootstrap core JavaScript -->
<script src="../resources/js/jquery.min.js"></script>
<script src="../resources/js/bootstrap.bundle.min.js"></script>

<!-- Menu Toggle Script -->
<script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>

</body>
</html>
