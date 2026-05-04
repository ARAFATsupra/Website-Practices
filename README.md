# Website Practice — HTML, CSS, JavaScript & PHP

A collection of web development practice projects built while learning front-end and back-end web technologies. The repository is divided into two main sections: **Practice Lab** (HTML, CSS, and JavaScript fundamentals) and **Practice Web** (a full PHP web application with MySQL).

---

## Repository Structure

```
Website-Practice/
├── Practice Lab/
│   ├── Assets/
│   │   └── ScreenShot_20250521104356.png
│   ├── index.html
│   ├── Lab_1.html
│   ├── Lab_2.html
│   ├── Lab_3.html
│   ├── Lab_4.html
│   ├── Lab_4_Task1.html
│   ├── Lab_4_task2.html
│   ├── Lab_4_task3.html
│   ├── Lab_6.html
│   ├── Lab_Test_1.html
│   ├── myScript.js
│   └── styles.css
│
└── Practice Web/
    ├── images/
    │   ├── AS DIMENSION.png
    │   ├── Catalogue logo.png
    │   ├── Home page pic.png
    │   ├── Login logo.png
    │   ├── Maximus MAX907.png
    │   ├── profile logo.png
    │   └── Symphony V139.png
    ├── asshop.sql
    ├── catalogue.php
    ├── config.php
    ├── home.html
    ├── login.php
    ├── logout.php
    ├── profile.php
    ├── registration.php
    └── styles.css
```

---

## Part 1: Practice Lab

This section contains step-by-step lab exercises covering core HTML, CSS, and JavaScript concepts.

### Files and What They Cover

| File | Description |
|---|---|
| `index.html` | First HTML page — headings and paragraphs |
| `Lab_1.html` | Basic HTML page structure with metadata |
| `Lab_2.html` | Core HTML tags — paragraphs, headings, bold, italic, underline, subscript, superscript, images, links, lists, blockquote, abbreviation, address, and more |
| `Lab_3.html` | HTML tables — borders, column spans, row spans, colgroup styling, and captions |
| `Lab_4.html` | Advanced HTML tables — alternating row colors using CSS `nth-child` |
| `Lab_4_Task1.html` | Inline CSS — applying styles directly inside HTML elements |
| `Lab_4_task2.html` | Internal CSS — writing CSS inside a `<style>` block in the `<head>` |
| `Lab_4_task3.html` | External CSS — linking to a separate `styles.css` file |
| `Lab_6.html` | External JavaScript — linking to a separate `myScript.js` file |
| `Lab_Test_1.html` | Lab test — complex table with row and column spans, and a full HTML form with text fields, radio buttons, email, and password inputs |
| `myScript.js` | JavaScript variables and DOM manipulation using `getElementById` |
| `styles.css` | External stylesheet used by `Lab_4_task3.html` — heading alignment and text color |

### Topics Covered in Practice Lab

- HTML document structure and metadata
- Text formatting tags (bold, italic, underline, subscript, superscript, strikethrough, insert)
- Images and hyperlinks
- Ordered and unordered lists
- Blockquote, abbreviation, and address tags
- HTML tables with rowspan and colspan
- HTML forms with multiple input types
- The three ways to apply CSS: inline, internal, and external
- JavaScript variables and DOM manipulation via `getElementById`

---

## Part 2: Practice Web — A.S. Dimension Online Shop

A full-stack PHP web application for a smartphone online shop called **A.S. Dimension**. It includes a home page, a product catalogue, and a complete user authentication system backed by a MySQL database.

### Features

- User registration with hashed passwords
- User login with PHP sessions
- Protected profile page (redirects to login if not authenticated)
- Product catalogue fetched dynamically from a MySQL database
- User logout with session destruction
- Consistent navigation bar and footer across all pages
- Linked external CSS stylesheet for unified styling

### Files and What They Cover

| File | Description |
|---|---|
| `home.html` | Landing page showing the shop name, logo, and featured products (Symphony V139 and Maximus MAX907) |
| `config.php` | Database connection file — connects to the `asshop` MySQL database using MySQLi |
| `registration.php` | Registration form and PHP logic — collects name, email, password, date of birth, gender, and address; hashes the password and inserts into the database |
| `login.php` | Login form and PHP logic — verifies email and password using `password_verify`, starts a session on success |
| `profile.php` | Protected profile page — displays the logged-in user's personal details fetched from the database |
| `catalogue.php` | Product catalogue page — fetches all products from the `catalogue` table and displays them in a table with images and an "Add to Cart" button |
| `logout.php` | Destroys the session and redirects the user back to the login page |
| `asshop.sql` | MySQL database dump — contains the schema and data for the `asshop` database (users and catalogue tables) |
| `styles.css` | Shared stylesheet for all pages — navigation bar, tables, forms, header, and footer styling |

### Technologies Used

| Technology | Purpose |
|---|---|
| HTML5 | Page structure and content |
| CSS3 | Styling and layout |
| PHP | Server-side logic, session management, form handling |
| MySQL | Database for users and product catalogue |
| MySQLi | PHP extension for database queries |

### Database Setup

1. Open **phpMyAdmin** (or your preferred MySQL tool).
2. Create a new database named `asshop`.
3. Import the `asshop.sql` file into the database.
4. Make sure your `config.php` credentials match your local server settings.

> Note: This project requires a local server environment such as XAMPP or WAMP to run the PHP files.

---

## How to Run Locally

### Practice Lab

Open any `.html` file directly in your web browser. No server is required.

### Practice Web

1. Install [XAMPP](https://www.apachefriends.org/) or [WAMP](https://www.wampserver.com/).
2. Copy the `Practice Web` folder into the `htdocs` directory (for XAMPP) or `www` directory (for WAMP).
3. Start Apache and MySQL from the control panel.
4. Set up the database as described in the Database Setup section above.
5. Open your browser and go to `http://localhost/Practice Web/home.html`.

---

## Author

**Kazi Arafat Hossain**

**Co-developed with:** Sakib

Project developed as part of web development coursework at DIU — 2025.

---

## License

This project is created for educational purposes only.
