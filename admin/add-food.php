<?php
include 'auth.php';
include '../config/db.php';
include '../includes/header.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $stmt = $conn->prepare("
    INSERT INTO foods (country, diet_type, meal_type, food_name, calories)
    VALUES (?, ?, ?, ?, ?)
  ");
  $stmt->bind_param(
    "ssssi",
    $_POST['country'],
    $_POST['diet'],
    $_POST['meal'],
    $_POST['food'],
    $_POST['calories']
  );
  $stmt->execute();
  header("Location: index.php");
}
?>

<div class="max-w-xl mx-auto p-6 bg-white rounded-xl shadow">
  <h2 class="text-xl font-bold mb-4">Add Food</h2>

  <form method="POST" class="space-y-4">

    <select name="country" required class="w-full p-3 border rounded-lg">
      <option value="">Country</option>
      <option>Bangladesh</option>
      <option>India</option>
    </select>

    <select name="diet" required class="w-full p-3 border rounded-lg">
      <option value="">Diet Type</option>
      <option value="veg">Vegetarian</option>
      <option value="nonveg">Non-Vegetarian</option>
    </select>

    <select name="meal" required class="w-full p-3 border rounded-lg">
      <option value="">Meal Type</option>
      <option value="breakfast">Breakfast</option>
      <option value="lunch">Lunch</option>
      <option value="dinner">Dinner</option>
    </select>

    <input type="text" name="food" placeholder="Food Name" required class="w-full p-3 border rounded-lg">

    <input type="number" name="calories" placeholder="Calories" required class="w-full p-3 border rounded-lg">

    <button class="w-full bg-green-600 text-white py-3 rounded-lg">
      Save Food
    </button>

  </form>
</div>

<?php include '../includes/footer.php'; ?>
