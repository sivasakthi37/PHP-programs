<?php
class data
{
    public $sname;
    public $share;
    public $sharePrice;
    public $totalPrice;

    function __construct($sname, $share, $sharePrice, $totalPrice)
    {
        $this->sname = $sname;
        $this->share = $share;
        $this->sharePrice = $sharePrice;
        $this->totalPrice = $totalPrice;
    }

}



function conformation()
{
    echo "Enter the number of stock :\n";

    fscanf(STDIN, "%s\n", $n);
    store($n);

}
conformation();
function store($n)
{

    $i = 0;
    while ($i < $n) {
        echo "Enter the Stock Names.. \n";
        fscanf(STDIN, "%s\n", $name);


        echo "Enter Number of Share \n";
        fscanf(STDIN, "%s\n", $share);

        echo "Enter the Share Price. \n";
        fscanf(STDIN, "%s\n", $sharePrice);
        $totalsharePrice = $share * $sharePrice;

        $store = new data($name, $share, $sharePrice, $totalsharePrice);

        $file = fopen("/home/brideit/Documents/PhP/OOPs/Report.json","r");
        $filestring = fgets($file);





        $i++;
    }








}
?>