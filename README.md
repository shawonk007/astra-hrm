# AstraHRM | Human Resource Management System

##### AstraHRM: Empowering Organizations with Stellar HR Management

AstraHRM is a cutting-edge Human Resource Management System designed to streamline HR operations and enhance workforce management within organizations of all sizes. With a focus on efficiency, innovation, and user experience, AstraHRM provides a comprehensive suite of tools to manage every aspect of HR administration, from employee information and attendance tracking to performance management and beyond.


## Table of Contents

- [Introduction](#introduction)
- [Live Preview](#live-preview)
- [User Interface](#user-interface)
- [Technologies Used](#technologies-used)
- [Admin Panel: AdminLTE Integration](#admin-panel-adminlte-integration)
- [Inspiration and Acknowledgments](#inspiration-and-acknowledgments)
- [Usage](#usage)
- [Key Features](#key-features)
  - [User-Centric Design](#1-user-centric-design)
  - [Employee Self-Service Portal](#2-employee-self-service-portal)
  - [Leave Management](#3-leave-management)
  - [Leave and Attendance](#4-leave-and-attendance)
  - [Attendance Tracking](#5-attendance-tracking)
  - [Performance Management](#6-performance-management)
  - [Training and Development](#7-training-and-development)
  - [Reports and Analytics](#7-reports-and-analytics)
  - [Responsive and Secure](#7-responsive-and-secure)
- [Getting Started](#getting-started)
  - [Prerequisites](#prerequisites)
  - [Installation](#installation)
- [License](#license)
- [Author](#author)


## Introduction

The AstraHRM is a comprehensive and user-friendly application designed to streamline and simplify the process of managing employees within an organization. This system provides an efficient and organized way to handle various employee-related tasks, from onboarding and attendance tracking to performance evaluation and payroll management.


## Technologies Used
The following technologies have been used in the development of AstraHRM:

- **[Laravel](https://laravel.com/)** : A popular PHP web application framework known for its elegant syntax and feature-rich ecosystem.
- **[Laravel Blade](https://laravel.com/)** : The templating engine provided by Laravel for designing and rendering views.
- **[AdminLTE](https://adminlte.io/)**: An open-source admin dashboard template based on Bootstrap.
- **MySQL** : The database management system used to store application data.
- **[Bootstrap](https://getbootstrap.com/)** : A CSS framework for creating responsive and attractive UI components.
- **[FontAwesome](https://fontawesome.com/)**: A popular icon library that provides a wide range of icons for web projects.


## Admin Panel: AdminLTE Integration

AstraHRM incorporates the **AdminLTE** Admin Panel to streamline administrative tasks and provide a user-friendly interface for managing the HRMS. AdminLTE is a flexible and modern admin dashboard template built with Bootstrap and other front-end technologies. Its customizable components and UI elements enable efficient management of various HRMS functionalities.

Get it from here: **[AdminLTE](https://adminlte.io/)**


## Inspiration and Acknowledgments

This project was inspired by and incorporates certain functionalities from the following GitHub repository:

Repository Name : **Employee Management System**
Developed By : **[Mohona Akter](https://github.com/MOHONA678)** and **[Mst Shorifa Akter](https://github.com/Shorifa1234)**

Visit their repository from here : [Employee Management System](https://github.com/MOHONA678/employee-management-system)


## Usage

01. Log in to access the admin dashboard.
02. Add employees and provide necessary details.
03. Manage leave requests, assign tasks, and perform other administrative functions.
04. Employees can log in to view their profiles, submit leave requests, and update task statuses.


## Key Features

- **User-Centric Design**: AstraHRM features a modern and intuitive user interface, ensuring that employees, managers, and HR personnel can effortlessly navigate through functionalities.

- **Employee Self-Service Portal**: Empower employees to manage their personal information, submit leave requests, view payslips, and access important announcements with ease.

- **Leave Management**: AstraHRM offers a robust leave management system, allowing employees to request leaves, managers to approve requests, and HR to maintain accurate leave records.

- **Attendance Tracking**: Keep track of employee attendance and punctuality through digital clock-in/out mechanisms and real-time attendance reports.

- **Performance Management**: Set performance goals, conduct appraisals, and provide feedback to foster professional growth and development.

- **Training and Development**: Facilitate skill enhancement with training course enrollment, progress tracking, and skill assessment tools.

- **Reports and Analytics**: Generate insightful reports on employee data, attendance trends, and performance metrics to inform strategic decision-making.

- **Responsive and Secure**: AstraHRM ensures data security through robust authentication mechanisms, role-based access control, and encrypted communication. The responsive design guarantees access from various devices.


## Getting Started

Follow these instructions to get a copy of the Employee Management System project up and running on your local machine for development and testing purposes.

#### Prerequisites

Before you proceed, ensure you have the following software installed:

- PHP (Version 8.2)
- Composer (Version 2.5)
- MySQL (Version 8.2)
- Laravel (Version 10.16)


#### Installation

01. Clone the **AstraHRM** repository to your local machine using the following command:
```bash
git clone https://github.com/shawonk007/astra-hrm.git
```

02. Navigate to the project directory:
```bash
cd astra-hrm
```

03. Install the required `PHP` dependencies using Composer:
```bash
composer install
```

04. Install `Node.js` dependencies
###### Using npm:
```bash
npm install
```
or,
###### using Yarn:
```bash
yarn
```

05. Generate `Vite` serve manifest:
###### Using npm:
```bash
npm run build
```
or,
###### using Yarn:
```bash
yarn build
```

06. Create a new MySQL database for AstraHRM and update the `.env` file with your database credentials:
```bash
cp .env.example .env
```

07. Generate a unique application key:
```bash
php artisan key:generate
```

08. Run the database migrations and seed the database with initial data:
```bash
php artisan migrate --seed
```

09. Start the development server:
```bash
php artisan serve
```

Congratulations! `AstraHRM` should now be up and running at `http://localhost:8000`.


## License
This AstraHRM is distributed under the `GNU General Public License version 3.0 (GPL-3.0)`. You can find the full text of the license in the `LICENSE` file.


## Author

`AstraHRM` is developed and maintained by **[Muhammad Nasir Uddin Khan Shawon](https://www.shawon-khan.com/)**. You can find more about me on my [GitHub profile](https://github.com/shawonk007). Feel free to reach out via email at `shawonk007@gmail.com` or connect with me on **[LinkedIn](https://www.linkedin.com/in/shawonkhan007)**.