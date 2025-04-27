
<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="css/CSS8.css">
    <link rel="stylesheet" href="css/w3.css">
    <title>จักรราศี</title>
</head>

<body class="w3-black">
        <div class="container">
        <div class="navBar">
          <ul>
            <il><a href="index.html">Home</a></il>
                <il><a href="Page 2.html">การกำเนิดบิ๊กแบง</a></il>
                <il><a href="Page 3.html">ข้อมูลทางดาราศาสตร์</a></il>
                <il><a href="Page 3.html">ข้อมูลเกี่ยวกับเทพ</a></il>
                <il><a href="Page 3.html">เทพกรีกและหมู่ดาว</a></il>
                <il><a href="Page 6.html">หมู่ดาวที่น่าสนใจ</a></il>
                <il><a href="Page 7.html">ตำนานเกี่ยวกับหมู่ดาวต่างๆที่น่าสนใจ</a></il>
                <il><a href="Page 8.php">เช็คจักรราศีของคุณ</a></il>
            </ul>
        </div>
    <div class="main">   
        <h1>เช็คจักรราศีของคุณ</h1>
</div> 
    <hr>
    <div class="imgs">
        <img src="imgss/81.jpg" width = "30%">
    </div>
    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
    
    <p class="input-name">
        <label for="name">ชื่อ :&nbsp;<input type="text" id="name" placeholder="Enter your name"></label><label for="sername">&nbsp;นามสกุล :&nbsp;<input type="text" id = "surname" placeholder="Enter your surname"></label>
    </p>
    <p class="select-1">
    <label for="day">วัน :&nbsp;</label>
    <select name="daylist" id="day">
        <option value="0" >เลือก</option>
        <option value="1" >1</option>
        <option value="2" >2</option>
        <option value="3" >3</option>
        <option value="4" >4</option>
        <option value="5" >5</option>
        <option value="6" >6</option>
        <option value="7" >7</option>
        <option value="8" >8</option>
        <option value="9" >9</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
        <option value="13">13</option>
        <option value="14">14</option>
        <option value="15">15</option>
        <option value="16">16</option>
        <option value="17">17</option>
        <option value="18">18</option>
        <option value="19">19</option>
        <option value="20">20</option>
        <option value="21">21</option>
        <option value="22">22</option>
        <option value="23">23</option>
        <option value="24">24</option>
        <option value="25">25</option>
        <option value="26">26</option>
        <option value="27">27</option>
        <option value="28">28</option>
        <option value="29">29</option>
        <option value="30">30</option>
        <option value="31">31</option>
    </select>

    <label for="Month">&nbsp;เดือน :&nbsp;</label>
        <select name="monthlist" id="Month">
            <option value="0" >เลือก</option>
            <option value="month1" >มกราคม</option>
            <option value="month2" >กุมภาพันธ์</option>
            <option value="month3" >มีนาคม</option>
            <option value="month4" >เมษายน</option>
            <option value="month5" >พฤษภาคม</option>
            <option value="month6" >มิถุนายน</option>
            <option value="month7" >กรกฎาคม</option>
            <option value="month8" >สิงหาคม</option>
            <option value="month9" >กันยายน</option>
            <option value="month10">ตุลาคม</option>
            <option value="month11">พฤศจิกายน</option>
            <option value="month12">ธันวาคม</option>
        </select>
   
        <label for="year">&nbsp;ปี :&nbsp;</label>
            <select name="yearlist" id="year">
                <option value="0" >เลือก</option>
                <option value="2023">2023</option>
                <option value="2022">2022</option>
                <option value="2021">2021</option>
                <option value="2020">2020</option>
                <option value="2019">2019</option>
                <option value="2018">2018</option>
                <option value="2017">2017</option>
                <option value="2016">2016</option>
                <option value="2015">2015</option>
                <option value="2014">2014</option>
                <option value="2013">2013</option>
                <option value="2012">2012</option>
                <option value="2011">2011</option>
                <option value="2010">2010</option>
                <option value="2009">2009</option>
                <option value="2008">2008</option>
                <option value="2007">2007</option>
                <option value="2006">2006</option>
                <option value="2005">2005</option>
                <option value="2004">2004</option>
                <option value="2003">2003</option>
                <option value="2002">2002</option>
                <option value="2001">2001</option>
                <option value="2000">2000</option>
                <option value="1999">1999</option>
                <option value="1998">1998</option>
                <option value="1997">1997</option>
                <option value="1996">1996</option>
                <option value="1995">1995</option>
                <option value="1994">1994</option>
                <option value="1993">1993</option>
                <option value="1992">1992</option>
                <option value="1991">1991</option>
                <option value="1990">1990</option>
                <option value="1989">1989</option>
                <option value="1988">1988</option>
                <option value="1987">1987</option>
                <option value="1986">1986</option>
                <option value="1985">1985</option>
                <option value="1984">1984</option>
                <option value="1983">1983</option>
                <option value="1982">1982</option>
                <option value="1981">1981</option>
                <option value="1980">1980</option>
                <option value="1979">1979</option>
                <option value="1978">1978</option>
                <option value="1977">1977</option>
                <option value="1976">1976</option>
                <option value="1975">1975</option>
            </select>
        </p>
            
            <?php
    if(isset($_POST['submit'])){
        isset( $_POST["daylist"] ) ? $daylist = $_POST["daylist"] : $daylist = "";
        isset( $_POST["monthlist"] ) ? $monthlist = $_POST["monthlist"] : $monthlist = "";
        isset( $_POST["yearlist"] ) ? $yearlist = $_POST["yearlist"] : $yearlist = "";
    $show_data;

    if($daylist == "16" && $monthlist == "month12"){
        echo "<h2 style='text-align: center;'>ราศีธนู</h2>";    
    }elseif($daylist == "17" && $monthlist == "month12"){
        echo "<h2 style='text-align: center;'>ราศีธนู</h2>";    
    }elseif($daylist == "18" && $monthlist == "month12"){
        echo "<h2 style='text-align: center;'>ราศีธนู</h2>";    
    }elseif($daylist == "19" && $monthlist == "month12"){
        echo "<h2 style='text-align: center;'>ราศีธนู</h2>";    
    }elseif($daylist == "20" && $monthlist == "month12"){
        echo "<h2 style='text-align: center;'>ราศีธนู</h2>";    
    }elseif($daylist == "21" && $monthlist == "month12"){
        echo "<h2 style='text-align: center;'>ราศีธนู</h2>";    
    }elseif($daylist == "22" && $monthlist == "month12"){
        echo "<h2 style='text-align: center;'>ราศีธนู</h2>";    
    }elseif($daylist == "23" && $monthlist == "month12"){
        echo "<h2 style='text-align: center;'>ราศีธนู</h2>";    
    }elseif($daylist == "24" && $monthlist == "month12"){
        echo "<h2 style='text-align: center;'>ราศีธนู</h2>";    
    }elseif($daylist == "25" && $monthlist == "month12"){
        echo "<h2 style='text-align: center;'>ราศีธนู</h2>";    
    }elseif($daylist == "26" && $monthlist == "month12"){
        echo "<h2 style='text-align: center;'>ราศีธนู</h2>";    
    }elseif($daylist == "27" && $monthlist == "month12"){
        echo "<h2 style='text-align: center;'>ราศีธนู</h2>";    
    }elseif($daylist == "28" && $monthlist == "month12"){
        echo "<h2 style='text-align: center;'>ราศีธนู</h2>";    
    }elseif($daylist == "29" && $monthlist == "month12"){
        echo "<h2 style='text-align: center;'>ราศีธนู</h2>";    
    }elseif($daylist == "30" && $monthlist == "month12"){
        echo "<h2 style='text-align: center;'>ราศีธนู</h2>";    
    }elseif($daylist == "31" && $monthlist == "month12"){
        echo "<h2 style='text-align: center;'>ราศีธนู</h2>";    
    }elseif($daylist == "1" && $monthlist == "month1"){
        echo "<h2 style='text-align: center;'>ราศีธนู</h2>";    
    }elseif($daylist == "2" && $monthlist == "month1"){
        echo "<h2 style='text-align: center;'>ราศีธนู</h2>";    
    }elseif($daylist == "3" && $monthlist == "month1"){
        echo "<h2 style='text-align: center;'>ราศีธนู</h2>";    
    }elseif($daylist == "4" && $monthlist == "month1"){
        echo "<h2 style='text-align: center;'>ราศีธนู</h2>";    
    }elseif($daylist == "5" && $monthlist == "month1"){
        echo "<h2 style='text-align: center;'>ราศีธนู</h2>";    
    }elseif($daylist == "6" && $monthlist == "month1"){
        echo "<h2 style='text-align: center;'>ราศีธนู</h2>";    
    }elseif($daylist == "7" && $monthlist == "month1"){
        echo "<h2 style='text-align: center;'>ราศีธนู</h2>";    
    }elseif($daylist == "8" && $monthlist == "month1"){
        echo "<h2 style='text-align: center;'>ราศีธนู</h2>";    
    }elseif($daylist == "9" && $monthlist == "month1"){
        echo "<h2 style='text-align: center;'>ราศีธนู</h2>";    
    }elseif($daylist == "10" && $monthlist == "month1"){
        echo "<h2 style='text-align: center;'>ราศีธนู</h2>";    
    }elseif($daylist == "11" && $monthlist == "month1"){
        echo "<h2 style='text-align: center;'>ราศีธนู</h2>";    
    }elseif($daylist == "12" && $monthlist == "month1"){
        echo "<h2 style='text-align: center;'>ราศีธนู</h2>";    
    }elseif($daylist == "13" && $monthlist == "month1"){
        echo "<h2 style='text-align: center;'>ราศีธนู</h2>";    
    }elseif($daylist == "14" && $monthlist == "month1"){
        echo "<h2 style='text-align: center;'>ราศีธนู</h2>";    
    }elseif($daylist == "15" && $monthlist == "month1"){
        echo "<h2 style='text-align: center;'>ราศีมังกร</h2>";    
    }elseif($daylist == "16" && $monthlist == "month1"){
        echo "<h2 style='text-align: center;'>ราศีมังกร</h2>";    
    }elseif($daylist == "17" && $monthlist == "month1"){
        echo "<h2 style='text-align: center;'>ราศีมังกร</h2>";    
    }elseif($daylist == "18" && $monthlist == "month1"){
        echo "<h2 style='text-align: center;'>ราศีมังกร</h2>";    
    }elseif($daylist == "19" && $monthlist == "month1"){
        echo "<h2 style='text-align: center;'>ราศีมังกร</h2>";    
    }elseif($daylist == "20" && $monthlist == "month1"){
        echo "<h2 style='text-align: center;'>ราศีมังกร</h2>";    
    }elseif($daylist == "21" && $monthlist == "month1"){
        echo "<h2 style='text-align: center;'>ราศีมังกร</h2>";    
    }elseif($daylist == "22" && $monthlist == "month1"){
        echo "<h2 style='text-align: center;'>ราศีมังกร</h2>";    
    }elseif($daylist == "23" && $monthlist == "month1"){
        echo "<h2 style='text-align: center;'>ราศีมังกร</h2>";    
    }elseif($daylist == "24" && $monthlist == "month1"){
        echo "<h2 style='text-align: center;'>ราศีมังกร</h2>";    
    }elseif($daylist == "25" && $monthlist == "month1"){
        echo "<h2 style='text-align: center;'>ราศีมังกร</h2>";    
    }elseif($daylist == "26" && $monthlist == "month1"){
        echo "<h2 style='text-align: center;'>ราศีมังกร</h2>";    
    }elseif($daylist == "27" && $monthlist == "month1"){
        echo "<h2 style='text-align: center;'>ราศีมังกร</h2>";    
    }elseif($daylist == "28" && $monthlist == "month1"){
        echo "<h2 style='text-align: center;'>ราศีมังกร</h2>";    
    }elseif($daylist == "29" && $monthlist == "month1"){
        echo "<h2 style='text-align: center;'>ราศีมังกร</h2>";    
    }elseif($daylist == "30" && $monthlist == "month1"){
        echo "<h2 style='text-align: center;'>ราศีมังกร</h2>";    
    }elseif($daylist == "31" && $monthlist == "month1"){
        echo "<h2 style='text-align: center;'>ราศีมังกร</h2>";    
    }elseif($daylist == "1" && $monthlist == "month2"){
        echo "<h2 style='text-align: center;'>ราศีมังกร</h2>";    
    }elseif($daylist == "2" && $monthlist == "month2"){
        echo "<h2 style='text-align: center;'>ราศีมังกร</h2>";    
    }elseif($daylist == "3" && $monthlist == "month2"){
        echo "<h2 style='text-align: center;'>ราศีมังกร</h2>";    
    }elseif($daylist == "4" && $monthlist == "month2"){
        echo "<h2 style='text-align: center;'>ราศีมังกร</h2>";    
    }elseif($daylist == "5" && $monthlist == "month2"){
        echo "<h2 style='text-align: center;'>ราศีมังกร</h2>";    
    }elseif($daylist == "6" && $monthlist == "month2"){
        echo "<h2 style='text-align: center;'>ราศีมังกร</h2>";    
    }elseif($daylist == "7" && $monthlist == "month2"){
        echo "<h2 style='text-align: center;'>ราศีมังกร</h2>";    
    }elseif($daylist == "8" && $monthlist == "month2"){
        echo "<h2 style='text-align: center;'>ราศีมังกร</h2>";    
    }elseif($daylist == "9" && $monthlist == "month2"){
        echo "<h2 style='text-align: center;'>ราศีมังกร</h2>";    
    }elseif($daylist == "10" && $monthlist == "month2"){
        echo "<h2 style='text-align: center;'>ราศีมังกร</h2>";    
    }elseif($daylist == "11" && $monthlist == "month2"){
        echo "<h2 style='text-align: center;'>ราศีมังกร</h2>";    
    }elseif($daylist == "12" && $monthlist == "month2"){
        echo "<h2 style='text-align: center;'>ราศีมังกร</h2>";    
    }elseif($daylist == "13" && $monthlist == "month2"){
        echo "<h2 style='text-align: center;'>ราศีกุมภ์</h2>";    
    }elseif($daylist == "14" && $monthlist == "month2"){
        echo "<h2 style='text-align: center;'>ราศีกุมภ์</h2>";    
    }elseif($daylist == "15" && $monthlist == "month2"){
        echo "<h2 style='text-align: center;'>ราศีกุมภ์</h2>";    
    }elseif($daylist == "16" && $monthlist == "month2"){
        echo "<h2 style='text-align: center;'>ราศีกุมภ์</h2>";    
    }elseif($daylist == "17" && $monthlist == "month2"){
        echo "<h2 style='text-align: center;'>ราศีกุมภ์</h2>";    
    }elseif($daylist == "18" && $monthlist == "month2"){
        echo "<h2 style='text-align: center;'>ราศีกุมภ์</h2>";    
    }elseif($daylist == "19" && $monthlist == "month2"){
        echo "<h2 style='text-align: center;'>ราศีกุมภ์</h2>";    
    }elseif($daylist == "20" && $monthlist == "month2"){
        echo "<h2 style='text-align: center;'>ราศีกุมภ์</h2>";    
    }elseif($daylist == "21" && $monthlist == "month2"){
        echo "<h2 style='text-align: center;'>ราศีกุมภ์</h2>";    
    }elseif($daylist == "22" && $monthlist == "month2"){
        echo "<h2 style='text-align: center;'>ราศีกุมภ์</h2>";    
    }elseif($daylist == "23" && $monthlist == "month2"){
        echo "<h2 style='text-align: center;'>ราศีกุมภ์</h2>";    
    }elseif($daylist == "24" && $monthlist == "month2"){
        echo "<h2 style='text-align: center;'>ราศีกุมภ์</h2>";    
    }elseif($daylist == "25" && $monthlist == "month2"){
        echo "<h2 style='text-align: center;'>ราศีกุมภ์</h2>";    
    }elseif($daylist == "26" && $monthlist == "month2"){
        echo "<h2 style='text-align: center;'>ราศีกุมภ์</h2>";    
    }elseif($daylist == "27" && $monthlist == "month2"){
        echo "<h2 style='text-align: center;'>ราศีกุมภ์</h2>";    
    }elseif($daylist == "28" && $monthlist == "month2"){
        echo "<h2 style='text-align: center;'>ราศีกุมภ์</h2>";
    }elseif($daylist == "1" && $monthlist == "month3"){
        echo "<h2 style='text-align: center;'>ราศีกุมภ์</h2>";
    }elseif($daylist == "2" && $monthlist == "month3"){
        echo "<h2 style='text-align: center;'>ราศีกุมภ์</h2>"; 
    }elseif($daylist == "3" && $monthlist == "month3"){
        echo "<h2 style='text-align: center;'>ราศีกุมภ์</h2>"; 
    }elseif($daylist == "4" && $monthlist == "month3"){
        echo "<h2 style='text-align: center;'>ราศีกุมภ์</h2>"; 
    }elseif($daylist == "5" && $monthlist == "month3"){
        echo "<h2 style='text-align: center;'>ราศีกุมภ์</h2>"; 
    }elseif($daylist == "6" && $monthlist == "month3"){
        echo "<h2 style='text-align: center;'>ราศีกุมภ์</h2>"; 
    }elseif($daylist == "7" && $monthlist == "month3"){
        echo "<h2 style='text-align: center;'>ราศีกุมภ์</h2>"; 
    }elseif($daylist == "8" && $monthlist == "month3"){
        echo "<h2 style='text-align: center;'>ราศีกุมภ์</h2>"; 
    }elseif($daylist == "9" && $monthlist == "month3"){
        echo "<h2 style='text-align: center;'>ราศีกุมภ์</h2>"; 
    }elseif($daylist == "10" && $monthlist == "month3"){
        echo "<h2 style='text-align: center;'>ราศีกุมภ์</h2>"; 
    }elseif($daylist == "11" && $monthlist == "month3"){
        echo "<h2 style='text-align: center;'>ราศีกุมภ์</h2>"; 
    }elseif($daylist == "12" && $monthlist == "month3"){
        echo "<h2 style='text-align: center;'>ราศีกุมภ์</h2>"; 
    }elseif($daylist == "13" && $monthlist == "month3"){
        echo "<h2 style='text-align: center;'>ราศีกุมภ์</h2>"; 
    }elseif($daylist == "14" && $monthlist == "month3"){
        echo "<h2 style='text-align: center;'>ราศีกุมภ์</h2>"; 
    }elseif($daylist == "15" && $monthlist == "month3"){
        echo "<h2 style='text-align: center;'>ราศีมีน</h2>"; 
    }elseif($daylist == "16" && $monthlist == "month3"){
        echo "<h2 style='text-align: center;'>ราศีมีน</h2>"; 
    }elseif($daylist == "17" && $monthlist == "month3"){
        echo "<h2 style='text-align: center;'>ราศีมีน</h2>"; 
    }elseif($daylist == "18" && $monthlist == "month3"){
        echo "<h2 style='text-align: center;'>ราศีมีน</h2>"; 
    }elseif($daylist == "19" && $monthlist == "month3"){
        echo "<h2 style='text-align: center;'>ราศีมีน</h2>"; 
    }elseif($daylist == "20" && $monthlist == "month3"){
        echo "<h2 style='text-align: center;'>ราศีมีน</h2>"; 
    }elseif($daylist == "21" && $monthlist == "month3"){
        echo "<h2 style='text-align: center;'>ราศีมีน</h2>"; 
    }elseif($daylist == "22" && $monthlist == "month3"){
        echo "<h2 style='text-align: center;'>ราศีมีน</h2>"; 
    }elseif($daylist == "23" && $monthlist == "month3"){
        echo "<h2 style='text-align: center;'>ราศีมีน</h2>"; 
    }elseif($daylist == "24" && $monthlist == "month3"){
        echo "<h2 style='text-align: center;'>ราศีมีน</h2>"; 
    }elseif($daylist == "25" && $monthlist == "month3"){
        echo "<h2 style='text-align: center;'>ราศีมีน</h2>"; 
    }elseif($daylist == "26" && $monthlist == "month3"){
        echo "<h2 style='text-align: center;'>ราศีมีน</h2>"; 
    }elseif($daylist == "27" && $monthlist == "month3"){
        echo "<h2 style='text-align: center;'>ราศีมีน</h2>"; 
    }elseif($daylist == "28" && $monthlist == "month3"){
        echo "<h2 style='text-align: center;'>ราศีมีน</h2>"; 
    }elseif($daylist == "29" && $monthlist == "month3"){
        echo "<h2 style='text-align: center;'>ราศีมีน</h2>"; 
    }elseif($daylist == "30" && $monthlist == "month3"){
        echo "<h2 style='text-align: center;'>ราศีมีน</h2>"; 
    }elseif($daylist == "31" && $monthlist == "month3"){
        echo "<h2 style='text-align: center;'>ราศีมีน</h2>"; 
    }elseif($daylist == "1" && $monthlist == "month4"){
        echo "<h2 style='text-align: center;'>ราศีมีน</h2>"; 
    }elseif($daylist == "2" && $monthlist == "month4"){
        echo "<h2 style='text-align: center;'>ราศีมีน</h2>"; 
    }elseif($daylist == "3" && $monthlist == "month4"){
        echo "<h2 style='text-align: center;'>ราศีมีน</h2>"; 
    }elseif($daylist == "4" && $monthlist == "month4"){
        echo "<h2 style='text-align: center;'>ราศีมีน</h2>"; 
    }elseif($daylist == "5" && $monthlist == "month4"){
        echo "<h2 style='text-align: center;'>ราศีมีน</h2>"; 
    }elseif($daylist == "6" && $monthlist == "month4"){
        echo "<h2 style='text-align: center;'>ราศีมีน</h2>"; 
    }elseif($daylist == "7" && $monthlist == "month4"){
        echo "<h2 style='text-align: center;'>ราศีมีน</h2>"; 
    }elseif($daylist == "8" && $monthlist == "month4"){
        echo "<h2 style='text-align: center;'>ราศีมีน</h2>"; 
    }elseif($daylist == "9" && $monthlist == "month4"){
        echo "<h2 style='text-align: center;'>ราศีมีน</h2>"; 
    }elseif($daylist == "10" && $monthlist == "month4"){
        echo "<h2 style='text-align: center;'>ราศีมีน</h2>"; 
    }elseif($daylist == "11" && $monthlist == "month4"){
        echo "<h2 style='text-align: center;'>ราศีมีน</h2>"; 
    }elseif($daylist == "12" && $monthlist == "month4"){
        echo "<h2 style='text-align: center;'>ราศีมีน</h2>"; 
    }elseif($daylist == "13" && $monthlist == "month4"){
        echo "<h2 style='text-align: center;'>ราศีเมษ</h2>"; 
    }elseif($daylist == "14" && $monthlist == "month4"){
        echo "<h2 style='text-align: center;'>ราศีเมษ</h2>"; 
    }elseif($daylist == "15" && $monthlist == "month4"){
        echo "<h2 style='text-align: center;'>ราศีเมษ</h2>"; 
    }elseif($daylist == "16" && $monthlist == "month4"){
        echo "<h2 style='text-align: center;'>ราศีเมษ</h2>"; 
    }elseif($daylist == "17" && $monthlist == "month4"){
        echo "<h2 style='text-align: center;'>ราศีเมษ</h2>"; 
    }elseif($daylist == "18" && $monthlist == "month4"){
        echo "<h2 style='text-align: center;'>ราศีเมษ</h2>"; 
    }elseif($daylist == "19" && $monthlist == "month4"){
        echo "<h2 style='text-align: center;'>ราศีเมษ</h2>"; 
    }elseif($daylist == "20" && $monthlist == "month4"){
        echo "<h2 style='text-align: center;'>ราศีเมษ</h2>"; 
    }elseif($daylist == "21" && $monthlist == "month4"){
        echo "<h2 style='text-align: center;'>ราศีเมษ</h2>"; 
    }elseif($daylist == "22" && $monthlist == "month4"){
        echo "<h2 style='text-align: center;'>ราศีเมษ</h2>"; 
    }elseif($daylist == "23" && $monthlist == "month4"){
        echo "<h2 style='text-align: center;'>ราศีเมษ</h2>"; 
    }elseif($daylist == "24" && $monthlist == "month4"){
        echo "<h2 style='text-align: center;'>ราศีเมษ</h2>"; 
    }elseif($daylist == "25" && $monthlist == "month4"){
        echo "<h2 style='text-align: center;'>ราศีเมษ</h2>"; 
    }elseif($daylist == "26" && $monthlist == "month4"){
        echo "<h2 style='text-align: center;'>ราศีเมษ</h2>"; 
    }elseif($daylist == "27" && $monthlist == "month4"){
        echo "<h2 style='text-align: center;'>ราศีเมษ</h2>"; 
    }elseif($daylist == "28" && $monthlist == "month4"){
        echo "<h2 style='text-align: center;'>ราศีเมษ</h2>"; 
    }elseif($daylist == "29" && $monthlist == "month4"){
        echo "<h2 style='text-align: center;'>ราศีเมษ</h2>"; 
    }elseif($daylist == "30" && $monthlist == "month4"){
        echo "<h2 style='text-align: center;'>ราศีเมษ</h2>"; 
    }elseif($daylist == "1" && $monthlist == "month5"){
        echo "<h2 style='text-align: center;'>ราศีเมษ</h2>"; 
    }elseif($daylist == "2" && $monthlist == "month5"){
        echo "<h2 style='text-align: center;'>ราศีเมษ</h2>"; 
    }elseif($daylist == "3" && $monthlist == "month5"){
        echo "<h2 style='text-align: center;'>ราศีเมษ</h2>"; 
    }elseif($daylist == "4" && $monthlist == "month5"){
        echo "<h2 style='text-align: center;'>ราศีเมษ</h2>"; 
    }elseif($daylist == "5" && $monthlist == "month5"){
        echo "<h2 style='text-align: center;'>ราศีเมษ</h2>"; 
    }elseif($daylist == "6" && $monthlist == "month5"){
        echo "<h2 style='text-align: center;'>ราศีเมษ</h2>"; 
    }elseif($daylist == "7" && $monthlist == "month5"){
        echo "<h2 style='text-align: center;'>ราศีเมษ</h2>"; 
    }elseif($daylist == "8" && $monthlist == "month5"){
        echo "<h2 style='text-align: center;'>ราศีเมษ</h2>"; 
    }elseif($daylist == "9" && $monthlist == "month5"){
        echo "<h2 style='text-align: center;'>ราศีเมษ</h2>"; 
    }elseif($daylist == "10" && $monthlist == "month5"){
        echo "<h2 style='text-align: center;'>ราศีเมษ</h2>"; 
    }elseif($daylist == "11" && $monthlist == "month5"){
        echo "<h2 style='text-align: center;'>ราศีเมษ</h2>"; 
    }elseif($daylist == "12" && $monthlist == "month5"){
        echo "<h2 style='text-align: center;'>ราศีเมษ</h2>"; 
    }elseif($daylist == "13" && $monthlist == "month5"){
        echo "<h2 style='text-align: center;'>ราศีเมษ</h2>"; 
    }elseif($daylist == "14" && $monthlist == "month5"){
        echo "<h2 style='text-align: center;'>ราศีเมษ</h2>"; 
    }elseif($daylist == "15" && $monthlist == "month5"){
        echo "<h2 style='text-align: center;'>ราศีพฤษก</h2>"; 
    }elseif($daylist == "16" && $monthlist == "month5"){
        echo "<h2 style='text-align: center;'>ราศีพฤษก</h2>"; 
    }elseif($daylist == "17" && $monthlist == "month5"){
        echo "<h2 style='text-align: center;'>ราศีพฤษก</h2>"; 
    }elseif($daylist == "18" && $monthlist == "month5"){
        echo "<h2 style='text-align: center;'>ราศีพฤษก</h2>"; 
    }elseif($daylist == "19" && $monthlist == "month5"){
        echo "<h2 style='text-align: center;'>ราศีพฤษก</h2>"; 
    }elseif($daylist == "20" && $monthlist == "month5"){
        echo "<h2 style='text-align: center;'>ราศีพฤษก</h2>"; 
    }elseif($daylist == "21" && $monthlist == "month5"){
        echo "<h2 style='text-align: center;'>ราศีพฤษก</h2>"; 
    }elseif($daylist == "22" && $monthlist == "month5"){
        echo "<h2 style='text-align: center;'>ราศีพฤษก</h2>"; 
    }elseif($daylist == "23" && $monthlist == "month5"){
        echo "<h2 style='text-align: center;'>ราศีพฤษก</h2>"; 
    }elseif($daylist == "24" && $monthlist == "month5"){
        echo "<h2 style='text-align: center;'>ราศีพฤษก</h2>"; 
    }elseif($daylist == "25" && $monthlist == "month5"){
        echo "<h2 style='text-align: center;'>ราศีพฤษก</h2>"; 
    }elseif($daylist == "26" && $monthlist == "month5"){
        echo "<h2 style='text-align: center;'>ราศีพฤษก</h2>"; 
    }elseif($daylist == "27" && $monthlist == "month5"){
        echo "<h2 style='text-align: center;'>ราศีพฤษก</h2>"; 
    }elseif($daylist == "28" && $monthlist == "month5"){
        echo "<h2 style='text-align: center;'>ราศีพฤษก</h2>"; 
    }elseif($daylist == "29" && $monthlist == "month5"){
        echo "<h2 style='text-align: center;'>ราศีพฤษก</h2>"; 
    }elseif($daylist == "30" && $monthlist == "month5"){
        echo "<h2 style='text-align: center;'>ราศีพฤษก</h2>"; 
    }elseif($daylist == "31" && $monthlist == "month5"){
        echo "<h2 style='text-align: center;'>ราศีพฤษก</h2>";
    }elseif($daylist == "1" && $monthlist == "month6"){
        echo "<h2 style='text-align: center;'>ราศีพฤษก</h2>"; 
    }elseif($daylist == "2" && $monthlist == "month6"){
        echo "<h2 style='text-align: center;'>ราศีพฤษก</h2>"; 
    }elseif($daylist == "3" && $monthlist == "month6"){
        echo "<h2 style='text-align: center;'>ราศีพฤษก</h2>"; 
    }elseif($daylist == "4" && $monthlist == "month6"){
        echo "<h2 style='text-align: center;'>ราศีพฤษก</h2>"; 
    }elseif($daylist == "5" && $monthlist == "month6"){
        echo "<h2 style='text-align: center;'>ราศีพฤษก</h2>"; 
    }elseif($daylist == "6" && $monthlist == "month6"){
        echo "<h2 style='text-align: center;'>ราศีพฤษก</h2>"; 
    }elseif($daylist == "7" && $monthlist == "month6"){
        echo "<h2 style='text-align: center;'>ราศีพฤษก</h2>"; 
    }elseif($daylist == "8" && $monthlist == "month6"){
        echo "<h2 style='text-align: center;'>ราศีพฤษก</h2>"; 
    }elseif($daylist == "9" && $monthlist == "month6"){
        echo "<h2 style='text-align: center;'>ราศีพฤษก</h2>"; 
    }elseif($daylist == "10" && $monthlist == "month6"){
        echo "<h2 style='text-align: center;'>ราศีพฤษก</h2>"; 
    }elseif($daylist == "11" && $monthlist == "month6"){
        echo "<h2 style='text-align: center;'>ราศีพฤษก</h2>"; 
    }elseif($daylist == "12" && $monthlist == "month6"){
        echo "<h2 style='text-align: center;'>ราศีพฤษก</h2>"; 
    }elseif($daylist == "13" && $monthlist == "month6"){
        echo "<h2 style='text-align: center;'>ราศีพฤษก</h2>"; 
    }elseif($daylist == "14" && $monthlist == "month6"){
        echo "<h2 style='text-align: center;'>ราศีพฤษก</h2>"; 
    }elseif($daylist == "15" && $monthlist == "month6"){
        echo "<h2 style='text-align: center;'>ราศีเมถุน</h2>"; 
    }elseif($daylist == "16" && $monthlist == "month6"){
        echo "<h2 style='text-align: center;'>ราศีเมถุน</h2>"; 
    }elseif($daylist == "17" && $monthlist == "month6"){
        echo "<h2 style='text-align: center;'>ราศีเมถุน</h2>"; 
    }elseif($daylist == "18" && $monthlist == "month6"){
        echo "<h2 style='text-align: center;'>ราศีเมถุน</h2>"; 
    }elseif($daylist == "19" && $monthlist == "month6"){
        echo "<h2 style='text-align: center;'>ราศีเมถุน</h2>"; 
    }elseif($daylist == "20" && $monthlist == "month6"){
        echo "<h2 style='text-align: center;'>ราศีเมถุน</h2>"; 
    }elseif($daylist == "21" && $monthlist == "month6"){
        echo "<h2 style='text-align: center;'>ราศีเมถุน</h2>"; 
    }elseif($daylist == "22" && $monthlist == "month6"){
        echo "<h2 style='text-align: center;'>ราศีเมถุน</h2>"; 
    }elseif($daylist == "23" && $monthlist == "month6"){
        echo "<h2 style='text-align: center;'>ราศีเมถุน</h2>"; 
    }elseif($daylist == "24" && $monthlist == "month6"){
        echo "<h2 style='text-align: center;'>ราศีเมถุน</h2>"; 
    }elseif($daylist == "25" && $monthlist == "month6"){
        echo "<h2 style='text-align: center;'>ราศีเมถุน</h2>"; 
    }elseif($daylist == "26" && $monthlist == "month6"){
        echo "<h2 style='text-align: center;'>ราศีเมถุน</h2>"; 
    }elseif($daylist == "27" && $monthlist == "month6"){
        echo "<h2 style='text-align: center;'>ราศีเมถุน</h2>"; 
    }elseif($daylist == "28" && $monthlist == "month6"){
        echo "<h2 style='text-align: center;'>ราศีเมถุน</h2>"; 
    }elseif($daylist == "29" && $monthlist == "month6"){
        echo "<h2 style='text-align: center;'>ราศีเมถุน</h2>"; 
    }elseif($daylist == "30" && $monthlist == "month6"){
        echo "<h2 style='text-align: center;'>ราศีเมถุน</h2>"; 
    }elseif($daylist == "1" && $monthlist == "month7"){
        echo "<h2 style='text-align: center;'>ราศีเมถุน</h2>"; 
    }elseif($daylist == "2" && $monthlist == "month7"){
        echo "<h2 style='text-align: center;'>ราศีเมถุน</h2>"; 
    }elseif($daylist == "3" && $monthlist == "month7"){
        echo "<h2 style='text-align: center;'>ราศีเมถุน</h2>"; 
    }elseif($daylist == "4" && $monthlist == "month7"){
        echo "<h2 style='text-align: center;'>ราศีเมถุน</h2>"; 
    }elseif($daylist == "5" && $monthlist == "month7"){
        echo "<h2 style='text-align: center;'>ราศีเมถุน</h2>"; 
    }elseif($daylist == "6" && $monthlist == "month7"){
        echo "<h2 style='text-align: center;'>ราศีเมถุน</h2>"; 
    }elseif($daylist == "7" && $monthlist == "month7"){
        echo "<h2 style='text-align: center;'>ราศีเมถุน</h2>"; 
    }elseif($daylist == "8" && $monthlist == "month7"){
        echo "<h2 style='text-align: center;'>ราศีเมถุน</h2>"; 
    }elseif($daylist == "9" && $monthlist == "month7"){
        echo "<h2 style='text-align: center;'>ราศีเมถุน</h2>"; 
    }elseif($daylist == "10" && $monthlist == "month7"){
        echo "<h2 style='text-align: center;'>ราศีเมถุน</h2>"; 
    }elseif($daylist == "11" && $monthlist == "month7"){
        echo "<h2 style='text-align: center;'>ราศีเมถุน</h2>"; 
    }elseif($daylist == "12" && $monthlist == "month7"){
        echo "<h2 style='text-align: center;'>ราศีเมถุน</h2>"; 
    }elseif($daylist == "13" && $monthlist == "month7"){
        echo "<h2 style='text-align: center;'>ราศีเมถุน</h2>"; 
    }elseif($daylist == "14" && $monthlist == "month7"){
        echo "<h2 style='text-align: center;'>ราศีเมถุน</h2>"; 
    }elseif($daylist == "15" && $monthlist == "month7"){
        echo "<h2 style='text-align: center;'>ราศีกรกฏ</h2>"; 
    }elseif($daylist == "16" && $monthlist == "month7"){
        echo "<h2 style='text-align: center;'>ราศีกรกฏ</h2>"; 
    }elseif($daylist == "17" && $monthlist == "month7"){
        echo "<h2 style='text-align: center;'>ราศีกรกฏ</h2>"; 
    }elseif($daylist == "18" && $monthlist == "month7"){
        echo "<h2 style='text-align: center;'>ราศีกรกฏ</h2>"; 
    }elseif($daylist == "19" && $monthlist == "month7"){
        echo "<h2 style='text-align: center;'>ราศีกรกฏ</h2>"; 
    }elseif($daylist == "20" && $monthlist == "month7"){
        echo "<h2 style='text-align: center;'>ราศีกรกฏ</h2>"; 
    }elseif($daylist == "21" && $monthlist == "month7"){
        echo "<h2 style='text-align: center;'>ราศีกรกฏ</h2>"; 
    }elseif($daylist == "22" && $monthlist == "month7"){
        echo "<h2 style='text-align: center;'>ราศีกรกฏ</h2>"; 
    }elseif($daylist == "23" && $monthlist == "month7"){
        echo "<h2 style='text-align: center;'>ราศีกรกฏ</h2>"; 
    }elseif($daylist == "24" && $monthlist == "month7"){
        echo "<h2 style='text-align: center;'>ราศีกรกฏ</h2>"; 
    }elseif($daylist == "25" && $monthlist == "month7"){
        echo "<h2 style='text-align: center;'>ราศีกรกฏ</h2>"; 
    }elseif($daylist == "26" && $monthlist == "month7"){
        echo "<h2 style='text-align: center;'>ราศีกรกฏ</h2>"; 
    }elseif($daylist == "27" && $monthlist == "month7"){
        echo "<h2 style='text-align: center;'>ราศีกรกฏ</h2>"; 
    }elseif($daylist == "28" && $monthlist == "month7"){
        echo "<h2 style='text-align: center;'>ราศีกรกฏ</h2>"; 
    }elseif($daylist == "29" && $monthlist == "month7"){
        echo "<h2 style='text-align: center;'>ราศีกรกฏ</h2>"; 
    }elseif($daylist == "30" && $monthlist == "month7"){
        echo "<h2 style='text-align: center;'>ราศีกรกฏ</h2>"; 
    }elseif($daylist == "31" && $monthlist == "month7"){
        echo "<h2 style='text-align: center;'>ราศีกรกฏ</h2>"; 
    }elseif($daylist == "1" && $monthlist == "month8"){
        echo "<h2 style='text-align: center;'>ราศีกรกฏ</h2>"; 
    }elseif($daylist == "2" && $monthlist == "month8"){
        echo "<h2 style='text-align: center;'>ราศีกรกฏ</h2>"; 
    }elseif($daylist == "3" && $monthlist == "month8"){
        echo "<h2 style='text-align: center;'>ราศีกรกฏ</h2>"; 
    }elseif($daylist == "4" && $monthlist == "month8"){
        echo "<h2 style='text-align: center;'>ราศีกรกฏ</h2>"; 
    }elseif($daylist == "5" && $monthlist == "month8"){
        echo "<h2 style='text-align: center;'>ราศีกรกฏ</h2>"; 
    }elseif($daylist == "6" && $monthlist == "month8"){
        echo "<h2 style='text-align: center;'>ราศีกรกฏ</h2>"; 
    }elseif($daylist == "7" && $monthlist == "month8"){
        echo "<h2 style='text-align: center;'>ราศีกรกฏ</h2>"; 
    }elseif($daylist == "8" && $monthlist == "month8"){
        echo "<h2 style='text-align: center;'>ราศีกรกฏ</h2>"; 
    }elseif($daylist == "9" && $monthlist == "month8"){
        echo "<h2 style='text-align: center;'>ราศีกรกฏ</h2>"; 
    }elseif($daylist == "10" && $monthlist == "month8"){
        echo "<h2 style='text-align: center;'>ราศีกรกฏ</h2>"; 
    }elseif($daylist == "11" && $monthlist == "month8"){
        echo "<h2 style='text-align: center;'>ราศีกรกฏ</h2>"; 
    }elseif($daylist == "12" && $monthlist == "month8"){
        echo "<h2 style='text-align: center;'>ราศีกรกฏ</h2>"; 
    }elseif($daylist == "13" && $monthlist == "month8"){
        echo "<h2 style='text-align: center;'>ราศีกรกฏ</h2>"; 
    }elseif($daylist == "14" && $monthlist == "month8"){
        echo "<h2 style='text-align: center;'>ราศีกรกฏ</h2>"; 
    }elseif($daylist == "15" && $monthlist == "month8"){
        echo "<h2 style='text-align: center;'>ราศีกรกฏ</h2>"; 
    }elseif($daylist == "16" && $monthlist == "month8"){
        echo "<h2 style='text-align: center;'>ราศีสิงห์</h2>"; 
    }elseif($daylist == "17" && $monthlist == "month8"){
        echo "<h2 style='text-align: center;'>ราศีสิงห์</h2>"; 
    }elseif($daylist == "18" && $monthlist == "month8"){
        echo "<h2 style='text-align: center;'>ราศีสิงห์</h2>"; 
    }elseif($daylist == "19" && $monthlist == "month8"){
        echo "<h2 style='text-align: center;'>ราศีสิงห์</h2>"; 
    }elseif($daylist == "20" && $monthlist == "month8"){
        echo "<h2 style='text-align: center;'>ราศีสิงห์</h2>"; 
    }elseif($daylist == "21" && $monthlist == "month8"){
        echo "<h2 style='text-align: center;'>ราศีสิงห์</h2>"; 
    }elseif($daylist == "22" && $monthlist == "month8"){
        echo "<h2 style='text-align: center;'>ราศีสิงห์</h2>"; 
    }elseif($daylist == "23" && $monthlist == "month8"){
        echo "<h2 style='text-align: center;'>ราศีสิงห์</h2>"; 
    }elseif($daylist == "24" && $monthlist == "month8"){
        echo "<h2 style='text-align: center;'>ราศีสิงห์</h2>"; 
    }elseif($daylist == "25" && $monthlist == "month8"){
        echo "<h2 style='text-align: center;'>ราศีสิงห์</h2>"; 
    }elseif($daylist == "26" && $monthlist == "month8"){
        echo "<h2 style='text-align: center;'>ราศีสิงห์</h2>"; 
    }elseif($daylist == "27" && $monthlist == "month8"){
        echo "<h2 style='text-align: center;'>ราศีสิงห์</h2>"; 
    }elseif($daylist == "28" && $monthlist == "month8"){
        echo "<h2 style='text-align: center;'>ราศีสิงห์</h2>"; 
    }elseif($daylist == "29" && $monthlist == "month8"){
        echo "<h2 style='text-align: center;'>ราศีสิงห์</h2>"; 
    }elseif($daylist == "30" && $monthlist == "month8"){
        echo "<h2 style='text-align: center;'>ราศีสิงห์</h2>"; 
    }elseif($daylist == "31" && $monthlist == "month8"){
        echo "<h2 style='text-align: center;'>ราศีสิงห์</h2>"; 
    }elseif($daylist == "1" && $monthlist == "month9"){
        echo "<h2 style='text-align: center;'>ราศีสิงห์</h2>"; 
    }elseif($daylist == "2" && $monthlist == "month9"){
        echo "<h2 style='text-align: center;'>ราศีสิงห์</h2>"; 
    }elseif($daylist == "3" && $monthlist == "month9"){
        echo "<h2 style='text-align: center;'>ราศีสิงห์</h2>"; 
    }elseif($daylist == "4" && $monthlist == "month9"){
        echo "<h2 style='text-align: center;'>ราศีสิงห์</h2>"; 
    }elseif($daylist == "5" && $monthlist == "month9"){
        echo "<h2 style='text-align: center;'>ราศีสิงห์</h2>"; 
    }elseif($daylist == "6" && $monthlist == "month9"){
        echo "<h2 style='text-align: center;'>ราศีสิงห์</h2>"; 
    }elseif($daylist == "7" && $monthlist == "month9"){
        echo "<h2 style='text-align: center;'>ราศีสิงห์</h2>"; 
    }elseif($daylist == "8" && $monthlist == "month9"){
        echo "<h2 style='text-align: center;'>ราศีสิงห์</h2>"; 
    }elseif($daylist == "9" && $monthlist == "month9"){
        echo "<h2 style='text-align: center;'>ราศีสิงห์</h2>"; 
    }elseif($daylist == "10" && $monthlist == "month9"){
        echo "<h2 style='text-align: center;'>ราศีสิงห์</h2>"; 
    }elseif($daylist == "11" && $monthlist == "month9"){
        echo "<h2 style='text-align: center;'>ราศีสิงห์</h2>"; 
    }elseif($daylist == "12" && $monthlist == "month9"){
        echo "<h2 style='text-align: center;'>ราศีสิงห์</h2>"; 
    }elseif($daylist == "13" && $monthlist == "month9"){
        echo "<h2 style='text-align: center;'>ราศีสิงห์</h2>"; 
    }elseif($daylist == "14" && $monthlist == "month9"){
        echo "<h2 style='text-align: center;'>ราศีสิงห์</h2>"; 
    }elseif($daylist == "15" && $monthlist == "month9"){
        echo "<h2 style='text-align: center;'>ราศีสิงห์</h2>"; 
    }elseif($daylist == "16" && $monthlist == "month9"){
        echo "<h2 style='text-align: center;'>ราศีสิงห์</h2>"; 
    }elseif($daylist == "17" && $monthlist == "month9"){
        echo "<h2 style='text-align: center;'>ราศีกันย์</h2>"; 
    }elseif($daylist == "18" && $monthlist == "month9"){
        echo "<h2 style='text-align: center;'>ราศีกันย์</h2>"; 
    }elseif($daylist == "19" && $monthlist == "month9"){
        echo "<h2 style='text-align: center;'>ราศีกันย์</h2>"; 
    }elseif($daylist == "20" && $monthlist == "month9"){
        echo "<h2 style='text-align: center;'>ราศีกันย์</h2>"; 
    }elseif($daylist == "21" && $monthlist == "month9"){
        echo "<h2 style='text-align: center;'>ราศีกันย์</h2>"; 
    }elseif($daylist == "22" && $monthlist == "month9"){
        echo "<h2 style='text-align: center;'>ราศีกันย์</h2>"; 
    }elseif($daylist == "23" && $monthlist == "month9"){
        echo "<h2 style='text-align: center;'>ราศีกันย์</h2>"; 
    }elseif($daylist == "24" && $monthlist == "month9"){
        echo "<h2 style='text-align: center;'>ราศีกันย์</h2>"; 
    }elseif($daylist == "25" && $monthlist == "month9"){
        echo "<h2 style='text-align: center;'>ราศีกันย์</h2>"; 
    }elseif($daylist == "26" && $monthlist == "month9"){
        echo "<h2 style='text-align: center;'>ราศีกันย์</h2>"; 
    }elseif($daylist == "27" && $monthlist == "month9"){
        echo "<h2 style='text-align: center;'>ราศีกันย์</h2>"; 
    }elseif($daylist == "28" && $monthlist == "month9"){
        echo "<h2 style='text-align: center;'>ราศีกันย์</h2>"; 
    }elseif($daylist == "29" && $monthlist == "month9"){
        echo "<h2 style='text-align: center;'>ราศีกันย์</h2>"; 
    }elseif($daylist == "30" && $monthlist == "month9"){
        echo "<h2 style='text-align: center;'>ราศีกันย์</h2>"; 
    }elseif($daylist == "1" && $monthlist == "month10"){
        echo "<h2 style='text-align: center;'>ราศีกันย์</h2>"; 
    }elseif($daylist == "2" && $monthlist == "month10"){
        echo "<h2 style='text-align: center;'>ราศีกันย์</h2>"; 
    }elseif($daylist == "3" && $monthlist == "month10"){
        echo "<h2 style='text-align: center;'>ราศีกันย์</h2>"; 
    }elseif($daylist == "4" && $monthlist == "month10"){
        echo "<h2 style='text-align: center;'>ราศีกันย์</h2>"; 
    }elseif($daylist == "5" && $monthlist == "month10"){
        echo "<h2 style='text-align: center;'>ราศีกันย์</h2>"; 
    }elseif($daylist == "6" && $monthlist == "month10"){
        echo "<h2 style='text-align: center;'>ราศีกันย์</h2>"; 
    }elseif($daylist == "7" && $monthlist == "month10"){
        echo "<h2 style='text-align: center;'>ราศีกันย์</h2>"; 
    }elseif($daylist == "8" && $monthlist == "month10"){
        echo "<h2 style='text-align: center;'>ราศีกันย์</h2>"; 
    }elseif($daylist == "9" && $monthlist == "month10"){
        echo "<h2 style='text-align: center;'>ราศีกันย์</h2>"; 
    }elseif($daylist == "10" && $monthlist == "month10"){
        echo "<h2 style='text-align: center;'>ราศีกันย์</h2>"; 
    }elseif($daylist == "11" && $monthlist == "month10"){
        echo "<h2 style='text-align: center;'>ราศีกันย์</h2>"; 
    }elseif($daylist == "12" && $monthlist == "month10"){
        echo "<h2 style='text-align: center;'>ราศีกันย์</h2>"; 
    }elseif($daylist == "13" && $monthlist == "month10"){
        echo "<h2 style='text-align: center;'>ราศีกันย์</h2>"; 
    }elseif($daylist == "14" && $monthlist == "month10"){
        echo "<h2 style='text-align: center;'>ราศีกันย์</h2>"; 
    }elseif($daylist == "15" && $monthlist == "month10"){
        echo "<h2 style='text-align: center;'>ราศีกันย์</h2>"; 
    }elseif($daylist == "16" && $monthlist == "month10"){
        echo "<h2 style='text-align: center;'>ราศีกันย์</h2>"; 
    }elseif($daylist == "17" && $monthlist == "month10"){
        echo "<h2 style='text-align: center;'>ราศีตุลย์</h2>"; 
    }elseif($daylist == "18" && $monthlist == "month10"){
        echo "<h2 style='text-align: center;'>ราศีตุลย์</h2>"; 
    }elseif($daylist == "19" && $monthlist == "month10"){
        echo "<h2 style='text-align: center;'>ราศีตุลย์</h2>"; 
    }elseif($daylist == "20" && $monthlist == "month10"){
        echo "<h2 style='text-align: center;'>ราศีตุลย์</h2>"; 
    }elseif($daylist == "21" && $monthlist == "month10"){
        echo "<h2 style='text-align: center;'>ราศีตุลย์</h2>"; 
    }elseif($daylist == "22" && $monthlist == "month10"){
        echo "<h2 style='text-align: center;'>ราศีตุลย์</h2>"; 
    }elseif($daylist == "23" && $monthlist == "month10"){
        echo "<h2 style='text-align: center;'>ราศีตุลย์</h2>"; 
    }elseif($daylist == "24" && $monthlist == "month10"){
        echo "<h2 style='text-align: center;'>ราศีตุลย์</h2>"; 
    }elseif($daylist == "25" && $monthlist == "month10"){
        echo "<h2 style='text-align: center;'>ราศีตุลย์</h2>"; 
    }elseif($daylist == "26" && $monthlist == "month10"){
        echo "<h2 style='text-align: center;'>ราศีตุลย์</h2>"; 
    }elseif($daylist == "27" && $monthlist == "month10"){
        echo "<h2 style='text-align: center;'>ราศีตุลย์</h2>"; 
    }elseif($daylist == "28" && $monthlist == "month10"){
        echo "<h2 style='text-align: center;'>ราศีตุลย์</h2>"; 
    }elseif($daylist == "29" && $monthlist == "month10"){
        echo "<h2 style='text-align: center;'>ราศีตุลย์</h2>"; 
    }elseif($daylist == "30" && $monthlist == "month10"){
        echo "<h2 style='text-align: center;'>ราศีตุลย์</h2>"; 
    }elseif($daylist == "31" && $monthlist == "month10"){
        echo "<h2 style='text-align: center;'>ราศีตุลย์</h2>"; 
    }elseif($daylist == "1" && $monthlist == "month11"){
        echo "<h2 style='text-align: center;'>ราศีตุลย์</h2>"; 
    }elseif($daylist == "2" && $monthlist == "month11"){
        echo "<h2 style='text-align: center;'>ราศีตุลย์</h2>"; 
    }elseif($daylist == "3" && $monthlist == "month11"){
        echo "<h2 style='text-align: center;'>ราศีตุลย์</h2>"; 
    }elseif($daylist == "4" && $monthlist == "month11"){
        echo "<h2 style='text-align: center;'>ราศีตุลย์</h2>"; 
    }elseif($daylist == "5" && $monthlist == "month11"){
        echo "<h2 style='text-align: center;'>ราศีตุลย์</h2>"; 
    }elseif($daylist == "6" && $monthlist == "month11"){
        echo "<h2 style='text-align: center;'>ราศีตุลย์</h2>"; 
    }elseif($daylist == "7" && $monthlist == "month11"){
        echo "<h2 style='text-align: center;'>ราศีตุลย์</h2>"; 
    }elseif($daylist == "8" && $monthlist == "month11"){
        echo "<h2 style='text-align: center;'>ราศีตุลย์</h2>"; 
    }elseif($daylist == "9" && $monthlist == "month11"){
        echo "<h2 style='text-align: center;'>ราศีตุลย์</h2>"; 
    }elseif($daylist == "10" && $monthlist == "month11"){
        echo "<h2 style='text-align: center;'>ราศีตุลย์</h2>"; 
    }elseif($daylist == "11" && $monthlist == "month11"){
        echo "<h2 style='text-align: center;'>ราศีตุลย์</h2>"; 
    }elseif($daylist == "12" && $monthlist == "month11"){
        echo "<h2 style='text-align: center;'>ราศีตุลย์</h2>"; 
    }elseif($daylist == "13" && $monthlist == "month11"){
        echo "<h2 style='text-align: center;'>ราศีตุลย์</h2>"; 
    }elseif($daylist == "14" && $monthlist == "month11"){
        echo "<h2 style='text-align: center;'>ราศีตุลย์</h2>"; 
    }elseif($daylist == "15" && $monthlist == "month11"){
        echo "<h2 style='text-align: center;'>ราศีตุลย์</h2>"; 
    }elseif($daylist == "16" && $monthlist == "month11"){
        echo "<h2 style='text-align: center;'>ราศีพิจิก</h2>"; 
    }elseif($daylist == "17" && $monthlist == "month11"){
        echo "<h2 style='text-align: center;'>ราศีพิจิก</h2>"; 
    }elseif($daylist == "18" && $monthlist == "month11"){
        echo "<h2 style='text-align: center;'>ราศีพิจิก</h2>"; 
    }elseif($daylist == "19" && $monthlist == "month11"){
        echo "<h2 style='text-align: center;'>ราศีพิจิก</h2>"; 
    }elseif($daylist == "20" && $monthlist == "month11"){
        echo "<h2 style='text-align: center;'>ราศีพิจิก</h2>"; 
    }elseif($daylist == "21" && $monthlist == "month11"){
        echo "<h2 style='text-align: center;'>ราศีพิจิก</h2>"; 
    }elseif($daylist == "22" && $monthlist == "month11"){
        echo "<h2 style='text-align: center;'>ราศีพิจิก</h2>"; 
    }elseif($daylist == "23" && $monthlist == "month11"){
        echo "<h2 style='text-align: center;'>ราศีพิจิก</h2>"; 
    }elseif($daylist == "24" && $monthlist == "month11"){
        echo "<h2 style='text-align: center;'>ราศีพิจิก</h2>"; 
    }elseif($daylist == "25" && $monthlist == "month11"){
        echo "<h2 style='text-align: center;'>ราศีพิจิก</h2>"; 
    }elseif($daylist == "26" && $monthlist == "month11"){
        echo "<h2 style='text-align: center;'>ราศีพิจิก</h2>"; 
    }elseif($daylist == "27" && $monthlist == "month11"){
        echo "<h2 style='text-align: center;'>ราศีพิจิก</h2>"; 
    }elseif($daylist == "28" && $monthlist == "month11"){
        echo "<h2 style='text-align: center;'>ราศีพิจิก</h2>"; 
    }elseif($daylist == "29" && $monthlist == "month11"){
        echo "<h2 style='text-align: center;'>ราศีพิจิก</h2>"; 
    }elseif($daylist == "30" && $monthlist == "month11"){
        echo "<h2 style='text-align: center;'>ราศีพิจิก</h2>"; 
    }elseif($daylist == "1" && $monthlist == "month12"){
        echo "<h2 style='text-align: center;'>ราศีพิจิก</h2>"; 
    }elseif($daylist == "2" && $monthlist == "month12"){
        echo "<h2 style='text-align: center;'>ราศีพิจิก</h2>"; 
    }elseif($daylist == "3" && $monthlist == "month12"){
        echo "<h2 style='text-align: center;'>ราศีพิจิก</h2>"; 
    }elseif($daylist == "4" && $monthlist == "month12"){
        echo "<h2 style='text-align: center;'>ราศีพิจิก</h2>"; 
    }elseif($daylist == "5" && $monthlist == "month12"){
        echo "<h2 style='text-align: center;'>ราศีพิจิก</h2>"; 
    }elseif($daylist == "6" && $monthlist == "month12"){
        echo "<h2 style='text-align: center;'>ราศีพิจิก</h2>"; 
    }elseif($daylist == "7" && $monthlist == "month12"){
        echo "<h2 style='text-align: center;'>ราศีพิจิก</h2>"; 
    }elseif($daylist == "8" && $monthlist == "month12"){
        echo "<h2 style='text-align: center;'>ราศีพิจิก</h2>"; 
    }elseif($daylist == "9" && $monthlist == "month12"){
        echo "<h2 style='text-align: center;'>ราศีพิจิก</h2>"; 
    }elseif($daylist == "10" && $monthlist == "month12"){
        echo "<h2 style='text-align: center;'>ราศีพิจิก</h2>"; 
    }elseif($daylist == "11" && $monthlist == "month12"){
        echo "<h2 style='text-align: center;'>ราศีพิจิก</h2>"; 
    }elseif($daylist == "12" && $monthlist == "month12"){
        echo "<h2 style='text-align: center;'>ราศีพิจิก</h2>"; 
    }elseif($daylist == "13" && $monthlist == "month12"){
        echo "<h2 style='text-align: center;'>ราศีพิจิก</h2>"; 
    }elseif($daylist == "14" && $monthlist == "month12"){
        echo "<h2 style='text-align: center;'>ราศีพิจิก</h2>"; 
    }elseif($daylist == "15" && $monthlist == "month12"){
        echo "<h2 style='text-align: center;'>ราศีพิจิก</h2>"; 
    }
}   
?>
            <p class="p-1" >
                <button class="w3-button w3-orange w3-round-xxlarge" name="submit">คำนวณ</button>
                <button class="w3-button w3-orange w3-round-xxlarge" type="reset">clear</button>
            </p>
    </form>

</body>
</html>