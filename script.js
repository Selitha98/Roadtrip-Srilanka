// Section 2 Video

const video = document.querySelector('.video')
const btn = document.querySelector('.buttons i')
const bar = document.querySelector('.video-bar')

const PlayPause = () => {
    if (video.paused){
        video.play()
        btn.className = 'far fa-pause-circle'
        video.style.opacity ='0.7'
    } else {
        video.pause()
        btn.className = 'far fa-play-circle'
        video.style.opacity ='0.3'
    }
    
}

btn.addEventListener('click', () => {
    PlayPause()
})

video.addEventListener('timeupdate', () =>{
    const barWidth = video.currentTime / video.duration
    bar.style.width = `${barWidth * 100}%`

    if (video.ended) {
        btn.className = 'far fa-play-circle'
        video.style.opacity = '0.3'
    }
})
// End of section 2 video

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