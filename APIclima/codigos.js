//https://api.openweathermap.org/data/2.5/weather?q=Paulista&units=metric&appid=f37d3286de44c3a9171ecb8e55d07280&lang=pt_br

//Variáveis e Seleções de Elementos 
const armazenaCidade = document.querySelector("#city-input");
const Btpesquisa = document.querySelector("#pesquisa");
const chaveAPI = "f37d3286de44c3a9171ecb8e55d07280";
const cityElement = document.querySelector("#city");
const tempElement = document.querySelector("#temperatura span");
const descElement = document.querySelector("#climatempo");
const weatherIconElement = document.querySelector("#weather-icon");
const umidityElement = document.querySelector("#umidade span");
const windElement = document.querySelector("#vento span");
const weatherContainer = document.querySelector("#dadoschuva")


//Funções

const toggleLoader = () => {
    loader.classList.toggle("hide");
  };


const pegaDadosTempo = async(cidade) => {
    const apiWeatherURL = `https://api.openweathermap.org/data/2.5/weather?q=${cidade}&units=metric&appid=${chaveAPI}&lang=pt_br`;

    const res = await fetch(apiWeatherURL);
    const data = await res.json();
    
    return data;
};

const mostraDadosTempo = async(cidade) => {

    const data = await pegaDadosTempo(cidade);

    cityElement.innerText = data.name;
    tempElement.innerText = parseInt(data.main.temp);
    descElement.innerText = data.weather[0].description;
    weatherIconElement.setAttribute("src", `https://openweathermap.org/img/wn/${data.weather[0].icon}.png`);
    umidityElement.innerText = `${data.main.humidity}%`;
    windElement.innerText = `${data.wind.speed}km/h`;
    weatherContainer.classList.remove("hide");

}


//Eventos
Btpesquisa.addEventListener("click", (e) => {
    e.preventDefault(); //evita o envio do formulário
    console.log("teste");
    
    const cidade = armazenaCidade.value;
    console.log(cidade);

    mostraDadosTempo(cidade);

})  

armazenaCidade.addEventListener("keyup" , (e) =>{
    if(e.code === "Enter") {
        e.preventDefault()
        const cidade = armazenaCidade.value
        mostraDadosTempo(cidade)
    }
})