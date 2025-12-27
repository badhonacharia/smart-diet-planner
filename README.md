# 🥗 Smart Diet Planner

Smart Diet Planner is a web-based application that generates personalized daily diet plans based on user input such as height, weight, age, country, and dietary preference (Vegetarian or Non-Vegetarian).

The system provides **country-based food suggestions** (currently supported: Bangladesh and India) and includes a secure **Admin Panel** for managing food data.

---

## 🚀 Features

### User Features
- Input height, weight, age, country, and diet preference
- Automatic calorie estimation
- Personalized 3-meal diet plan:
  - Breakfast
  - Lunch
  - Dinner
- Country-specific food suggestions
- Clean, modern, mobile-friendly UI

### Admin Features
- Secure admin login & authentication
- Add, edit, delete food items
- Manage foods by:
  - Country
  - Diet type (Veg / Non-Veg)
  - Meal type (Breakfast / Lunch / Dinner)
- Session-based access protection

---

## 🛠️ Tech Stack

- **Frontend:** HTML, Tailwind CSS
- **Backend:** PHP
- **Database:** MySQL
- **Authentication:** PHP Sessions, Password Hashing
- **Server:** Apache / Nginx

---

## 📁 Project Structure
diet-planner/
│
├── index.php # User input form
├── result.php # Diet plan output
│
├── admin/
│ ├── login.php # Admin login
│ ├── logout.php # Admin logout
│ ├── auth.php # Auth middleware
│ ├── index.php # Admin dashboard
│ ├── add-food.php
│ ├── edit-food.php
│ └── delete-food.php
│
├── config/
│ └── db.php # Database connection
│
├── includes/
│ ├── header.php
│ ├── footer.php
│ └── functions.php # Diet logic
│
├── assets/
│ ├── css/
│ └── images/
│
└── README.md

