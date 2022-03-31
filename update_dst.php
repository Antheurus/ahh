<?php
class database{
    var $host = "localhost";
    var $username = "root";
    var $password = "";
    var $database = "db_barang";
    var $ko<?php koneksi = "";
    
    function __construct(){
        $this->koneksi = mysqli_connect($this->host, $this->username, 
        $this->password,$this->database);
        if (mysqli_connect_error()){
            echo "koneksi database gagal :" .mysqli_connect_error();
        }
    }

    function tambah_dst($nama_dst,$alamat_dst,$telp_dst){
        mysqli_query($this->koneksi,
        "insert into tb_distributor values('','$nama_dst','$alamat_dst','$telp_dst')") ;
    }
    function tampil_dst()
        {
            $data = mysqli_query($this->koneksi,"select *from tb_distributor");
            while($row = mysqli_fetch_array($data)){
                $hasil[] = $row;
            }
            return $hasil;
        }
        function get_by_iddst($id_dst)
        {
            $query = mysqli_query($this->koneksi,"select * from tb_distributor where id_date='$id_dst'");
            return $query->fetch_array();
        }




