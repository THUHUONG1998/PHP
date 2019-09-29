<?php 
class HinhChuNhat{
    public $chieudai;
    public $chieurong;

    public function tinhchuvi()
    {
      return ($this->chieudai + $this->chieurong)*2;   
    }
    public function tinhdientich(){
        return $this->chieudai * $this->chieurong;
    }

}
$hinhchunhat1= new HinhChuNhat();

$hinhchunhat1 -> chieudai =30;
$hinhchunhat1 -> chieurong= 40;
 
echo $chuvi = $hinhchunhat1 -> tinhchuvi();
?>