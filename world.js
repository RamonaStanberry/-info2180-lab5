onload= function(){
    var httpRequest = new XMLHttpRequest();
    var lookup_button = document.getElementById("lookup");
    var country = document.getElementById("country");
    var sults= document.getElementById("result")
    lookup_button.addEventListener('click',event => {
        var url = "world.php?country="+country.value;
        // console.log(country.value)
        httpRequest.onreadystatechange = doSomething;
        httpRequest.open('GET', url);
        httpRequest.send();
    })


    
    function doSomething() {
        if (httpRequest.readyState === XMLHttpRequest.DONE) {
            if (httpRequest.status === 200) {
                var response = httpRequest.responseText;
                // console.log(response)
                sults.innerHTML= response;
                // console.log(response)
                // alert(response);
            } else {
                // console.log(response)
                // alert('There was a problem with the request.');
                sults.innerHTML= "There was a problem with the request.";
            }
        }
    }  

}