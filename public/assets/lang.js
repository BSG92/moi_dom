const select = document.querySelectorAll('#lang-select li div');

const en = document.getElementById("en");
const ru = document.getElementById("ru");
const langs = ["en", "ru"];

for (let i = 0; i < select.length; i++) {
    select[i].addEventListener('click', function(){
        let lang = this.id; // language is defined in the id attribute
        location.href = window.location.pathname + '#' + lang;
        location.reload();
        
    });
}

function changeLanguage() {
    let hash = window.location.hash;
    hash = hash.substring(1);

    // If the language value in URL of the address bar is not in the langs Array defined above
    // choose ru as the default language and redirect
    if (!langs.includes(hash)) {
        location.href = window.location.pathname + '#ru'
        location.reload();
    }
    
    // console.log(hash);

    // Add .active class to the language selector drop down
    // Since hash value is also equal to the id of the en and ru dropdown elements
    if(hash == "ru") {
        ru.classList.add("active");
    }else if(hash == "en") {
        en.classList.add("active");
    }

    // langArr is loaded in the index.php page. It is included there, so can be accessed from here
    for(let key in langArr){
        // Error handling when the element is not found
        let element = document.querySelector('.lng-'+key);
        if(element){
            if (element.hasAttribute("placeholder")) {
                element.attributes.placeholder.nodeValue = langArr[key][hash];
            }
            element.innerHTML = langArr[key][hash];
        }
        // console.log(document.querySelector('.lng-'+key).innerHTML = langArr[key][hash]);
    }
}

changeLanguage();