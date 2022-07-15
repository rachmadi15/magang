# Project Test DOT

Penjelasan Project :

Project ini merupakan sebuah API yang digunakan untuk admin dapat melihat data dari para peserta yang mengikuti kegiatan magang pada perusahaan tersebut.
Admin juga dapat melihat apa saja task atau tugas yang dimiliki oleh peserta tersebut. Sehingga admin dapat memanajemen data peserta dan juga tugas dari peserta tersebut.
Pada project ini juga dibuatkan sebuah API untuk proses login untuk masuk ke aplikasi tersebut.

Desain Database :

![Erd Database](https://user-images.githubusercontent.com/55697055/178964103-db2069b1-8e8e-4b3d-95f2-c852b8133e61.png)


ScreenShot API :


- Halaman Login dan API Login 

![Screenshot (640)](https://user-images.githubusercontent.com/55697055/179123322-9b72afaa-29cd-4391-bb5f-6a4d67bce876.png)

![Screenshot (632)](https://user-images.githubusercontent.com/55697055/178971555-36ecfe13-224f-4eeb-aef0-fc585dab28f2.png)


- Halaman Home

![Screenshot (641)](https://user-images.githubusercontent.com/55697055/179123360-7b095382-eca7-4de2-a8e3-a569e7ab9e36.png)


- Halaman List Peserta dan API List Peserta

![Screenshot (642)](https://user-images.githubusercontent.com/55697055/179123392-974ec3e4-1542-4cd6-8e2f-b13479de7a92.png)

![Screenshot (633)](https://user-images.githubusercontent.com/55697055/178971645-c51a88e7-9328-430a-8758-32c25f3cc697.png)


- Halaman dan API Get Task By Peserta

![Screenshot (643)](https://user-images.githubusercontent.com/55697055/179123444-c2dc0091-ee85-43c7-ae4a-a9183477e8a5.png)

![Screenshot (634)](https://user-images.githubusercontent.com/55697055/178971702-068eb1ef-81e1-49e6-8fd5-246ecfd381e4.png)


- Cari Peserta By Name
![Screenshot (635)](https://user-images.githubusercontent.com/55697055/178971793-a697a05d-9441-40d9-accf-02c5877ed3d0.png)



Depedency :

composer require tymon/jwt-auth


Informasi Lainnya :

Menghapus .example dibelakang .env sebelum menggunakan API ini, kemudian menginstall composer sebelum menggunakan API.
Untuk API dokumentasi swagger dapat diakses dengan route "/dokumentasi", untuk tampilannya dapat dilihat dibawah :



![Screenshot (644)](https://user-images.githubusercontent.com/55697055/179125290-6c88e76a-ddd2-4161-a47b-dfc1b040a5a7.png)