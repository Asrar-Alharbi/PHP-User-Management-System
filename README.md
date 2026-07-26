# PHP User Management System

A simple web application built with **HTML**, **PHP**, and **MySQL** that allows users to submit personal information, store it in a database, display all records, and toggle each user's status.

---

## Features

- Add new users
- Store data in MySQL database
- Display all users in a table
- Toggle user status (0 ↔ 1)
- Auto-generated ID using AUTO_INCREMENT

---

## Technologies

- HTML
- PHP
- MySQL
- phpMyAdmin
- InfinityFree

---



## Database Structure

Table: `User`

| Column | Type |
|---------|------|
| ID | INT (AUTO_INCREMENT) |
| Name | VARCHAR |
| Age | INT |
| Status | INT |

---

## How to Run

1. Create a MySQL database.
2. Create the `User` table.
3. Update the database credentials in `n.php` and `toggle.php`.
4. Upload the project to your PHP server (e.g., InfinityFree).
5. Open `f.html`.
6. Add users and manage their status.

---

## Screenshots

### Database

<img width="200" height="200" alt="Database Screenshot" src="https://github.com/user-attachments/assets/0f7ab7af-073c-496c-97f3-0f186ec2fde2" />


### User Table

<img width="200" height="200" alt="User Table Screenshot" src="https://github.com/user-attachments/assets/61b6149c-f315-46df-b7f6-7abd94a5efd7" />



## Challenges

### 1. Database Table Name

**Problem**

The application returned an error because the table name did not match the one used in the SQL queries.

**Solution**

Updated all SQL queries to use the correct table name (`User`).

---

### 2. Status Toggle

**Problem**

The user status needed to switch between `0` and `1` when the button was clicked.

**Solution**

Created a separate `toggle.php` file to update the value and redirect back to the records page.

---

## Future Improvements

- Edit user information
- Delete users
- Search users
- Improve UI using CSS and Bootstrap

-
