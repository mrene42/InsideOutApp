
let images;

function arrayEmotionsImages(element){

    const emotion = {
        "sadness":{
            "img":"/img/characters/Sadness.png",
            "color":"#9CD7E6"
        },
        "joy":{
            "img":"/img/characters/Joy.png",
            "color":"#F2CEAE"
        },
        "fear":{
            "img":"/img/characters/Fear.png",
            "color":"#A7ABF2"
        },
        "envy":{
            "img":"/img/characters/Envy.png",
            "color":"#9BE3E4"
        },
        "boredom":{
            "img":"/img/characters/Ennui.png",
            "color":"#7569BF"
        },
        "embarrassment":{
            "img":"/img/characters/Embarrassment.png",
            "color":"#D9A9C8"
        },
        "disgust":{
            "img":"/img/characters/Disgust.png",
            "color":"#B5E1AB"
        },
        "anxiety":{
            "img":"/img/characters/Anxiety.png",
            "color":"#E0BA58"
        },
        "anger":{
            "img":"/img/characters/Anger.png",
            "color":"#F50752"
        },

    }

    for (const prop in emotion){

        if(prop == element){
            return emotion[prop];
        }

    }

    return null;
}


function displayEmotionsImages(){
    
    let element = document.querySelectorAll("#emotionsCard");
    

    for (let i =0; i<element.length; i++){
        
        let characterArray = arrayEmotionsImages(element[i].firstElementChild.alt);

        let url = characterArray.img;
        element[i].firstElementChild.src = url; 
        element[i].style.backgroundColor = characterArray.color

    }

}
function displayEmotionsShow(){
    
    let element = document.querySelectorAll("#cardShow");
    

    for (let i =0; i<element.length; i++){
        
        let characterArray = arrayEmotionsImages(element[i].firstElementChild.alt);

        let url = characterArray.img;
        element[i].firstElementChild.src = url;

    }

}



displayEmotionsImages();

displayEmotionsShow();