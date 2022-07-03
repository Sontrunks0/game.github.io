<?php
$name = file_get_contents('name.g');
?>
<html>
<head>
<script>
var name =<?php echo json_encode($name); ?>;
</script>
<link rel="stylesheet" href="pregame.css">
<title> TEXT RPG </title>
</head>
<body>
<div  id="start">
</div>
<script>
function one() {
var t = document.getElementById("start");
t.innerHTML =" ";
var text = document.createElement("p");
text.innerText += "Old man: Welcome";
document.getElementById("start").appendChild(text);
var text = document.createElement("p");
text.innerText += "Old man: How are you? ";
text.innerText += "I found you on the way back to town you were unconscious,i also saw you werent dead so i decided to take you along";
document.getElementById("start").appendChild(text);
var text = document.createElement("p");
text.innerText += "Old man: What is your name?";
document.getElementById("start").appendChild(text);
var text = document.createElement("p");
text.innerText += "You: "+name;
document.getElementById("start").appendChild(text);
var text = document.createElement("p");
text.innerText += "You look like an newbie adventurer you should go to the guild after you are healed";
document.getElementById("start").appendChild(text);
var text = document.createElement("p");
text.innerText += "2 days later";
document.getElementById("start").appendChild(text);
var text = document.createElement("p");
text.innerText += "*"+name+" pick up a  hard stick from the road and goes to the guild*";
document.getElementById("start").appendChild(text);
var text = document.createElement("p");
text.innerText += "Guild member:I ve never seen you here,are you new?";
document.getElementById("start").appendChild(text);
var text = document.createElement("p");
text.innerText += "Guild member:Anyway you should go to the forest to kill monster to start so you can make money. The monsters are weaker there";
document.getElementById("start").appendChild(text);
var text = document.createElement("button");
text.innerText += "Start";
text.setAttribute("onclick","start();");
document.getElementById("start").appendChild(text);
}
one();
function start() {
var r = document.getElementById("start");
r.innerHTML="";
alert("If a stage say Level 3 or Level 2 it does not mean that you can kill the monster there if you are at lvl 3 or 2");
var text = document.createElement("a");
text.innerText += "START";
text.setAttribute("href","game.php");
document.getElementById("start").appendChild(text);
}
</script>
</body>
</html>