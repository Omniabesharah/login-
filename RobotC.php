<!DOCTYPE html>
<html>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata"> <br><br><br>


    
<style>  
body, html {
    height: 100%;
    font-family: "Comic Sans MS", cursive, sans-serif;
	 background-color: white;
}

.slidecontainer {
  width: 100%;
}
.container{  
text-align: center;  
}  
#button{  
font-size: 25px;  
}  
</style> 

<body>


<div class="w3-top">
    <div class="w3-bar w3-black w3-card">
    <a class="w3-bar-item  w3-button w3-padding-large w3-hide-center w3-hide-large" </a>
     <a  class="w3-bar-item  w3-button  w3-padding-large ">Welcome to our Robot </a>

  
       
	
  </div>
</div>

<h2> Display The Control Board: </h2> <br>

                           
<form action="/action_page.php">
  <label for="vol1">محرك 1 (between 0 and 100):</label>
  <input type="range" id="vol1" name="vol1" min="0" max="100"><p>Value: <span id="demo1"></span></p>
  <label for="vol2">محرك 2 (between 0 and 100):</label>
  <input type="range" id="vol2" name="vol2" min="0" max="100"><p>Value: <span id="demo2"></span></p>
  <label for="vol3">محرك 3 (between 0 and 100):</label>
  <input type="range" id="vol3" name="vol3" min="0" max="100"><p>Value: <span id="demo3"></span></p>
  <label for="vol4">محرك 4(between 0 and 100):</label>
  <input type="range" id="vol4" name="vol4" min="0" max="100"><p>Value: <span id="demo4"></span></p>
  <label for="vol5">محرك 5 (between 0 and 100):</label>
  <input type="range" id="vol5" name="vol5" min="0" max="100"><p>Value: <span id="demo5"></span></p>
  <label for="vol6">محرك 6(between 0 and 100):</label>
  <input type="range" id="vol6" name="vol6" min="0" max="100"> <p>Value: <span id="demo6"></span></p>


<div class="container"> 
<input type="submit" name="save_button" value="حفظ" />
<input type="submit" name="play_button" value="تشغيل" /></div>
</form>




<div class="container">  
<button type="button" style="margin:9px;" onclick="alert('F')">forward</button><br>
</div>

<div class="container">  
<button type="button" style="margin:9px;" onclick="alert('L')">left</button>

<button type="button" style="margin:9px;" onclick="alert('S')">stop</button>
 
<button type="button" style="margin:9px;" onclick="alert('R')">right</button> <br>
 
 <div class="container"> 
<button type="button" style="margin:9px;" onclick="alert('B')">backward</button></div>


                                       <!-- Js  -->
<script>
var slider1 = document.getElementById("vol1");
var output1 = document.getElementById("demo1");
var slider2 = document.getElementById("vol2");
var output2 = document.getElementById("demo2");
var slider3 = document.getElementById("vol3");
var output3 = document.getElementById("demo3");
var slider4 = document.getElementById("vol4");
var output4 = document.getElementById("demo4");
var slider5 = document.getElementById("vol5");
var output5 = document.getElementById("demo5");
var slider6 = document.getElementById("vol6");
var output6 = document.getElementById("demo6");

output1.innerHTML = slider1.value;
output2.innerHTML = slider2.value;
output3.innerHTML = slider3.value;
output4.innerHTML = slider4.value;
output5.innerHTML = slider5.value;
output6.innerHTML = slider6.value;

                                  <!-- change the value -->
                                  
slider1.oninput = function() {
  output1.innerHTML = this.value;
}
slider2.oninput = function() {
  output2.innerHTML = this.value;
}
slider3.oninput = function() {
  output3.innerHTML = this.value;
}
slider4.oninput = function() {
  output4.innerHTML = this.value;
}
slider5.oninput = function() {
  output5.innerHTML = this.value;
}
slider6.oninput = function() {
  output6.innerHTML = this.value;
}
</script>
 
 <script>
  window.watsonAssistantChatOptions = {
      integrationID: "75f9d851-af54-46f0-bc76-4d58c09b2faa", // The ID of this integration.
      region: "us-south", // The region your integration is hosted in.
      serviceInstanceID: "7890b36b-15cb-4628-8a1e-6571da560613", // The ID of your service instance.
      onLoad: function(instance) { instance.render(); }
    };
  setTimeout(function(){
    const t=document.createElement('script');
    t.src="https://web-chat.global.assistant.watson.appdomain.cloud/loadWatsonAssistantChat.js";
    document.head.appendChild(t);
  });
</script>


</body>
</html>

