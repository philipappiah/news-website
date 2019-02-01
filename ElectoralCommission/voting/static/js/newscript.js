$(window).scroll(function() {
    var height = $(window).scrollTop();
    if (height > 100) {
        $('#back2Top').fadeIn();
    } else {
        $('#back2Top').fadeOut();
    }
});
$(document).ready(function() {
    $("#back2Top").click(function(event) {
        event.preventDefault();
        $("html, body").animate({ scrollTop: 0 }, "slow");
        return false;
    });

});


 function c() {
    var x =sessionStorage.getItem('country');



        if(x=='Ghana'){
            document.getElementById("link").href = "Countries/Ghana.html";

        }else if(x=='United States of America'){
             document.getElementById("link").href = "Countries/USA.html";
        }
        else if(x=='India'){
             document.getElementById("link").href = "Countries/India.html";
        }
        else if(x=='Korea'){
             document.getElementById("link").href = "Countries/Korea.html";
        }
        else if(x=='Nigeria'){
             document.getElementById("link").href = "Countries/Nigeria.html";
        }else{
            document.getElementById("link").href = "#";
        }




}


document.querySelector('input[list="browsers"]').addEventListener('input', onInput);

function onInput(e) {
    var input = e.target,
        val = input.value;
    list = input.getAttribute('list'),
        options = document.getElementById(list).childNodes;

    for (var i = 0; i < options.length; i++) {
        if (options[i].innerText === val) {
            // An item was selected from the list!
            // yourCallbackHere()
           alert('item selected: ' + val);
            sessionStorage.setItem('country', val);
            break;
        }
    }

}



var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}




        function myFunction() {
    document.getElementById("butt").style.marginLeft = "120px";
}










