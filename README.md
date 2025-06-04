
# 🧾 Customer Management Web App

This is a simple PHP + application to manage customer records. It allows you to add new customers via a Bootstrap 4 modal and displays them in a dynamic, searchable table using DataTables.

https://github.com/user-attachments/assets/acf99c17-bdbd-403d-b2bd-3c41c8a2cd80

---

## 🔧 Tech Stack

- **PHP**
- **MySQL**
- **HTML / Bootstrap 4**
- **JavaScript / jQuery / AJAX**
- **DataTables (for table UI)**

---


## 🛠️ Setup Instructions

### 1. Clone this repository

```bash
git clone https://github.com/lunatic-7/ysuite-ex1.git
```

### 2. Move to your local web server directory

```bash
# Example for XAMPP
mv ysuite-ex1/ C:/xampp/htdocs/
```

### 3. Start MySQL and Apache via XAMPP Control Panel

### 4. Create the Database

1. Open `http://localhost/phpmyadmin`
2. Run the following SQL in the SQL tab:

```sql
CREATE DATABASE web_dev_exercise;

USE web_dev_exercise;

CREATE TABLE customers (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(255),
  address TEXT,
  notes TEXT,
  email VARCHAR(255),
  isd_code VARCHAR(10),
  mobile VARCHAR(20),
  enable_email_notification BOOLEAN NOT NULL DEFAULT FALSE,
  enable_sms_notification BOOLEAN NOT NULL DEFAULT FALSE
);
```

### 5. Visit the App

Open your browser and go to:

```
http://localhost/ysuite-ex1
```

---


## 📁 File Structure

```
/customer-management-app
│
├── index.php              # Main UI
├── db.php                 # DB connection
├── add_customer.php       # Handles insert logic via AJAX
├── fetch_customers.php    # Loads customer table via AJAX
└── README.md
```

---

## 🧑‍💻 Author

**Wasif Nadeem**  
[Portfolio](https://wasif-portfolio.netlify.app)  
Feel free to fork, improve, or reach out!

---
