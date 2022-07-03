<?php
$stats=array();
$fp=fopen('stats.g', 'r');
while (!feof($fp))
	{
$line=fgets($fp);

//process line however you like
$line=trim($line);
			
//add to array
$stats[]=$line;
		}
fclose($fp);


$weapinv=array();
$fp=fopen('weapinv.g', 'r');
while (!feof($fp))
	{
$line=fgets($fp);

//process line however you like
$line=trim($line);
			
//add to array
$weapinv[]=$line;
		}
fclose($fp);

$armorinv=array();
$fp=fopen('armorinv.g', 'r');
while (!feof($fp))
	{
$line=fgets($fp);

//process line however you like
$line=trim($line);
			
//add to array
$armorinv[]=$line;
		}
fclose($fp);


$xp=array();
$f=fopen('xplv.g', 'r');
while (!feof($f))
{
    $lin=fgets($f);

    //process line however you like
    $lin=trim($lin);

    //add to array
    $xp[]=$lin;

}
$name = file_get_contents('name.g');
fclose($f);
?>
<html>
<head>
<link rel="stylesheet" href="css/game.css">
<script>
/*
template array for items h
var id = [
         "type"             item
		 "name"             name
		 "value"            value in coins
		 ];
template array for monster
var id = [
         "type"          //  monster
		 "name"          //  name
		 "MinDmg"           //  amount of damage
		 "MaxDmg"           //  amount of damage
		 "defence"       //  defence 		 
		 "hp"            //  health points
		 "money"         //  money
		 "xp"
		 ];
template array for weapons
var id = [
         "type"          //  weapon
		 "name"          //  name
		 "MinDmg"           //  amount of damage
		 "MaxDmg"           //  amount of damage
		 "price"         //  price it cost in the store	 
		 ];
template array for armor
var id = [
         "type"          //  weapon
		 "name"          //  name
		 "defence"       //  amount of defence
		 "price"         //  price it cost in the store	 
		 ];
H*/
var z101 = [
         "monster",      
		 "Horned Rabbit",    //  name
		 "1",                //  Minimum amount of damage
		 "2",                // Maximum amount of damage
		 "0",                //  defence 		 
		 "12",               //  health points
		 "3",                 //  drop1
         "none",            //  drop2 if it exist 
		 "1"
		 ];
var z102 = [ 
         "monster",       
		 "Armored Python",   //  name
		 "1",                //  Minimum amount of damage
		 "2",                // Maximum amount of damage
		 "1",                //  defence 		 
		 "13",               //  health points
		 "3",                 //  drop1
         "none",            //  drop2 if it exist 
		 "2"
		 ];
var z103 = [ 
         "monster",       
		 "Spider",           //  name
		 "1",                //  Minimum amount of damage
		 "2",                // Maximum amount of damage
		 "0",                //  defence 		 
		 "15",               //  health points
		 "4",                 //  drop1
         "none",            //  drop2 if it exist 
		 "3"
		 ];
var z104 = [ 
         "monster",       
		 "Slime",   //  name
		 "1",                //  Minimum amount of damage
		 "2",                // Maximum amount of damage
		 "0",                //  defence 		 
		 "15",               //  health points
		 "4",                 //  drop1
         "none",            //  drop2 if it exist
         "3"		 
		 ];
var z105 = [ 
         "monster",       
		 "Wolf",             //  name
		 "12",                //  Minimum amount of damage
		 "16",                // Maximum amount of damage
		 "0",                //  defence 		 
		 "30",               //  health points
		 "9",                 //  drop1
         "none",            //  drop2 if it exist 
		 "9"
		 ];
var z106 = [ 
         "monster",       
		 "Goblin",           //  name
		 "9",                //  Minimum amount of damage
		 "12",                // Maximum amount of damage
		 "0",                //  defence 		 
		 "25",               //  health points
		 "8",                 //  drop1
         "none",            //  drop2 if it exist 
		 "8"
		 ];
var z107 = [ 
         "monster",       
		 "Archer Skeleton",  //  name
		 "10",                //  Minimum amount of damage
		 "14",                // Maximum amount of damage
		 "0",                //  defence 		 
		 "25",               //  health points
		 "8",                 //  drop1
         "none",            //  drop2 if it exist 
		 "10"
		 ];
