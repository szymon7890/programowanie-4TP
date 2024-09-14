document.addEventListener("DOMContentLoaded", (event) => {
    
    const btn = document.querySelector('#submit');
    console.log(btn);

    btn.addEventListener("click", function(){
        console.log("działa");
        
        const number = document.getElementById("number").value;
    
        const name = document.getElementById("name").value;
    
        const lastname = document.getElementById("lastname").value;
    
        const niebieskie = document.getElementById("niebieskie");
        console.log(document.getElementById("niebieskie").checked);

        const zielone = document.getElementById("zielone");
        console.log(document.getElementById("zielone").checked);

        const piwne = document.getElementById("piwne");
        console.log(document.getElementById("piwne").checked);

        console.log(number.length);

        console.log(name.length);

        console.log(lastname.length);

        if (number.length) {
            console.log("uzupełniony numer")
        }
        
        if (name.length) {
            console.log("uzupełnione imie");
        }

        if (lastname.length) {
            console.log('uzupelniono nazwisko')
        }

        // jak wsyztsko jest uzupe≥łnione to pokaz obrazki dla podanego imienia i nazwiska i peselu
        //dokończyc else

        
/*
        if (niebieskie.checked || zielone.checked || piwne.checked) {
            console.log("zaznaczone " + "dowolne" + " radio");
        }
*/

        if (niebieskie.checked) {
            console.log("zaznaczone " + niebieskie.value + " radio");
        } else if (zielone.checked) {
            console.log("zaznaczone " + zielone.value + " radio");
        } else if (piwne.checked) {
            console.log("zaznaczone " + piwne.value + " radio");
        } else {
            console.log("Nie zaznaczono rzadnego radia");
        }

    });

  


    // sczytanie wartości z inputów
});