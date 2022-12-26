var cron;
function startTimer(duration, display) {
    var timer = duration, minutes, seconds;
    cron = setInterval(function () {
        hours = parseInt(timer / 3600 % 24);
        minutes = parseInt(timer / 60 % 60);
        seconds = parseInt(timer % 60, 10);
        hours = hours <10 ? "0" + hours : hours;
        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;
        display.textContent = hours + ":" + minutes + ":" + seconds;
        if (--timer < 0) {
            timer = duration;
        }
    }, 1000);
}

    start = function () {
    var duration = 3600 * window.prompt('Digite o tempo estimado: (Em horas)'); // Converter para segundos
        display = document.querySelector('#timer1'); // selecionando o timer
    startTimer(duration, display); // iniciando o timer
};

    stop = function (){
        clearInterval(cron);
        //display = document.getElementById('timer1').innerText = '00:00:00';
    };






