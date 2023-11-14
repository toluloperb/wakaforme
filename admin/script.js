const ul = document.querySelector("ul"),
input = ul.querySelector("input");

let tags = [];

function addTag(e){
    if(e.key == "Enter"){
        let tag = e.target.value.replace(/\s+/g, ' '); 
        if(tag.length > 1 && !tags.includes(tag)){
            tag.split(',').forEach(tag =>{
                tags.push(tag);
                console.log(tags)
            });
        }
    }
}

input.addEventListener("keyup", addTag);