const menuIcon = document.querySelector('#menuIcon');
const list = document.querySelector('.ul');

menuIcon.onclick = () =>{

    menuIcon.classList.toggle('bx-x');
    list.classList.toggle('active');

}

function goAbout(){

    window.location = "loadabout.php";

}

