
<!DOCTYPE html >
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title></title>
    <style>
    table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
        }
    td{
        font:12px verdana, arial, sans-serif;
        border:1px solid;
        padding:15px;
        text-align:center;

    }
    /* .demo{
        color:red;
    } */
</style>
</head>

<body>

    <?php
    $bangdiem = array(
     "1" => array(
        "name"=> "Trần  Nguyễn Nhật Nam",
        "toan"=> "9",
        "ly"  => "8.5",
        "hoa" => "8.9"
    ),
     "2" => array(
        "name"  => "Bùi Ngọc Quỳnh Nhi",
        "toan"=> "7",
        "ly"  => "8.8",
        "hoa"  => "7.8",
    ),
     "3" => array(
        "name"  => "Nguyễn Hoàng Thanh Mai",
        "toan"=> "8.5",
        "ly"  => "9.2",
        "hoa"  => "7.5",
    ),
     "4" => array(
        "name"  => "Trần Thị Thu Minh",
        "toan"=> "6.5",
        "ly"  => "6",
        "hoa"  => "7",
    ),
     "5" => array(
        "name"  => "Nguyễn Thị Nguyên Thảo",
        "toan"=> "4",
        "ly"  => "4.1",
        "hoa"  => "3.2",
    ),            
 );

 ?>
 <table align="center" width="900" border="1">
    <tr>
        <td>STT</td>
        <td>Họ Tên</td>
        <td>Điểm Toán</td>
        <td>Điểm Lý</td>
        <td>Điểm Hóa</td>
        <td>Tổng Điểm</td>
        <td>Xếp Loại</td>
        <?php
        foreach($bangdiem as $k => $v){
             $tong=(($v['ly'] + $v['toan'] + $v['hoa'])/3);
            $x= round($tong,2);
            $bangdiem[$k]["tongdiem"]= $x;
            if ($tong<5) {
                $class='style="color:red"';
                
            } else {
                $class='';
            }
            
            echo "<tr $class>";
            echo "<td>$k</td>";
            echo "<td>$v[name]</td>";
            echo "<td>$v[toan]</td>";
            echo "<td>$v[ly]</td>";
            echo "<td>$v[hoa]</td>";
            $tong=(($v['ly'] + $v['toan'] + $v['hoa'])/3);
            $x= (round($tong,2));
            $bangdiem[$k]["tongdiem"]= $x;
            echo "<td>$x</td>";
            $tong;
            if($tong>=8.5){
                echo "<td>Giỏi</td>";
            }
            elseif($tong>=7)
            {
                echo  "<td>Khá</td>";
            }
            elseif($tong>=5){
                echo  "<td>Trung Bình</td>";
            }
            else{
                echo  "<td>Yếu</td>";
            } 
            echo "</tr>";

        }
        ?>
    </table><hr>
    <table align="center" width="900" border="1">
        <tr>
            <td>STT</td>
            <td>Họ Tên</td>
            <td>Điểm Toán</td>
            <td>Điểm Lý</td>
            <td>Điểm Hóa</td>
            <td>Tổng Điểm</td>
            <td>Xếp Loại</td>
            <?php
            for ($i=1; $i<=count($bangdiem); $i++) { 
                    for ($j=$i+1;$j<=count($bangdiem);$j++) { 
                        if ($bangdiem[$i]["tongdiem"]>$bangdiem[$j]["tongdiem"]) {
                        $tt=$bangdiem[$i];
                        $bangdiem[$i]=$bangdiem[$j];
                        $bangdiem[$j]=$tt;
                        }
                    }
                }
            foreach($bangdiem as $k => $v){
                
            echo "<tr>";
            echo "<td>$k</td>";
            echo "<td>$v[name]</td>";
            echo "<td>$v[toan]</td>";
            echo "<td>$v[ly]</td>";
            echo "<td>$v[hoa]</td>";
           
            $tong=(($v['ly'] + $v['toan'] + $v['hoa'])/3);
            $x= round($tong,2);
            $bangdiem[$k]["tongdiem"]= $x;
            
            echo "<td>$x</td>";
            $tong;
            if($tong>=8.5){
                echo "<td>Giỏi</td>";
            }
            elseif($tong>=7)
            {
                echo  "<td>Khá</td>";
            }
            elseif($tong>=5){
                echo  "<td>Trung Bình</td>";
            }
            else{
                echo  "<td>Yếu</td>";
            } 
            echo "</tr>";

        }
        // echo "<pre>";
        // print_r($bangdiem);
        // echo "</pre>";
        ?>
    </table>
</body>
</html>