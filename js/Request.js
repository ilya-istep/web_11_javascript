export default class Request{
    construct = new Object;
    requestType = "";
    requestUrl = "";
    // open(this.requestType, this.requestUrl);
    init(type, Url){
        //let divEl = document.querySelector(selector);
        this.construct = new XMLHttpRequest;
        this.requestType = type;
        //console.log(this.requestType);
        this.requestUrl = Url;
        //console.log(this.requestUrl);
        this.construct.open(this.requestType, this.requestUrl);
        let context = this;
        //console.log(this.construct);
        this.construct.addEventListener('load', ()=>{
            //console.log(this.construct);
            if(context.construct.status == 200){
                //console.log(context.construct);

                let obj = JSON.parse(context.construct.response);
                console.log(typeof obj);
                obj.forEach((el)=>{
                    console.log(el);
                    //divEl.innerHTML += "<p>" + el.title + "<br>" + el.content + "</p>";
                    return el;
                });
            }
            else{
                console.log("error");
            }
        })
        this.construct.send();
    };
}
