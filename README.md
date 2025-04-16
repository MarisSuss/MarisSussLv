# Māris Suss Portfolio Website

Welcome to the repository for **marissuss.lv**, my personal portfolio website! This project showcases my skills, projects, and experience as a full-stack developer with a focus on backend development. The website is built with a modern tech stack and includes features like project showcases, a contact form, and an admin panel for managing content.

---

## 🌟 **General Info**

This portfolio website is designed to:

- Showcase my professional projects and skills.
- Provide a platform for potential clients or collaborators to get in touch with me.
- Include an admin panel for managing posts and messages.
- Feature a responsive and visually appealing design.

---

## 🛠️ **Technologies Used**

- **PHP 8.0**: Backend logic and server-side scripting.
- **Laravel 10**: Framework for building scalable and maintainable web applications.
- **MySQL 8.0**: Database for storing posts, messages, and other data.
- **Tailwind CSS**: For styling and responsive design.
- **Alpine.js**: Lightweight JavaScript framework for interactivity.
- **Cloudinary**: For hosting and managing images.

---

## 🚀 **Features**

- **Dynamic Project Showcase**: Displays my projects with descriptions, images, and technologies used.
- **Contact Form**: Allows visitors to send me messages directly.
- **Admin Panel**: Secure area for managing posts and messages.
- **Multi-language Support**: Available in English and Latvian.
- **Responsive Design**: Optimized for both desktop and mobile devices.

---

## 📸 **Showcase**

Here are some example showcases from the website:

### 1. **Login and Registration**
![Login and Registration](https://res.cloudinary.com/de7wfzvii/image/upload/v1743769635/crypto_01_fxlncl.gif)

### 2. **Project Search**
![Project Search](https://res.cloudinary.com/de7wfzvii/image/upload/v1743769634/crypto_02_jo6tfw.gif)

### 3. **Project Details**
![Project Details](https://res.cloudinary.com/de7wfzvii/image/upload/v1743769634/crypto_03_aytmw7.gif)

### 4. **Admin Panel**
![Admin Panel](https://res.cloudinary.com/de7wfzvii/image/upload/v1743769633/crypto_04_cnba7f.gif)

---

## 🛠️ **Setup Instructions**

Follow these steps to set up the project locally:

1. **Clone the Repository**:
   ```bash
   git clone https://github.com/MarisSuss/marissuss.lv
   cd marissuss.lv
   ```

2. **Install Dependencies**:
   ```bash
   composer install
   npm install
   ```

3. **Set Up the Database**:
   - Create a new MySQL database.
   - Import the provided `marissuss.sql` file.

4. **Configure Environment**:
   - Rename `.env.example` to `.env`.
   - Update the database credentials and other environment variables.

5. **Run Migrations**:
   ```bash
   php artisan migrate
   ```

6. **Serve the Application**:
   ```bash
   php artisan serve
   ```

---