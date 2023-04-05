let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.navbar');

menu.onclick = () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
}

window.onscroll = () =>{
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
}
function show_alert(){
    alert("Appointment Confirmed !!");
}


function dynamicdropdown(listindex)
  {
      switch (listindex)
      {
      case "HSR" :
          document.getElementById("status").options[0]=new Option("Dr. Rajesh T","Dr. Rajesh T");
          document.getElementById("status").options[1]=new Option("Dr. Shilpa","Dr. Shilpa");
          document.getElementById("status").options[2]=new Option("Dr. Saanvi","Dr. Saanvi");
          break;
      case "BTM" :
          document.getElementById("status").options[0]=new Option("Dr. Aditya","Dr. Aditya");
          document.getElementById("status").options[1]=new Option("Dr. Pratham","Dr. Pratham");
          document.getElementById("status").options[2]=new Option("Dr. Khurshida","Dr. Khurshida");
          break;
      case "KLG" :
        document.getElementById("status").options[0]=new Option("Dr. Mustafa","Dr. Mustafa");
        document.getElementById("status").options[1]=new Option("Dr. Priya","Dr. Priya");
        document.getElementById("status").options[2]=new Option("Dr. Sandra","Dr. Sandra");
        break;
      }
      return true;
  }
