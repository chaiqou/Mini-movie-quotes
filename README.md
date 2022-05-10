## Roadmap

-   [Introduction](#movie-quotes-app)
-   [Prerequisites](#prerequisites)
-   [Tech Stack](#teack-stack)
-   [Installation](#getting-started)
-   [Create Admin](#create-admin-user)
-   [Resources](#resources)
-

# Movie quotes app

This app is for movie quotes, the home page will randomly show you one movie with one quote which is a link and by clicking on it you can see all the associated quotes on this movie.

## Prerequisites

| Tool     | Version |
| -------- | ------- |
| PHP      | 8+      |
| Composer | 2+      |

## Tech Stack

| Tool                 | Version |
| -------------------- | ------- |
| Laravel              | 8+      |
| Laravel Translatable | 2+      |
| Tailwind CSS         | 3+      |

## Getting Started

-   Clone project

```bash
git clone https://github.com/RedberryInternship/movie-quotes-nikoloz-lomtadze.git
```

-   Run `composer install` on your cmd or terminal

-   Copy `.env.example` file to `.env` on the root folder. You can type `copy .env.example .env` if using command prompt Windows or `cp .env.example .env` if using Ubuntu

-   Run `php artisan key:generate`

-   Run `php artisan migrate`

-   Run `php artisan serve`

-   Run `php artisan storage:link`

## Create Admin user

-   Run `php artisan make:admin --usesrname='dummyUsername' --email=dummyemail@dummyemail@gmai.com --password=123456`

## Resources

-   [DrawSQL](https://drawsql.app/redberry-21/diagrams/movies#)
-   [Figma](https://www.figma.com/file/IIJOKK5esgM8uK8pM3D59J/Movie-Quotes?node-id=0%3A1)
