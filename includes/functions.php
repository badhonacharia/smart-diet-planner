<?php

function calculateCalories($height, $weight) {
    $height_m = $height / 100;
    $bmi = $weight / ($height_m * $height_m);

    if ($bmi < 18.5) return 2200;
    if ($bmi <= 24.9) return 2000;
    return 1800;
}

function getMeal($conn, $country, $diet, $meal) {
    $stmt = $conn->prepare("
        SELECT food_name 
        FROM foods 
        WHERE country=? AND diet_type=? AND meal_type=? 
        ORDER BY RAND() LIMIT 1
    ");
    $stmt->bind_param("sss", $country, $diet, $meal);
    $stmt->execute();
    $result = $stmt->get_result();
    return $result->fetch_assoc()['food_name'] ?? 'Not Available';
}
