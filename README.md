<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Admin Panel for Kantor Pertanahan Kabupaten Gresik

## Table of Contents
1. [Overview](#overview)
2. [Features](#features)
3. [Technologies Used](#technologies-used)
4. [Setup Instructions](#setup-instructions)
5. [Usage](#usage)
6. [Application Flow](#application-flow)
7. [File Structure](#file-structure)
8. [Screenshots](#screenshots)
9. [Lisence](#lisence)

---

## Overview
Admin Panel for managing the web application of Kantor Pertanahan Kabupaten Gresik. This platform simplifies administrative tasks with intuitive navigation and efficient workflows.

---

## Features
- **Authentication**: Admin login/logout with session management.
- **Default Laravel Auth**: Pre-built authentication system for both admin and users, including registration, login, and password reset.
- **Dashboard**: Displays key metrics and performance indicators.
- **Complaint Management (Pengaduan)**: View and manage user-submitted complaints.
- **User Default Page**: Users can check the status of their documents and file complaints.
- **Content Navigation**: Access management sections such as Profile, Cek Berkas, and more.
- **Responsive Design**: Fully functional across devices.

---

## Technologies Used
- **Frontend**: HTML, CSS, TailwindCSS
- **Backend**: Laravel 10
- **Database**: MySQL
- **Authentication**: Laravel Sanctum & Default Laravel Auth

---

## Setup Instructions
1. **Clone the Repository**:
   ```bash
   git clone https://github.com/your-repo/admin-panel.git
   ```

2. **Navigate to Project Directory**:
   ```bash
   cd admin-panel
   ```

3. **Install Dependencies**:
   ```bash
   composer install
   npm install
   ```

4. **Configure Environment**:
   - Copy `.env.example` to `.env`:
     ```bash
     cp .env.example .env
     ```
   - Update database and other configurations in the `.env` file.

5. **Generate Application Key**:
   ```bash
   php artisan key:generate
   ```

6. **Run Migrations**:
   ```bash
   php artisan migrate
   ```

7. **Start the Development Server**:
   ```bash
   php artisan serve
   ```
   The application will be available at `http://127.0.0.1:8000`.

---

## Usage
1. Navigate to the Admin Login Page:
   ```
   http://127.0.0.1:8000/admin/login
   ```
2. Enter your admin credentials to log in.
3. Use the sidebar for navigation between sections such as Dashboard, Pengaduan, and Profile.
4. To logout, click the "Logout" button in the sidebar.

---

## Application Flow
1. **Homepage**:
   - Users are greeted with a welcome message, banner, and main navigation (Beranda, Tentang Kami, Publikasi, Layanan).
   - Users can log in and access the "Cek Berkas" in "Layanan" section to check the status of their submitted documents.
   - Users can also file and track complaints through the "Pengaduan" section.
   - The "Login" button is located in the top-right corner, allowing admin access.

2. **Login Page**:
   - Admin enters their username/email and password to authenticate.
   - Upon successful login, the admin is redirected to the dashboard.

3. **Dashboard**:
   - Admin can view key metrics and manage various sections such as Pengaduan and Profile.
   - Includes options to log out securely.

---

## File Structure
```
admin-panel/
├── app/
├── bootstrap/
├── config/
├── database/
├── public/
├── resources/
│   ├── views/
│   │   ├── admin/
│   │   │   ├── dashboard.blade.php
│   │   │   ├── login.blade.php
│   │   │   ├── pengaduan.blade.php
│   │   ├── layanan/
│   │   │   ├── cekberkas.blade.php
│   │   │   ├── layanan.blade.php
│   │   │   ├── pengaduan.blade.php
│   │   ├── beranda.blade.php
│   │   ├── publikasi.blade.php
│   │   ├── tentang.blade.php
├── routes/
│   ├── api.php
│   ├── web.php
├── .env
├── composer.json
├── package.json
```

---

## Screenshots
### 1. Homepage
![Homepage](#)

### 2. Login Page
![Login Page](#)

### 3. Dashboard
![Dashboard](#)

---

## License
This project is licensed under the [MIT License](LICENSE).

