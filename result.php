<?php
include 'config/db.php';
include 'includes/functions.php';
include 'includes/header.php';

$country = $_POST['country'];
$diet    = $_POST['diet'];
$height  = $_POST['height'];
$weight  = $_POST['weight'];

$calories = calculateCalories($height, $weight);

$breakfast = getMeal($conn, $country, $diet, 'breakfast');
$lunch     = getMeal($conn, $country, $diet, 'lunch');
$dinner    = getMeal($conn, $country, $diet, 'dinner');
?>

<div class="max-w-xl mx-auto bg-white mt-10 p-8 rounded-2xl shadow-xl">
  <h2 class="text-xl font-bold mb-4">Your Personalized Diet Plan</h2>

  <p class="mb-4 text-gray-700">
    Estimated Daily Calories: 
    <span class="font-semibold"><?= $calories ?> kcal</span>
  </p>

  <div class="space-y-3">
    <p><strong>Breakfast:</strong> <?= $breakfast ?></p>
    <p><strong>Lunch:</strong> <?= $lunch ?></p>
    <p><strong>Dinner:</strong> <?= $dinner ?></p>
  </div>

  <a href="http://localhost/smart-diet/" class="block text-center mt-6 text-green-600 font-semibold">
    Create Another Plan
  </a>
</div>

<?php include 'includes/footer.php'; ?>
