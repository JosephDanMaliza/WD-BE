<?php
include('connect.php');

$islandType = 'Animal Island';

$descQuery = "SELECT longDescription FROM islandsofpersonality WHERE status = 'inactive' AND name = '$islandType'";
$descResult = executeQuery($descQuery);

if ($descResult) {
    $descRow = mysqli_fetch_assoc($descResult);
    if (isset($descRow['longDescription'])) {
        $longDescription = htmlspecialchars($descRow['longDescription']);
    } else {
        $longDescription = "No description available for this island.";
    }
} else {
    echo "Error executing query for longDescription: " . mysqli_error($conn);
    die();
}

$query = "SELECT * FROM islandcontents WHERE islandOfPersonalityID = 
          (SELECT islandOfPersonalityID FROM islandsofpersonality WHERE name = '$islandType')";
$result = executeQuery($query);

$contents = [];
if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $contents[] = $row;
    }
} else {
    echo "Error fetching data: " . mysqli_error($conn);
    die();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animal Island</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="imgs/moreImgs/rowletticn.png">

    <style>
        body, h1 {font-family: 'Pacifico', cursive;}
        h1 {letter-spacing: 6px;}
        .w3-row-padding img {margin-bottom: 12px;}
        .island-description { margin-top: 20px; font-size: 1.2em; line-height: 1.6; }
    </style>
</head>
<body>

<div class="w3-content" style="max-width:1500px">
<header class="w3-panel w3-center w3-opacity" style="padding:128px 16px">
    <h1>Animal Island</h1>

    <div class="island-description">
        <p><?php echo $longDescription; ?></p>
    </div>

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

<div class="island-content">
    <?php if (!empty($contents)): ?>
        <?php foreach ($contents as $content): ?>
            <div class="island-content-card">
                <img src="imgs/islandContentImgs/<?php echo htmlspecialchars($content['image']); ?>" alt="<?php echo htmlspecialchars($content['content']); ?>">
                <h2><?php echo htmlspecialchars($content['content']); ?></h2>
            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <p>No content available for Animal Island.</p>
    <?php endif; ?>
</div>

</body>
</html>
