function showDeals(){  
    var string = document.getElementsByClassName("price");
    var sLength = string.length;
    for (var i=0;i<sLength;i++){
        var element = string[i].innerHTML;
        var tstring = element.substring(2);
        tstring = parseFloat(tstring.replace(/,/g, ''));
        if(tstring<=50000){

            string[i].style.color = "lightgreen";
            }
        if(tstring>50000&&tstring<399999){
            string[i].style.color="yellow";
            }
        if(tstring>=400000){
            string[i].style.color="red";
            }
    }
}

window.onload = showDeals;

// verify login
function checkLoginInput(password,username){
    var pwInput = password;
    var validWords = /^[a-zA-Z0-9]+$/;

  if(username.value == ""){
      alert("The Username cannot be empty!");
      return false;
  }
  else if(pwInput.value == ""){
      alert("The password cannot be empty!");
      return false;
  }
  else if(!pwInput.value.match(validWords)){
      alert("The password will not have any special character!");
      return false;
  }
  else if (password.value.length < 8){
      alert("The password will not have less than 8 characters!");
      return false;
  }
  
 }

// verify sign up
function checkSignUpInput(username,password,password2){
    var validWords = /^[a-zA-Z0-9]+$/;

  if(username.value == ""){
      alert("The Username cannot be empty!");
      return false;
  }
  else if(!username.value.match(validWords)){
      alert("The username cannot have any special character!");
      return false;
  }
  else if(password.value == ""){
      alert("The password cannot be empty!");
      return false;
  }
  else if(!password.value.match(validWords)){
      alert("The password cannot have any special character!");
      return false;
  }
  else if (password.value.length < 8){
      alert("The password will not have less than 8 characters!");
      return false;
  }
  else if (password2.value != password.value){
      alert("You need to re-enter the password you enter above");
      return false;
  }
  
 }

// search
function searchBar() {
    var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById("find");
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL");
    cn = ul.getElementsByClassName("carTile");
    for (i = 0; i < cn.length; i++) {
        a = cn[i].getElementsByTagName("a")[0];
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            cn[i].style.display = "";
        } else {
            cn[i].style.display = "none";
        }
    }
}

// random links
var links = [
"products/batmobile.php", "products/delorean.php", "products/ghostbusters.php", "products/greenhornet.php", "products/griswalds.php"
, "products/jetsons.php", "products/kitt.php", "products/mario.php", "products/mcqueen.php", "products/mysterymachine.php",
"products/transam.php", "products/warthog.php"]

function randomLink() {
var i = parseInt(Math.random() * links.length);
location.href = links[i];
};
