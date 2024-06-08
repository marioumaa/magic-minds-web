
window.onload=() => {
    const searchInput = document.querySelector("#search-quiz");
    searchInput.addEventListener('input',() =>{
      searchVal=searchInput.value ;
      const Params = new URLSearchParams();
      Params.append('key',searchVal);
  
      const Url = new URL(window.location.href);
      fetch(Url  + "?" + Params.toString(),{
      headers: {
        "X-Requested-With": "XMLHttpRequest"
      }
    }).then(response => response.json()
    ).then(data =>{
      const content=document.querySelector("#content-quiz");
      content.innerHTML=data.content ;
    }).catch( e=> alert(e));
  });
  }
 