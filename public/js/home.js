window.setInterval(ut, 1000);

function ut() {
    
const d = new Date()
    var h=d.getHours(); // => 9
    var m=d.getMinutes(); // =>  30

    


  document.getElementById("time").innerHTML = h+":"+m;
  document.getElementById("date").innerHTML = d.toLocaleDateString();
}
