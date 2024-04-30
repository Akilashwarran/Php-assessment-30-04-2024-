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

    <?php include 'product.php';?>
    
    <footer>
        <?php include 'footer.php';?>
    </footer>
</body>
<script>
function storeAndNavigate(element) {
    let productDetails = {
        name: element.getAttribute('data-name'),
        price: element.getAttribute('data-price'),
        description: element.getAttribute('data-description'),
        image: element.getAttribute('data-image')
    };
    sessionStorage.setItem('productDetails', JSON.stringify(productDetails));
    window.location.href = 'productdetail.php'; 
}
</script>
</html>