var z108 = [ 
         "monster",       
		 "Eagle",           //  name
		 "12",                //  Minimum amount of damage
		 "16",                //  Maximum amount of damage
		 "0",                //  defence 		 
		 "30",               //  health points
		 "10",                 //  drop1
         "none",            //  drop2 if it exist 
		 "8"
		 ];
var z109 = [ 
         "monster",       
		 "Fiery Deer",       //  name
		 "13",                //  Minimum amount of damage
		 "15",                //  Maximum amount of damage
		 "0",                //  defence 		 
		 "40",               //  health points
		 "15",                 //  drop1
         "none",            //  drop2 if it exist 
		 "13"
		 ];
var z110 = [ 
         "monster",       
		 "Kobold",           //  name
		 "14",                //  Minimum amount of damage
		 "19",                //  Maximum amount of damage
		 "0",                //  defence 		 
		 "60",               //  health points
		 "18",                 //  drop1
         "none",            //  drop2 if it exist 
		 "20"
		 ];
var z111 = [ 
         "monster",       
		 "Orc",              //  name
		 "19",                //  Minimum amount of damage
		 "22",                //  Maximum amount of damage
		 "0",                //  defence 		 
		 "70",               //  health points
		 "20",                 //  drop1
         "none",            //  drop2 if it exist 
		 "25"
		 ];
var z112 = [ 
         "monster",       
		 "Golem",           //  name
		 "22",               //  Minimum amount of damage
		 "28",                //  Maximum amount of damage
		 "2",                //  defence 		 
		 "100",               //  health points
		 "24",                 //  drop1
         "none",            //  drop2 if it exist 
		 "30"
		 ];
var z113 = [ 
         "monster",       
		 "Fun-Gi",           //  name
		 "26",                //  Minimum amount of damage
		 "28",                //  Maximum amount of damage
		 "0",                //  defence 		 
		 "120",               //  health points
		 "28",                 //  drop1
         "none",            //  drop2 if it exist 
		 "33"
		 ];
var z114 = [ 
         "monster",       
		 "Enraged Boar",     //  name
		 "26",                //  Minimum amount of damage
		 "29",                //  Maximum amount of damage
		 "0",                //  defence 		 
		 "130",               //  health points
		 "30",                 //  drop1
         "none",         //  drop2 if it exist 
		 "35"
		 ];
var z115 = [ 
         "monster",       
		 "Griffon",           //  name
		 "30",                //  Minimum amount of damage
		 "35",               //  Maximum amount of damage
		 "2",                //  defence 		 
		 "200",               //  health points
		 "35",                 //  drop1
         "none",            //  drop2 if it exist 
		 "50"
		 ];
var z500 = [
         "weapon",          
		 "stick",          //  name
		 "1",           //  amount of damage
		 "3",           //  amount of damage
		 "none"         //  price it cost in the store	 
		 ];
var z501 = [
         "weapon",          
		 "Wooden sword",          //  name
		 "3",           //  amount of damage
		 "5",           //  amount of damage
		 "70"         //  price it cost in the store	 
		 ];
var z502 = [
         "weapon",          
		 "stone axe",          //  name
		 "5",           //  amount of damage
		 "7",           //  amount of damage
		 "150"         //  price it cost in the store	 
		 ];
var z503 = [
         "weapon",          
		 "Iron Sword",          //  name
		 "10",           //  amount of damage
		 "15",           //  amount of damage
		 "200"         //  price it cost in the store	 
		 ];
var z504 = [
         "weapon",          
		 "Steel Bat",          //  name
		 "15",           //  amount of damage
		 "18",           //  amount of damage
		 "250"         //  price it cost in the store	 
		 ];
var z505 = [
         "weapon",          
		 "Adamantium sword",          //  name
		 "20",           //  amount of damage
		 "25",           //  amount of damage
		 "400"         //  price it cost in the store	 
		 ];
var z600 = [
         "armor",          
		 "Wooden Armor",          //  name
		 "2",       //  amount of defence
		 "100"         //  price it cost in the store	 
		 ];
