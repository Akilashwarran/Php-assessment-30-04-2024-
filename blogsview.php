<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <header>
        <?php include 'header.php';?>
    </header>

    <?php include 'blog.php';?>
    
    <footer>
        <?php include 'footer.php';?>
    </footer>
</body>
<script>
    function storeId(id) {
        sessionStorage.setItem('blogId', id);
    }
</script>
</html>