import TabsContent from './tabs_content_module.js';



export default class Tabs{
    tabWrapElement = null;

    activeLinkElement = 0;

    contents = [];

    selectorName = null;

    init(selectorEl, obj, activeElIndex){
        console.log(new TabsContent());
        let el = document.querySelector(selectorEl);

        this.selectorName = selectorEl;

        let valid = true;

        if(el != null){
            this.tabWrapElement = el;
        }
        else{
            valid = false;
        }

        if(Array.isArray(obj) && obj.length > 0){
            this.contents = obj;
        }
        else{
            valid = false;
        }

        this.activeLinkElement = Number(activeElIndex);


        if(valid){
            this.render();
        }
    }

    render(){
        this.tabWrapElement.innerHTML = this.renderNavigate() + this.renderBloks();
        this.switchTabs();
    }

    switchTabs(){
        let navigateItems = document.querySelectorAll(this.selectorName + " .navigate li");
        
        let context = this;
        for(let navigateItem of navigateItems){
            navigateItem.addEventListener('click', (evt)=>{
                context.activeLinkElement = evt.target.getAttribute('data-index');
                context.render();
            })
        }
    }

    renderNavigate(){
        let strHTML = "<div class='navigate'><ul>";

        let context = this;

        this.contents.forEach(function(obj, index){
            let classActive = "";

            if(index == context.activeLinkElement){
                classActive = "active";
            }

            strHTML += `<li data-index="${index}" class="${classActive}">${obj.linkName}</li>`;

        })
        strHTML += "</ul></div>";
        
        return strHTML;
    }

    renderBloks(){
        let strHTML = "<div class='blocks_wrap'>";

        let context = this;

        this.contents.forEach(function(obj, index){

            let classActive = "";

            if(index == context.activeLinkElement){
                classActive = "active";
            }

            strHTML += `<div class="item ${classActive}">${obj.block}</div>`;
        })

        
        strHTML += "</div>";
        
        return strHTML;
    }
}