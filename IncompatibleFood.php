<?php 
require_once('component/layout/header.php');


$Infoods=json_decode(file_get_contents('Json/incompatibleFood.json'), true);

$filteredInfoods = $Infoods; 
$searchQuery = '';
if (isset($_POST['search'])) {
    $searchQuery = strtolower(trim($_POST['food']));
    if ($searchQuery) {
        
        $filteredInfoods = array_filter($Infoods, function($Infood) use ($searchQuery) {
            return strpos(strtolower($Infood['FoodA']), $searchQuery) !== false ||
                   strpos(strtolower($Infood['FoodB']), $searchQuery) !== false;
        });
    }
}
?>
<div class="container-fluid">
    <div class="row mb-5 mt-3">
        <div class="col-3"> 
            <a href="index.php">
                <button class="btn fw-bold bg-dark text-light">Back</button>
            </a>
        </div>
        <div class="col-9">
            <form action="IncompatibleFood.php" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" name="food" value="<?php echo htmlspecialchars($searchQuery); ?>" placeholder="Search Food Name">
                    <button type="submit" name="search" class="btn btn-dark"><i class="bi bi-search"></i></button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="container-fluid">
    <?php if (!empty($filteredInfoods)): ?>
        <?php foreach ($filteredInfoods as $Infood): ?>
            <div class="row mb-4" style="height: 55px;">
                <div class="col-12 border rounded d-flex justify-content-between text-center mx-auto bg-white" style="width: 88%; align-items: center;">
                    <div class="title fw-bold"><?php echo htmlspecialchars($Infood['FoodA']); ?></div>
                    <div class="title">+</div>
                    <div class="title fw-bold"><?php echo htmlspecialchars($Infood['FoodB']); ?></div>
                    <div class="title">=</div>
                    <div class="title fw-bold"><?php echo htmlspecialchars($Infood['Description']); ?></div>
                </div>
            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <div class="row mb-4">
            <div class="col-12 text-center">
                <p>No incompatible foods found for "<?php echo htmlspecialchars($searchQuery); ?>"</p>
            </div>
        </div>
    <?php endif; ?>
    
    <div class="btn bg-dark position-fixed" style="bottom: 10px; right: 10px;" id="top">
        <a href="#" onclick="scrollToTop()" class="text-decoration-none text-white">
            <i class="bi bi-arrow-up"></i>
        </a>
    </div>
</div>
<script src="component/bootstrap/js/bootstrap.min.js"></script>
<script src="component/assets/script.js"></script>
</body>
</html>
