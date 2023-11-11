# User Registration System

A simple user registration system implemented using PHP, JavaScript, HTML, and CSS. Users can register with their name, email, and password, and the information is stored in a MySQL database.

## Table of Contents

- [Features](#features)
- [Getting Started](#getting-started)
- [Usage](#usage)
- [Contributing](#contributing)
- [License](#license)

## Features

- User registration with name, email, and password.
- Data is securely stored in a MySQL database.
- Responsive and user-friendly web interface.

## Getting Started

### 1. Clone the repository:

```bash
git clone https://github.com/vitoriavicentin/pdo_users.git
cd pdo_users
```

### 2. Set up the database:

- Create a MySQL database and import the `database.sql` file to set up the necessary table.

```bash
mysql -u your-username -p your-database-name < database.sql
```

### 3. Configure the database connection:

- Open `pdo_connection.php` and update the database connection details.

### 4. Run the application:

- Start your PHP development server.

```bash
php -S localhost:8000
```

### 5. Access the application:

- Open your browser and go to [http://localhost:8000](http://localhost:8000).

## Usage

1. Navigate to the registration page.
2. Fill in the registration form with your name, email, and password.
3. Click the "Register" button to submit the form.
4. Check the database to confirm the successful registration.

## Contributing

Contributions are welcome! If you'd like to contribute to this project, please follow the guidelines in [CONTRIBUTING.md](CONTRIBUTING.md).

## License

This project is licensed under the [MIT License](LICENSE).
