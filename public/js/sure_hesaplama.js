function sureHesapla2016(tip) {var calisan_sayisi = $("#calisan_sayisi").val();if (calisan_sayisi.length<1) {alert("Lütfen çalışan sayınızı girin.");return false;}else if (!calisan_sayisi.match(/^[0-9]+$/)) {alert("Lütfen çalışan sayısı alanına geçerli bir rakam girin.");return false;}$("#sureA").html(hesaplaDereceyeGore2016(calisan_sayisi, "A", tip));$("#sureB").html(hesaplaDereceyeGore2016(calisan_sayisi, "B", tip));$("#sureC").html(hesaplaDereceyeGore2016(calisan_sayisi, "C", tip));$("#sureA").addClass("answers-class");$("#sureB").addClass("answers-class");$("#sureC").addClass("answers-class");$("#hesaplama-result").show();}

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