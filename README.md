## Requirements
 - PHP 7
 - MySQL
 - Composer
 
## Structure
```bash
.
├── README.md
├── composer.json
├── public
│   ├── assets
│   │   ├── css
│   │   │   ├── bootstrap-grid.css
│   │   │   ├── bootstrap-grid.css.map
│   │   │   ├── bootstrap-grid.min.css
│   │   │   ├── bootstrap-grid.min.css.map
│   │   │   ├── bootstrap-reboot.css
│   │   │   ├── bootstrap-reboot.css.map
│   │   │   ├── bootstrap-reboot.min.css
│   │   │   ├── bootstrap-reboot.min.css.map
│   │   │   ├── bootstrap.css
│   │   │   ├── bootstrap.css.map
│   │   │   ├── bootstrap.min.css
│   │   │   ├── bootstrap.min.css.map
│   │   │   └── styles.css
│   │   ├── img
│   │   │   └── logo.svg
│   │   └── js
│   │       ├── bootstrap.bundle.js
│   │       ├── bootstrap.bundle.js.map
│   │       ├── bootstrap.bundle.min.js
│   │       ├── bootstrap.bundle.min.js.map
│   │       ├── bootstrap.js
│   │       ├── bootstrap.js.map
│   │       ├── bootstrap.min.js
│   │       ├── bootstrap.min.js.map
│   │       ├── jquery-3.4.1.js
│   │       └── popper.min.js
│   ├── create.php
│   ├── delete.php
│   ├── edit.php
│   └── index.php
└── src
    ├── Controllers
    │   └── UserController.php
    ├── Drivers
    │   ├── AbstractConnector.php
    │   ├── MySqlConnector.php
    │   └── PostgresConnector.php
    ├── Helpers
    │   ├── DB.php
    │   └── View.php
    ├── Models
    │   └── User.php
    └── views
        ├── layout
        │   └── main.php
        ├── pages
        │   ├── create-form.php
        │   ├── list.php
        │   └── update-form.php
        └── partials
            ├── footer.php
            └── header.php
```
## Setup

Run `composer install` command

## Database Setup

Update database credentials on `src/Helpers/DB.php` on line 14 with your local database credentials.
Assuming that you have already created a database and imported the sample schema.

## Running Project
Change to `public` folder and then run the following command
`php -S localhost:8888` navigate to your browser. On your browser navigate to `http://localhost:8888` or any port of your choice.
