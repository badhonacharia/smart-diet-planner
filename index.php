<?php include 'includes/header.php'; ?>

<div class="flex items-center justify-center min-h-screen">
  <div class="bg-white p-8 rounded-2xl shadow-xl w-full max-w-xl">

    <h1 class="text-2xl font-bold text-center mb-6">🍽️ Smart Diet Planner</h1>

    <form action="result.php" method="POST" class="space-y-4">

      <select name="country" required class="w-full p-3 border rounded-lg">
        <option value="">Select Country</option>
        <option value="Bangladesh">Bangladesh</option>
        <option value="India">India</option>
      </select>

      <input type="number" name="height" placeholder="Height (cm)" required class="w-full p-3 border rounded-lg">

      <input type="number" name="weight" placeholder="Weight (kg)" required class="w-full p-3 border rounded-lg">

      <input type="number" name="age" placeholder="Age" required class="w-full p-3 border rounded-lg">

      <select name="diet" required class="w-full p-3 border rounded-lg">
        <option value="">Diet Preference</option>
        <option value="veg">Vegetarian</option>
        <option value="nonveg">Non-Vegetarian</option>
      </select>

      <button class="w-full bg-green-600 text-white py-3 rounded-lg hover:bg-green-700">
        Generate Diet Plan
      </button>

    </form>
  </div>
</div>

<?php include 'includes/footer.php'; ?>
