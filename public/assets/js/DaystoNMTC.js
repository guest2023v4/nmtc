
// Set the date we're counting down to
var countDownDate = new Date("Dec 19, 2023 10:00:01 GMT+1").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();
    
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
    
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Output the result in an element with id="demo"
  document.getElementById("days_nmtc").innerHTML = days ;
  document.getElementById("hours_nmtc").innerHTML = hours ;
  document.getElementById("minutes_nmtc").innerHTML = minutes ;
  document.getElementById("seconds_nmtc").innerHTML = seconds ;
    
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo1").innerHTML = "<h3 class=\"d-flex text-white fw-bold my-1 px-5 fs-4x justify-content-center\">Strong, United, Working until we fall</h3>";
  }
}, 1000);

