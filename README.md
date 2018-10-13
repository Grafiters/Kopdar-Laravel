#LEARN LARAVEL
- install Laravel 
    pertama kita menginstall depedenci laravel terlebih dahulu yaitu install Composer di
    '''
    composer.org
    '''

    - via Laravel Installing
        cara pertama untuk menginstall LARAVEL :
        1. first download Laravel Installing Using Composer installing:
            '''
            composer global require "laravel/installer"
            '''
        2. Jika sudah bikin project baru dengan:
            '''
            laravel new blog
            '''
        3. DONE
    
    - via Composer create-project
        cara alternatives untuk install laravel dengan composer :
        '''
        composer create-project --prefert-dist laravel/laravel blog
        '''

    - menjalankan server developer local
        untuk menjalankan server local kita hanya perlu memanggil perintah seperti ini:
        '''
        php artisan serve
        '''

#MAKE PROJECT
- Create Project laravel dengan menggunakan composer create-project
    '''
    composer create-project --prefert-dist laravel/laravel sharing
    '''
    sekarang coba kita pangging dengan cara 
    '''
    localhost:8000
    '''

- Buat file route guna untuk mengatur kearah mana web kita berada,
    file route berada di 
    '''
    ../routes/web.php
    '''

- tambah line dengan coding sama seperti di bawah ini :
    '''php
    Route::get('/about', function(){
        return view('about');
    });

    Route::get('/contact', function(){
        return view('contact');
    });
    '''

- setelah itu kita bikin views nya
    file view berada di
    ''../resources/views/...''
    tambah file di dalam views tersebut untuk bisa di panggil degnan route tadi
    dengan format file 
    '''
    about.blade.php
    contact.bladde.php
    '''

- setelah itu kita edit isi dari ke-2 file tersebut
    1. di file '''../resources/views/about.blade.php''' menjadi:
        '''php
        <!DOCTYPE html>
            <html>
            <head>
                <meta charset="utf-8" />
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <title>@yield('title')</title>
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
                <script src="main.js"></script>
            </head>
            <body>
                <ul>
                    <a href="/about">About</a>
                    <a href="/contact">Contact</a>
                </ul>

                @yield('content')

            </body>
            </html>
        '''
    2. di file '''../resources/views/contact.blade.php''' menjadi:
        '''php
        <!DOCTYPE html>
            <html>
            <head>
                <meta charset="utf-8" />
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <title>@yield('title')</title>
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
                <script src="main.js"></script>
            </head>
            <body>
                <ul>
                    <a href="/about">About</a>
                    <a href="/contact">Contact</a>
                </ul>

                @yield('content')

            </body>
            </html>
        '''

