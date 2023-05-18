<?php
class Animal {
    private $nama;
    private $jenis;

    public function __construct($nama, $jenis) {
        $this->nama = $nama;
        $this->jenis = $jenis;
    }

    public function getInfo() {
        return "{$this->nama} merupakan hewan {$this->jenis}";
    }

    public function getNama() {
        return $this->nama;
    }
}

class Cat extends Animal {
    public function __construct($nama) {
        parent::__construct($nama, "kucing");
    }

    public function getInfo() {
        $info = parent::getInfo();
        $info .= " yang suka makan ikan.";

        return $info;
    }
}
class Dog extends Animal {
    public function __construct($nama) {
        parent::__construct($nama, "Anjing");
    }

    public function getInfo() {
        $info = parent::getInfo();
        $info .= " yang suka dijadikan hewan peliharaan.";

        return $info;
    }
}
