	document.getElementById('min').addEventListener('input', minChange);
	document.getElementById('max').addEventListener('input', maxChange);
	var min=document.getElementById('min');
	var max=document.getElementById('max');	
	function limit() {
		mn=parseInt(min.value);
		mx=parseInt(max.value);	
		return (mx>=minAr && mx<=maxAr && mn>=minAr && mn<=maxAr);
	}
	function check_data() {
		if (limit()) return true;
		else
		{
			alert("Nem megfelelő árkategória! Lehetőség: "+minAr+" - "+maxAr+" Ft");
			min.value=minAr;
			max.value=maxAr;
			return false;
		}
	}
	function minMax(){
		return limit() && parseInt(max.value)<parseInt(min.value);
	}
	function minChange (){
		if (minMax()) max.value=min.value;
	}
	function maxChange() {
		if (minMax()) min.value=max.value;
	}
