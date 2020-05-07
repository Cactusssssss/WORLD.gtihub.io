document.getElementById("canoc1").style.display = "none";
document.getElementById("canoc2").style.display = "none";
document.getElementById("canoc3").style.display = "none";
document.getElementById("canoc4").style.display = "none";

function opcl1(){
    if( document.getElementById("canoc1").style.display == "block"){
        document.getElementById("canoc1").style.display = "none";
    }else{
        if( document.getElementById("canoc2").style.display == "block" || document.getElementById("canoc3").style.display == "block" || document.getElementById("canoc4").style.display == "block"){
            document.getElementById("canoc2").style.display = "none";
            document.getElementById("canoc3").style.display = "none";
            document.getElementById("canoc4").style.display = "none";
            document.getElementById("canoc1").style.display = "block";
        }else{
            document.getElementById("canoc1").style.display = "block";
        }
    }
}

function opcl2(){
    if( document.getElementById("canoc2").style.display == "block"){
        document.getElementById("canoc2").style.display = "none";
    }else{
        if( document.getElementById("canoc1").style.display == "block" || document.getElementById("canoc3").style.display == "block" || document.getElementById("canoc4").style.display == "block"){
            document.getElementById("canoc1").style.display = "none";
            document.getElementById("canoc3").style.display = "none";
            document.getElementById("canoc4").style.display = "none";
            document.getElementById("canoc2").style.display = "block";
        }else{
            document.getElementById("canoc2").style.display = "block";
        }
    }
}

function opcl3(){
    if( document.getElementById("canoc3").style.display == "block"){
        document.getElementById("canoc3").style.display = "none";
    }else{
        if( document.getElementById("canoc1").style.display == "block" || document.getElementById("canoc2").style.display == "block" || document.getElementById("canoc4").style.display == "block"){
            document.getElementById("canoc1").style.display = "none";
            document.getElementById("canoc2").style.display = "none";
            document.getElementById("canoc4").style.display = "none";
            document.getElementById("canoc3").style.display = "block";
        }else{
            document.getElementById("canoc3").style.display = "block";
        }
    }
}

function opcl4(){
    if( document.getElementById("canoc4").style.display == "block"){
        document.getElementById("canoc4").style.display = "none";
    }else{
        if( document.getElementById("canoc1").style.display == "block" || document.getElementById("canoc2").style.display == "block" || document.getElementById("canoc3").style.display == "block"){
            document.getElementById("canoc1").style.display = "none";
            document.getElementById("canoc2").style.display = "none";
            document.getElementById("canoc3").style.display = "none";
            document.getElementById("canoc4").style.display = "block";
        }else{
            document.getElementById("canoc4").style.display = "block";
        }
    }
}