<?php
function pyramid()
{
    for($i=1;$i<=5;$i++)
    {
        for($j=1;$j<=$i;$j++)
        {
            echo " *";
        }
        echo "<br>";
    }
}
pyramid();
echo "<br>";
function show()
{
    for($i=1;$i<=5;$i++)
    {
        for($j=5;$j>=$i;$j--)
        {
            echo " *";
        }
        echo "<br>";
    }
}
show();
echo "<br>";

function number()
{
    for($i=1;$i<6;$i++)
    {
        for($j=1;$j<=$i;$j++)
        {
            echo " $i";
        }
        echo "<br>";
    }
}
number();
echo "<br>";

function num()
{
    for($i=1;$i<=5;$i++)
    {
        for($j=1;$j<=$i;$j++)
        {
            echo " $j";
        }
        echo "<br>";
    }
}
num();
echo "<br>";

function num1()
{
    $num=1;
    for($i=1;$i<=5;$i++)
    {
        for($j=1;$j<=$i;$j++)
        {
            echo " $num";
            $num++;
        }
        echo "<br>";
    }
}
num1();
echo "<br>";

function alpha()
{
    $num=65;
    for($i=1;$i<=5;$i++)
    {
        for($j=1;$j<=$i;$j++)
        {
            $ch = chr($num);
            echo " $ch";
            $num++;
        }
        echo "<br>";
    }
}
alpha();
echo "<br>";
function pyramid1()
{
    for($i=1;$i<=5;$i++)
    {
        for($j=1;$j<=$i;$j++)
        {
            echo " *";
        }
        echo "<br>";
    }
}
pyramid1();
function show1()
{
    for($i=1;$i<=5;$i++)
    {
        for($j=4;$j>=$i;$j--)
        {
            echo " *";
        }
        echo "<br>";
    }
}
show1();
echo "<br>";

function palindrome()
{
    $space=4;
    $num=1;
    $x=10;
    for($i=1;$i<=5;$i++)
    {
        for($j=1;$j<=$space;$j++)
        {
            echo "&nbsp;&nbsp;";
        }
        for($k=1;$k<=1;$k++)
        {
           echo $num*$num;
           $num+=$x;
           $x*=10;
             
        }
        echo "<br>";
        $space--;
    }
}
palindrome();
echo "<br>";

