<?php
include('header.php');
?>


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
<script>
function loadView(halaman) {
    $.ajax({
        url: 'http://belajar_ci.test/' + halaman,
        type: 'GET',
        dataType: 'html',
        success: function(response) {
            $('#konten').html(response);
        },
        error: function(xhr, status, error) {
            console.log(xhr.responseText);
        }
    });
}
</script>
</body>

</html>