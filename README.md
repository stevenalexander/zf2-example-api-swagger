# ZF2 API documented by Swagger

This is an example application showing how to document a ZF2 RESTful API using [Swagger](https://github.com/zircote/swagger-php).

## Requirements

* PHP 5.3+
* Web server [setup with virtual host to serve project folder](http://framework.zend.com/manual/2.2/en/user-guide/skeleton-application.html#virtual-host)
* [Composer](http://getcomposer.org/) (manage dependencies)

## Setup

1. Get composer:

    ```
    curl -sS https://getcomposer.org/installer | php
    ```

2. Install the dependencies:

    ```
    php composer.phar install
    ```

3. Generate the static json swagger documentation using the following command:

    ```
    php vendor/bin/swagger module/ -o public/docs/
    ```

4. Host the generated files where they are accessible by [Swagger UI](https://github.com/wordnik/swagger-ui) to generate the HTML documentation