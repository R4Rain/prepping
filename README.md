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

