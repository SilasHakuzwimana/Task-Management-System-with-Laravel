# Task Management System with Laravel

## Overview
This is a **Task Management System** built with Laravel, allowing users to create, update, and delete tasks. It follows **MVC architecture**, utilizing Laravel's built-in features like Eloquent ORM, Blade templating, and middleware for authentication and authorization.

## Features
- ✅ User authentication (registration, login, logout)
- 📋 Create, edit, update, and delete tasks
- 📅 Assign due dates to tasks
- ✅ Mark tasks as completed
- 🔍 View all tasks in a user-friendly interface
- 🛠 Built with Laravel 9 and MySQL

## Installation
### Prerequisites
Ensure you have the following installed:
- **PHP 8+**
- **Composer**
- **MySQL / MariaDB**
- **Laravel 9**
- **Git**

### Setup Steps
1. **Clone the repository**
   ```sh
   git clone https://github.com/SilasHakuzwimana/Task-Management-System-with-Laravel.git
   cd Task-Management-System-with-Laravel
   ```

2. **Install dependencies**
   ```sh
   composer install
   ```

3. **Set up the environment**
   ```sh
   cp .env.example .env
   php artisan key:generate
   ```

4. **Configure database** (edit `.env` file)
   ```ini
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=taskmanager
   DB_USERNAME=root
   DB_PASSWORD=
   ```

5. **Run migrations**
   ```sh
   php artisan migrate
   ```

6. **Start the development server**
   ```sh
   php artisan serve
   ```
   The app will be available at `http://127.0.0.1:8000`

## Usage
1. **Register/Login** a user.
2. Create tasks with a **title, description, and due date**.
3. Edit or delete tasks as needed.
4. View all tasks in a list.

## API Routes
| Method | URI | Description |
|--------|-----|-------------|
| GET | `/tasks` | List all tasks |
| GET | `/tasks/{id}` | Show a single task |
| POST | `/tasks` | Create a new task |
| PUT/PATCH | `/tasks/{id}` | Update a task |
| DELETE | `/tasks/{id}` | Delete a task |

## License
This project is open-source and available under the **MIT License**.

---
Made with ❤️ by **[Silas Hakuzwimana](https://github.com/SilasHakuzwimana)**
