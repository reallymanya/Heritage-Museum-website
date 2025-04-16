# Heritage Museum Website

A modern, interactive website for a heritage museum that allows visitors to explore exhibitions, book tickets, and engage with museum content.

## Features

- **User Authentication**: Secure login and registration system
- **Exhibition Showcase**: Browse current and upcoming museum exhibitions
- **Online Ticket Booking**: Purchase tickets with integrated Razorpay payment gateway
- **Contact System**: Get in touch with museum staff
- **Responsive Design**: Built with Tailwind CSS for a modern, mobile-friendly interface

## Tech Stack

- PHP
- MySQL
- HTML/CSS
- JavaScript
- Tailwind CSS
- Razorpay Payment Integration

## Prerequisites

- XAMPP/LAMP/WAMP server
- PHP 7.4 or higher
- MySQL
- Node.js and npm (for Tailwind CSS)

## Installation

1. Clone the repository to your web server directory:
   ```
   git clone [repository-url]
   ```

2. Install PHP dependencies:
   ```
   composer install
   ```

3. Install Node.js dependencies:
   ```
   npm install
   ```

4. Configure your database connection in `config/db.php`

5. Import the database schema from the SQL files in the `config` directory

6. Configure Razorpay credentials in the payment configuration files

## Development

To work with Tailwind CSS:

```bash
# Watch for CSS changes
npm run watch

# Build for production
npm run build
```

## Directory Structure

- `/config` - Database and configuration files
- `/css` - Compiled CSS files
- `/images` - Image assets
- `/includes` - PHP components and utilities
- `/js` - JavaScript files
- `/styles` - Source CSS files
- `/templates` - Reusable template files

## Contributing

1. Fork the repository
2. Create your feature branch
3. Commit your changes
4. Push to the branch
5. Create a new Pull Request

## License

This project is proprietary software. All rights reserved.
