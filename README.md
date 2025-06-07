<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# 📘 Real Estate Marketplace Platform - Backend (Laravel)

## 📂 Project Overview
This is the backend repository for the **Real Estate Marketplace Platform (REMP)**, a web-based application built to connect property buyers, sellers, and real estate agents. The backend is developed using **Laravel 10** and serves a RESTful API consumed by the Angular frontend.

## Table of Contents

- [Features](#features)
- [Tech Stack](#tech-stack)
- [Installation](#installation)
- [Environment Configuration](#environment-configuration)
- [Database Migration](#database-migration)
- [API Authentication](#api-authentication)
- [Running the Server](#running-the-server)
- [API Documentation](#api-documentation)
- [Project Structure](#project-structure)
- [Contributing](#contributing)
- [License](#license)

---

## 🚀 Features
- JWT-based user authentication via Laravel Sanctum
- Role-based access for Admin, Buyer, and Seller/Agent
- CRUD operations for property listings
- Image/video uploads
- Messaging system for inquiries
- Reviews and ratings
- Notifications (email and push)
- Admin dashboard with user and listing management
- Analytics and reporting endpoints



## ## Tech Stack

- **Language**: PHP 8+
- **Framework**: Laravel 10
- **Database**: MySQL or PostgreSQL
- **Authentication**: Laravel Sanctum (JWT)
- **ORM**: Eloquent
- **API**: RESTful
- **File Storage**: Local/Cloud via Laravel Filesystem

---

 
## Installation

1. Clone the repository:

```bash
git clone https://github.com/your-username/real-estate-backend.git
cd real-estate-backend

2. Install dependencies:

```bash
composer install

3. Copy .env.example to .env and set your environment variables:

```bash
cp .env.example .env

4. Generate application key:

```bash
php artisan key:generate



