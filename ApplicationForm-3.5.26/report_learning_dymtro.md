# 🚀 Vue.js 3 Contact Form: Modern SFC Project

A lightweight, modern, and fully reactive contact form built with **Vue.js 3** (SFC Loader) and **CSS3 Variables**. This project demonstrates real-time data validation, dynamic field toggling, and a seamless Dark Mode implementation.



---

## 📋 Table of Contents
- [Core Features](#-core-features)
- [Technologies Used](#-technologies-used)
- [Project Structure](#-project-structure)
- [Setup and Usage](#-setup-and-usage)
- [Technical Insights](#-technical-insights)

---

## ✨ Core Features

* **Dual Mode (Light/Dark):** Smooth theme switching using CSS Variables.
* **Conditional Logic:** Dynamic input fields that toggle between "Email" and "Phone" based on user selection.
* **Zero Layout Shift:** Fixed field heights to prevent the form from "jumping" when validation errors appear.
* **Advanced Validation:** Email format checking via Regex and minimum character length requirements for names and messages.
* **Reactive UI:** Instant feedback on user input without page reloads.

---

## 🛠 Technologies Used

* **Vue.js 3:** For state management and reactivity.
* **vue3-sfc-loader:** To load `.vue` files directly in the browser without a build step (Vite/Webpack).
* **CSS3:** Utilizing Flexbox, Transitions, and `:root` variables.
* **HTML5:** Semantic structure.



---

## 📂 Project Structure

```text
├── index.html   # Entry point, loads libraries and the SFC loader
├── vue.vue      # Component logic (Template + Script + Style)

└── style.css    # Global design and theme variables