var z601 = [
         "armor",          
		 "Iron infused Wood Armor",          //  name
		 "4",       //  amount of defence
		 "130"         //  price it cost in the store	 
		 ];
var z602 = [
         "armor",          
		 "Iron Armor",          //  name
		 "7",       //  amount of defence
		 "170"         //  price it cost in the store	 
		 ];
var z603 = [
         "armor",          
		 "Adamantium Infused Iron Armor",          //  name
		 "12",       //  amount of defence
		 "230"         //  price it cost in the store	 
		 ];
var z604 = [
         "armor",          
		 "Adamantium Armor",          //  name
		 "20",       //  amount of defence
		 "450"         //  price it cost in the store	 
		 ];
var mons;
</script>
</head>
<body>
<div id="func">
<div id="allfunc">
<button class="button" id="invbtn" onclick="inv();"> Open Inventory</button><br>
<button class="button" id="fightbtn" onclick="fight();"> Fight monsters</button><br>
<button class="button"id="healbtn" onclick="heal();">Sleep and heal</button><br>
<button class="button"id="storebtn" onclick="store();">Go to the store</button><br>
</div>
<div id="back"> 
</div>
</div>
<div id="texts">
<div id="store" style="display: none;">
<button class="button" id="weapshop" onclick="buyweap();"> Buy An Weapon</button><br><br>
<button class="button" id="armorshop" onclick="buyarmor();"> Buy an armor</button><br>
</div>
<div id="buyweap" style="display: none;overflow-y:scroll;
">
buyweap
</div>
<div id="buyarmor" style="display: none;overflow-y:scroll;
">
buyarmor
</div>

<div id="inv" style="display: none;">
<button class="button" id="weapinvent" onclick="weap1();">Weapons </button><br><br>
<button class="button" id="armorinvent" onclick="armor1();">Armors</button><br>
</div>
<div id="weap" style="display: none;overflow-y:scroll;
">
weapinv
</div>
<div id="armor" style="display: none;overflow-y:scroll;
">
armorinv
</div>


<div id="text">
For now you have to wait until later s release to add new features
</div>
<div id="floc">
<img src="forest.jpg" height="150px" ><br>
<button class="button"onclick="enter(0);">Enter forest</button><br>
<p><button class="button"onclick="rtt();">Back</button></p>
</div>
<div id="flv">
<button class="button" onclick="frt1();">Enter lv 1</button><br><br>
<button class="button"onclick="frt2();">Enter lv 2</button><br><br>
<button class="button"onclick="frt3();">Enter lv 3</button><br>
<p><button class="button"onclick="rtt();">Back</button></p>
tip the lv on the forest dont mean only lv 3 or 2 or 1 monsters appear in that stage every stage has 3 lv the bigger the number the deeper it is the deeper it is the stronger the monsters are
</div>
<div id="battle">
<p id="ename">Enemy</p>
<p id="enemyhp"></p>
<progress id="enemy" value="100" max="100"></progress>
<button class="button" onclick="battle();">Attack</button>
</div>
<div id="battledone" style="display:none;">
<button class="button" onclick="monsters(1);">Next Battle</button><br><br>
<button class="button" onclick="rtt();">Return To Town</button>
</div>
<div id="stats">
Lv.<a id="lv">1 </a><br>
</a>
<a id="xp">0</a>Xp/
<a id="maxxp"></a>Xp<br>
<progress id="xpbar" style="color:green;" value="100" max="100"></progress><br>

<a id="hp">0</a>hp/
<a id="maxhp">0</a>hp<br>
<progress id="hpbar"  value="10" max="100"></progress><br>
<a id="dmg">0 </a>Dmg<br>
<a id="def">0 </a>Def<br>
Weapon:<a id="weapon">none </a><br>
Armor:<a id="armor5">none </a><br>
<a id="money">0 </a>Coins<br>

</div>






