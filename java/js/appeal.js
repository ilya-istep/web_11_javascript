export  class Appeal{
    href = "";

    init(){
        let request = new XMLHttpRequest();
        request.open('GET', 'https://liblessons.ru/ajax/data1.php');

         request.addEventListener('load', ()=>{

            if(request.status == 200){
                let obj = JSON.parse(request.response);
                console.log("ok")

                
                });
            }

            else{
                console.log("error");
            }


        });

        request.send();
}

        
      
    