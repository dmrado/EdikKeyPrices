var header = document.createElement('div');
header.setAttribute('id', 'header');
header.style.border = '1px black solid';
header.style.padding = '20px';
header.style.margin = '20px 0';
//header.style.backgroundColor = 'gray';
header.style.color = 'white-blue';
document.getElementById('wrapper').appendChild(header);

var h1Header = document.createElement('h1');
h1Header.style.position = 'absolute';
h1Header.setAttribute('class', 'text-center');
h1Header.style.margin = '110px 780px';
h1Header.innerText = 'Сайт Эдика';
header.appendChild(h1Header);

//div внутри header
var slider = document.createElement('div');
slider.setAttribute('id', 'slider');
slider.setAttribute('class', 'text-center');
//own attribute for picture change handler
slider.setAttribute('slide', 1);

//styles for slider
//slider.style.border = '1px black solid';
slider.style.height = '250px';
slider.style.margin = '20px 0';
slider.style.backgroundImage = 'url(images/slide1.jpg)';

document.getElementById('header').appendChild(slider);
//h1 within slider

var timer = setInterval(function(){
    function sliderFunc() {
        var currentSlide = slider.getAttribute('slide');
        //проверка
        alert (currentSlide);
        if (currentSlide === '5') {
            currentSlide = 1;
        }else {
            currentSlide++;
        }
        slider.setAttribute('slide', currentSlide);

        slider.style.backgroundImage = 'url(images/slide' + currentSlide + '.jpg)';
    }
}, 3000);