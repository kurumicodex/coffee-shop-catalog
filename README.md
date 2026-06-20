# Coffee Shop Catalog (WhatsApp Order System)

A very lightweight, fast, and modern single-page catalog and ordering system for Coffee Shops. This project is built purely using **HTML5**, **Tailwind CSS**, and **Vanilla JavaScript**. It integrates directly with WhatsApp for the checkout process.

<p align="center">
  <img src="demo-landing.png" alt="Landing View" width="49%"/>
  &nbsp;
  <img src="demo-catalog.png" alt="Catalog View" width="49%"/>
</p>

## 🚀 Key Features
- **Modern & Responsive Design**: Utilizes Tailwind CSS with elegant visual effects (Glassmorphism, scroll animations, glowing particles).
- **Dynamic Catalog**: Product and category data are stored in a single `config.js` file, making it extremely easy for beginners to manage.
- **Instant Cart System**: Users can add, remove, and view total orders before checking out directly on the same page.
- **WhatsApp Checkout**: The order list is automatically calculated and sent to the admin's WhatsApp number in a neatly formatted text.
- **Promo Support**: Automatic visual labels for 50% discount products or Buy 1 Get 1 (BOGO) promos.

## 🛠️ Tech Stack
- **Frontend**: HTML5, CSS3, Vanilla JS
- **Styling**: Tailwind CSS (via CDN)
- **Icons**: Lucide Icons (via CDN)

## 📦 Installation & Usage

1. **Download / Clone Repository**
   Download all files to your computer or host them on your preferred server (e.g., Vercel, Netlify, or GitHub Pages).

2. **Run the Application**
   Since this application is 100% static, simply double-click the `index.html` file to open it in your browser! No backend server installation is required.

3. **Configure Admin WhatsApp Number**
   Open the `config.js` file using a text editor. Change the value of the `WHATSAPP_NUMBER` variable:
   ```javascript
   const WHATSAPP_NUMBER = "628xxxxxxxxxx"; // Use your country code format (e.g., 62 for Indonesia)
   ```

4. **Adding and Editing Products**
   All menus and products are configured in `config.js` under the `MENU_SECTIONS` variable. Simply follow the instructions provided within the file.

## 📁 File Structure
- `index.html` — The main UI backbone and entry point.
- `config.js` — The central configuration center (Admin WA number and catalog list).
- `style.css` — Custom styling to keep the UI structure clean.
- `script.js` — Frontend logic (shopping cart, category filters, and checkout functions).

## 📄 License
This project is *Open Source* and free to use and modify.
