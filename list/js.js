
 //Node   
document.getElementById("formNode").addEventListener('submit',submitdetailsNode);
function submitdetailsNode(e){
    e.preventDefault();
    var data=new FormData();
    data.append("content",document.getElementById("contentNode").value);
    data.append("remark",document.getElementById("remarkNode").value);
    data.append("table","node");
    var xhr=new XMLHttpRequest()
    xhr.open("POST","script/datapost.php",true);
    xhr.onload=function (){
        document.getElementById('errorbox').innerHTML=this.responseText;
    }
    xhr.send(data);
}

//AutoCAD    
document.getElementById("formCAD").addEventListener('submit',submitdetailsCAD);
function submitdetailsCAD(e){
    e.preventDefault();
    var data=new FormData();
    data.append("content",document.getElementById("contentCAD").value);
    data.append("remark",document.getElementById("remarkCAD").value);
    data.append("table","autocad");
    var xhr=new XMLHttpRequest()
    xhr.open("POST","script/datapost.php",true);
    xhr.onload=function (){
        document.getElementById('errorbox').innerHTML=this.responseText;
    }
    xhr.send(data);
}



//CPP    
document.getElementById("formCPP").addEventListener('submit',submitdetailsCPP);
function submitdetailsCPP(e){
    e.preventDefault();
    var data=new FormData();
    data.append("content",document.getElementById("contentCPP").value);
    data.append("remark",document.getElementById("remarkCPP").value);
    data.append("table","cpp");
    var xhr=new XMLHttpRequest()
    xhr.open("POST","script/datapost.php",true);
    xhr.onload=function (){
        document.getElementById('errorbox').innerHTML=this.responseText;
    }
    xhr.send(data);
}