<script>
var stats =<?php echo json_encode($stats); ?>;
var xplv =<?php echo json_encode($xp); ?>;
var name =<?php echo json_encode($name); ?>;
var weapinv =<?php echo json_encode($weapinv); ?>;
var armorinv =<?php echo json_encode($armorinv); ?>;
var lv = stats[0];
var xp = stats[1];
var hp = stats[2];
var dmg = stats[3];
var tmpi;
var def = stats[4];
var weap = window[stats[5]];
var weapon = weap[1];
var armor = stats[6];
var money = stats[7];
var hp = 10 + lv*5;
var maxhp = 10 + lv*5;
var maxxp = xplv[lv];
var loclvl= 1;
var srd =0;
var a = document.getElementById('lv');
a.innerHTML = lv;
var b = document.getElementById('xp');
b.innerHTML = xp;
var c = document.getElementById('hp');
c.innerHTML = hp;
var d = document.getElementById('dmg');
d.innerHTML = dmg;
var e = document.getElementById('def');
e.innerHTML = def;
var n = document.getElementById('maxxp');
n.innerHTML = maxxp;
var f = document.getElementById('weapon');
f.innerHTML = weapon;
var g = document.getElementById('armor5');
g.innerHTML = armor;
if (armor==0000) {
var g = document.getElementById('armor5');
g.innerHTML = 'none';
}
var m = document.getElementById('money');
m.innerHTML = money;
var c = document.getElementById('maxhp');
c.innerHTML = hp;
document.getElementById( "xpbar" ).setAttribute( "value",xp);
document.getElementById( "xpbar" ).setAttribute( "max",maxxp);
document.getElementById( "hpbar" ).setAttribute( "value",hp);
document.getElementById( "hpbar" ).setAttribute( "max",maxhp);

function fight() {
var t = document.getElementById("text");
  t.style.display = "none";
var f = document.getElementById("floc");
  f.style.display = "block";
var t = document.getElementById("flv");
  t.style.display = "none";
var f = document.getElementById("battle");
  f.style.display = "none";
var f = document.getElementById("back");
  f.style.display = "none";
  var f = document.getElementById("battledone");
  f.style.display = "none";
  var t = document.getElementById("text");
  t.style.display = "none";
    var t = document.getElementById("store");
  t.style.display = "none";
      var t = document.getElementById("buyweap");
  t.style.display = "none";
      var t = document.getElementById("buyarmor");
  t.style.display = "none";
          var t = document.getElementById("weap");
  t.style.display = "none";
    var t = document.getElementById("armor");
  t.style.display = "none";
        var t = document.getElementById("inv");
  t.style.display = "none";
}
function inv() {
var t = document.getElementById("text");
  t.style.display = "none";
var f = document.getElementById("floc");
  f.style.display = "none";
var t = document.getElementById("flv");
  t.style.display = "none";
var f = document.getElementById("battle");
  f.style.display = "none";
var f = document.getElementById("back");
  f.style.display = "none";
  var f = document.getElementById("battledone");
  f.style.display = "none";
  var t = document.getElementById("text");
  t.style.display = "none";
    var t = document.getElementById("store");
  t.style.display = "none";
      var t = document.getElementById("buyweap");
  t.style.display = "none";
      var t = document.getElementById("buyarmor");
  t.style.display = "none";
      var t = document.getElementById("inv");
  t.style.display = "block";
          var t = document.getElementById("weap");
  t.style.display = "none";
    var t = document.getElementById("armor");
  t.style.display = "none";
}
function armor1() {
var t = document.getElementById("text");
  t.style.display = "none";
var f = document.getElementById("floc");
  f.style.display = "none";
var t = document.getElementById("flv");
  t.style.display = "none";
var f = document.getElementById("battle");
  f.style.display = "none";
var f = document.getElementById("back");
  f.style.display = "none";
  var f = document.getElementById("battledone");
  f.style.display = "none";
  var t = document.getElementById("text");
  t.style.display = "none";
    var t = document.getElementById("store");
  t.style.display = "none";
      var t = document.getElementById("buyweap");
  t.style.display = "none";
      var t = document.getElementById("buyarmor");
  t.style.display = "none";
      var t = document.getElementById("inv");
  t.style.display = "none";
        var t = document.getElementById("armor");
  t.style.display = "block";
        var t = document.getElementById("weap");
  t.style.display = "none";
b = listarmorinv();
}
function weap1() {
var t = document.getElementById("text");
  t.style.display = "none";
var f = document.getElementById("floc");
  f.style.display = "none";
var t = document.getElementById("flv");
  t.style.display = "none";
var f = document.getElementById("battle");
  f.style.display = "none";
var f = document.getElementById("back");
  f.style.display = "none";
  var f = document.getElementById("battledone");
  f.style.display = "none";
  var t = document.getElementById("text");
  t.style.display = "none";
    var t = document.getElementById("store");
  t.style.display = "none";
      var t = document.getElementById("buyweap");
  t.style.display = "none";
      var t = document.getElementById("buyarmor");
  t.style.display = "none";
      var t = document.getElementById("inv");
  t.style.display = "none";
        var t = document.getElementById("armor");
  t.style.display = "none";
        var t = document.getElementById("weap");
  t.style.display = "block";

b = listweapinv();
}
function listweapinv() {
var i=1;
var t = document.getElementById("weap");
t.innerHTML =" ";
var l = weapinv.length+1;
while (i<l){
var array = window[weapinv[i]];
var text = document.createElement("a");
text.innerText +=array[1];
text.innerText +=" |Damage";
document.getElementById("weap").appendChild(text);
text.innerText +=array[2];
text.innerText +="-";
text.innerText +=array[3];
document.getElementById("weap").appendChild(text);
var btn = document.createElement("button");
btn.setAttribute( "class","button");
btn.setAttribute( "style","width:100px;height:30px;border-style:solid;border-color:#cc0000;background-color:#e67300;border-width:2px;border-radius:5px;position:relative;	");
btn.setAttribute( "onclick","equipweap("+weapinv[i]+");");
btn.innerText ="Equip";
document.getElementById("weap").appendChild(btn);
var txt = document.createElement("br");
document.getElementById("weap").appendChild(txt);
var txt = document.createElement("br");
document.getElementById("weap").appendChild(txt);
i++;
}

}








