
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <style type="text/css">
    form span {
      visibility: hidden;
      border: 1px solid;
      margin-top: 2px;
      padding: 5px;
      transition: all 0.5s;
      opacity: 0;
      height: 400px;
      width: 600px;
      overflow-y: auto;
    }
    form {
      display: inline-grid;
    }
  </style>
</head>
<body>

<h2>The XMLHttpRequest Object</h2>

<h3>Start typing a name in the input field below:</h3>

<form action=""> 
First name: <input type="text" id="txt1" onkeyup="showHint(this.value)">
Second name: <input type="text" id="txt1" onkeyup="affiche(this.value)">
<span>Teste</span>
</form>

<p>Suggestions: <span id="txtHint"></span></p> 

<script>


function affiche(str){
    var i = 0;
    var b = document.documentElement;
    var e = b.scrollHeight - b.clientHeight;
    var x = setInterval(scrollWin,3000);

 
  function scrollWin() {
    i = i + 1;
    console.log(i);
 xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementsByTagName("SPAN")[0].style.visibility = 'visible';
      document.getElementsByTagName("SPAN")[0].style.opacity = '1';
      document.getElementsByTagName("SPAN")[0].innerHTML = "<p>"+this.responseText+"</p>";
    }
  };
  xhttp.open("GET", "gethint.php", true);
  xhttp.send(); 
  }   
}

</script>

</body>
</html>
