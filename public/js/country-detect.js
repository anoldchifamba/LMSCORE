var pricing={"header":{"intro":{"mx":{"currency_code":"mxn","cur_symbol":"MXN","price":125},"my":{"currency_code":"myr","cur_symbol":"RM","price":395},"za":{"currency_code":"zar","cur_symbol":"ZAR","price":1995},"in":{"currency_code":"inr","cur_symbol":"₹","price":8000},"jp":{"currency_code":"jpy","cur_symbol":"JPY","price":15000},"au":{"currency_code":"aud","cur_symbol":"AUD $","price":95},"br":{"currency_code":"brl","cur_symbol":"R$","price":95},"ca":{"currency_code":"cad","cur_symbol":"CAD $","price":95},"ch":{"currency_code":"chf","cur_symbol":"CHF","price":95},"gb":{"currency_code":"gbp","cur_symbol":"£","price":95},"nz":{"currency_code":"nzd","cur_symbol":"NZD $","price":95},"de":{"currency_code":"eur","cur_symbol":"€","price":95},"es":{"currency_code":"eur","cur_symbol":"€","price":95},"est":{"currency_code":"eur","cur_symbol":"€","price":95},"eu":{"currency_code":"eur","cur_symbol":"€","price":95},"fr":{"currency_code":"eur","cur_symbol":"€","price":95},"nl":{"currency_code":"eur","cur_symbol":"€","price":95},"ie":{"currency_code":"eur","cur_symbol":"€","price":95},"it":{"currency_code":"eur","cur_symbol":"€","price":95},"hr":{"currency_code":"eur","cur_symbol":"€","price":95},"us":{"currency_code":"usd","cur_symbol":"$","price":95},"gh":{"currency_code":"usd","cur_symbol":"$","price":95},"ae":{"currency_code":"usd","cur_symbol":"$","price":95},"ng":{"currency_code":"usd","cur_symbol":"$","price":95},"default":{"currency_code":"usd","cur_symbol":"$","price":95}},"foundation":{"mx":{"currency_code":"mxn","cur_symbol":"MXN","price":7900},"my":{"currency_code":"myr","cur_symbol":"RM","price":1499},"za":{"currency_code":"zar","cur_symbol":"ZAR","price":5695},"in":{"currency_code":"inr","cur_symbol":"₹","price":25000},"jp":{"currency_code":"jpy","cur_symbol":"JPY","price":59000},"au":{"currency_code":"aud","cur_symbol":"AUD $","price":395},"br":{"currency_code":"brl","cur_symbol":"R$","price":395},"ca":{"currency_code":"cad","cur_symbol":"CAD $","price":395},"ch":{"currency_code":"chf","cur_symbol":"CHF","price":395},"gb":{"currency_code":"gbp","cur_symbol":"£","price":395},"nz":{"currency_code":"nzd","cur_symbol":"NZD $","price":395},"de":{"currency_code":"eur","cur_symbol":"€","price":395},"es":{"currency_code":"eur","cur_symbol":"€","price":395},"est":{"currency_code":"eur","cur_symbol":"€","price":395},"eu":{"currency_code":"eur","cur_symbol":"€","price":395},"fr":{"currency_code":"eur","cur_symbol":"€","price":395},"nl":{"currency_code":"eur","cur_symbol":"€","price":395},"ie":{"currency_code":"eur","cur_symbol":"€","price":395},"it":{"currency_code":"eur","cur_symbol":"€","price":395},"hr":{"currency_code":"eur","cur_symbol":"€","price":395},"us":{"currency_code":"usd","cur_symbol":"$","price":395},"gh":{"currency_code":"usd","cur_symbol":"$","price":395},"ae":{"currency_code":"usd","cur_symbol":"$","price":395},"ng":{"currency_code":"usd","cur_symbol":"$","price":395},"sk":{"currency_code":"eur","cur_symbol":"€","price":395},"default":{"currency_code":"usd","cur_symbol":"$","price":395}}}};
function createCookie(name, value, days) {
  var expires = new Date;
  expires.setFullYear(expires.getFullYear() + 2);
  document.cookie = name + "=" + value + ";domain=.shawacademy.com; path=/; expires=" + expires;
  document.cookie = name + "=" + value + ";domain=.liveonlineacademy.com; path=/; expires=" + expires;
}
function readCookie(name) {
  var nameEQ = name + "=";
  var ca = document.cookie.split(';');
  for (var i = 0; i < ca.length; i++) {
    var c = ca[i];
    while (c.charAt(0) == ' ') c = c.substring(1, c.length);
    if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
  }
  return null;
}

function detectCountry(){
	if (readCookie("loa_country_code")) {
		doInit();
	} else {
		$.get('http://ipinfo.io/geo/?token=e51cae4cd7ac58').always(function(resp) {
      console.log(resp);
			var countryCode = (resp && resp.country) ? resp.country : "us";
			createCookie("loa_country_code", countryCode.toLowerCase());
            doInit();
      });
	}   
}
function doInit(){
	if (window.initializePrices) {
	    $(function(){        
	      	window.initializePrices(readCookie("loa_country_code"));
	    });
	}
}
detectCountry();
function initializePrices(countryCode){
  var countryCode1="us";
  if(pricing.header.intro[countryCode]){
    countryCode1=countryCode;
  }
  var introPrice=pricing.header.intro[countryCode1].cur_symbol+ " "+pricing.header.intro[countryCode1].price;
  $(".intro-price").text(introPrice);
  var fullPrice=pricing.header.foundation[countryCode1].cur_symbol+ " "+pricing.header.foundation[countryCode1].price;
  $(".full-price").text(fullPrice);
}
