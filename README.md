<p align="center"><a href="https://laravel.com" target="_blank"><img src=".\\public\backend\assets\images\paw-removebg-preview.png" width="130" alt="Laravel Logo"></a></p>

<h1 align="center">PawFinder - Pet Adoption Portal</h1>


##### Video link : https://drive.google.com/file/d/1X5hTzswmBkdeWcQpkjLoD-oPtDEe-_b2/view?usp=sharing
PawFinder is an innovative web-based platform designed to simplify the pet adoption process. It connects local animal shelters with potential adopters, providing an easy-to-use platform for shelters to list animals and for adopters to find their ideal pets. Built using the Laravel framework, PawFinder features comprehensive animal profiles, search filters, an adoption application process, and much more.

## Project Overview

**PawFinder** allows shelters to manage their animal listings and adoption applications while giving users (adopters) the ability to search for pets, save their favorites, and apply for adoption. The goal is to streamline the pet adoption process and help more pets find their forever homes.

## Key Features

- **Shelter Registration and Management**: Animal shelters can register, manage profiles, and list pets available for adoption.
- **Animal Profiles**: Detailed profiles with photos, videos, breed, age, health status, and other necessary details.
- **Search and Filter**: Users can search for pets based on breed, age, size, gender, location, and other filters.
- **User Accounts**: Adopters can create accounts, save favorite animals, track adoption applications, and receive notifications.
- **Adoption Application**: Adopters can submit online applications with integrated status tracking.
- **Admin Dashboard**: Comprehensive admin dashboard for managing shelters, users, and animal listings.

## Technologies Used

- **Framework**: Laravel (PHP)
- **Database**: MySQL
- **Authentication**: Laravel Breeze
- **Frontend**: Blade templates, Bootstrap
- **Backend**: PHP, Laravel
- **Version Control**: Git

## Setup Instructions

To set up this project on your local machine, follow these steps:

1. **Clone the Repository**
   ```bash
   git clone https://github.com/Jannatul-Faria/Paw-finder.git
   cd pawfinder
   ```

2. **Install Dependencies**
   Run the following command to install PHP and JavaScript dependencies:
   ```bash
   composer install
   npm install && npm run dev
   ```

3. **Configure Environment Variables**
   Create a `.env` file by copying `.env.example`, and configure the database and other environment variables:
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

   Update the following lines in the `.env` file with your database connection details:

   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=pawfinder
   DB_USERNAME=root
   DB_PASSWORD=your-password
   ```

4. **Run Migrations and Seeders**
   Run the database migrations and seeders to set up the database schema and any initial data.
   ```bash
   php artisan migrate --seed
   ```

5. **Serve the Application**
   Run the application locally:
   ```bash
   php artisan serve
   ```

6. **Access the Application**
   Open a web browser and go to `http://127.0.0.1:8000` to access the PawFinder application.

## Usage

### Admin Role
Admins have access to manage users, shelters, animal listings, and generate reports from the admin dashboard.

### Adopter Role
Adopters can create accounts, browse animals, apply for adoption, and track the status of their applications.

## Database Schema
<img src=".\\public\backend\assets\images\pawfinder.png" width="" alt="Laravel Logo"></a></p>
The MySQL database for PawFinder includes the following key tables:


- `users`: Stores user information (admin, shelters, adopters).
- `animals`: Stores animal details such as breed, age, size, photos, videos, and more.
- `adoption_applications`: Stores adoption application data and tracks its status.

  
You can find the database schema and relationships in the `migrations` folder.

## Security and Performance

- **Scalability**: Designed to handle a growing number of users and animal listings.
- **Response Time**: All pages aim to load within 2 seconds under normal conditions.
- **Data Protection**: User data is encrypted and securely stored.
- **Access Control**: Role-based access control for admins, shelters, and adopters.



## Contact

For any inquiries or contributions, please contact:
- **Name**: Jannatul Faria
- **Email**: kairasana8@gmail.com
