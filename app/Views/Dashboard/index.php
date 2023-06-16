<?php
include('header.php');
?>

<div class="content red">
    <h2>Dashboard</h2>
    <p>ini adalah dashboard perpustakaan</p>
</div>
<div class="container">
    <div class="sidebar" id="sidebar">
        <?php
            include('sidebar.php');
        ?>
    </div>
    <div class="content" id="content">
        <?php
            include('body.php');
        ?>
    </div>
</div>

<?php
include('footer.php');
?>
</body>

</html>