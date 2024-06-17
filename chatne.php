<?php 
    require_once('component/layout/header.php');
?>
    <div class="container-fluid">
        <div class="row mt-3 ">
            <div class="col-4 ">
              <a href="index.php">
                <button class="btn fw-bold bg-dark text-light" >Back</button>
              </a>
            </div>
            <div class="col-7 pt-2">
                <p class="fw-bold">ဟင်းချက်နည်းအမျိူးမျိူး</p>
            </div>
        </div>
    </div>
    <div class="container-fluid">
    <div class="content-items d-flex justify-content-between" style="flex-wrap: wrap;">
        <?php foreach($products as $product): ?>
           
            <div class="card my-2" style="width:49%; background-color: rgba(97, 103, 108, 0.573);" >
                 <a href="chatne_details.php?product_id=<?php echo $product['Name']; ?>" class="text-decoration-none  text-dark">
                <div class="card-body">
                    <img src="<?php echo htmlspecialchars($product['Guid']); ?>" alt="<?php echo htmlspecialchars($product['Name']); ?>" class="rounded img-fluid" style="width:150px;height:180px;object-fit:cover;">
                </div>
                <div class="card-text text-center">
                    <p class="fw-bold"><?php echo htmlspecialchars($product['Name']); ?> </p>
                </div>
                </a>
            </div>
            
        <?php endforeach; ?>
    </div>

    
</body>
</html>