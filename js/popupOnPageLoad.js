window.addEventListener("load", function(){
    setTimeout(
        function open(event){
            document.querySelector(".popup_on_page_load").style.display = "block";
        },
        1000
    )
});
document.querySelector("#close_on_page_load").addEventListener("click", function(){
    document.querySelector(".popup_on_page_load").style.display = "none";
});