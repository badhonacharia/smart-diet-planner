<?php
include 'auth.php';
include '../config/db.php';
include '../includes/header.php';

$result = $conn->query("SELECT * FROM foods ORDER BY country, meal_type");
?>

<div class="flex justify-between items-center mb-6">
  <h1 class="text-2xl font-bold">Admin – Food Manager</h1>
  <div class="space-x-3">
    <span class="text-sm text-gray-600">
      <?= $_SESSION['admin_username']; ?>
    </span>
    <a href="logout.php" class="bg-red-600 text-white px-4 py-2 rounded-lg">
      Logout
    </a>
  </div>
</div>


<div class="max-w-6xl mx-auto p-6">
  <div class="flex justify-between items-center mb-6">
    <h1 class="text-2xl font-bold">Admin – Food Manager</h1>
    <a href="add-food.php" class="bg-green-600 text-white px-4 py-2 rounded-lg">
      + Add Food
    </a>
  </div>

  <div class="overflow-x-auto bg-white rounded-xl shadow">
    <table class="min-w-full text-sm">
      <thead class="bg-gray-100">
        <tr>
          <th class="p-3">Country</th>
          <th class="p-3">Diet</th>
          <th class="p-3">Meal</th>
          <th class="p-3">Food Name</th>
          <th class="p-3">Calories</th>
          <th class="p-3">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php while ($row = $result->fetch_assoc()) { ?>
        <tr class="border-t">
          <td class="p-3"><?= $row['country'] ?></td>
          <td class="p-3"><?= $row['diet_type'] ?></td>
          <td class="p-3"><?= $row['meal_type'] ?></td>
          <td class="p-3"><?= $row['food_name'] ?></td>
          <td class="p-3"><?= $row['calories'] ?></td>
          <td class="p-3 space-x-2">
            <a href="edit-food.php?id=<?= $row['id'] ?>" class="text-blue-600">Edit</a>
            <a href="delete-food.php?id=<?= $row['id'] ?>" class="text-red-600"
               onclick="return confirm('Delete this food?')">Delete</a>
          </td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</div>

<?php include '../includes/footer.php'; ?>
