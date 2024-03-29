# Blog Project

## Key Features

### Article CRUD Operations

1. **Create Article:**

    - Easily create new articles by providing a title, category, content, and image.
    - Data validation on article creation enforced using specific form requests.

2. **Read Article:**

    - Browse through a list of articles with details like title, author, publication date, and a content snippet.
    - View the complete content of an article by clicking on read more.

3. **Update Article:**

    - Seamlessly edit existing articles, updating the title, category, content, and image.
    - Data validation on article update enforced using specific form requests.
    - Update and deletion protection implemented through policies; only the author of an article can update or delete it.

4. **Delete Article:**
    - Provide the option to delete articles, ensuring data integrity.
    - Update and deletion protection by policy; only the author of an article can update or delete it.

### Enhanced Functionality

5. **Sort Articles:**

    - Sort articles based on the publication date.

6. **Filter Articles:**

    - Efficiently filter articles based on categories.

7. **Paginate Articles:**

    - Divide the list of articles into pages to improve loading times and enhance user experience.

8. **Authentication:**
    - Utilizes Laravel Breeze for authentication features.
    - Allows users to log in and sign out securely.
    - Test user credentials: Email - 'testuser@example.com', Password - 'password'.

## Prerequisites

Ensure you have the following installed:

-   PHP
-   Composer
-   Node.js and npm

## Getting Started

Follow these steps to set up the project locally:

```bash
git clone https://github.com/mehmetozdemir23/blog.git
cd blog
composer install
npm install
cp .env.example .env
php artisan key:generate
php artisan migrate:fresh --seed
php artisan serve
npm run dev
```