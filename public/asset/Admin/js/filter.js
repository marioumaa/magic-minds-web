window.onload=() => {
    const FilterInput = document.querySelector("#filtercat");
    document.querySelectorAll('#filtercat input').forEach(input => {
        input.addEventListener('change',() =>{
            const Form = new FormData(FilterInput);
            const Params = new URLSearchParams();
            Form.forEach((value , key) =>{
                Params.append(key,value);
                console.log(Params.toString());
            })
            const Url = new URL(window.location.href);
            fetch(Url.pathname  + "?" + Params.toString(),{
            headers: {
              "X-Requested-With": "XMLHttpRequest"
            }
          }).then(response => response.json()
          ).then(data =>{
            console.log(data);
            const content=document.querySelector("#filtercontent");
            content.innerHTML=data.content ;
          }).catch( e=> alert(e));
        });
    })
    
    
  }
  