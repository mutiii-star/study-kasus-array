# deklarasi array untuk menyimpan angka
angka = []

# meminta input pengguna
for i in range(5):
    elemen = int(input(f"masukan angka ke-{i+1}: "))
    angka.append(elemen)

# menghitung frekuensi kemunculan
    frekuensi = {}
    for elemen in angka:
        if elemen in frekuensi:
            frekuensi[elemen] +=1
        else:
             frekuensi[elemen] =1

# menampilkan hasil
    for elemen, jumlah in frekuensi.items():
        print(f"Angka {elemen} muncul sebanyak {jumlah} kali.")