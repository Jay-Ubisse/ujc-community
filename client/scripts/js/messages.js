
const searchBar = document.querySelector(".search input"),
searchIcon = document.querySelector(".search button"),
usersList = document.querySelector(".users-list");

searchIcon.onclick = ()=>{
  searchBar.classList.toggle("show");
  searchIcon.classList.toggle("active");
  searchBar.focus();
  if(searchBar.classList.contains("active")){
    searchBar.value = "";
    searchBar.classList.remove("active");
  }
}

function searchBar() {
  let xhr = new XMLHttpRequest();
  xhr.onload = function () {
    document.getElementById("users-list").innerHTML = this.responseText;
  };
  xhr.open("GET", "../../../server/src/script.php", true);
  xhr.send();
}

setInterval(() =>{
  let xhr = new XMLHttpRequest();
  xhr.open("GET", "../../../server/src/messages.php", true);
  xhr.onload = ()=>{
    if(xhr.readyState === XMLHttpRequest.DONE){
        if(xhr.status === 200){
          let data = xhr.response;
          if(!searchBar.classList.contains("active")){
            usersList.innerHTML = data;
          }
        }
    }
  }
  xhr.send();
}, 500);


