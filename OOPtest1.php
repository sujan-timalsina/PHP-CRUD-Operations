<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Example 1</title>
</head>
<body>
    <?php
        class Laptop{
            //Properties
            Public $company;
            Public $name;
            Public $display;
            Public $ram;
            Public $storage;
            Public $cpu;
            Public $gpu;

            //Method
            function set_company($comp){
                $this->company=$comp;
            }

            function get_company(){
                return $this->company;
            }

            function set_name($n){
                $this->name=$n;
            }

            function get_name(){
                return $this->name;
            }

            function set_specs($display,$ram,$storage,$cpu){
                $this->display=$display;
                $this->ram=$ram;
                $this->storage=$storage;
                $this->cpu=$cpu;
            }

            function get_specs(){
                //Number of arguments
                // $numargs = func_num_args();

                echo $this->display;
                echo $this->ram;
                echo $this->storage;
                echo $this->cpu;

                // return $this->display;
                // return $this->ram;
                // return $this->storage;
                // return $this->cpu;
            }

            function set_gpu($gpu){
                $this->gpu=$gpu;
            }

            function get_gpu(){
                return $this->gpu;
            }

        }

        $dell=New Laptop();
        $dell->set_company("Dell");
        $dell->set_name("G5 3500");
        $dell->set_specs("15.6inch IPS display,","8Gb DDR4 RAM 2666mhz,","512 SSD,","i5 10300H Processor");
        $dell->set_gpu("Gtx 1650 Ti");
        
        echo "<b>Company:</b> ".$dell->get_company();
        echo " <b>Name:</b> ".$dell->get_name();
        echo " <b>Specification:</b> ";
        $dell->get_specs();
        echo " <b>GPU:</b> ".$dell->get_gpu();

        echo "<hr>";

        $acer=New Laptop();
        $acer->set_company("Acer");
        $acer->set_name("Nitro 5");
        $acer->set_specs("15.6inch IPS display,","8Gb DDR4 RAM 3200mhz,","512 SSD,","Ryzen 5 4600H Processor");
        $acer->set_gpu("Gtx 1650 Ti");
        
        echo "<b>Company:</b> ".$acer->get_company();
        echo " <b>Name:</b> ".$acer->get_name();
        echo " <b>Specification:</b> ";
        $acer->get_specs();
        echo " <b>GPU:</b> ".$acer->get_gpu();


    ?>
    
</body>
</html>