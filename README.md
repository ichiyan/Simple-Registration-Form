# Registration Form
A simple registration form that addresses at least three of the deadly sins in web development, as discussed in Information Assurance and Security class.

## Installation
1. Clone the repository

   ```
   git clone https://github.com/ichiyan/Simple-Registration-Form.git
   ```
 
2. cd into project
3. Install composer dependencies

    ```
    composer install
    ```
4. Install npm dependencies

    ```
    npm install
    ```
5. Create a copy of .env file

    ```
    cp .env.example .env
    ```
    
6. Generate an app encryption key

    ```
    php artisan key:generate
    ```

7. Create an empty database for the application

8. In the .env file, add database information
   In the .env file fill in the ```DB_HOST```, ```DB_PORT```, ```DB_DATABASE```, ```DB_USERNAME```, and ```DB_PASSWORD``` options to match the credentials of the database you    just created.

9. Migrate the database

    ```
    php artisan migrate
    ```
    
10. Run the application 
  
    ```
    php artisan serve
    ```

## Addressing Sins in Web Development

- Validate user inputs (addresses **Sin #6**)
  - For the registration, user inputs are validated through the Validator class before creating a new user instance as shown in ``` app > Http > Controllers > Auth > RegisterController.php ```. 
 
- Modularize code and never hard code queries (addresses **Sin #5**)
  - Models, Views, and Controllers are separated. The models found in ``` app > Models ``` handles data-related logic, the views found in ``` app > resources > views ``` are used for all the UI logic, and the controllers in ``` app > Http > Controllers ``` are where all business logic, incoming requests, and queries are processed. The middleware in ``` app > Http > Middleware ``` inspects and filters HTTP requests entering the application. The ``` Authenticate.php ``` in the middleware verifies the user of your application is authenticated. If the user is not authenticated, the middleware will redirect the user to your application's login screen. However, if the user is authenticated, the middleware will allow the request to proceed further into the application.
  
- Use cookies with HttpOnly tags (addresses **Sin #3**)
  -   The remember me functionality generates a token in the users table and a cookie with a HttpOnly tag to prevent client-side scripts from accessing data. The cookie is also encrypted.
