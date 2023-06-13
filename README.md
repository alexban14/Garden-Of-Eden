# ULBS Computer Science Final Year License Project

This document provides instructions for setting up and running the project. Please ensure that you have the following prerequisites installed before proceeding:

- Git
- Node.js
- XAMPP (with PHP version 8.1 or higher)
- Composer
- Angular CLI (npm package version 15, installed globally)

## Frontend Application

The project consists of two separate applications. The first one is an Angular frontend application. To run it, follow these steps:

1. Open a terminal and navigate to the frontend directory of the project.
2. Run the following command to install the required dependencies:

npm install

csharp

3. After the installation is complete, start the application by running the following command:

npm run start

vbnet


## API Server

The second application is the API server. To run it, follow these steps:

1. Open a terminal and navigate to the root directory of the project.
2. Run the following command to install the required dependencies:

composer install

3. After the installation is complete, generate an application key by running the following command:

php artisan key:generate

4. Run the database migrations using the following command:

php artisan migrate


5. Install the Passport package by running the following command:

php artisan passport:install



## Environment Configuration

In order for the application to work properly, you need to create an `.env` file based on the provided `.env.example` file in the source code.

Additionally, you need to configure an SMTP server for testing purposes. Use the credentials and API key provided by [mailtrap.io](https://mailtrap.io) and update the corresponding settings in the `.env` file.

After installing the Passport package, you need to copy the client secret for the client ID 2, provided during the installation. Paste this client secret in the `environment.development.ts` file in the frontend source code. This is required for the authentication system provided by Passport to work.

That's it! You have successfully set up the project and configured the necessary components. You can now start using the application.
