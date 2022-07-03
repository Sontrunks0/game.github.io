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
		 "6",                //  Minimum amount of damage
		 "8",                // Maximum amount of damage
		 "0",                //  defence 		 
		 "17",               //  health points
		 "7",                 //  drop1
         "none",            //  drop2 if it exist 
		 "5"
		 ];
var z106 = [ 
         "monster",       
		 "Goblin",           //  name
		 "9",                //  Minimum amount of damage
		 "12",                // Maximum amount of damage
		 "0",                //  defence 		 
		 "20",               //  health points
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
		 "25",               //  health points
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
		 "500"         //  price it cost in the store	 
		 ];
var z502 = [
         "weapon",          
		 "stone axe",          //  name
		 "5",           //  amount of damage
		 "7",           //  amount of damage
		 "700"         //  price it cost in the store	 
		 ];
var z503 = [
         "weapon",          
		 "Iron Sword",          //  name
		 "10",           //  amount of damage
		 "15",           //  amount of damage
		 "900"         //  price it cost in the store	 
		 ];
var z504 = [
         "weapon",          
		 "Steel Bat",          //  name
		 "15",           //  amount of damage
		 "18",           //  amount of damage
		 "1300"         //  price it cost in the store	 
		 ];
var z505 = [
         "weapon",          
		 "Adamantium sword",          //  name
		 "20",           //  amount of damage
		 "25",           //  amount of damage
		 "2000"         //  price it cost in the store	 
		 ];
var z506 = [
         "weapon",          
		 "Adamantium enhanced Sword",          //  name
		 "25",           //  amount of damage
		 "28",           //  amount of damage
		 "4000"         //  price it cost in the store	 
		 ];
var z600 = [
         "armor",          
		 "Wooden Armor",          //  name
		 "2",       //  amount of defence
		 "500"         //  price it cost in the store	 
		 ];
var z601 = [
         "armor",          
		 "Iron infused Wood Armor",          //  name
		 "4",       //  amount of defence
		 "700"         //  price it cost in the store	 
		 ];
var z602 = [
         "armor",          
		 "Iron Armor",          //  name
		 "7",       //  amount of defence
		 "1000"         //  price it cost in the store	 
		 ];
var z603 = [
         "armor",          
		 "Adamantium Infused Iron Armor",          //  name
		 "12",       //  amount of defence
		 "2000"         //  price it cost in the store	 
		 ];
var z604 = [
         "armor",          
		 "Adamantium Armor",          //  name
		 "20",       //  amount of defence
		 "4500"         //  price it cost in the store	 
		 ];
var mons;