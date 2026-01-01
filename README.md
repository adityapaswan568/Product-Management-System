# Product Management System

A web-based Product Management Application built with **PHP** and **MySQL**. This system allows users to manage product inventories, including adding, updating, and deleting products.

## ✨ Features
- **User Authentication**: Secure login system for administrators.
- **Dashboard**: Centralized hub to access all features.
- **Product Management**:
  - Add new products.
  - View product lists with details (Price, Quantity).
  - Edit existing product information.
  - Delete products.
- **Modern UI**: Clean and responsive interface.

---

## 🚀 Setup & Installation

### Prerequisites
- **XAMPP**, **WAMP**, or any local server environment containing **PHP** and **MySQL**.
- A web browser.

### Database Setup (Required for both methods)
1.  Start the **MySQL** module in your XAMPP/WAMP control panel.
2.  Open your browser and navigate to `http://localhost/phpmyadmin`.
3.  Create a new database named **`product1`**.
4.  Select the `product1` database and go to the **Import** tab.
5.  Click **Choose File** and select the `127_0_0_1.sql` file located in this project folder.
6.  Click **Go** to import the database schema and data.

---

## 💻 How to Run

### Method 1: Using PHP Built-in Server (Recommended)
This method allows you to run the app without moving folders.

1.  Open a terminal (Command Prompt or PowerShell) inside this project folder.
2.  Run the following command:
    ```bash
    php -S localhost:8000
    ```
3.  Open your web browser and go to:
    **[http://localhost:8000/Login.php](http://localhost:8000/Login.php)**

### Method 2: Using XAMPP/WAMP Apache
1.  Move this entire folder (`Aditya BCA 1_`) to your server's public directory:
    - **XAMPP**: `C:\xampp\htdocs\`
    - **WAMP**: `C:\wamp64\www\`
2.  Start the **Apache** module in your control panel.
3.  Open your web browser and go to:
    `http://localhost/Aditya BCA 1_/Login.php`
    *(Note: Adjust the URL if you renamed the folder).*


## 📂 Project Structure
- `Login.php`: User authentication page.
- `Dashboard.php`: Main control panel after login.
- `Insert.php`: Form to add new products.
- `Show.php`: List view of all products with Delete/Edit options.
- `DataShow.php`: Interface for editing product details.
- `Connect.php`: Database connection configuration.
- `style.css`: Main stylesheet for the application.
