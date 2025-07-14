
# CRUD

A simple CRUD (Create, Read, Update, Delete) application built with PHP.

## Key Features & Benefits

*   **Basic CRUD Operations:** Implements all fundamental CRUD functionalities for managing data.
*   **Simple and Easy to Understand:** The codebase is designed for clarity and ease of understanding, making it suitable for beginners learning PHP.
*   **Database Interaction:** Demonstrates how to connect and interact with a database using PHP.
*   **Modular Structure:** Uses separate files for different operations, promoting code organization.

## Prerequisites & Dependencies

*   **PHP:** Version 7.0 or higher.
*   **Web Server:** Apache or Nginx.
*   **Database:** MySQL (or any other database supported by PHP).
*   **Database Credentials:**  You will need a database name, username, and password.

## Installation & Setup Instructions

1.  **Clone the repository:**

    ```bash
    git clone [your_repository_url]
    cd CRUD
    ```

2.  **Set up the database:**

    *   Create a database in your MySQL server (e.g., `crud_db`).
    *   Modify the `koneksi.php` file with your database credentials:

        ```php
        <?php
        $host       = "localhost";
        $user       = "your_username"; // Replace with your database username
        $password   = "your_password"; // Replace with your database password
        $database   = "crud_db"; // Replace with your database name

        $koneksi    = mysqli_connect($host, $user, $password, $database);

        if (!$koneksi) {
            die("Koneksi database gagal: " . mysqli_connect_error());
        }
        ?>
        ```

3.  **Configure your web server:**

    *   Place the project files in your web server's document root (e.g., `/var/www/html/`).
    *   Configure your web server to point to the `index.php` file.

4.  **Access the application:**

    *   Open your web browser and navigate to the project URL (e.g., `http://localhost/CRUD/`).

## Usage Examples & API Documentation

This is a basic CRUD application.  Here's a breakdown of the files and their roles:

*   **index.php:** Main page to display the list of items (e.g., students in this case).
*   **tambah_siswa.php:** Form for adding new items (students).
*   **simpan_siswa.php:**  Handles the logic for saving new items (students) to the database.
*   **edit_siswa.php:** Form for editing existing items (students).
*   **update_siswa.php:** Handles the logic for updating existing items (students) in the database.
*   **hapus_siswa.php:** Handles the logic for deleting items (students) from the database.
*   **koneksi.php:**  Contains the database connection settings.

**Example (Adding a new student):**

1.  Navigate to the `tambah_siswa.php` page through a link on the `index.php` page.
2.  Fill out the form with the new student's information.
3.  Submit the form.
4.  The `simpan_siswa.php` script will process the form data and save the new student to the database.
5.  You will be redirected back to the `index.php` page, where the new student should be displayed.

## Configuration Options

*   **Database Credentials:**  Configured within the `koneksi.php` file (host, username, password, database name).  Ensure these match your database server settings.

## Contributing Guidelines

Contributions are welcome! Please follow these guidelines:

1.  Fork the repository.
2.  Create a new branch for your feature or bug fix.
3.  Make your changes and commit them with clear and descriptive messages.
4.  Submit a pull request.

## License Information

This project has no license specified. All rights are reserved by the owner, Dulzx.

## Acknowledgments

*   This project uses PHP, MySQL, and basic HTML/CSS.  Thanks to the developers of these technologies.
