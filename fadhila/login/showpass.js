var input = document.getElementById('pass'),
    icon = document.getElementById('icon');

   icon.onclick = function () {

     if(input.className == 'password') {
        input.setAttribute('type', 'text');
        icon.className = 'fa fa-eye';
        input.className = '';

     } else if(input.className == '') {
        input.setAttribute('type', 'password');
        icon.className = 'fa fa-eye-slash';
        input.className = 'active';
     }else{
        input.setAttribute('type', 'text');
        icon.className = 'fa fa-eye';
        input.className = ''; 
     }
    }

