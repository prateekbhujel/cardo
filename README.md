# Cardo - Trello Clone

**Cardo** is a simple, user-friendly project management tool inspired by Trello, built using **Livewire** and **Tailwind CSS**. With **Cardo**, users can create boards, add columns, manage cards, and organize tasks efficiently. It is designed to simplify workflow management with an easy-to-use drag-and-drop interface and real-time updates.

## Features

- **Board Management**: Create and manage multiple boards to organize your projects.
- **Columns & Cards**: Add columns to your boards and create cards for tasks within each column.
- **Drag-and-Drop**: Easily reorder cards and columns using drag-and-drop functionality.
- **Real-time Updates**: Seamless updates to your tasks and boards without needing to refresh the page.
- **Responsive Design**: The app is mobile-friendly, ensuring a smooth user experience across devices.
- **Archiving**: Archive completed tasks or columns and retrieve them when necessary.
- **User Authentication**: Secure login and user management powered by Laravel's built-in authentication.

## Installation

To set up **Cardo** locally, follow these steps:

### Prerequisites

Ensure you have the following installed on your machine:

- **PHP 8.2+**
- **Composer**
- **Node.js & npm**
- **MySQL** or any other supported database
- **Laravel 11+**

### Steps

1. **Clone the repository:**

   ```bash
   git clone https://github.com/prateekbhujel/cardo.git
   cd cardo
   ```

2. **Install dependencies:**

   ```bash
   composer install
   npm install
   npm run dev
   ```

3. **Set up the environment variables:**

   Rename the `.env.example` file to `.env` and update the database credentials.

   ```bash
   cp .env.example .env
   ```

4. **Generate the application key:**

   ```bash
   php artisan key:generate
   ```

5. **Run the database migrations:**

   ```bash
   php artisan migrate
   ```

6. **Run the application:**

   ```bash
   php artisan serve
   ```

   The app will be available at `http://localhost:8000`.

## Contribution

Feel free to fork this repository and contribute to the project. All contributions are welcome!

1. Fork the repository
2. Create your feature branch (`git checkout -b feature/YourFeature`)
3. Commit your changes (`git commit -am 'Add some feature'`)
4. Push to the branch (`git push origin feature/YourFeature`)
5. Create a new Pull Request

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.