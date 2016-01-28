# SourceLair Wordpress

This is a template that lets you get started with a new MySQL-backed Wordpress project in seconds on SourceLair.

Start hacking now at http://lair.io/paris/wordpress.

## Getting started

To get started you have to run one single command in order to bootstrap your project by initializing your database and optionally installing PHPMyAdmin. To do this run the following command in your terminal:

```bash
./bin/bootstrap
```

## Accessing the database

There are two ways to access your database; the command line interface and PHPMyAdmin.

### Command Line Usage

To access your database from the command line run the following command in your terminal to open up the MySQL shell:

```bash
./bin/dbshell
```

### PHPMyAdmin

Before attempting to access your database from PHPMyAdmin, make sure that you have already installed it. If you did not install it during the bootstrap process, run the following command:

```bash
./bin/phpmyadmin-install
```

Then you can access your PHPMyAdmin installation by opening your Public URL and navigating to `http://mypublicurl.apps.lair.io/phpmyadmin`.
