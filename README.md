<h1 align="center">Web.Skel</h1>

<p align="center">
    <a href="https://github.com/mihaiconstantin/webskel/releases/latest">
        <img src="https://img.shields.io/badge/stable-v0.1.*-blue.svg?style=flat-square" alt="Latest Stable Release">
    </a>	
    <a href="https://opensource.org/licenses/MIT">
        <img src="https://img.shields.io/badge/license-MIT-yellow.svg?style=flat-square" alt="License">
    </a>
</p>

## About this repository

`Web.Skel` serves as a basic skeleton for creating personal websites featuring a landing page and simple blog capabilities. It consist of a collection of reusable and loosely coupled [Vue.js `2.5.*`](https://github.com/vuejs/vue) components that together form a landing page and a blog. The backend is powered by the [Laravel Framework `5.7.*`](https://laravel.com/docs/5.7) and an optional admin panel us also included based on [Voyager `1.*.*`](https://github.com/the-control-group/voyager) project.

The repository is intended to be cloned, tweaked to fit your needs, and served as a website. You can see a live example of this repository at: https://aojcramer.com.

## Installation

### Prerequisites:

- [`PHP`](http://php.net/downloads.php) `>= 7.1.3`
- [`Composer`](https://getcomposer.org/doc/00-intro.md)
- `MySql`/ [`MariaDB`](https://downloads.mariadb.org) server
- [`Node.js`](https://nodejs.org) and [`npm`](https://www.npmjs.com) for compiling frontend assets

<small>For more precise information regarding the prerequisites, check the *Installation* section of the [Laravel Documentation](https://laravel.com/docs/5.7).</small>

### Installation steps <small>(without admin panel)</small>

Follow the steps below to install and use `Web.Skel` on your local machine:

1. run `git clone https://github.com/mihaiconstantin/webskel` to clone this project in your environment
2. `cd` into the `webskel` project and run `composer install`
3. run `cp .env.example .env` to create the `.env` configuration file
4. open the `.env` file in your favorite editor and modify the following variables accordingly:
    - `APP_URL`=http://localhost:8000
    - `DB_DATABASE=`<small>your_database_name</small>
    - `DB_USERNAME=`<small>your_database_user</small>
    - `DB_PASSWORD=`<small>your_database_password</small>
    - *for more details regarding `.env` variables see [this resource](https://laravel.com/docs/5.5/configuration#environment-configuration)*
5. then, run `php artisan key:generate` to generate an application-specific secret key that will be automatically added to the `APP_KEY` variable in `.env` file
6. run `php artisan migrate --seed` to build the database and seed it with the default data
7. run `php artisan storage:link` to link the `storage` folder in order for the assets to be correctly loaded
8. run `npm install` to install the frontend packages needed
9. run `npm run dev` to compile the assets for development (i.e., or `npm run prod` for production)
10. finally, run `php artisan serve` to start the developmental server and check out the application at http://localhost:8000

### Installation steps <small>(with admin panel)</small>

If you are interested in using `Web.Skel` with the admin panel included, follow the following steps:

1. run `git clone https://github.com/mihaiconstantin/webskel`
2. `cd` into the `webskel`
3. run `git checkout admin` to switch to the admin panel branch
4. follow steps **3** to **10** from previous section

Now, you can access the admin panel by browsing http://localhost:8000/admin and using the following credentials:

- email: `admin@example.com`
- password: `secret`

For details on how to customize the flexible admin panel, please refer to the [Voyager Documentation](https://docs.laravelvoyager.com).

<small>In case you decide to use a version of [Voyager](https://github.com/the-control-group/voyager) `< 1.2` then you also need to publish its public assets. You can do this by running `php artisan voyager:install` and a new folder will be added at `public/vendor/tcg/voyager`. For more details see the [*Advanced*](https://docs.laravelvoyager.com/v/1.1/getting-started/installation#advanced) section on the installation page.</small>

## Development

To get started with tweaking `Web.Skel`:

1. run `git clone https://github.com/mihaiconstantin/webskel`
2. `cd` into the `webskel`
3. run `git checkout dev` to switch to the development branch

At this point, you can edit the project files however you see fit.

A possible approach after you finished your changes on the `dev` branch: 

- merge `dev` into `master` and add a release tag
- merge or rebase `admin` onto `dev` so that the branch with the admin panel has the latest changes as well.

If you are interested in this project, please consider submitting a pull request; any contributions are appreciated.

## Roadmap

1. Features: 
    - generate custom pages from the admin panel with specific page components
    - ~~carousel with images as an alternative to the current network canvas~~
    - component that can be used to display website members
    - contact form component with [Mailgun](https://www.mailgun.com/) API support
    - subscription component with email validation and cancellation
    - add browsers checks and middleware to detect IE version and insert polyfill scripts (*low priority*)
    - add an animated arrow to indicate scrolling on the carousel section
2. Fixes:
    - related to smooth scrolling: page *jumps* when clicking on a menu link that is already scrolled into viewport
    - related to blog cards: change from column-wise card order to row-wise
    - ~~fix transition color on hover for projects and presentations~~
3. Improvements:
    - ~~add proper `og` tags to all pages~~
    - ~~set text line height to 1.9 for blog posts~~
    - ~~update the color scheme for higher color consistency~~
    - ~~add Twitter meta tags~~

## License

The code in this repository is licensed under the [MIT license](https://opensource.org/licenses/MIT).