function listarmorinv() {
var i=1;
var t = document.getElementById("armor");
t.innerHTML =" ";
var l = armorinv.length+1;
while (i<l){
var array = window[armorinv[i]];
var text = document.createElement("a");
text.innerText +=array[1];
text.innerText +=" |Defence";
document.getElementById("armor").appendChild(text);
text.innerText +=array[2];
document.getElementById("armor").appendChild(text);
var btn = document.createElement("button");
btn.setAttribute( "class","button");
btn.setAttribute( "style","width:100px;height:30px;border-style:solid;border-color:#cc0000;background-color:#e67300;border-width:2px;border-radius:5px;position:relative;	");
btn.setAttribute( "onclick","equiparmor("+armorinv[i]+");");
btn.innerText ="Equip";
document.getElementById("armor").appendChild(btn);
var txt = document.createElement("br");
document.getElementById("armor").appendChild(txt);
var txt = document.createElement("br");
document.getElementById("armor").appendChild(txt);
i++;
}
}
function equipweap(id) {
weap =id;
weapon =weap[1];
var f = document.getElementById('weapon');
f.innerHTML = weapon;
}

function equiparmor(id) {
armor =id;
armored =armor[1];
var f = document.getElementById('armor5');
f.innerHTML = armored;
}

function buyarmor() {
var t = document.getElementById("text");
  t.style.display = "none";
var f = document.getElementById("floc");
  f.style.display = "none";
var t = document.getElementById("flv");
  t.style.display = "none";
var f = document.getElementById("battle");
  f.style.display = "none";
var f = document.getElementById("back");
  f.style.display = "none";
  var f = document.getElementById("battledone");
  f.style.display = "none";
  var t = document.getElementById("text");
  t.style.display = "none";
    var t = document.getElementById("store");
  t.style.display = "none";
    var t = document.getElementById("buyweap");
  t.style.display = "none";
    var t = document.getElementById("buyarmor");
  t.style.display = "block";
      var t = document.getElementById("weap");
  t.style.display = "none";
    var t = document.getElementById("armor");
  t.style.display = "none";
      var t = document.getElementById("inv");
  t.style.display = "none";
    b = listarmor();
}
function buyweap() {
var t = document.getElementById("text");
  t.style.display = "none";
var f = document.getElementById("floc");
  f.style.display = "none";
var t = document.getElementById("flv");
  t.style.display = "none";
var f = document.getElementById("battle");
  f.style.display = "none";
var f = document.getElementById("back");
  f.style.display = "none";
  var f = document.getElementById("battledone");
  f.style.display = "none";
  var t = document.getElementById("text");
  t.style.display = "none";
    var t = document.getElementById("store");
  t.style.display = "none";
    var t = document.getElementById("buyweap");
  t.style.display = "block";
    var t = document.getElementById("buyarmor");
  t.style.display = "none";
        var t = document.getElementById("weap");
  t.style.display = "none";
      var t = document.getElementById("inv");
  t.style.display = "none";
    var t = document.getElementById("armor");
  t.style.display = "none";
  b = listweap();
}
// ARMOR BUYING
function listarmor() {
var t = document.getElementById("buyarmor");
t.innerHTML =" ";
var arr =600;
var arra ="z"+arr;
var array = window[arra];
while (array.length==4) {


var text = document.createElement("a");
text.innerText +=array[1];
text.innerText +=" |defence:";
document.getElementById("buyarmor").appendChild(text);
text.innerText +=array[2];
document.getElementById("buyarmor").appendChild(text);
text.innerText +=" |price:";
document.getElementById("buyarmor").appendChild(text);
text.innerText +=array[3];
text.innerText +=" coins";
var btn = document.createElement("button");
btn.setAttribute( "class","button");
btn.setAttribute( "style","width:100px;height:30px;border-style:solid;border-color:#cc0000;background-color:#e67300;border-width:2px;border-radius:5px;position:relative;	");
btn.setAttribute( "onclick","actbuyarmor("+arra+","+arr+")");
btn.innerText ="Buy";
document.getElementById("buyarmor").appendChild(btn);
document.getElementById("buyarmor").appendChild(text);
var txt = document.createElement("br");
document.getElementById("buyarmor").appendChild(txt);
var txt = document.createElement("br");
document.getElementById("buyarmor").appendChild(txt);
arr++
var arra ="z"+arr;
var array = window[arra];
}

	
	
}
function actbuyarmor(id,idname){
var m2 = document.getElementById('money');
var m1 = m2.innerHTML;
var m = parseInt(m1,10);
if (m<id[3]){
alert ('You Dont have enough money');
}
else {
armorinv.push('z'+idname);
var nm =m-id[3];
m2.innerHTML = nm;
alert('You bought a '+id[1]+' for '+id[3]+' coins');
	
}
}

