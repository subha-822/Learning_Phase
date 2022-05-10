<?php
# if if..else if..elseif..else 
$t=18;
if($t<18){
    echo"You are not eligible for voting";
    echo"<br>";
}
elseif($t=18){
    echo"You are eligible for voting";
    echo"<br>";
}
else{
    echo"You are eligible for voting";
    echo"<br>";
}

# switch
$favcartoon ="Talking Tom";
switch($favcartoon){
    case "Talking Tom":
        echo "It is an mobile app";
        echo"<br>";
        break;
    case "Sinchan":
        echo"It is an Hungama TV series";
        echo"<br>";
        break;
    case "Oggy and the Cockroaches":
        echo"It is a Cartoon Network Series";
        echo"<br>";
        break;
    default:
        echo"There is no data availble";
        echo"<br>";
}

#while do...while for foreach

#while
$a=1;
while ($a<=10) {
    echo "$a";
    $a++;
    
}
echo "<br>";

# for 
for ($i=1;$i<=10;$i++)
{
    echo"$i";
}
echo "<br>";

# for each (1)
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $value) {
  echo "$value <br>";
}

# for each (2)
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach($age as $x => $val) {
  echo "$x = $val<br>";
}


# do..while
$b=1;
do
{
    echo"$b";
    $b++;
    echo "<br>";
}while($b<=10)

# continue
for($h=0;$h<10;$h++)
{
    if ($h == 4) 
    {
        continue;   #skip
    }
    echo "$h <br>";
}

# break
for($h=0;$h<10;$h++)
{
    if ($h == 4) 
    {
        break;   #ends
    }
    echo "$h <br>";
   
}
















?>