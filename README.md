# Devraj Driving School Online System

## Overview
The **Devraj Driving School Online System** is a comprehensive web application designed to transition the administrative tasks of Devraj Driving School from a traditional paper-based system to a modern online platform. This application aims to streamline processes such as student registration, attendance tracking, fee management, and reporting, thereby enhancing operational efficiency and improving the user experience for both staff and students.

## Table of Contents
- [Features](#features)
- [Installation](#installation)
- [Usage](#usage)
- [Technologies Used](#technologies-used)
- [Database Setup](#database-setup)

## Features
- **User Authentication:** Secure login for administrators, instructors, and students, allowing personalized dashboards and functionalities.
- **Student Management:** Easily add, update, and manage student information, including personal details, driving history, and fees.
- **Attendance Tracking:** Record and manage attendance for each student, generating reports for analysis.
- **Fee Management:** Track fees paid, pending payments, and generate fee reports.
- **Batch Management:** Create and manage multiple driving batches with details such as schedule and instructor assignment.
- **Reporting:** Generate various reports including attendance reports, fee reports, and student performance reports for better insights.
- **Contact Form:** A contact page for potential students to reach out for inquiries and feedback.

## Installation
Follow these steps to set up the application locally:

1. **Clone or Download the Repository:**
   ```bash
   git clone https://github.com/ShailP200/Driving-School-Management-System.git
``
Or download the ZIP file and extract it to your preferred directory.

2. **Set Up a Local Server**: Ensure you have a local server environment like XAMPP or WAMP installed on your machine.

3. Place the extracted folder in the htdocs directory for XAMPP or the www directory for WAMP.
Database Setup:
- Open your preferred database management tool (e.g., phpMyAdmin).
- Import the driving.sql file located in the project directory to create the necessary tables and seed the database with initial data.

4. Run the Application: Open a web browser and navigate to:
    ```bash
   http://localhost/drivingfinal/index.html

## Usage
- After navigating to the application, log in using the credentials provided by the administrator.
- Explore various functionalities available in the dashboard, including managing students, tracking attendance, and generating reports.
- Utilize the help section or user guides for detailed instructions on using specific features.


## Technologies Used
- **Frontend:** HTML, CSS, JavaScript
- **Backend:** PHP
- **Database:** MySQL
- **Development Tools:** XAMPP or WAMP for local server setup

## Database Setup
The `driving.sql` file contains the schema and sample data required to initialize the database. To set it up:
1. Open phpMyAdmin or your preferred MySQL management tool.
2. Create a new database (e.g., `devraj_driving_school`).
3. Import the `driving.sql` file to set up the necessary tables and initial data.







