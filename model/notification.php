<?php if (isset($_SESSION['signuped'])) {
    unset($_SESSION['signuped']);
?>
    <script>
        alert('Đăng kí thành công !');
    </script>
<?php } ?>