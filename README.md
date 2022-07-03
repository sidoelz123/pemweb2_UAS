# CRUD With Laravel 8
## About the project

Project UTS membuat CRUD

## Build with Project

- [Laravel versi 8](https://laravel.com/docs/8.x)
- [php versi 7 atau versi 8]()


## Desain CRUD

### Activity Diagram
![Activity Diagram](https://github.com/sidoelz123/laravel-crud/blob/main/images/diagram%20activity.png?raw=true) 

## Getting Started

Berikut panduan untuk menjalankan project ini secara lokal

### How to install

- Download / Clone Repository
  ```sh
    https://github.com/sidoelz123/pemweb2_UAS.git
  ```

- Masuk ke direktori repository ini
  ```sh
    cd pemweb2_UAS
  ```

- lakukan  install laravel terlebih dahulu
- setelah itu ikuti perintah berikut
    ```sh
    composer update
    ```

- Edit file __.env__ untuk mengatur database nya :
    ```
    #menggunakan MYSQL
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=DB_NAME
    DB_USERNAME=DB_USERNAME
    DB_PASSWORD=DB_PASSWORD
    ```

- migrate laravel 
    ```sh
    php artisan migrate --seed
    ```

- key generate
    ```sh
    php artisan key:generate
    ```

- Jalankan Server menggunakan laravel artisan
    ```bash
    php artisan serve
    ```
