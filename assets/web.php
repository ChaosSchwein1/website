<?php

Class Web{

    //Web texts

    public static function text(){
        echo 'Teamkyro Website.<br>Coming Soon!';
    }

    //Web Scripts

    public static function top() {
        echo '<button onclick="topFunction()" id="myBtn" title="Go to top"><em class="fas fa-arrow-up"></em></button>
        <script>//Get the button:
mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}</script>
<style>#myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 20px;
  z-index: 99;
  border: none;
  outline: none;
  background-color: #00aaaa;
  color: #ffffff;
  cursor: pointer;
  padding: 15px;
  border-radius: 10px;
  font-size: 18px;
}

#myBtn:hover {
  background-color: #00aaaa;
}</style>';
    }

}
