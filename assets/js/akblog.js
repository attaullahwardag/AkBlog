function showNav(){
   var x = document.getElementById('nav-container');
   console.log(x.style.display);
   if(x.style.display === 'none'){
       x.style.display = "block"
   }else{
       x.style.display = "none";
   }

 
}

