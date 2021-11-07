onload= function(){
    var httpRequest = new XMLHttpRequest();
    var cntry_lookup_button = document.getElementById("country_lookup");
    var city_lookup_button = document.getElementById("city_lookup");  
    var country = document.getElementById("country");
    var sults= document.getElementById("result")
    cntry_lookup_button.addEventListener('click',event => {
        var url = "world.php?country="+country.value;
        httpRequest.onreadystatechange = doSomething;
        httpRequest.open('GET', url);
        httpRequest.send();
    })
    
    city_lookup_button.addEventListener('click', event => {
        var url = "world.php?country="+country.value+"&context=cities";
        httpRequest.onreadystatechange = doSomething;
        httpRequest.open('GET', url);
        httpRequest.send();
    })
    
    function doSomething() {
        if (httpRequest.readyState === XMLHttpRequest.DONE) {
            if (httpRequest.status === 200) {
                var response = httpRequest.responseText;
                sults.innerHTML= response;
            } 
        }
    }  

}