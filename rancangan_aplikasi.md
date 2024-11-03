APLIKASI PEMINJAMAN RUANG MEETING DI PT RAGA PRAKASA EKAGUNA BERBASIS WEB FRAMEWORK LARAVEL

feature :

- Homepage // menampilkan informasi booking saat ini

-   menu login & registrasi

    -   dashboard (admin)

        -   sidebar

            -   ruangan
                -> CRUD ruangan
            -   user
                -> CRUD user

            -   booking list // merespons booking dari user, apakah ruangan tersedia atau tidak
                -> CRUD booking

            -   ganti password

        -   informasi statistic jumlah sewa ruangan
        -   informasi statistic jumlah user
        -   informasi statistic jumlah ruangan yang tersedia

    -   dashboard (operator)

        -   sidebar

            -   booking list // merespons booking dari user, apakah ruangan tersedia atau tidak
                -> CRUD booking
            -   ruangan
                -> read ruangan
            -   user
                -> read user

            -   PDF report

        -   informasi statistic jumlah sewa ruangan
        -   informasi statistic jumlah user
        -   informasi statistic jumlah ruangan yang tersedia

    -   dashboard (user)

        -   sidebar

            -   booking
                -> CRUD booking
                --> nama ruangan
                --> tanggal booking
                --> waktu mulai
                --> waktu selesai
                --> alasan booking

            -   list ruangan

            -   ganti password

        -   informasi statistic jumlah sewa ruangan
        -   informasi statistic jumlah ruangan yang tersedia


# Database

-   ruangan
-   user
-   booking
-   