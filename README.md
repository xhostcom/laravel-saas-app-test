## watchdog

Monitoring app with Laravel, Postgresql, Tailwind

Quick Test of the Devdojo Wave
SaaS builder, see info below.



## Demo
View a live [demo here](https://wave.devdojo.com), or deploy your own instance to DigitalOcean, by clicking the button below.

<a href="https://cloud.digitalocean.com/apps/new?repo=https://github.com/thedevdojo/wave/tree/main" target="_blank"><img src="https://www.deploytodo.com/do-btn-blue.svg" width="240" alt="Deploy to DO"></a>


## Installation

To install Wave, you'll want to clone or download this repo:

```
git clone https://github.com/thedevdojo/wave.git project_name
```

Next, we can install Wave with these **4 simple steps**:

### 1. Create a New Database

During the installation we need to use a MySQL database. You will need to create a new database and save the credentials for the next step.

### 2. Copy the `.env.example` file

We need to specify our Environment variables for our application. You will see a file named `.env.example`, you will need to duplicate that file and rename it to `.env`.

Then, open up the `.env` file and update your *DB_DATABASE*, *DB_USERNAME*, and *DB_PASSWORD* in the appropriate fields. You will also want to update the *APP_URL* to the URL of your application.

```bash
APP_URL=http://wave.test

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=wave
DB_USERNAME=root
DB_PASSWORD=
```


### 3. Add Composer Dependencies

Next, we will need to install all our composer dependencies by running the following command:

```php
composer install
```
### 4. Run Migrations and Seeds

We need to migrate our database structure into our database, which we can do by running:

```php
php artisan migrate
```
<br>
Finally, we will need to seed our database with the following command:

```php
php artisan db:seed
```
<br>

🎉 And that's it! You will now be able to visit your URL and see your Wave application up and running.


## Watch, Learn, and Build

We've also got a full video series on how you can setup, build, and configure Wave. 🍿 You can watch first few videos for free, and additional videos will require a [DevDojo Pro](https://devdojo.com/pro) subscription. By subscribing to a [DevDojo Pro](https://devdojo.com/pro) subscription you will also be supporting the ongoing development of this project. It's a win win! 🙌

[Click here to watch the Wave Video Series](https://devdojo.com/course/wave).


## Documentation

Checkout the [official documentation here](https://wave.devdojo.com/docs).
