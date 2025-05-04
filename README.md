

---

# Digital Voting System

The **Digital Voting System** is a PHP-based application designed to facilitate secure and efficient online voting. This platform provides a user-friendly experience for voters, administrators, and election managers. It incorporates technologies like JavaScript, PHP, and CSS to create a responsive and interactive digital voting solution. 

---

## Table of Contents
- [Features](#features)
- [Technologies Used](#technologies-used)
- [Installation](#installation)
- [Usage](#usage)
- [File Structure](#file-structure)
- [Contributing](#contributing)
- [License](#license)

---

## Features
- **Voter Registration**: Allow users to register securely with unique credentials.
- **Authentication**: Login functionality for both voters and administrators.
- **Voting System**:
  - Cast votes securely.
  - Ensure a single vote per user.
- **Admin Dashboard**:
  - Manage voters and candidates.
  - Monitor and tally votes in real-time.
- **Election Results**: Display results dynamically with real-time updates.
- **Responsiveness**: Fully responsive design to support both desktop and mobile devices.

---

## Technologies Used
- **PHP**: Backend logic and server-side processing.
- **JavaScript**: Client-side interactivity and dynamic functionality.
- **CSS**: Styling and layout design.
- **HTML**: Structuring the web pages.
- **Hack**: Enhancements for PHP-based functionality.

---

## Installation
Follow these steps to set up the Digital Voting project locally:

1. **Clone the Repository**:
   ```bash
   git clone https://github.com/karimshaban01/digital-voting.git
   ```
2. **Navigate to the Project Directory**:
   ```bash
   cd digital-voting
   ```
3. **Set Up a Local Server**:
   - Install XAMPP (or any LAMP/WAMP server).
   - Place the project folder inside the `htdocs` directory (if using XAMPP).

4. **Create a Database**:
   - Access `phpMyAdmin` (usually available at `http://localhost/phpmyadmin`).
   - Create a new database (e.g., `digital_voting`).
   - Import the provided `.sql` file into the database.

5. **Configure the Database Connection**:
   - Locate the configuration file (e.g., `config.php`).
   - Update the database credentials:
     ```php
     $host = 'localhost';
     $user = 'root';
     $password = '';
     $dbname = 'digital_voting';
     ```

6. **Run the Application**:
   - Open your browser and navigate to `http://localhost/digital-voting`.

---

## Usage
### For Admins:
1. Log in to the admin dashboard.
2. Add, edit, or delete voter and candidate information.
3. Monitor the election process and view real-time results.

### For Voters:
1. Register and log in with your credentials.
2. View the list of available candidates.
3. Cast your vote securely.
4. View confirmation of your vote.

---

## File Structure
Below is an overview of the major files and directories in the project:

- **`index.php`**: Entry point of the application.
- **`/config`**: Configuration files for database and application settings.
- **`/assets`**: Static files (images, CSS, JavaScript).
- **`/templates`**: HTML templates for the frontend.
- **`/includes`**: Reusable PHP components (e.g., header, footer, database connection).
- **`/admin`**: Admin dashboard for managing the voting process.

---

## Contributing
Contributions are welcome! To contribute:

1. Fork the repository.
2. Create a new branch for your feature or bug fix:
   ```bash
   git checkout -b feature-name
   ```
3. Commit your changes:
   ```bash
   git commit -m "Add feature or fix description"
   ```
4. Push to your fork and submit a pull request.

---

## License
This project is licensed under the [MIT License](LICENSE).

---
