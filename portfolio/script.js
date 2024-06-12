var typed = new Typed(".text", {
    strings: [" Frontend Developer", " Youtuber", " Web Developer"],
    typeSpeed: 100,
    backSpeed: 100,
    backDelay: 1000,
    loop: true
});


function abc() {
    
   /*  alert("OK"); */

    var name = document.getElementById["n"].value;
    var email = document.getElementById["em"].value;
    var subject = document.getElementById["sub"].value;
    var message = document.getElementById["msg"].value;

    var form = new FormData();
    form.append("n",name);
    form.append("em",email);
    form.append("sub",subject);
    form.append("msg",message);

    var request = new XMLHttpRequest();

    request.onreadystatechange = function() {
        if(request.readyState == 4 && request.status == 200) {
            var response = request.responseText;

            swal({
                title: "Successfully Registered!!",
                text: "Well done!",
                icon: "success",
                buttons: true,
                dangerMode: true,
            });
            
        }
    }

    request.open("POST","contact.php",true);
    request.send(form);     
    
}
function my() {
    alert("my");

    request.open("POST","my.php",true);
    request.send(form);     
    

}
function submit() {

    alert("ok");

    /* var name = document.getElementById["n"];
    var email = document.getElementById["em"];
    var subject = document.getElementById["sub"];
    var message = document.getElementById["msg"];

    var form = new FormData();
    form.append("n",name);
    form.append("em",email);
    form.append("sub",subject);
    form.append("msg",message);

    var request = new XMLHttpRequest();

    request.onreadystatechange = function() {
        if(request.readyState == 4 && request.status == 200) {
            var response = request.responseText;

            swal({
                title: "Successfully Registered!!",
                text: "Well done!",
                icon: "success",
                buttons: true,
                dangerMode: true,
            })
            
        }
    }

    request.open("POST","contact.php",true);
    request.send(form);     */
    
}