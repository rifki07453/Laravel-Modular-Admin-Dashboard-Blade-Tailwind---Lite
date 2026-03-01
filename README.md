<div align="center">

# 🧩 Rifki Admin Dashboard (Lite)
### Laravel Blade + Tailwind CSS Modular Admin Panel

<p>
  <img src="https://img.shields.io/badge/Laravel-Framework-red?style=for-the-badge&logo=laravel" />
  <img src="https://img.shields.io/badge/TailwindCSS-UI-blue?style=for-the-badge&logo=tailwindcss" />
  <img src="https://img.shields.io/badge/Version-Lite-lightgrey?style=for-the-badge" />
  <img src="https://img.shields.io/badge/Status-Active-success?style=for-the-badge" />
</p>

<p>
A clean, modular, and modern admin dashboard built with Laravel Blade and Tailwind CSS.  
Designed as a lightweight starter kit for developers, students, and scalable web applications.
</p>

</div>

---

## 🚀 Overview
**Rifki Admin Dashboard (Lite)** is a minimal yet professional admin panel template featuring authentication, modular architecture, reusable components, and a clean neutral UI design.

This Lite version is focused on:
- Clean structure
- Authentication flow
- Dashboard UI foundation
- Reusable layout components
- Developer-friendly architecture

Perfect for:
- Admin panel starter projects
- Student portfolios
- SaaS dashboard prototypes
- Laravel learning with clean structure

---

## ✨ Core Features
- 🔐 Authentication (Login & Register)
- 📊 Admin Dashboard with KPI Cards & Charts
- 🧱 Modular Blade Layout (Reusable Components)
- 📂 Clean Folder Structure (Scalable)
- 🎨 Neutral Minimal UI (Elegant & Professional)
- 📱 Responsive Design (Tailwind CSS)
- 🧠 Clean Architecture (Controller + Service Layer)
- 🧩 Collapsible Sidebar (Default Expanded)

---

## 🧱 Tech Stack
| Technology | Description |
|-----------|-------------|
| Laravel (Blade) | Backend & Templating Engine |
| Tailwind CSS | UI Styling Framework |
| Alpine.js | Lightweight UI Interactions |
| Chart.js | Dashboard Charts |
| Laravel Breeze | Authentication System |

---

Controller → Service → View (Blade Components)

Key principles:
- Thin Controllers
- Service Layer for business logic
- Reusable UI Components
- Scalable folder organization

---

## 📁 Folder Structure (Lite)
├── app/
│ ├── Http/Controllers/
│ │ └── DashboardController.php
│ ├── Services/
│ │ └── DashboardService.php
│ └── Models/
│
├── resources/views/
│ ├── auth/
│ ├── layouts/
│ ├── components/
│ │ ├── layout/
│ │ └── basic/
│ └── dashboard/
│
├── routes/
│ └── web.php


---

## 🔐 Authentication Flow
- Default entry: `/login`
- Protected routes: `/dashboard`
- Powered by Laravel Breeze (with custom UI)

Flow: User → Login → Dashboard (Authenticated)

---

## 🎨 UI & Design Philosophy
Rikan uses a **neutral minimal design system** focused on:
- Clean layout
- Soft color palette
- Professional admin UX
- Non-distracting interface
- Scalable component design

This makes it suitable for multiple use cases including SaaS, admin systems, and internal tools.

---

## 📊 Dashboard Components
The dashboard includes:
- KPI Statistic Cards
- Chart Analytics (Dummy Data)
- Responsive Layout Grid
- Clean Card Components
- Modular Sidebar Navigation

---

## 🧩 Component System (Lite)
Included basic components:
- Layout (Sidebar & Navbar)
- Stat Cards
- Basic UI Elements

> Advanced UI Kit (Buttons, Modals, Tables, Dropdowns) is available in the Pro version.

---

## ⚙️ Installation Guide
### 1. Clone Repository
```bash
git clone https://github.com/rifki07453/Laravel-Modular-Admin-Dashboard-Blade-Tailwind---Lite.git
cd Laravel-Modular-Admin-Dashboard-Blade-Tailwind---Lite
## 🏗️ Project Architecture
This project follows a clean and modular architecture approach:
