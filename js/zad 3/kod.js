function oblicz() {
	
var A = document.getElementById("parA").value;
var B = document.getElementById("parB").value;
var C = document.getElementById("parC").value;
var a = parseInt(A);
var b = parseInt(B);
var c = parseInt(C);
var str="";
if (a==0) {
	str+="To nie jest równanie kwadratowe!";
	} else {
		delta = (b*b-4*a*c);
		if (delta < 0) {
			str+="Brak rozwiązania w zbiorze R";
		} else if (delta==0) {
			str+="Jedno rozwiązanie : x=";
			x=-b/2*a;
			str+=x;
		} else {
			x1=(-b+Math.sqrt(delta))/2*a;
			x2=(-b-Math.sqrt(delta))/2*a;
			str+="Dwa rozwiązania :x1="+x1+" oraz x2="+x2;
		}
	}
	var Wynik = document.getElementById('Wynik');
	Wynik.innerHTML = str;
}