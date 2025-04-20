# 💬 Feedback System - BIT102 Project

**Course**: BIT102 Web Programming  
**Project Title**: Demuore Art Feedback Platform  
**Student**: ZHANGWENZHE 
**Student ID**: B2400713

---

## 🌐 Overview

This project is a backend-enabled feedback system for the fictional "Demuore Art" gallery. It allows users to submit comments and ratings along with optional images. The system features an admin interface for moderating user-submitted feedback before they are publicly displayed.

---

## ✅ Key Features

- Submit feedback with name, ticket number, rating, comment, and image  
- Frontend image preview before submission  
- Admin panel for approving or deleting comments  
- Only approved comments are shown on the main page  
- MySQL database integration using PHP  
- Image upload restrictions (size and file type)  

---

## ⚙️ Technologies Used

- **Frontend**: HTML5, CSS3, JavaScript  
- **Backend**: PHP 8.x  
- **Database**: MySQL 8.0  
- **Server**: AMPPS (Apache + MySQL)

---

# Database schema

---

## 🛠 Installation & Usage

1. Place the `feedback/` folder inside `AMPPS/www/`
2. Start AMPPS → Enable Apache & MySQL
3. Import `create_feedback_table.sql` into phpMyAdmin
4. Set your database password in `connect.php` if required
5. Visit the site in browser:
   - Main: `http://localhost/feedback/feedback.php`
   - Admin: `http://localhost/feedback/admin.php`

---

## 🔐 Security & Validation

- Prepared SQL statements to prevent injection  
- `htmlspecialchars()` for XSS protection  
- Limits image types to JPG, PNG, and GIF  
- Max upload size: 2MB

