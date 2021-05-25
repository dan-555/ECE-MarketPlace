$(document).ready(function () { 
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });

var init = new Powerange(elem, { min: 0, max: 1000, start: 128,step: 50 });

var clickInput = document.querySelector('.js-check-click')
  , clickButton = document.querySelector('.js-check-click-button');

clickButton.addEventListener('click', function() {
  alert(clickInput.value);
});

