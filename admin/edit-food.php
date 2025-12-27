<?php
include 'auth.php';
include '../config/db.php';
include '../includes/header.php';

$id = $_GET['id'];
$food = $conn->query("SELECT * FROM foods WHERE id=$id")->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $stmt = $conn->prepare("
    UPDATE foods SET country=?, diet_type=?, meal_type=?, food_name=?, calories=?
    WHERE id=?
  ");
  $stmt->bind_param(
    "ssssii",
    $_POST['country'],
    $_POST['diet'],
    $_POST['meal'],
    $_POST['food'],
    $_POST['calories'],
    $id
  );
  $stmt->execute();
  header("Location: index.php");
}
?>

<div class="max-w-xl mx-auto p-6 bg-white rounded-xl shadow">
  <h2 class="text-xl font-bold mb-4">Edit Food</h2>

  <form method="POST" class="space-y-4">

    <input name="country" value="<?= $food['country'] ?>" class="w-full p-3 border rounded-lg">

    <input name="diet" value="<?= $food['diet_type'] ?>" class="w-full p-3 border rounded-lg">

    <input name="meal" value="<?= $food['meal_type'] ?>" class="w-full p-3 border rounded-lg">

    <input name="food" value="<?= $food['food_name'] ?>" class="w-full p-3 border rounded-lg">

    <input name="calories" value="<?= $food['calories'] ?>" class="w-full p-3 border rounded-lg">

    <button class="w-full bg-blue-600 text-white py-3 rounded-lg">
      Update Food
    </button>

  </form>
</div>

<?php include '../includes/footer.php'; ?>
