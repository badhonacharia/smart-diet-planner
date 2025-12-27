# 🥗 Smart Diet Planner

![PHP](https://img.shields.io/badge/PHP-8.x-blue?logo=php)
![MySQL](https://img.shields.io/badge/MySQL-8.x-orange?logo=mysql)
![Tailwind CSS](https://img.shields.io/badge/Tailwind_CSS-3.x-38B2AC?logo=tailwind-css)
![License](https://img.shields.io/badge/License-MIT-green)

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

### 🗄️ Database Setup

#### Required Tables
- `foods`
- `admins`
---

## 🛠️ Tech Stack
- **Frontend:** HTML, Tailwind CSS
- **Backend:** PHP
- **Database:** MySQL
- **Authentication:** PHP Sessions, Password Hashing
- **Server:** Apache / Nginx
---
## 📁 Project Structure
```text
diet-planner/
├── index.php            # User input form
├── result.php           # Diet plan output
│
├── admin/
│   ├── login.php        # Admin login
│   ├── logout.php       # Admin logout
│   ├── auth.php         # Auth middleware
│   ├── index.php        # Admin dashboard
│   ├── add-food.php
│   ├── edit-food.php
│   └── delete-food.php
│
├── config/
│   └── db.php           # Database connection
│
├── includes/
│   ├── header.php
│   ├── footer.php
│   └── functions.php   # Diet logic
│
├── assets/
│   ├── css/
│   └── images/
│
└── README.md
```
---
## ⚠️ Disclaimer

This application provides general diet suggestions only. It is not a medical or professional health advice tool. Always consult a qualified healthcare professional for medical or dietary decisions.

---
## 🌱 Future Improvements
- Weekly diet plans
- User accounts
- PDF diet download
- AJAX-based UI (no page reload)
- More country-based food databases
- Activity-level based calorie calculation
---
## 📄 License
This project is licensed under the **MIT License**.
You are free to:
- Use the project for personal or commercial purposes
- Modify and distribute the code
- Use it in your own projects with proper attribution
See the [LICENSE](LICENSE) file for full details.
---

## 👤 Author

Developed by **[Badhon Acharia](https://octteen.com/badhonacharia)**
