var countDownDate = new Date("March 14, 2020 8:00").getTime();

var x = setInterval(function() {
  var now = new Date().getTime();

  var distance = countDownDate - now;

  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  if (days < 10) days = "0" + days;
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  if (hours < 10) hours = "0" + hours;
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  if (minutes < 10) minutes = "0" + minutes;
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
  if (seconds < 10) seconds = "0" + seconds;

  document.getElementById("d").innerHTML = days;
  document.getElementById("h").innerHTML = hours;
  document.getElementById("m").innerHTML = minutes;
  document.getElementById("s").innerHTML = seconds;
}, 1000);
