    document.querySelector("#create_db").addEventListener("click", function() {

    document.querySelector("#first").classList.add("display");
    
    document.querySelector("#default").classList.remove("display");
    document.querySelector("#second").classList.remove("display");
    document.querySelector("#third").classList.remove("display");
    })
    
    document.querySelector("#create_table").addEventListener("click", function() {
    
    document.querySelector("#second").classList.add("display");
        
    document.querySelector("#default").classList.remove("display");
    document.querySelector("#first").classList.remove("display");
    document.querySelector("#third").classList.remove("display");
    })
    
    document.querySelector("#insert").addEventListener("click", function() {
    
    document.querySelector("#third").classList.add("display");
    
    document.querySelector("#default").classList.remove("display");
    document.querySelector("#first").classList.remove("display");
    document.querySelector("#second").classList.remove("display");
        
    })
    