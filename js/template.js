$( document ).ready( function () {
    
     // create sidebar and attach to menu open
      $('.ui.sidebar')
        .sidebar('attach events', '.toc.item')
      ;
    
    $(".ui.simple.dropdown > .menu").css("display", "none");
    
     $("main").mouseenter(function(e) {
       $(".ui.simple.dropdown > .menu").css("display", "none");
    });
    
    $(".ui.simple.dropdown > .menu").mouseout(function(e){
       $(this).css("display", "none"); 
    });

    $(".ui.simple.dropdown > a.item").mouseenter(function(e) {
        $(this).next().next().css("display", "block");
    });
    
    $(".ui.simple.dropdown .menu").mouseeenter(function(e) {
       $(this).css("display", "block"); 
    });
    
    $(".ui.simple.dropdown .menu").mouseeout(function(e) {
       $(this).css("display", "none"); 
    }); 
    
});