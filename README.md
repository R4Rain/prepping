## Steps to run the application
- Clone the repository on your local storage
```
git clone https://github.com/R4Rain/webprog-lec
```
- Change terminal path to the repository directory
```
cd <Directory_name>
```
- Install dependencies by using composer
```
composer install
```
- Create a new environment variables by copying from the example
```
cp .env.example .env
```
- Create a new database named `recipe-app` or use any existing database in your database software.
- Open .env file and config the database variables. Default configuration is shown below:
```
DB_DATABASE=recipe-app
DB_USERNAME=root
DB_PASSWORD=
```
- Migrating and seeding initial data
```
php artisan migrate --seed
```
- Linking local storage
```
php artisan storage:link
```
- Run the application
```
php artisan serve
``` 

## Completed Features
Guest:
- Authentication pages, consisting of login, register, and log out (developed with laravel UI)
- Home page
- Recipes page: showing all recipes
- Recipe page: showing an existing recipe and recipe reviews
    - Create a review
    - Edit a review
    - Delete a review
- Search page: contains searching and filtering features

Authenticated user:
- Create page: create a new recipe
- My recipe page: show all user recipes
- Profile page
    - Edit user name & email (must provided with user password)

## TODO
- [ ] Application name :sleepy:
- [ ] Edit / delete recipes in my recipe page
- [ ] Add WYSIWYG editor for the textarea input in the create page
- [ ] Image update / delete on user profile
- [ ] Responsive issues and UI still looks bad :cry:
- [ ] ... add if neccessary

## Optional (?)
- [ ] Meal planner
- [ ] Wishlist
- [ ] Subscription member