//WEAPON BUYING
function listweap() {
var t = document.getElementById("buyweap");
t.innerHTML =" ";
var arr =501;
var arra ="z"+arr;
var array = window[arra];
while (array.length==5) {


var text = document.createElement("a");
text.innerText +=array[1];
text.innerText +=" |damage:";
document.getElementById("buyweap").appendChild(text);
text.innerText +=array[2];
text.innerText +="-";
document.getElementById("buyweap").appendChild(text);
text.innerText +=array[3];
text.innerText +=" |price:";
document.getElementById("buyweap").appendChild(text);
text.innerText +=array[4];
text.innerText +=" coins";
var btn = document.createElement("button");
btn.setAttribute( "class","button");
btn.setAttribute( "style","width:100px;height:30px;border-style:solid;border-color:#cc0000;background-color:#e67300;border-width:2px;border-radius:5px;position:relative;	");
btn.setAttribute( "onclick","actbuyweap("+arra+","+arr+")");
btn.innerText ="Buy";
document.getElementById("buyweap").appendChild(btn);
document.getElementById("buyweap").appendChild(text);
var txt = document.createElement("br");
document.getElementById("buyweap").appendChild(txt);
var txt = document.createElement("br");
document.getElementById("buyweap").appendChild(txt);
arr++
var arra ="z"+arr;
var array = window[arra];
}

	
	
}
function actbuyweap(id,idname){
var m2 = document.getElementById('money');
var m1 = m2.innerHTML;
var m = parseInt(m1,10);
if (m<id[4]){
alert ('You Dont have enough money');
}
else {
weapinv.push('z'+idname);
var nm =m-id[4];
m2.innerHTML = nm;
alert('You bought a '+id[1]+' for '+id[4]+' coins');
	
}
}
function store() {
var t = document.getElementById("text");
  t.style.display = "none";
var f = document.getElementById("floc");
  f.style.display = "none";
var t = document.getElementById("flv");
  t.style.display = "none";
var f = document.getElementById("battle");
  f.style.display = "none";
var f = document.getElementById("back");
  f.style.display = "none";
  var f = document.getElementById("battledone");
  f.style.display = "none";
  var t = document.getElementById("text");
  t.style.display = "none";
   var t = document.getElementById("store");
  t.style.display = "block";
    var t = document.getElementById("buyweap");
  t.style.display = "none";
    var t = document.getElementById("buyarmor");
  t.style.display = "none";
        var t = document.getElementById("weap");
  t.style.display = "none";
    var t = document.getElementById("armor");
  t.style.display = "none";
 var t = document.getElementById("inv");
  t.style.display = "none";
}
function enter(tmpi) {
imp =tmpi;
var t = document.getElementById("floc");
  t.style.display = "none";
var f = document.getElementById("flv");
  f.style.display = "block";
  

}
function heal() {
var a = document.getElementById("hp")
var ba = 10 + lv*5;
document.getElementById( "hpbar" ).setAttribute( "value",hp);
var b = parseInt(ba,10)

a.innerHTML =b;

}
function frt1() {
loclvl = 1;
b = monsters(0);


}
function frt2() {
	loclvl = 2;
b = monsters(0);


}
function frt3() {
	loclvl = 3;
b = monsters(0);


}
function battlestg(){
var t = document.getElementById("flv");
  t.style.display = "none";
var t = document.getElementById("allfunc");
  t.style.display = "none";
var f = document.getElementById("battle");
  f.style.display = "block";
var f = document.getElementById("back");
  f.style.display = "block";
  var f = document.getElementById("battledone");
  f.style.display = "none";
  
	
}
function rtt(){
var t = document.getElementById("flv");
  t.style.display = "none";
  var t = document.getElementById("floc");
  t.style.display = "none";
var t = document.getElementById("allfunc");
  t.style.display = "block";
var f = document.getElementById("battle");
  f.style.display = "none";
var f = document.getElementById("back");
  f.style.display = "none";
  var f = document.getElementById("battledone");
  f.style.display = "none";
  var t = document.getElementById("text");
  t.style.display = "block";
 srd =0;
	
}
function monsters(srdp) {
b = battlestg();
var x = loclvl*5;
var y = x+100;
var z = y-4;
srd +=srdp;
if (srd==10) {
srd=0;
var monster =y;
alert("You have found a dominant beast in the area");
}
else {
var monster = Math.floor(Math.random() * 4)+z;
}
var monsterid = "z"+monster;
mons = window[monsterid];
var m = document.getElementById('ename');
m.innerHTML = mons[1];
var m = document.getElementById('enemyhp');
m.innerHTML = mons[5];
document.getElementById( "enemy" ).setAttribute( "max",mons[5]);
document.getElementById( "enemy" ).setAttribute( "value",mons[5]);
var m = document.getElementById('ename');
m.innerHTML = mons[1];
/*var m = document.getElementById('hp');
m.innerHTML = hp;
document.getElementById( "hpbar" ).setAttribute( "max",maxhp);
document.getElementById( "hpbar" ).setAttribute( "value",hp);
*/
// TextLog
var text = document.createElement("p");
text.innerText ="a "+ mons[1]+" has appeared";
document.getElementById("back").appendChild(text);
}
function afterbtl() {
var t = document.getElementById("battle");
  t.style.display = "none";
var f = document.getElementById("battledone");
  f.style.display = "block";
	
	
	
}
	
