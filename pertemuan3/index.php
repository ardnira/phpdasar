<?php 
    class Produk{
        public $judul="judule opo";
        public $penulis="penulise sopo";
        public $harga=700;

        public function sayHello(){
return "heloooo yooo";
        }
    }

    //atau penulisan bs di tulis ini
    class Mobil{
        public  $judul="judule opo",
                $penulis="penulise sopo",
                $harga=700;
    }

     

    $buku=new Produk();
    $buku->penulis ="coba saj";
    var_dump($buku->penulis);

    $komik=new Produk();

    echo  "komik: $buku->harga , $buku->judul" ;
    echo "<br>";
    echo $buku->sayHello();
        
    class  Orang {
        public $nama="indra",
        $umur= 45,
        $pekerjaan= "programmer",
        $gaji= 2000;
    }

    $aku=new Orang();
    echo "<br>";
    echo "gaji: $aku->gaji ";
 ?>