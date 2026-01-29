# Simple IPAM (IP Address Management) Tool

A lightweight web-based inventory system for Network Engineers. Built with PHP, MySQL, and Bootstrap on Ubuntu Server.

## 🚀 Features
* **Add Devices:** Quickly register new network assets (Hostname, IP, MAC).
* **Visual Dashboard:** Clean UI powered by Bootstrap 5.
* **Database Driven:** Real-time CRUD operations using MySQL.
* **Linux Native:** Designed to run on a standard LAMP stack.

## 🛠️ Tech Stack
* **OS:** Ubuntu Server 24.04 LTS
* **Web Server:** Apache2
* **Database:** MariaDB (MySQL)
* **Language:** PHP 8.1+
* **Frontend:** HTML5, Bootstrap 5

## 📸 Screenshots
### Dashboard
![Dashboard](/images/dashboard.PNG) 

### Database View
![Database](/images/database.PNG)

## ⚙️ How to Run
1. Install LAMP stack on Ubuntu: `sudo apt install apache2 mariadb-server php php-mysql`
2. Import the database schema from `schema.sql`.
3. Update `db.php` with your database credentials.
4. Place files in `/var/www/html/`.
