-- Create the database
CREATE DATABASE ipam_db;

-- Create a user (password 'securepass')
CREATE USER 'ipam_user'@'localhost' IDENTIFIED BY 'securepass';
GRANT ALL PRIVILEGES ON ipam_db.* TO 'ipam_user'@'localhost';
FLUSH PRIVILEGES;

-- Switch to the database and create the table
USE ipam_db;
CREATE TABLE devices (
    id INT AUTO_INCREMENT PRIMARY KEY,
    hostname VARCHAR(50) NOT NULL,
    ip_address VARCHAR(15) NOT NULL,
    mac_address VARCHAR(17),
    description TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
exit