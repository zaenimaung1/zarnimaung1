<?php
require_once('component/layout/header.php');

// Sanitize input
$product_id = filter_input(INPUT_GET, 'product_id', FILTER_SANITIZE_STRING);


// Find the specific product
$product = null;
foreach ($products as $item) {
    if ($item['Name'] === $product_id) {
        $product = $item;
        break;
    }
}

if ($product === null) {
    die("Product not found.");
}
?>


    <div class="container-fluid mt-3" style="height: 300px;">
        <img src="<?php echo htmlspecialchars($product['Guid']); ?>" alt="<?php echo htmlspecialchars($product['Name']); ?>" style="height: 100%; width: 100%; object-fit: cover;">
    </div>
    <div class="container-fluid mt-4">
        <div class="title text-center">
            <h3 class="fw-bold"> <?php echo htmlspecialchars($product['Name']); ?></h3>
        </div>
        <div class="list mt-5">  
            <h5 class="fw-bold">ပါဝင်ပစ္စည်းများ</h5>          
        </div>        
        <ul class="mt-3">
          <p class="line"> <?php echo htmlspecialchars($product['Ingredients']); ?></p>
        </ul>
        <div class="list  mt-5">
            <h5  class="fw-bold">ချက်ပြုတ်နည်း</h5>
            <ul class="mt-3">
            <p class="line"><?php echo htmlspecialchars($product['CookingInstructions']); ?>။</p>
            </ul>
          
        </div>
    </div>
    <a href="chatne.php" style="position: fixed; top: 10px; left: 10px;">
        <button class="btn fw-bold bg-dark text-light" >Back</button>
    </a>
    <script src="component/bootstrap/js/bootstrap.min.js"></script>
<script src="component/assets/script.js"></script>
</body>
</html>
