<?php

// 这里是注释
/*
这里是多行注释
哈哈哈
惊不惊喜
*/
// $a = 5;
// $b = 6;
// $c = $a +$b;
// echo $c;


// $x=5; // 全局变量 

// var_dump($GLOBALS);
// echo $GLOBALS['x'];

// function myTest()
// {
//     static $x=0;
//     echo $x;
//     $x++;
// }
 
// myTest();
// myTest();
// myTest();

// function myTest($x)
// {
//     echo $x;
// }
// myTest(5);

// echo "<h2>PHP 很有趣!</h2>";
// echo "Hello world!<br>";
// echo "我要学 PHP!<br>";
// echo "这是一个", "字符串，", "使用了", "多个", "参数。";

// print只可以打印一个字符串
// print "<h2>PHP 很有趣!</h2>";
// print "Hello world!<br>";
// print "我要学习 PHP!";


// $aaa = '学习php';
// $bbb = 'runnoob.com';
// $cars = array('volvo','bmw','aodi');

// print $aaa;
// print "<br>";
// print "在 $bbb $aaa";
// print "<br>";
// print "我的车品牌是 {$cars[2]}";


// echo "<br>";
// echo "我要好好 $aaa ,为了将来我可以买 {$cars[0]} {$cars[1]} {$cars[2]} 这三个品牌的车！"



// $name="runoob";
// $a= <<<"EOF"
//     "abc"$name
//     "123"
// EOF;
// // 结束需要独立一行且前后不能空格
// echo $a;


// $cars=array("Volvo",111,"Toyota");
// var_dump($cars);



// class Car
// {
//     function Car($color) {
//         return $this->color = $color;
//     }
// }

// function print_vars($obj) {
//    foreach (get_object_vars($obj) as $prop => $val) {
//      echo "\t$prop = $val\n";
//    }
// }

// // instantiate one object
// $herbie = new Car("white");

// // show herbie properties
// echo "\herbie: Properties\n";
// var_dump($herbie);
// print_vars($herbie);



// 可以通过设置null的值来清空变量数据
// $tezt = 'hello world!';
// $tezt = null;
// echo $tezt;


// 常量
// 区分大小写的常量名,注意后面的第三个参数
// define("GREETING", "欢迎访问 Runoob.com" ,false  );
// echo GREETING;    // 输出 "欢迎访问 Runoob.com"
// echo '<br>';
// echo greeting;   // 输出 "greeting"



// 常量，定义的常量，其他地方使用时不用$,直接写变量名
// DEFINE ('aaa','123');
// function test(){
//     echo aaa;
// }
// test();


// php并置运算符     只有一个字符串运算符，那就是并置运算符
// $aaa = "hello";
// $bbb = "bob";
// echo $aaa.' '.$bbb;


// 输出字符串的长度
// $aaa = "hello";
// echo strlen($aaa);

// 匹配字符串中的字符或者字符串，如果匹配到了，则返回匹配到的字符的最开始的下标，否则返回空
// if(strpos("hello,world!",'ello') == ''){
//     echo "meiyou";
// }else{
//     echo "hahahah";
// }

// 递增，递减得到的结果
// $x=10; 
// echo ++$x;      //x 加 1，然后返回 x      11
 
// $y=10; 
// echo $y++;      //返回 y，然后y 加 1     10
// echo $y;        //所以紧接着再打印一次y就会变为11
 
// $z=5;
// echo --$z;       // 4
 
// $i=5;
// echo $i--;      //5

// 三元运算符            注意，PHP_EOL是换行符，兼容更大平台，注意写法
// $test = '菜鸟教程';
// 普通写法
// $username = isset($test) ? $test : 'nobody';
// echo $username, PHP_EOL;



//打印现在的秒数
// $t=date('s');
// echo $t;

// if else 

// switch
// $color = "red";
// switch ($color){
//     case "red":
//         echo "color is red";
//         break;
//     case "green":
//         echo "color is green";
//         break;
//     default:
//         echo "hahahahaha";
// } 



// 数组
// 1、数值数组；2、关联数组；3、多维数组
// 1、数值数组
//    俩种创建的方式，
//         <1 自动分配id;  $arr = array('a','b','c')
//         <2 手动分配id;  $arr['0'] = "a";$arr['1'] = "b";$arr['2'] = "c";

// 例     得到数组长度
// $cars=array("Volvo","BMW","Toyota");
// echo count($cars);                    //count()   函数可以得出数组的长度
//例      遍历数组
// $cars=array("Volvo","BMW","Toyota");
// $len = count($cars);
// for ($i = 0;$i<$len;$i++){
//     echo $cars[$i];
//     echo "<br>";
// }

/*
php 关联数组
关联数组是使用您分配给数组的指定的键的数组；

俩种创建关联数组的方式
1.
$age = array('peter'=>'35,'ben'=>'42','mary'=>'47')
2.
$age['peter'] = "35";
$age['ben'] = "42";
$age['mary'] = "47";
*/

// 例
// $age['peter'] = "35";
// $age['ben'] = "42";
// $age['mary'] = "47";
// echo "ben is ".$age['ben']." years old!"

// 遍历关联数组
// $age['peter'] = "35";
// $age['ben'] = "42";
// $age['mary'] = "47";
// foreach ($age as $x=>$x_value){
//     echo "key=".$x.",key_value=".$x_value;
//     echo "<br>";
// }



/*
PHP - 数组排序函数
sort() - 对数组进行升序排列
rsort() - 对数组进行降序排列
asort() - 根据关联数组的值，对数组进行升序排列
ksort() - 根据关联数组的键，对数组进行升序排列
arsort() - 根据关联数组的值，对数组进行降序排列
krsort() - 根据关联数组的键，对数组进行降序排列
*/


// php 循环  四种
// $aaa = 10;
// for($i = 0;$i<$aaa;$i++){
//     echo $i;
// }
// echo '<br>';
// $bbb = array("bob","mary","liming");
// foreach($bbb as $x){
//     echo $x;
// }
// echo '<br>';
// $j = 0;
// while ($j<$aaa){
//     echo $j;
//     $j++;
// }
// echo '<br>';
// $z = 0;
// do {
//     echo $z;
//     $z++;
// } while($z<$aaa)

// 函数
public function counts($x,$y){
    $total = $x+$y;
    return $total;
}
echo counts(1,15);

// public函数是怎么回事？  定义的时候，加了他，然后怎么调用呢？





// 魔术变量             双下划线，前后都是
// echo __line__;             // 当前的行数
// echo __FILE__;             // 当前的文件路径
// echo __dir__;              //当前的文件目录
// function test(){
//     echo __function__;             // 当前的函数名
// }
// test();


// class ceshi{
//     function aaa(){
//         echo __function__;
//         echo __class__;
//     }
// }
// $t = new ceshi();
// $t -> aaa();

// echo __FILE__;             // 当前的文件路径














?>


<!-- laravel 学院  -->




