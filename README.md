# HYii Starter App

Starter project which uses the scaffolding of the [Hyii Core Class](https://github.com/Harvest-Media/hyii)
to provide ready-made user management and templates.

## Installation

```shell
composer create-project harvest-media/hyii-starter
```

Then, go to the root project:
```shell
cd hyii-starter
```
or whatever directory name you created.

Next, create your environment file:
```shell
cp .env.example .env
```
Open up that file in your editor of choice.  Fill in the site 
address, site name, and the database information.

Then you need to run the installation program.  
```shell
./console install
```

Next, run npm install.
```shell
npm install
```

## Adding your own Install Migration

If you want to create other tables during the installation, go to `migrations/install.php` and 
add functions for each table you want to create and them call those functions
in the safeUp function.  Also, an uninstall feature is offered just for during
developmemnt.  Make sure to add the drop table line in the safeDown function as well.

## Development

There are some core classes and templates that are provided already for you in the 
base-web-app project.  An example of the login form and the dashboard page are
already placed in the `controllers\web\` folder for you.

The UserController will be added soon which will provide basic user management.

Currently, when you use one of the base-web-app controllers, it would use the corresponding
template in the base-web-app project.  Soon, you will have the ability to specifiy to 
use your own template in the templates folder of this project.

All new pages you add to this project will be done through the controllers, models, and templates folders
at the root of this project.  An example is at the `controller/web/HelloController.php`

## Core Concepts

### Yii2 PHP Framework

In order to successfully use this starter project, a basic understanding
of the Yii2 framework is needed <https://www.yiiframework.com/>.

### Twig Templating

For all of the views (html code), this project uses the /templates folder and the
twig templating language <https://twig.symfony.com/>

### Foundation CSS and Tailwind CSS

Both Foundation CSS and Tailwind are already included in the project.

#### SCSS File Location
```shell
src/css/theme.scss
```

#### Javascript File Location
```shell
src/js/theme.js
```

#### Tailwind Config File Location
This file is at the root of the project

```shell
tailwind.config.js
```

### Laravel Mix

Laravel Mix is used for the styling and css processing.

#### Laravel Mix Config File Location

This is at the root of the project

```shell
webpack.mix.js
```

#### To develop with hot reloading:
```shell
npm run watch
```

#### To build for production:
```shell
npm run build
```