function battle() {
// player attack
     var mini = weap[2];
	 var maxi = weap[3];
	 var min = parseInt(mini,10);
	 var max = parseInt(maxi,10);
	var a = document.getElementById( "enemy" ).getAttribute( "value" );
	var rdmdmg = Math.floor(Math.random() * (max - min + 1) + min);
	var rngdmg = parseInt(rdmdmg,10);
	var damage = parseInt(dmg,10);
	var atttk = damage + rngdmg;
	var attk = parseInt(atttk,10);
	atk= attk -mons[4];
	if (atk<1)
	{
atk =1;
		
	}
	var b = a - atk;
document.getElementById( "enemy" ).setAttribute( "value",b);
var a = document.getElementById('enemyhp');
a.innerHTML = b;	

var text = document.createElement("p");
text.innerText = name+" attacked the "+mons[1]+" and did "+atk+ " damage";
document.getElementById("back").appendChild(text);

if (b<1) {
var t = document.getElementById("back");
t.innerHTML =" ";
var text = document.createElement("p");
text.innerText = name+" killed the "+mons[1];
document.getElementById("back").appendChild(text);
afterbtl();
//money give
var t4 = document.getElementById("money");
var t3 = t4.innerHTML;
var t2 = parseInt(t3,10);
var t6 = parseInt(mons[6],10);

var t1 = t2+t6;
t4.innerHTML = t1;
//xp give
var givexp = mons[8];
var givexp1 = parseInt(givexp,10);
var np = document.getElementById('xp');
var currXp = np.innerHTML;
var currXp1 = parseInt(currXp,10);
var np = document.getElementById('maxxp');
var MaxiXp = np.innerHTML;
var MaxiXp1 = parseInt(MaxiXp,10);
var receptxp = givexp1+ currXp1;
if(receptxp>MaxiXp1||receptxp==MaxiXp1){
var newxp = receptxp-MaxiXp1
lvlup(newxp);

}
else {
xp = currXp1+givexp1;
var b = document.getElementById('xp');
b.innerHTML = xp;
document.getElementById( "xpbar" ).setAttribute( "value",xp);


}

}
else {
var mini = mons[2];
var maxi = mons[3];
var min = parseInt(mini,10);
var max = parseInt(maxi,10);
var entrdmdmg = Math.floor(Math.random() * (max - min + 1) + min);
var entatk = parseInt(entrdmdmg,10);
var c = document.getElementById("hp")
var ab = c.innerHTML;
var a = parseInt(ab,10);
var tmparmor =armor[2];
var tmp = parseInt(tmparmor,10);
var def3 = parseInt(def,10);
var def2 = def3+tmp;
var def1 = parseInt(def2,10)
entatt= entatk-def1;

if (entatt<1) {
entatt =1;
}
var b = a - entatt;
document.getElementById( "hpbar" ).setAttribute( "value",b);
var n = document.getElementById('hp');
n.innerHTML = b;
var text = document.createElement("p");
text.innerText = name+" got attacked by the "+mons[1]+" and lost "+entatt+ " hp";
document.getElementById("back").appendChild(text);
if (b<1)  {
srd =0;
var text = document.createElement("p");
text.innerText = name+" died to the "+mons[1];
document.getElementById("text").appendChild(text);
var t = document.getElementById("back");
t.innerHTML =" ";
b = rtt();
b = heal();

}
}
}
function lvlup(newxp){
lv++

maxhp = 10 + lv*5;
maxxp = xplv[lv];
xp= newxp; 
dmg++;
def++;

var a = document.getElementById('lv');
a.innerHTML = lv;
var b = document.getElementById('xp');
b.innerHTML = xp;
var c = document.getElementById('hp');
var c2 = c.innerHTML;
var c1 = parseInt(c2,10);
hp = c1+5;
c.innerHTML = hp;
var d = document.getElementById('dmg');
d.innerHTML = dmg;
var e = document.getElementById('def');
e.innerHTML = def;
var n = document.getElementById('maxxp');
n.innerHTML = maxxp;
var c = document.getElementById('maxhp');
c.innerHTML = maxhp;
document.getElementById( "xpbar" ).setAttribute( "value",xp);
document.getElementById( "xpbar" ).setAttribute( "max",maxxp);
document.getElementById( "hpbar" ).setAttribute( "value",hp);
document.getElementById( "hpbar" ).setAttribute( "max",maxhp);
}
</script>
</body>



</html>