function countrySearch(){
    var query = document.getElementById("country").value;
    var httprequest = new XMLHttpRequest();
    httprequest.onreadystatechange = function(){
        if (this.readyState == 4 && this.status == 200){
            document.getElementById("result").innerHTML=this.responseText;
            alert(this.responseText);
        }
    };
    httprequest.open("GET",URL,true);
    httprequest.send("");
}