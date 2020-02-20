/*
var xmlHttp = createXmlHttpRequestObject();

function createXmlHttpRequestObject(){
    var xmlHttp;
    try{
        xmlHttp = new XMLHttpRequest();
    }
    catch(e){
        xmlHttp = false;
    }

    if (!xmlHttp) {
        alert("Error Creating Object");
    }else{
        return xmlHttp;
    }    
}

function process() {
            if (xmlHttp.readyState == 0 || xmlHttp.readyState == 4){               
                id = encodeURIComponent(document.getElementById("id").value);
                xmlHttp.open("POST","includes/view_msg.php?id=" + id,true);
                xmlHttp.onreadystatechange = handleServerResponse;
                xmlhttp.send(string);
            }else{
                setTimeout('process()',1000)
            }
        }

function handleServerResponse(){
    if(xmlHttp.readyState==4){
        if (xmlHttp.status==200) {
            xmlResponse = xmlHttp.responseXML;
            xmlDocumentElement = xmlResponse.documentElement;
            mssg = xmlDocumentElement.firstChild.data;
            document.getElementById("mssg").innerHTML = mssg;
            setTimeout('process()',1000);
        }else{
            alert('Error showing message!');
        }
    }

}

*/

function showHint(str) {    
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
            }
        }
        xmlhttp.open("POST", "includes/view_msg.php?id=" + str, true);
        xmlhttp.send();
}