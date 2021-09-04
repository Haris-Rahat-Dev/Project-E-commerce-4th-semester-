//smooth scroll effect
/*$(document).ready(function(){
  $('.nvbar links').on('click', function (e) {
    if (this.hash !== '') {
      e.preventDefault();
      const hash = this.hash;
      $('html, body')
        .animate({
          scrollTop: $(hash).offset().top
        },800);
    }
  });
}); */

//for dropdown search menu
/*$(document).ready(function(){
  $(".search").click(function(){
    $("#dropdown").slideToggle("slow");
  });
});*/
//dropdown search bar
function opens()
{
  document.getElementById("dropdown").style.transition="2s";
  document.getElementById("dropdown").style.display= "block";
}
function closes()
{
  document.getElementById("dropdown").style.display= "none";
}

//navigation overlay
function openNav() {
    document.getElementById("myNav").style.width = "100%";
}
  
  function closeNav() {
    document.getElementById("myNav").style.width = "0%";
  }

//for displaying date

  let today = new Date();
  let date = 'Date: '+today.getDate()+' -'+' Month: '+(today.getMonth()+1)+' -'+' Year: '+today.getFullYear();
  document.getElementById("date").innerHTML= date;

//for displaying time

let gettime = setInterval(time, 1000);

function time() {
    let d = new Date();
    document.getElementById("time").innerHTML = "Time: " + d.toLocaleTimeString();
}

//for all input fields
function backgroundchange(x) 
{
  document.getElementById(x).style.background = "lightblue";
}
/*for search inputs
{
  function search() {
    let x = document.getElementById("search");
    document.getElementById("demo").innerHTML = "You are searching for: " + x.value;
 }
}*/

//for input field
function lowercase() {
  let x = document.getElementById("search");
  x.value = x.value.toLowerCase();
}

//hover effect for cards
/*function hover(x){
  let item=document.getElementById(x);
  item.classList.add("shadow");
}
function nohover(x){
  let item=document.getElementById(x);
  item.classList.remove("shadow");
}*/


//for to-the-top button
//Get the button:
let mybutton = document.getElementById("myBtn");

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
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
} 
