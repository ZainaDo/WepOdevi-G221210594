function loginDenetle(){
    var kulAd="G221210594";
    var sifre="12345";
    var KullaniciAdi=document.getElementById("kullaniciAdi").value;
    var Parola=document.getElementById("parola").value;
    var Hata=document.getElementById("hata");

    if(KullaniciAdi=="" || Parola==""){
        Hata.style.visibility="visible";
        Hata.innerHTML="Kullanıcı adı ya da Parola boş bırakmayin.";
        return false;
    }
    else if((KullaniciAdi!="" && KullaniciAdi!=kulAd) || (Parola!="" && Parola!=sifre)){
        Hata.style.visibility="visible";
        Hata.innerHTML="Kullanıcı adı ya da Parola yanlış.";
        return false;
    }
    else{
        return true;
    }
    
}