var fonts = ["verdana", "arial", "helvetica", "courier new", "courier",
             "trebuchet", "arial black", "impact"];
var time;
var count = 0;
var lastFont = 10;
var angle = 135;

document.addEventListener('DOMContentLoaded', function() {
    var backgroundTimer = setInterval(function(){
      angle = (angle % 360) + 3;//getRandomInt(1);
      document.getElementById('htmlBody').style.backgroundImage = "linear-gradient(" + angle + "deg, #3B002A, #8F0066)";
    }, 75*3);
    timer();
}, false);


function changeOnce() {
  do {
    var random = getRandomInt(9);
  } while(random == lastFont);
  console.log("Found new font");

  lastFont = random;
  document.getElementById('site-name').style.fontFamily = fonts[random];
}

function timer() {
  console.log("Timer() started.");
  //Do it once, pause
  time = setTimeout(changeOnce, 2000);

  setBack(2075);

  //Do it quickly 5 times
  time = setTimeout(changeOnce, 3075);
  time = setTimeout(changeOnce, 3125);
  time = setTimeout(changeOnce, 3200);
  time = setTimeout(changeOnce, 3275);

  setBack(3325);

  count++;

  if (count != 6) {
    //Restart the cycle
    time = setTimeout(function(){
      console.log("Timer() about to start again.");
      clearTimeout(time); timer();
    }, 7000);
  }

}

function setBack(time) {
  time = setTimeout(function(){
    document.getElementById('site-name').style.fontFamily = '\'' + 'Roboto' + '\'' + ', sans-seriff';
    lastFont = 10;
  }, time);
}

function getRandomInt(maxInt){
  var result = Math.floor(Math.random() * maxInt);
  console.log(result);

  return result;
}
