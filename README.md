# Vue + PHP Contact Form

## Project Description
A simple contact form built with Vue 3 (using vue3-sfc-loader) and PHP.
Form data is validated on both frontend and backend and stored in a local JSON file (no database).

## Technologies
- Vue 3 (CDN + SFC Loader)
- PHP
- JSON (file-based storage)
- PHP built-in server or any local Apache environment

## Folder Structure
project/
  frontend/
    index.html
    vue.vue
    style.css
  backend/
    index.php
    data.json

## How to Run (PHP Built-in Server)

From the project root directory:

php -S localhost:8888

Then open:
http://localhost:8888/frontend/index.html

- To view submitted applications, open: http://localhost:8888/backend/applications.php

You may use any available port.

## Backend Logic
- Form submissions are sent via fetch() to backend/index.php.
- The PHP script performs server-side validation.
- Valid submissions are appended to data.json.
- The project does not use a database.

## Notes
This project is designed for educational purposes and runs entirely on localhost.
