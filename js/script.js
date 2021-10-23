window.addEventListener("scroll", () => {
    let navbar = $(".nav");
    let navbarr = $("#navbar");
    let navbarrr = $("#brand").children("p");
    let yposition = window.pageYOffset;

    if(yposition > 200) {
        navbar.css("padding", "0px 10px 0px 10px");
        navbarr.css("padding", "3px");
        navbarrr.css("padding", "5px 10px 5px 10px");
    } else {
        navbar.css("padding", "0px 30px 0px 30px");	
        navbarr.css("padding", "10px");
        navbarrr.css("padding", "11px 39px 11px 39px");
    }
});