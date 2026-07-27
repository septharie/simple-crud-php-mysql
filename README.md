# 📝 Simple User Management System (PHP & MySQL PDO)

![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white)
![Bootstrap](https://img.shields.io/badge/Bootstrap-7952B3?style=for-the-badge&logo=bootstrap&logoColor=white)
![License](https://img.shields.io/badge/License-MIT-green?style=for-the-badge)

A foundational web application demonstrating core **CRUD (Create, Read, Update, Delete)** operations built with native **PHP (PDO)** and **MySQL**. Features clean data entry forms, PDO prepared statements for database interactions, and an organized tabular report view.

---

## Preview

![Home Page](screenshots/index.png)

> Additional screenshots are available in the **screenshots/** folder.

---

## ✨ Features

* ➕ **Create Record:** Add new user entries with Name, Email, and ID Number via `input.php`.
* 📋 **Read Record:** View all stored user entries in a clean, styled table view via `report.php`.
* 🔍 **Search & Find:** Search users by name before making updates via `edit.php`.
* ✏️ **Update Record:** Dynamically update user email and ID number via `edit_user.php`.
* ❌ **Delete Record:** Safely remove user records from the database via `delete.php`.

---

## 🛠️ Tech Stack

* **Backend:** PHP 7.x / 8.x
* **Database Driver:** PDO (PHP Data Objects)
* **Database Server:** MySQL / MariaDB
* **Frontend:** HTML5, CSS3, Bootstrap, FontAwesome

---

## 📂 Project Structure

```text
simple-crud-php-mysql/
│
├── assets/                          
│   ├── css/
│   ├── fonts/
│   ├── img/
│   ├── js/
│   ├── connect.php
│   ├── delete.php
│   ├── edit.php
│   ├── edit_user.php
│   ├── index.php
│   ├── input.php
│   └── report.php
│
├── database/                        
│   └── schema.sql
|
├── screenshots/                        
│   ├── edit.png
│   ├── index.png
│   ├── input.png
│   ├── report.png
│   └── search.png
│
├── LICENSE
└── README.md
```

---

## ⚙️ Local Installation & Setup

### Prerequisites
* Local Web Server Environment (e.g., [XAMPP](https://www.apachefriends.org/), [Laragon](https://laragon.org/), or MAMP)
* PHP 7.4 or higher
* MySQL / MariaDB Database

### Step-by-Step Installation

1. **Clone or Download Repository:**
   Place the project folder inside your local server root web directory:
   * **XAMPP:** `C:/xampp/htdocs/simple-crud-php-mysql/`
   * **Laragon:** `C:/laragon/www/simple-crud-php-mysql/`

2. **Import Database:**
   * Open **phpMyAdmin** (`http://localhost/phpmyadmin`).
   * Create a new database named **`simplecrud`**.
   * Select `simplecrud` and go to the **Import** tab.
   * Upload and execute the SQL file located at `database/schema.sql`.

3. **Configure Database Connection:**
   Open `config/connect.php` (or `connect.php`) and verify connection parameters:
   ```php
   <?php
   $db = new PDO('mysql:host=localhost; dbname=simplecrud; charset=utf8mb4', 'root', '');
   ?>
   ```

4. **Run Application:**
   Open your browser and navigate to:
   ```text
   http://localhost/simple-crud-php-mysql/
   ```

---

## 📄 License

This project is licensed under the [MIT License](LICENSE).
