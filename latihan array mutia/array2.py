# deklarasi matriks pertaman dan kedua
matriks1 = []
matriks2 = []

# meminta input untuk matriks pertama
print("masukan elemen untuk matriks pertama (3x3):")
for i in range(3):
    baris = []
    for j in range(3):
        nilai = int(input(f"masukan elemen baris {i+1}, kolom {j+1}: "))
        baris.append(nilai)
    matriks1.append(baris)

# meminta input untuk matriks kedua 
print("\nmasuka elemen untuk matriks kedua (3x3):")
for i in range(3):
    baris = []
    for j in range(3):
        nilai = int(input(F"masuka elemen baris {i+1,} kolom {j+1}: "))
        baris.append(nilai)
    matriks2.append(baris)

# meminta input jenis operasi
operasi = input("\nPilih operasi (penjumlahan/pengurangan/perkalian:) ").lower()

#melakukan operasi berdasarkan pilihan
hasil = []
if operasi == 'penjumlahan':
    for i in range(3):
        baris = []
        for j in range(3):
            baris.append(matriks1[i][j] + matriks2[i][j])
        hasil.append(baris)
elif operasi == 'pegurangan':
    for i in range(3):
        baris = []
        for j in range(3):
            baris.append(matriks1[i][j] - matriks2[i][j])
        hasil.append(baris)
elif operasi == 'perkalian':
    for i in range(3):
        baris = []
        for j in range(3):
            nilai = 0
            for k in range(3):
                nilai += matriks1[i][j] * matriks2[i][j]
            baris.append(nilai)
        hasil.append(baris)
else:
    print("Operasi tidak valid.")

# Menampilkan hasil operasi 
if hasil:
    print(f"\nHasil {operasi} matriks:")
    for baris in hasil:
        print(baris)