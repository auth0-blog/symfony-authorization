# Learn how to build your first Symfony application and add authentication to it

Read the full tutorial here:

[Creating your First Symfony App and Adding Authentication](https://auth0.com/blog/creating-your-first-symfony-app-and-adding-authentication/)

This application detailed the step by step guide on how to build your first Symfony application and add authentication to it using Auth0.

## Technology

This demo uses:

- [Symfony](https://symfony.com/)
- [Auth0](https://auth0.com/)

## Running the demo

To run the demo follow these steps:

1. Running `git clone https://github.com/auth0-blog/symfony-authorization.git`
2. Run `composer install` to install all the project's dependencies.
3. If you do not have an Auth0 account, [sign up](https://auth0.com/signup) for one now. Navigate to the Auth0 [management dashboard](https://manage.auth0.com/), select **Applications** from the navigation menu, then select or create a regular web application that you want to connect with **Symfony**
4. Create a `.env` file within the root folder of the project and include your Auth0 credentials as well as your proposed database details:

```bash
DATABASE_URL=mysql://db_user:db_password@127.0.0.1:3306/db_name?serverVersion=5.7
```

Update this line with your own credentials and the name you want to use for the database, e.g. `techcompanies`. If you don't have MySQL installed and set up on your system, [follow this guide to get started](https://dev.mysql.com/doc/mysql-getting-started/en/).

- _db_user: Replace with your database username_
- _db_password: Replace with your database password_
- \_db_name: Replace with your database name. You don't have to create the database yet, as we'll do that in the next step.

Next, add your Auth0 credentials:

```bash
AUTH0_CLIENT_ID=AUTH0_CLIENT_ID
AUTH0_CLIENT_SECRET=AUTH0_CLIENT_SECRET
AUTH0_DOMAIN=AUTH0_DOMAIN
```

5. Next, run the following command to create a database with the value of your database name:

```bash
php bin/console doctrine:database:create
```

And this to create your database table:

```bash
php bin/console doctrine:schema:update --force
```

6. Head over to your Auth0 [dashboard](https://manage.auth0.com/#/applications/) and register Allowed Callback URLs as `http://127.0.0.1:8000/auth0/callback` and Allowed Logout URLs as `http://127.0.0.1:8000/auth0/logout` respectively.

7) Finally run the application with:

```bash
php bin/console server:run
```

## Useful links

- 🏠 [Auth0 Blog](https://auth0.com/blog)
- 🚀 [Symfony](https://symfony.com/)
