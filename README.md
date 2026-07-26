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

## Project Structure

```
Project/
│── f.html          # User input form
│── n.php           # Insert and display data
│── toggle.php      # Toggle user status
```

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

```
<img width="350" height="272" alt="image" src="https://github.com/user-attachments/assets/3944589a-037f-44c4-b31e-9967c59f00fe" />
```

### User Table


```
<img width="200" height="200" alt="image" src="https://github.com/user-attachments/assets/3f50ef0b-c51d-44a1-b42b-f72590dce4e0" />
```

---

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
