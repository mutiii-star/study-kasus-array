<?php
$sw = isset($_GET['sw'])? $_GET['sw']: "";
if($sw=="") {
    $query = mysqli_query($connection, "SELECT * FROM tb_stokbarang");?>
        <a href = "?page=data_barang&sw=addbarang">Tambah Barang</a>
            <table class= "barang" border=1>
                <tr>
                    <td>no</td>
                    <td>id_penjualan</td>
                    <td>id_transaksi</td>
                    <td>id_barang</td>
                    <td>Jumlah_Barang</td>
                    <td>harga_satuan</td>
                    <td>SUB_total</td>
                    <td>id_penjualan</td>
                    <td>option</td>
                </tr>
                </td> 
                </tbody> <?php 
                $no=1;
                while($data1 = mysqli_fetch_array($query)){ ?>
                <tr>
                    <td align=center><?= $no; ?> </td>
                    <td align=center><?= $data1['id_penjualan']; ?> </td>
                    <td align=center><?= $data1['id_transaksi']; ?> </td>
                    <td align=center><?= $data1['id_barang']; ?> </td>
                    <td align=center><?= $data1['Jumlah_Barang']; ?> </td>
                    <td align=center><?= $data1['harga_satuan']; ?> </td>
                    <td align=center><?= $data1['SUB_total']; ?> <td>
                    <td align=center><?= $data1['tgl_penjualan']; ?> <td>
                        <a herf="?page=data_barang&sw=editbarang&ID_Barang=<?=$data1['id_penjualan'];?>">edit barang</a>
                        <a href="?page=data_barang&sw=deletebarang&ID_Barang=<?=$data1['id_penjualan'];?>">delete barang</a></td>
                    </td>
                </tr>
            </tbody> <?php
            $no++;}?>
    </table>
    
    <?php
        }else if ($sw == "addbarang"){ ?>
        <form action ="" method="POST">
            <table>
                <tr>
                    <td>id_penjualan</td>
                    <td width="5px"> :</td>
                    <td> <Input type="text" name="Nama_Barang" required/></td>
                </tr>
                <tr>
                    <td>id_transaksi</td>
                    <td>:</td>
                    <td> <Input type="text" name="Jumlah_Stok" required/></td>
                </tr>

                <tr>
                    <td>id_barang</td>
                    <td>:</td>
                    <td> <Input type="text" name="Jumlah_Stok" required/></td>
                </tr>

                <tr>
                    <td>Jumlah_Barang</td>
                    <td>:</td>
                    <td> <Input type="text" name="Jumlah_Stok" required/></td>
                </tr>

                <tr>
                    <td>harga_satuan</td>
                    <td>:</td>
                    <td> <Input type="text" name="Jumlah_Stok" required/></td>
                </tr>

                <tr>
                    <td>SUB_total</td>
                    <td>:</td>
                    <td> <Input type="text" name="Jumlah_Stok" required/></td>
                </tr>

                <tr>
                    <td>tgl_penjualan</td>
                    <td>:</td>
                    <td> <Input type="text" name="Jumlah_Stok" required/></td>
                </tr>

                <tr>
                    <td colspan="3"><button type = "submit" name = "proses">Proses input</button>
                    <a href="?page=data_barang" type="submit" class="tombol-batal" name="">Batal</a>
                </td>
                </tr>
            </table>
        </from>
        
        <?php
        if(isset($_POST['proses'])){
            $id_penjualan = $_POST['id_penjualan'];
            $id_transaksi = $_POST['id_transaksi'];
            $id_barang = $_POST['id_barang'];
            $Jumlah_Barang = $_POST['Jumlah_Barang'];
            $harga_satuan = $_POST['harga_satuan'];
            $SUB_total = $_POST['SUB_total'];
            $tgl_penjualan = $_POST['tgl_penjualan'];
            $insert = mysqli_query($connection, "INSERT INTO tb_stokbarang (id_penjualan, id_transaksi, id_barang, Jumlah_Barang, harga_satuan, SUB_total, tgl_penjualan) VALUES ('$id_penjualan', '$id_transaksi', $id_barang', $Jumlah_Barang, $harga_satuan, $SUB_total, $tgl_penjualan)");
            
            if ($insert) {
                ?> <script> alert("Data Berhasil Di Tambah");
                window.location="?page=data_barang";</script>
                <?php
            }else {
                ?>  <script> alert("Data gagal di tambah");
                window.location="?page=data_barang";</script>
                <?php
                }
            }
        }else if ($sw=="editbarang"){
            $id_barang=$_GET['id_barang'];
            $cek= mysqli_num_rows(mysqli_query($connection, "SELECT * FROM tb_stokbarang WHERE ID_Barang='$ID_Barang'"));
        if($cekdata!=0){
            $row=mysqli_fetch_array(mysqli_query($connection,"SELECT * FROM tb_stokbarang WHERE ID_Barang='$ID_Barang'")); ?>
                <form action="" method="POST">
                <table>
                    <tr>
                        <td>Nama Barang</td>
                        <td>:</td?>
                        <td> 
                            <input type="text" name="Nama_Barang" value="<?$row['Nama_Barang'];?>"/>
                        </td>
                    </tr>
                    <tr>
                        <td>Jumlah Stok</td>
                        <td>:</td?>
                        <td> 
                            <input type="text" name="Jumlah_Stok" value="<?$row['Jumlah_Stok'];?>"/>
                        </td>
                    </tr>
                    <tr>
                        <td>Harga Barang</td>
                        <td>:</td?>
                        <td> 
                            <input type="text" name="Harga_Barang" value="<?$row['Harga_Barang'];?>"/>
                        </td>
                    </tr>
                    <tr>
                        <td colspan=3>
                            <button type = "submit" name = "submit">EDIT DATA</button>
                            <a href="?page=data_barang" type="submit" class="tombol-batal">Batal</a>
                        </td>
                        </tr>
                </table>
            </form>

            <?php
                if(isset($_POST['submit'])){
                    $ID_Barang= $_GET['ID'];
                    $Nama_Barag = $_POST['Nama_Barang'];
                    $Jumlah_Stok = $_POST['Jumlah_Stok'];
                    $Harga_Barang = $_POST['Harga_Barang'];
                    $update = mysqli_query($connection, "UPDATE tb_stokbarang SET
                        Nama_Barang='$Nama_Barang', 
                        Jumlah_Stok='$Jumlah_Stok', 
                        Harga_Barang='$Harga_Barang' 
                        WHERE ID_Barang='$ID_Barang' ");
    
                if($update) {
                    ?> <script> alert("Berhasil Update Barang");
                    window.location="?page=data_barang";</script>
                    <?php
                }else{
                    ?> <script> alert("Gagal Update");
                    window.location="?page=data_barang";</script>
                    <?php
                }
            }

        }else{
            ?> <script> alert("Data Barang Tidak Ditemukan"); 
            window.location="?page=data_barang";</script>
            <?php
        }
    
    }else if ($sw=="DeleteBarang"){
        $ID_Barang=$_GET['ID_Barang'];
        $cek=mysqli_num_rows(mysqli_query($connection, "SELECT * FROM tb_stokbarang WHERE ID_Barang='$ID_Barang'"));

        if($cek == 0 ){
            ?><script> alert("Data Barang Tidak Ditemukan");
            window.location="?page=data_barang";</script><?php
        }else{
            $delete = mysqli_query($connection, "DELETE FROM tb_stokbarang WHERE ID_Barang='$ID_Barang'");
            if($delete){
                ?><script> alert("Berhasil Hapus Barang");
                window.location="?page=data_barang";</script><?php
            }else{
                ?><script> alert("Gagal Hapus");
                window.location="?page=data_barang";</script><?php
            }
        }
    }else{
        echo"page not found";
    }
    ?> 