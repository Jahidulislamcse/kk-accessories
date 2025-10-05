# 🌐 MaxOneHS - Hospital Portfolio Website  

[![Laravel](https://img.shields.io/badge/Laravel-12.x-red?logo=laravel)](https://laravel.com)  
[![PHP](https://img.shields.io/badge/PHP-^8.2-blue?logo=php)](https://www.php.net/)  
[![MySQL](https://img.shields.io/badge/MySQL-Database-orange?logo=mysql)](https://www.mysql.com/)  
[![License: MIT](https://img.shields.io/badge/License-MIT-green.svg)](LICENSE)  

MaxOneHS is an online portfolio website for **MaxOne Hospital**, built with **Laravel**.  
It allows users to view hospital branches, explore available services, and get detailed information about MaxOne Hospital in a clean and user-friendly way.  

---

## 🚀 Features  
✨ Key highlights of **MaxOneHS**:  
- 🏥 Display all hospital branches  
- 📄 Hospital Information, Services, and Portfolio Showcase  
- 📍 Branch details with contact information  
- 🖼️ Responsive design (mobile, tablet, desktop)  
- ⚡ Powered by **Laravel 12** for scalability and performance  
- 🎨 Frontend built with **Blade**, **Bootstrap**, **TailwindCSS** (bundled with **Vite**)  

---

## 🛠️ Tech Stack  
- **Framework**: Laravel 12  
- **Backend**: PHP ^8.2  
- **Frontend**: Blade Templates, Bootstrap, Tailwind CSS, Vite  
- **Database**: MySQL  

---

## 📂 Project Structure  
```bash
maxonehs/
├── app/            # Application logic (Models, Controllers, etc.)
├── bootstrap/      # Laravel bootstrap files
├── config/         # Configuration files
├── database/       # Migrations and seeds
├── public/         # Publicly accessible files (index.php, assets)
├── resources/      # Views (Blade templates), CSS, JS
├── routes/         # Web routes
├── storage/        # Cached and compiled files
├── tests/          # Test files
└── vendor/         # Composer dependencies
```

---

## ⚙️ Installation & Setup  

Follow these steps to set up the project locally:  

**Clone the repository**  
```bash
git clone https://github.com/cyrapid/maxoneportfolio.git
cd maxoneportfolio
```

**Install dependencies(Local)**  
```bash
composer install
npm install && npm run dev
```
**Install dependencies(Production)**  
```bash
composer install
npm install && npm run build
```

**Copy environment file**  
```bash
cp .env.example .env
```

**Generate application key**  
```bash
php artisan key:generate
```

**Configure Database (Local)** (in `.env`)  
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=maxonehs
DB_USERNAME=root
DB_PASSWORD=
APP_DEBUG = TRUE
```
**Configure Database (Production)** (in `.env`)  
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_production_database_name
DB_USERNAME=your_production_database_username
DB_PASSWORD=your_production_database_password
APP_DEBUG = FALSE
```

**Run migrations**  
```bash
php artisan migrate
```

**Serve the project (Local)**  
```bash
php artisan serve
```

Now open [http://127.0.0.1:8000](http://127.0.0.1:8000) in your browser 🎉  

---

## 🌍 Live Website  
👉 [https://maxonehs.com](https://maxonehs.com)  

---

## 🤝 Contributing  
We welcome contributions!  

1. Fork the repo  
2. Create a new branch (`git checkout -b feature/your-feature`)  
3. Commit your changes (`git commit -m "Add new feature"`)  
4. Push to the branch (`git push origin feature/your-feature`)  
5. Open a Pull Request  

---

## 📜 License  
This project is licensed under the **MIT License**.  

---
🚑 Built with ❤️ for **MaxOne Hospital**
