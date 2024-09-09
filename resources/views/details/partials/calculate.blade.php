<div class="row hesapla-row">
 <div class="col-md-4 col-md-offset-4">
  <div class="input-group">
   <input id="calisan_sayisi" type="number" class="form-control" placeholder="İşyeri Çalışan Sayısı">
   <span class="input-group-btn">
    <button onclick="sureHesapla2016('{{$Page->calculation_type}}');" class="btn btn-success" type="button">Hesapla</button>
   </span>
  </div>
 </div>
</div>


<div class="row" id="hesaplama-result">
 <div class="col-md-8 col-md-offset-2">
  <div class="thumbnail">
   <div class="row">
    <div class="col-md-3">
     <img src="{{asset($Page->image)}}" alt="{{$Page->title}}" class="img-responsive">
    </div>
    <div class="col-md-3">
     <div class="tehlike-area">
      <b>Az Tehlikeli İşyeri</b>
      <hr/>
      <br/>
      <p id="sureC"></p>
      <br/>
      <br/>
     </div>
    </div>
    <div class="col-md-3">
     <div class="tehlike-area">
      <b>Tehlikeli İşyeri</b>
      <hr/>
      <br/>
      <p id="sureB"></p>
      <br/>
      <br/>
     </div>
    </div>
    <div class="col-md-3">
     <div class="tehlike-area">
      <b>Çok Tehlikeli İşyeri</b>
      <hr/>
      <br/>
      <p id="sureA"></p>
      <br/>
      <br/>
     </div>
    </div>
   </div>
  </div>
 </div>
</div>
</div>
@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
 function sureHesapla2016(tip) {
  var calisan_sayisi = $("#calisan_sayisi").val();
  if (calisan_sayisi.length<1) {
   Swal.fire({
    title: 'Hata!',
    text: 'Lütfen çalışan sayınızı girin',
    icon: 'error',
    confirmButtonText: 'Tamam'
   });
   return false;
  }else if (!calisan_sayisi.match(/^[0-9]+$/)) {
   Swal.fire({
    title: 'Hata!',
    text: 'Lütfen çalışan sayısı alanına geçerli bir rakam girin.',
    icon: 'error',
    confirmButtonText: 'Tamam'
   });
   return false;
  }
  
  $("#sureA").html(hesaplaDereceyeGore2016(calisan_sayisi, "A", tip));
  $("#sureB").html(hesaplaDereceyeGore2016(calisan_sayisi, "B", tip));
  $("#sureC").html(hesaplaDereceyeGore2016(calisan_sayisi, "C", tip));
  $("#sureA").addClass("answers-class");$("#sureB").addClass("answers-class");
  $("#sureC").addClass("answers-class");$("#hesaplama-result").show();}
  
  function hesaplaDereceyeGore2016(calisan_sayisi, derece, tip) {
   if(tip == "uzman") {
    
    if(derece == "A") {
     kisi_basi = 40;
     tam_zamanli = calisan_sayisi / 250;
     artan = calisan_sayisi % 250;
    }
    else if(derece == "B") {
     kisi_basi = 20;
     tam_zamanli = calisan_sayisi / 500;
     artan = calisan_sayisi % 500;
    }else if(derece == "C") {
     kisi_basi = 10;
     tam_zamanli = calisan_sayisi / 1000;
     artan = calisan_sayisi % 1000;
    }
    tam_zamanli = Math.floor(tam_zamanli);
    
    returnText = "";
    
    tam_var = false;
    if(tam_zamanli > 0) {
     returnText = tam_zamanli + " Tam Zamanlı";
     tam_var = true;
    }
    
    if(artan > 0) {
     if(tam_var) {
      returnText += " + ";
     }
     returnText += Math.ceil((kisi_basi*artan)/60) + " Saat / Ay";
    }
    
    return returnText;
    
   } 
   else if (tip == "hekim") {
    if(derece == "A") {
     kisi_basi = 15;
     tam_zamanli = calisan_sayisi / 750;
     artan = calisan_sayisi % 750;
    }
    else if(derece == "B") {
     kisi_basi = 10;
     tam_zamanli = calisan_sayisi / 1000;
     artan = calisan_sayisi % 1000;
    }
    else if(derece == "C") {
     kisi_basi = 5;
     tam_zamanli = calisan_sayisi / 2000;
     artan = calisan_sayisi % 2000;
    }
    
    tam_zamanli = Math.floor(tam_zamanli);
    
    returnText = "";
    
    tam_var = false;
    if(tam_zamanli > 0) {
     returnText = tam_zamanli + " Tam Zamanlı";
     tam_var = true;
    }
    
    
    if(artan > 0) {
     if(tam_var) {
      returnText += " + ";
     }
     returnText += Math.ceil((kisi_basi*artan)/60) + " Saat / Ay";
    }
    
    return returnText;
   }
   else if (tip == "saglikpersoneli") {
    if(derece == "A") {
     if(calisan_sayisi >= 10 && calisan_sayisi <= 49) {
      return Math.ceil((10*calisan_sayisi)/60) + " Saat / AY";
     }
     else if(calisan_sayisi >= 50 && calisan_sayisi <= 249) {
      return Math.ceil((15*calisan_sayisi)/60) + " Saat / AY";
     }
     else if(calisan_sayisi >= 250) {
      return Math.ceil((20*calisan_sayisi)/60) + " Saat / AY";
     }
    }else if(derece == "B" || derece == "C") {
     return "Zorunluluk Yok";
    }
   } 
  }
 </script>
 @endpush