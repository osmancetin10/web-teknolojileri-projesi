function formDenetle(){
    var Ad=document.getElementById('ad').value;
    var labelAd=document.getElementById('labelAd');
    var Mesaj=document.getElementById('mesaj').value;
    var labelMesaj=document.getElementById('labelMesaj');
    var Hata=document.getElementById('hata');
    if(!(isNaN(Ad))){
        labelAd.style.color="rgb(201, 55, 19)";
        Hata.style.visibility="visible";
        //return false;
    }
    else{
        labelAd.style.color="black";
        Hata.style.visibility="hidden";
    }
    if(Mesaj==""){
        labelMesaj.style.color="rgb(201, 55, 19)";
        Hata.style.visibility="visible";
        //return false;
    }
    else{
        labelMesaj.style.color="black";
        Hata.style.visibility="hidden";
    }
    if(isNaN(ad) && Mesaj != ""){
        return true;
    }
    else{
        return false;
    }
}