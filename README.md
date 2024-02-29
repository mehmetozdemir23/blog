# Project Title

Technical test blog project

## Key Features

### Article CRUD Operations

1. **Create Article:**
   - Easily create new articles by providing a title, content, and optional metadata.
   
2. **Read Article:**
   - Browse through a list of articles with details like title, author, publication date, and a content snippet.
   - View the complete content of an article by clicking on its title.

3. **Update Article:**
   - Seamlessly edit existing articles, updating the title, content, and metadata.

4. **Delete Article:**
   - Provide the option to delete articles, ensuring data integrity.

### Enhanced Functionality

5. **Sort Articles:**
   - Sort articles based on publication date.

6. **Filter Articles:**
   - Efficiently filter articles based on categories.

7. **Paginate Articles:**
   - Divide the list of articles into pages to improve loading times and enhance user experience.

## Prerequisites

Ensure you have the following installed:

- PHP
- Composer
- Node.js and npm

## Getting Started
Follow these steps to set up the project locally:

```bash
git clone https://github.com/mehmetozdemir23/blog.git
cd blog
composer install
npm install
cp .env.example .env
php artisan key:generate
touch database/database.sqlite
php artisan migrate
php artisan serve
