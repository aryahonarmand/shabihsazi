<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>
<body>
<?php
function generateNumber($number){
    $result=null;
    switch ($number){
        case ($number>=1 and $number<=125):
            $result=1;
            break;
        case ($number>=126 and $number<=250):
            $result=2;
            break;
        case ($number>=251 and $number<=375):
            $result=3;
            break;
        case ($number>=376 and $number<=500):
            $result=4;
            break;
        case ($number>=501 and $number<=625):
            $result=5;
            break;
        case ($number>=626 and $number<=750):
            $result=6;
            break;
        case ($number>=751 and $number<=875):
            $result=7;
            break;
        case ($number>=876 and $number<=1000):
            $result=8;
            break;
    }
    return $result;
}
function generate1to100($number){
    $result=null;
    switch ($number){
        case ($number>=1 and $number<=10):
            $result=1;
            break;
        case ($number>=1 and $number<=30):
            $result=2;
            break;
        case ($number>=31 and $number<=60):
            $result=3;
            break;
        case ($number>=61 and $number<=85):
            $result=4;
            break;
        case ($number>=86 and $number<=95):
            $result=5;
            break;
        case ($number>=96 and $number<=100):
            $result=6;
            break;
    }
    return $result;
}
?>
    <p>توزیع مدت های بین دو ورود </p>
    <table width="500" dir="ltr" border="2">
        <tr>
            <td>تخصیص ارقام تصادفی</td>
            <td>احتمال تجمعی</td>
            <td>احتمال</td>
            <td>مدت های بین دو ورود</td>
        </tr>
        <tr>
            <td>001-125</td>
            <td>0.125</td>
            <td>0.125</td>
            <td><?= rand(1, 8); ?></td>
        </tr>
        <tr>
            <td>126-250</td>
            <td>0.250</td>
            <td>0.125</td>
            <td><?= rand(1, 8); ?></td>
        </tr>
        <tr>
            <td>251-375</td>
            <td>0.375</td>
            <td>0.125</td>
            <td><?= rand(1, 8); ?></td>
        </tr>
        <tr>
            <td>376-500</td>
            <td>0.500</td>
            <td>0.125</td>
            <td><?= rand(1, 8); ?></td>
        </tr>
        <tr>
            <td>501-625</td>
            <td>0.625</td>
            <td>0.125</td>
            <td><?= rand(1, 8); ?></td>
        </tr>
        <tr>
            <td>626-750</td>
            <td>0.750</td>
            <td>0.125</td>
            <td><?= rand(1, 8); ?></td>
        </tr>
        <tr>
            <td>751-875</td>
            <td>0.875</td>
            <td>0.125</td>
            <td><?= rand(1, 8); ?></td>
        </tr>
        <tr>
            <td>876-000</td>
            <td>1.000</td>
            <td>0.125</td>
            <td><?= rand(1, 8); ?></td>
        </tr>
    </table>
    <p> توزیع مدت های خدمت دهی </p>
    <table width="500" dir="ltr" border="7">
        <tr>
            <td>تخصیص ارقام تصادفی</td>
            <td>احتمال تجمعی</td>
            <td>احتمال</td>
            <td>مدت خدمت دهی</td>
        </tr>
        <tr>
            <td>01-10</td>
            <td>0.10</td>
            <td>0.10</td>
            <td><?= rand(1, 6); ?></td>
        </tr>
        <tr>
            <td>11-30</td>
            <td>0.30</td>
            <td>0.20</td>
            <td><?= rand(1, 6); ?></td>
        </tr>
        <tr>
            <td>31-60</td>
            <td>0.60</td>
            <td>0.30</td>
            <td><?= rand(1, 6); ?></td>
        </tr>
        <tr>
            <td>61-85</td>
            <td>0.85</td>
            <td>0.25</td>
            <td><?= rand(1, 6); ?></td>
        </tr>
        <tr>
            <td>86-95</td>
            <td>0.95</td>
            <td>0.10</td>
            <td><?= rand(1, 6); ?></td>
        </tr>
        <tr>
            <td>96-00</td>
            <td>1.00</td>
            <td>0.05</td>
            <td><?= rand(1, 6); ?></td>
        </tr>
    </table>
    <br>
    <p>تعیین مدت های بین دو ورود </p>
    <table width="600" dir="rtl" border="7">
        <tr>
            <td>مشتری</td>
            <td>ارقام تصادفی</td>
            <td>مدت بین دو ورود</td>
            <td>مشتری</td>
            <td>ارقام تصادفی</td>
            <td>مدت بین دو ورود</td>
        </tr>
        <tr>
            <td>1</td>
            <td>0</td>
            <td>0</td>
            <td>11</td>
            <td><?= $r = rand(1, 1000); ?></td>
            <td><?= generateNumber($r); ?></td>
        </tr>
        <tr>
            <td>2</td>
            <td><?= $r = rand(1, 1000); ?></td>
            <td id="m-2"><?= generateNumber($r); ?></td>
            <td>12</td>
            <td><?= $r = rand(1, 1000); ?></td>
            <td id="m-12"><?= generateNumber($r); ?></td>
        </tr>
        <tr>
            <td>3</td>
            <td><?= $r = rand(1, 1000); ?></td>
            <td id="m-3"><?= generateNumber($r); ?></td>
            <td>13</td>
            <td><?= $r = rand(1, 1000); ?></td>
            <td id="m-13"><?= generateNumber($r); ?></td>
        </tr>
        <tr>
            <td>4</td>
            <td><?= $r = rand(1, 1000); ?></td>
            <td id="m-4"><?= generateNumber($r); ?></td>
            <td>14</td>
            <td><?= $r = rand(1, 1000); ?></td>
            <td id="m-14"><?= generateNumber($r); ?></td>
        </tr>
        <tr>
            <td>5</td>
            <td><?= $r = rand(1, 1000); ?></td>
            <td id="m-5"><?= generateNumber($r); ?></td>
            <td>15</td>
            <td><?= $r = rand(1, 1000); ?></td>
            <td id="m-15"><?= generateNumber($r); ?></td>
        </tr>
        <tr>
            <td>6</td>
            <td id="m-6"><?= $r = rand(1, 1000); ?></td>
            <td><?= generateNumber($r); ?></td>
            <td>16</td>
            <td><?= $r = rand(1, 1000); ?></td>
            <td id="m-16"><?= generateNumber($r); ?></td>
        </tr>
        <tr>
            <td>7</td>
            <td><?= $r = rand(1, 1000); ?></td>
            <td id="m-7"><?= generateNumber($r); ?></td>
            <td>17</td>
            <td><?= $r = rand(1, 1000); ?></td>
            <td id="m-17"><?= generateNumber($r); ?></td>
        </tr>
        <tr>
            <td>8</td>
            <td><?= $r = rand(1, 1000); ?></td>
            <td id="m-8"><?= generateNumber($r); ?></td>
            <td>18</td>
            <td><?= $r = rand(1, 1000); ?></td>
            <td id="m-18"><?= generateNumber($r); ?></td>
        </tr>
        <tr>
            <td>9</td>
            <td><?= $r = rand(1, 1000); ?></td>
            <td id="m-9"><?= generateNumber($r); ?></td>
            <td>19</td>
            <td><?= $r = rand(1, 1000); ?></td>
            <td id="m-19"><?= generateNumber($r); ?></td>
        </tr>
        <tr>
            <td>10</td>
            <td><?= $r = rand(1, 1000); ?></td>
            <td id="m-10"><?= generateNumber($r); ?></td>
            <td>20</td>
            <td><?= $r = rand(1, 1000); ?></td>
            <td id="m-20"><?= generateNumber($r); ?></td>
        </tr>
    </table>
    <p>تعیین مدت های تولید شده برای خدمت دهی </p>
    <table width="600" dir="rtl" border="7">
        <tr>
            <td>مشتری</td>
            <td>ارقام تصادفی</td>
            <td>مدت خدمت دهی</td>
            <td>مشتری</td>
            <td>ارقام تصادفی</td>
            <td>مدت خدمت دهی</td>
        </tr>
        <tr>
            <td>1</td>
            <td><?= $t = rand(1,100); ?></td>
            <td id="k-1"><?= generate1to100($t); ?></td>
            <td>11</td>
            <td><?= $t = rand(1,100); ?></td>
            <td id="k-11"><?= generate1to100($t); ?></td>
        </tr>
        <tr>
            <td>2</td>
            <td><?= $t = rand(1,100); ?></td>
            <td id="k-2"><?= generate1to100($t); ?></td>
            <td>12</td>
            <td><?= $t = rand(1,100); ?></td>
            <td id="k-12"><?= generate1to100($t); ?></td>
        </tr>
        <tr>
            <td>3</td>
            <td><?= $t = rand(1,100); ?></td>
            <td id="k-3"><?= generate1to100($t); ?></td>
            <td>13</td>
            <td><?= $t = rand(1,100); ?></td>
            <td id="k-13"><?= generate1to100($t); ?></td>
        </tr>
        <tr>
            <td>4</td>
            <td><?= $t = rand(1,100); ?></td>
            <td id="k-4"><?= generate1to100($t); ?></td>
            <td>14</td>
            <td><?= $t = rand(1,100); ?></td>
            <td id="k-14"><?= generate1to100($t); ?></td>
        </tr>
        <tr>
            <td>5</td>
            <td><?= $t = rand(1,100); ?></td>
            <td id="k-5"><?= generate1to100($t); ?></td>
            <td>15</td>
            <td><?= $t = rand(1,100); ?></td>
            <td id="k-15"><?= generate1to100($t); ?></td>
        </tr>
        <tr>
            <td>6</td>
            <td><?= $t = rand(1,100); ?></td>
            <td id="k-6"><?= generate1to100($t); ?></td>
            <td>16</td>
            <td><?= $t = rand(1,100); ?></td>
            <td id="k-16"><?= generate1to100($t); ?></td>
        </tr>
        <tr>
            <td>7</td>
            <td><?= $t = rand(1,100); ?></td>
            <td id="k-7"><?= generate1to100($t); ?></td>
            <td>17</td>
            <td><?= $t = rand(1,100); ?></td>
            <td id="k-17"><?= generate1to100($t); ?></td>
        </tr>
        <tr>
            <td>8</td>
            <td><?= $t = rand(1,100); ?></td>
            <td id="k-8"><?= generate1to100($t); ?></td>
            <td>18</td>
            <td><?= $t = rand(1,100); ?></td>
            <td id="k-18"><?= generate1to100($t); ?></td>
        </tr>
        <tr>
            <td>9</td>
            <td><?= $t = rand(1,100); ?></td>
            <td id="k-9"><?= generate1to100($t); ?></td>
            <td>19</td>
            <td><?= $t = rand(1,100); ?></td>
            <td id="k-19"><?= generate1to100($t); ?></td>
        </tr>
        <tr>
            <td>10</td>
            <td><?= $t = rand(1,100); ?></td>
            <td id="k-10"><?= generate1to100($t); ?></td>
            <td>20</td>
            <td><?= $t = rand(1,100); ?></td>
            <td id="k-20"><?= generate1to100($t); ?></td>
        </tr>
    </table>
    <p>جدول شبیه سازی برای مسئله صف </p>
    <table width="1200" dir="rtl" border="7">
        <tr>
            <td>مشتری</td>
            <td>مدت سپری شده از آخرین ورود</td>
            <td>زمان ورود</td>
            <td>مدت خدمت دهی</td>
            <td>زمان شروع خدمت</td>
            <td>مدت ماندن مشتری در صف</td>
            <td>زمان پایان خدمت</td>
            <td>مدت ماندن مشتری در سیستم</td>
            <td>مدت بیکاری خدمت دهنده</td>
        </tr>
        <tr>
            <td><?= $a=1; ?></td>
            <td><?= $b=0; ?></td>
            <td><?= $c=0; ?></td>
            <td><?= $d=4; ?></td>
            <td><?= $e=0; ?></td>
            <td><?= $f=0; ?></td>
            <td><?= $g=4; ?></td>
            <td><?= $h=4; ?></td>
            <td><?= $i=0; ?></td>
        </tr><tr>
            <td>2</td>
            <td><?php echo  "<script>document.writeln(document.getElementById('m-2').innerText);</script>";?></td>
            <td id="arya-1"><?php echo  "<script>document.writeln(document.getElementById('m-2').innerText);</script>";?></td>
            <td id="arya-2"><?php echo  "<script>document.writeln(document.getElementById('k-2').innerText);</script>";?></td>
            <td><?php echo  "<script>document.writeln(document.getElementById('m-2').innerText);</script>";?></td>
            <td><?php echo  rand(4,22);?></td>
            <td id="out"><?= rand(0,4) ?></td>
            <td><?= rand(0,4) ?></td>
            <td><?= rand(0,3) ?></td>
        </tr><tr>
            <td>3</td>
            <td><?php echo  rand(0,12);?></td>
            <td id="arya-1"><?php echo  rand(0,18);?></td>
            <td id="arya-2"><?php echo  rand(5,12);?></td>
            <td><?php echo  rand(4,22);?></td>
            <td><?php echo  rand(4,22);?></td>
            <td id="out"><?= rand(0,4) ?></td>
            <td><?= rand(0,4) ?></td>
            <td><?= rand(0,3) ?></td>
        </tr><tr>
            <td>4</td>
            <td><?php echo  rand(0,12);?></td>
            <td id="arya-1"><?php echo  rand(0,18);?></td>
            <td id="arya-2"><?php echo  rand(5,12);?></td>
            <td><?php echo  rand(4,22);?></td>
            <td><?php echo  rand(4,22);?></td>
            <td id="out"><?= rand(0,4) ?></td>
            <td><?= rand(0,4) ?></td>
            <td><?= rand(0,3) ?></td>
        </tr>
        <tr>
            <td>5</td>
            <td><?php echo  rand(0,12);?></td>
            <td id="arya-1"><?php echo  rand(0,18);?></td>
            <td id="arya-2"><?php echo  rand(5,12);?></td>
            <td><?php echo  rand(4,22);?></td>
            <td><?php echo  rand(4,22);?></td>
            <td id="out"><?= rand(0,4) ?></td>
            <td><?= rand(0,4) ?></td>
            <td><?= rand(0,3) ?></td>
        </tr><tr>
            <td>6</td>
            <td><?php echo  rand(0,12);?></td>
            <td id="arya-1"><?php echo  rand(0,18);?></td>
            <td id="arya-2"><?php echo  rand(5,12);?></td>
            <td><?php echo  rand(4,22);?></td>
            <td><?php echo  rand(4,22);?></td>
            <td id="out"><?= rand(0,4) ?></td>
            <td><?= rand(0,4) ?></td>
            <td><?= rand(0,3) ?></td>
        </tr><tr>
            <td>7</td>
            <td><?php echo  rand(0,12);?></td>
            <td id="arya-1"><?php echo  rand(0,18);?></td>
            <td id="arya-2"><?php echo  rand(5,12);?></td>
            <td><?php echo  rand(4,22);?></td>
            <td><?php echo  rand(4,22);?></td>
            <td id="out"><?= rand(0,4) ?></td>
            <td><?= rand(0,4) ?></td>
            <td><?= rand(0,3) ?></td>
        </tr><tr>
            <td>8</td>
            <td><?php echo  rand(0,12);?></td>
            <td id="arya-1"><?php echo  rand(0,18);?></td>
            <td id="arya-2"><?php echo  rand(5,12);?></td>
            <td><?php echo  rand(4,22);?></td>
            <td><?php echo  rand(4,22);?></td>
            <td id="out"><?= rand(0,4) ?></td>
            <td><?= rand(0,4) ?></td>
            <td><?= rand(0,3) ?></td>
        </tr><tr>
            <td>9</td>
            <td><?php echo  rand(0,12);?></td>
            <td id="arya-1"><?php echo  rand(0,18);?></td>
            <td id="arya-2"><?php echo  rand(5,12);?></td>
            <td><?php echo  rand(4,22);?></td>
            <td><?php echo  rand(4,22);?></td>
            <td id="out"><?= rand(0,4) ?></td>
            <td><?= rand(0,4) ?></td>
            <td><?= rand(0,3) ?></td>
        </tr>
        <tr>
            <td>10</td>
            <td><?php echo  rand(0,12);?></td>
            <td id="arya-1"><?php echo  rand(0,18);?></td>
            <td id="arya-2"><?php echo  rand(5,12);?></td>
            <td><?php echo  rand(4,22);?></td>
            <td><?php echo  rand(4,22);?></td>
            <td id="out"><?= rand(0,4) ?></td>
            <td><?= rand(0,4) ?></td>
            <td><?= rand(0,3) ?></td>
        </tr>
        <tr>
            <td>11</td>
            <td><?php echo  rand(0,12);?></td>
            <td id="arya-1"><?php echo  rand(0,18);?></td>
            <td id="arya-2"><?php echo  rand(5,12);?></td>
            <td><?php echo  rand(4,22);?></td>
            <td><?php echo  rand(4,22);?></td>
            <td id="out"><?= rand(0,4) ?></td>
            <td><?= rand(0,4) ?></td>
            <td><?= rand(0,3) ?></td>
        </tr>
        <tr>
            <td>12</td>
            <td><?php echo  rand(0,12);?></td>
            <td id="arya-1"><?php echo  rand(0,18);?></td>
            <td id="arya-2"><?php echo  rand(5,12);?></td>
            <td><?php echo  rand(4,22);?></td>
            <td><?php echo  rand(4,22);?></td>
            <td id="out"><?= rand(0,4) ?></td>
            <td><?= rand(0,4) ?></td>
            <td><?= rand(0,3) ?></td>
        </tr>
        <tr>
            <td>13</td>
            <td><?php echo  rand(0,12);?></td>
            <td id="arya-1"><?php echo  rand(0,18);?></td>
            <td id="arya-2"><?php echo  rand(5,12);?></td>
            <td><?php echo  rand(4,22);?></td>
            <td>0</td>
            <td id="out"><?= rand(0,4) ?></td>
            <td><?= rand(0,4) ?></td>
            <td><?= rand(0,3) ?></td>
        </tr>
        <tr>
            <td>14</td>
            <td><?php echo  rand(0,12);?></td>
            <td id="vorod"><?php echo  rand(0,18);?></td>
            <td id="arya-2"><?php echo  rand(5,12);?></td>
            <td><?php echo  rand(4,22);?></td>
            <td><?php echo  rand(4,22);?></td>
            <td id="out"><?= rand(0,4) ?></td>
            <td><?= rand(0,4) ?></td>
            <td><?= rand(0,3) ?></td>
        </tr>
        <tr>
            <td>15</td>
            <td><?php echo  rand(0,12);?></td>
            <td id="arya-1"><?php echo  rand(0,18);?></td>
            <td id="arya-2"><?php echo  rand(5,12);?></td>
            <td><?php echo  rand(4,22);?></td>
            <td><?php echo  rand(4,22);?></td>
            <td id="out"><?= rand(0,4) ?></td>
            <td><?= rand(0,4) ?></td>
            <td><?= rand(0,3) ?></td>
        </tr>
        <tr>
            <td>16</td>
            <td><?php echo  rand(0,12);?></td>
            <td id="arya-1"><?php echo  rand(0,18);?></td>
            <td id="arya-2"><?php echo  rand(5,12);?></td>
            <td><?php echo  rand(4,22);?></td>
            <td><?php echo  rand(4,22);?></td>
            <td id="out"><?= rand(0,4) ?></td>
            <td><?= rand(0,4) ?></td>
            <td><?= rand(0,3) ?></td>
        </tr>
        <tr>
            <td>17</td>
            <td><?php echo  rand(0,12);?></td>
            <td id="vorod"><?php echo  rand(0,18);?></td>
            <td id="arya-2"><?php echo  rand(5,12);?></td>
            <td><?php echo  rand(4,22);?></td>
            <td>0</td>
            <td id="out"><?= rand(0,4) ?></td>
            <td><?= rand(0,4) ?></td>
            <td><?= rand(0,3) ?></td>
        </tr>
        <tr>
            <td>2</td>
            <td><?php echo  rand(0,12);?></td>
            <td id="arya-1"><?php echo  rand(0,18);?></td>
            <td id="arya-2"><?php echo  rand(5,12);?></td>
            <td><?php echo  rand(4,22);?></td>
            <td>0</td>
            <td id="out"><?= rand(0,4) ?></td>
            <td><?= rand(0,4) ?></td>
            <td><?= rand(0,3) ?></td>
        </tr><tr>
            <td>18</td>
            <td><?php echo  rand(0,12);?></td>
            <td id="vorod"><?php echo  rand(0,18);?></td>
            <td id="arya-2"><?php echo  rand(5,12);?></td>
            <td><?php echo  rand(4,22);?></td>
            <td><?php echo  rand(4,22);?></td>
            <td id="out"><?= rand(0,4) ?></td>
            <td><?= rand(0,4) ?></td>
            <td><?= rand(0,3) ?></td>
        </tr>
        <tr>
            <td>19</td>
            <td><?php echo  rand(0,12);?></td>
            <td id="arya-1"><?php echo  rand(0,18);?></td>
            <td id="arya-2"><?php echo  rand(5,12);?></td>
            <td><?php echo  rand(4,22);?></td>
            <td><?php echo  rand(4,22);?></td>
            <td id="out"><?= rand(0,4) ?></td>
            <td><?= rand(0,4) ?></td>
            <td><?= rand(0,3) ?></td>
        </tr>
        <tr>
            <td>20</td>
            <td><?php echo  rand(0,12);?></td>
            <td id="arya-1"><?php echo  rand(0,18);?></td>
            <td id="arya-2"><?php echo  rand(5,12);?></td>
            <td><?php echo  rand(4,22);?></td>
            <td><?php echo  rand(4,22);?></td>
            <td id="out"><?= rand(0,4) ?></td>
            <td><?= rand(0,4) ?></td>
            <td><?= rand(0,3) ?></td>
        </tr>
    </table>
</body>
</html>
