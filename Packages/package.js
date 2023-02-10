// Popular Tours Card

Array.from(document.querySelectorAll('.navigation-buttons')).forEach((item) => {
    item.onclick = () => {
        item.parentElement.parentElement.classList.toggle("change")
    } 
})

// End of Popular Tours Card

// Popular Tours
$(document).ready(function() {
    $('#autoWidth').lightSlider({
        autoWidth:true,
        loop:true,
        onSliderLoad: function() {
            $('#autoWidth').removeClass('cS-hidden');
        } 
    });  
  });


// End of Popular Tours