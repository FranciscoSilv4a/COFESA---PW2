const slider = document.querySelectorAll('.slider');
const btnAntes = document.getElementById('button1');
const btnDepois = document.getElementById('button2');

let sliderAtivo = 0;

function sliderRemover(){
    slider.forEach(item => item.classList.remove('on'));
}

//Verificação de qual cofesa esta sendo exibido
function sliderMostrar(){
    slider[sliderAtivo].classList.add('on');

    const titulo = document.getElementById('titulo-slider');
    const id = slider[sliderAtivo].getAttribute('id');

    switch (id) {
        case 'imagem 1':
            titulo.textContent = 'COFESA MAX - ITAPEVA SP';
            break;
        case 'imagem 2':
            titulo.textContent = 'COFESA 1 - ITAPEVA SP';
            break;
        case 'imagem 3':
            titulo.textContent = 'COFESA 2 - ITAPEVA SP';
            break;
        case 'imagem 4':
            titulo.textContent = 'COFESA 1 - ITARARÉ SP';
            break;
        case 'imagem 5':
            titulo.textContent = 'COFESA 2 - ITARARÉ SP';
            break;
        case 'imagem 6':
            titulo.textContent = 'COFESA ADM - ITARARÉ SP';
            break;
        default:
            titulo.textContent = '';
    }
}
//Verificação de qual cofesa esta sendo exibido Fim


function voltarSlider() {
    sliderRemover();
    if(sliderAtivo == 0){
        sliderAtivo = slider.length - 1;
    }
    else{
        sliderAtivo--;
    }
    sliderMostrar();
}
function passarSlider() {
    sliderRemover();
    if(sliderAtivo == slider.length - 1) {
        sliderAtivo = 0;
    }
    else {
        sliderAtivo ++;
    }
    sliderMostrar();
}

btnAntes.addEventListener('click', voltarSlider);
btnDepois.addEventListener('click', passarSlider);

sliderMostrar();
