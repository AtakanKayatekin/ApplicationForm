# 📝 PHP & Vue.js Contact Form – Learning Report

This report summarizes my learning process, challenges, and progress while working on the **backend** of a modern contact form project using **PHP** and integrating it with a **Vue.js 3 frontend**.

---

## 📌 Project Overview

- **Frontend:** Vue.js 3 Single File Component (SFC) with reactive form validation, conditional input fields, and Dark/Light mode. *Frontend development was done by my teammate; I only performed necessary adjustments to connect it with the backend.*
- **Backend:** PHP handling form submissions and storing data in a JSON file. I was responsible for writing the backend logic, connecting it to the frontend, and managing folder structure.
- **No Database:** All data saved locally in `data.json`.
- **Local Testing:** Project runs on localhost (`php -S`) without additional build tools.

---

## 💡 My Role and Contributions

- Developed **PHP backend** for form validation and JSON storage.
- Configured **fetch requests** in the frontend to connect with backend endpoints.
- Structured the **project folders** clearly separating frontend and backend.
- Ensured that **existing JSON data is preserved** while adding new submissions.
- Assisted in small **frontend adjustments** to match backend expectations.
- Documented project setup and usage in a professional `README.md`.

---

## 💡 What I Asked and Explored

During development, I sought guidance from ChatGPT on:

1. PHP form handling, validating inputs, and saving to JSON.
2. Handling fetch requests from Vue.js to PHP backend.
3. Proper separation of frontend and backend files in a project.
4. Debugging common errors such as 404 Not Found or JSON parsing issues.
5. Writing clear documentation and learning reports.

---

## 🛠 Challenges Encountered

- Understanding **how Vue SFC communicates with PHP backend**.
- Handling **JSON read/write safely** without overwriting previous data.
- Resolving **path issues** and server errors on localhost.
- Ensuring **form validation logic** matches between frontend and backend.
- Managing dynamic input fields and submission data from frontend.

---

## ✅ Progress and Learning Outcomes

Through this project, I improved in:

* **Backend Development:** Implemented form validation and data persistence with PHP.
* **Frontend Integration:** Learned how to connect backend logic to a Vue 3 SFC frontend.
* **File-based Data Management:** Learned to append data to JSON safely.
* **Debugging Skills:** Resolved server, path, and JSON errors effectively.
* **Project Structuring:** Established clear separation between frontend and backend.
* **Documentation:** Learned how to write professional README and learning reports.

---

## 🌱 Next Steps

- Explore using a small database instead of JSON for scalability.
- Improve backend error handling and security.
- Expand integration tests between frontend and backend.
- Learn deployment practices for full-stack projects.

---

## 📂 References

- Project folder structure:

```text
project/
  frontend/
    index.html
    vue.vue
    style.css
  backend/
    index.php
    data.json
