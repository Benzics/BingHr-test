# BingHr Exercise

## Features

_User can create, read, update and delete users in the db_
_Responsive_
_Sidebar collapses_

## Installation

-   Pull this repo `git pull git@github.com:Benzics/BingHr-test.git`

-   Create a **.env** file in your document root if it doesn't exist, and copy contents of **.env.example** to it. Edit your database info **_(DB_USERNAME, DB_PASSWORD, DB_DATABASE)_**

-   Open a terminal in document root and run the following commands respectively

```
php artisan migrate
php artisan db:seed --class=MemberSeeder
php artisan serve
```

-   Open application at [localhost:8000](http://localhost:8000)
