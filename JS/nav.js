x=document.getElementById("navigation2");
style= window.getComputedStyle(x);
display = style.getPropertyValue('display');

// alert("hello");
$(".navigation__icon").on('click',function(e){
    if(display=='none'){
        nav_show();
    }
    else{
        nav_hide();
    }
});


function nav_show(){
    x.style.display="block";
    $(".fa-bars").toggleClass('fa-bars fa-times');
    display = style.getPropertyValue('display');

}

function nav_hide(){
    x.style.display="none";
    $(".fa-times").toggleClass('fa-times fa-bars');
    display = style.getPropertyValue('display');
    
}