//navbar sticky

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
        document.getElementById("navbar").style.padding = "30px 10px";
        document.getElementById("logo").style.top = "35px";
        document.getElementById("burger").classList.remove("hidden");
        document.getElementById("navCon").classList.add("hidden")
    } else {
        document.getElementById("navbar").style.padding = "90px 10px"
        document.getElementById("logo").style.top = "50px"
        document.getElementById("burger").classList.add("hidden")
        document.getElementById("navCon").classList.remove("hidden")
    }
}

//burger wird zu x

function makeX() {
    document.getElementById("burger").classList.toggle("change");
}

//drop it (dropdown Menü)

function drop() {
    document.getElementById("ddown").classList.toggle("show");
}

window.onclick = function(event) {
    if (!event.target.matches('.burger')) {
        var dropdowns = document.getElementsByClassName("dropContent");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
                makeX();
            }
        }
    }
}

// timer

var countDownDate = new Date("June 16, 2022").getTime();

var x = setInterval(function() {
    var now = new Date().getTime();
    var distance = countDownDate - now;
    var days = Math.floor(distance/ (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    document.getElementById("timer").innerHTML = days + "d" + hours +  "h" + minutes + "m" + seconds + "s";

    if (distance < 0) {
        clearInterval(x);
        document.getElementById("timer").innerHTML = "Expired";
    }
}, 1000);


// Praktikums Infos zu Bereichen

function infoIt() {
    document.getElementById("prakIt").classList.toggle("hidden")
    document.getElementById("prakEc").classList.add("hidden")
    document.getElementById("prakMa").classList.add("hidden")
}

function infoEc() {
    document.getElementById("prakEc").classList.toggle("hidden")
    document.getElementById("prakIt").classList.add("hidden")
    document.getElementById("prakMa").classList.add("hidden")
}

function infoMa() {
    document.getElementById("prakMa").classList.toggle("hidden")
    document.getElementById("prakEc").classList.add("hidden")
    document.getElementById("prakIt").classList.add("hidden")
}