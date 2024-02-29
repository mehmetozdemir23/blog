# Project Title

Short description or tagline about your project.

## Overview

Provide a brief overview of your project. Mention its purpose, key features, and any other relevant information.

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
