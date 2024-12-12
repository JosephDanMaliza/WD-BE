<?php 
include('A08/connect.php');

$query = "SELECT * FROM islandsofpersonality LIMIT 4";
$result = executeQuery($query);

$islands = [];
if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $islands[] = $row;
    }
} else {
    echo "Error: " . mysqli_error($conn);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Inside Joseph's Mind</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body, h1 {font-family: "Raleway", Arial, sans-serif;}
        h1 {letter-spacing: 6px;}
        .w3-row-padding img {margin-bottom: 12px;}
    </style>
</head>
<body>

<div class="w3-content" style="max-width:1500px">

    <header class="w3-panel w3-center w3-opacity" style="padding:128px 16px; background-color: rgba(0, 0, 0, 0.5); color: white;">
    <h1 class="w3-xlarge">Inside Joseph's Mind</h1>
    <h1>Let's Explore the different islands of personalities and let's see the core</h1>

        <div class="w3-padding-32">
            <div class="w3-bar w3-border">
                <a href="index.php" class="w3-bar-item w3-button">Home</a>
                <a href="loveisland.php" class="w3-bar-item w3-button">Love Island</a>
                <a href="gamingisland.php" class="w3-bar-item w3-button">Gaming Island</a>
                <a href="dance&sportisland.php" class="w3-bar-item w3-button">Dance Sport Island</a>
                <a href="animalisland.php" class="w3-bar-item w3-button">Animal Island</a>
            </div>
        </div>
    </header>

    <div class="w3-row-padding w3-grayscale" style="margin-bottom:128px">
        <?php foreach ($islands as $island): ?>
        <div class="w3-quarter">
            <div class="w3-card-4" style="margin-bottom:16px">
                <img src="imgs/islandImgs/<?php echo htmlspecialchars($island['image']); ?>" alt="<?php echo htmlspecialchars($island['name']); ?>" style="width:100%">
                <div class="w3-container">
                    <h3><?php echo htmlspecialchars($island['name']); ?></h3>
                    <p><?php echo htmlspecialchars($island['shortDescription']); ?></p>
                    <a href="<?php echo strtolower(str_replace(' ', '', $island['name'])); ?>.php" class="w3-button w3-block w3-dark-grey">
                        Explore <?php echo htmlspecialchars($island['name']); ?>
                    </a>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>

</div>

</body>
</html>
