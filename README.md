<div align="center">

![Laravel](https://img.shields.io/badge/Laravel-FF2D20?style=flat-square&logo=laravel&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-4479A1?style=flat-square&logo=mysql&logoColor=white)
![Bootstrap](https://img.shields.io/badge/Bootstrap-5-7952B3?style=flat-square&logo=bootstrap&logoColor=white)

# Employee Management System

**Laravel attendance tracking with automated status calculation and CSV export.**

</div>

---

## Features

- 👥 Employee directory — add, edit, manage profiles
- ✅ Daily attendance recording (present, absent, late, excused)
- 🤖 Automatic status calculation based on check-in rules
- 📤 One-click CSV export of filtered reports
- 🔎 Filter by date range, department, or status

## Tech Stack

Laravel · PHP 8.2+ · MySQL · Bootstrap 5 · Blade

## Installation

```bash
git clone https://github.com/zinnewassim/employee-management-system.git && cd employee-management-system
composer install && npm install && npm run build
cp .env.example .env && php artisan key:generate
php artisan migrate --seed && php artisan serve
```

---
**Author:** [Wassim Azinne](https://github.com/zinnewassim)
