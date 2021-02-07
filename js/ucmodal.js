var ucmodal = document.getElementById('myucmodal');

/*var lnk1 = document.getElementById("myLnk1");
var lnk2 = document.getElementById("myLnk2");
var lnk3 = document.getElementById("myLnk3");
var lnk4 = document.getElementById("myLnk4");
var lnk5 = document.getElementById("myLnk5");
var lnk6 = document.getElementById("myLnk6");
var lnk7 = document.getElementById("myLnk7");
var lnk8 = document.getElementById("myLnk8");
var lnk9 = document.getElementById("myLnk9");
var lnk10 = document.getElementById("myLnk10");
var lnk11 = document.getElementById("myLnk11");
var lnk12 = document.getElementById("myLnk12");*/
var lnk13 = document.getElementById("myLnk13");
var lnk14 = document.getElementById("myLnk14");
var lnk15 = document.getElementById("myLnk15");
var lnk16 = document.getElementById("myLnk16");
var lnk17 = document.getElementById("myLnk17");
/*var lnk18 = document.getElementById("myLnk18");
var lnk19 = document.getElementById("myLnk19");*/
var lnk20 = document.getElementById("myLnk20");
var lnk21 = document.getElementById("myLnk21");
var span = document.getElementsByClassName("ucclose")[0];

/*lnk1.onclick = function() {
    ucmodal.style.display = "block";
}

lnk2.onclick = function() {
    ucmodal.style.display = "block";
}

lnk3.onclick = function() {
    ucmodal.style.display = "block";
}

lnk4.onclick = function() {
    ucmodal.style.display = "block";
}

lnk5.onclick = function() {
    ucmodal.style.display = "block";
}

lnk6.onclick = function() {
    ucmodal.style.display = "block";
}

lnk7.onclick = function() {
    ucmodal.style.display = "block";
}

lnk8.onclick = function() {
    ucmodal.style.display = "block";
}

lnk9.onclick = function() {
    ucmodal.style.display = "block";
}

lnk10.onclick = function() {
    ucmodal.style.display = "block";
}

lnk11.onclick = function() {
    ucmodal.style.display = "block";
}

lnk12.onclick = function() {
    ucmodal.style.display = "block";
}
*/
lnk13.onclick = function() {
    ucmodal.style.display = "block";
}

lnk14.onclick = function() {
    ucmodal.style.display = "block";
}

lnk15.onclick = function() {
    ucmodal.style.display = "block";
}

lnk16.onclick = function() {
    ucmodal.style.display = "block";
}

lnk17.onclick = function() {
    ucmodal.style.display = "block";
}

/*lnk18.onclick = function() {
    ucmodal.style.display = "block";
}

lnk19.onclick = function() {
    ucmodal.style.display = "block";
}*/

lnk20.onclick = function() {
    ucmodal.style.display = "block";
}

lnk21.onclick = function() {
    ucmodal.style.display = "block";
}

span.onclick = function() {
    ucmodal.style.display = "none";
}

window.onclick = function(event) {
    if (event.target == ucmodal) {
        ucmodal.style.display = "none";
    }
}
var $myGroup = $('#myGroup');
$myGroup.on('show.bs.collapse','.collapse', function() {
    $myGroup.find('.collapse.in').collapse('hide');
});