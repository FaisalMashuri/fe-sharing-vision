# Cara Jalanin
1. install laravel
2. composer update
3. php artisan key:generate
4. setting .env
    - DBName: article
    - DBUSER : root
    - DBPASSWORD : 
5. import database article (path : ./sharing-vision.sql) atau buat database manual dulu dengan nama article 
6. php artisan migrate
7. php artisan db:seed
8. php artisan serve

## Route
- Route::get("/article")->name("article.all");
- Route::get("article/preview")->name("article.preview");
- Route::get("/article/create")->name("article.create");
- Route::post("/article")->name("article.store");
- Route::get("/article/{post}/edit")->name("article.edit");
- Route::put("/article/{post}")->name("article.update");
- Route::delete("/article/{post}")->name("article.delete");