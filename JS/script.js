
// let searchButton = document.querySelector("#search")

// searchButton.addEventListener("click", ()=>{
//   request()
// })

// async function request(){
//   let API_KEY = "ba4DQkxyfYCyjplegsrZ81qostNBrDAP100hrMtJ"
//   let response = await fetch(`https://api.nasa.gov/planetary/apod?api_key=${API_KEY}`);
//   console.log(response)

//   let data = await response.json()
//   console.log(data)

//   showData(data)
// }

// function showData(data){
//     document.querySelector("#content").innerHTML += data.explanation
//     document.querySelector("#content").innerHTML += `<img src = "${data.url}">`
// }

const input = document.querySelector("input.bday-date");

const date = new Date().toLocaleDateString("en-ca");
input.max = date;

input.addEventListener("change", (event) => getAPOD(event.target.value));

const getAPOD = (date) => {
  const API_KEY = "jeedZalahZm8ZxpF8fAdRE4w0GLLWovZVFUK3M2c";
  fetch(`https://api.nasa.gov/planetary/apod?date=${date}&api_key=${API_KEY}`)
    .then((response) => {
      if (response.ok) {
        return response.json();
      }
      throw new Error("Bad server response");
    })
    .then((data) => displayAPOD(data))
    .catch(() => displayNotFound());
};

const displayAPOD = (data) => {
  const apodCard = document.querySelector(".apod");
  const apodCard2 = document.querySelector(".apod2");
  apodCard.innerHTML = `<h3 class="apod-title">${data.title}</h3>
    
    <img src=${data.url} title=${data.title} class="apod-pic" />`;
  apodCard2.innerHTML = '<h3 class="apod-title">Explane</h3>';
  apodCard2.innerHTML += data.explanation
};

const displayNotFound = () => {
  const apodCard = document.querySelector(".apod");
  apodCard.innerHTML = '<h3 class="apod-title">On this day, no picture was discovered.<</h3>';
};