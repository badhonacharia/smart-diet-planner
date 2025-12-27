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

## 🌐 Live Demo

🚧 Live demo will be available soon.

For now, you can run the project locally by following the setup instructions below.

### 🖥️ Local Demo Setup

1. Clone the repository
2. Move the project to your server root (e.g. `htdocs`)
3. Create a MySQL database
4. Import the provided SQL file
5. Update database credentials in `config/db.php`
6. Open the project in your browser

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

