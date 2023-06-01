# TP4DPBO2023C2
Saya Raisyad Jullfikar NIM 2106238 mengerjakan TP4 dalam mata kuliah Desain dan Pemrograman Berorientasi Objek untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin.

## Deskripsi Tugas
* Buatlah database berdasarkan kode tersebut
* Ubah arsitektur project tersebut menggunakan MVC
* Tambahkan tabel baru (1 - 2) yang berelasi dengan tabel yang sudah ada (Tabel dan Relasinya bebas ya)
* Buat CRUD dari tabel  baru tersebut

## Design Program
<img width="630" alt="image" src="https://github.com/raisyad/TP4DPBO2023C2/assets/92106283/7ed03511-2f70-498d-a266-88e22f0a0299">

### Penjelasan Design
    Pada program ini terdapat 2 tabel yaitu:
    
    1. Tabel Members yang berisi 6 atribut dengan atribut `member_id` sebagai primary keynya. Tabel ini memiliki relasi many to one  dengan tabel department dengan foreign key ada pada atribut `department_id`
    
    2. Tabel department yang berisi 2 atribut dengan atribut `department_id` sebagai primary keynya. Tabel ini memiliki relasi one to many dengan tabel members

## Penjelasan alur
1. Ketika pertama kali mengakses, user akan ditampilkan dengan halaman home yang berisi data members
2. User dapat menekan tombol add new jika akan menambahkan data members dan akan diarahkan ke halaman create new member
3. Pada halaman create new member terdapat form untuk mengisi data member dan menekan tombol submit untuk menyimpan data
4. Pada halaman home yaitu pada list data member terdapat action untuk edit dan hapus data
5. Jika menekan tombol edit maka akan diarahkan ke halaman edit yang form field nya sudah terisi dengan data member yang akan diubah
6. Pada halaman department terdapat list dari data department.
7. User dapat menekan tombol add new jika akan menambahkan data department dan akan diarahkan ke halaman create new department
8. Sama seperti members, pada department juga terdapat action untuk mengubah/mengedit dan menghapus data

## Dokumentasi
1. Home Page
<img width="881" alt="image" src="https://github.com/raisyad/TP4DPBO2023C2/assets/92106283/7e10f266-ba5b-4b08-9344-04106f329e0d">

2. Create new Member
<img width="882" alt="image" src="https://github.com/raisyad/TP4DPBO2023C2/assets/92106283/afc2082c-b944-4ead-93cb-fa5f81f748e6">

3. Edit Member
<img width="881" alt="image" src="https://github.com/raisyad/TP4DPBO2023C2/assets/92106283/aaa9efd7-8338-4181-a1bc-faf487e0fce7">

4. Department Page
<img width="880" alt="image" src="https://github.com/raisyad/TP4DPBO2023C2/assets/92106283/e25d3cc1-6d2c-48a4-bffa-567c2fbcdeae">

5. Edit Department
<img width="682" alt="image" src="https://github.com/raisyad/TP4DPBO2023C2/assets/92106283/43d1935f-abe1-41cd-b60a-9b08f4b49b32">

## Preview
https://github.com/raisyad/TP4DPBO2023C2/assets/92106283/d4bae1da-0ea4-4fc0-b9b7-58a2ff4dd11f
