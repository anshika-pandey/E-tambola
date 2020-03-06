<html> 

<head> 
	<script> 
		//set minutes 
		var mins = 1; 

		//calculate the seconds 
		var secs = mins * 6; 

		//countdown function is evoked when page is loaded 
		function countdown() { 
			setTimeout('Decrement()', 60); 
		} 

		//Decrement function decrement the value. 
		function Decrement() { 
			if (document.getElementById) { 
				minutes = document.getElementById("minutes"); 
				seconds = document.getElementById("seconds"); 

				//if less than a minute remaining 
				//Display only seconds value. 
				if (seconds < 59) { 
					seconds.value = secs; 
				} 

				//Display both minutes and seconds 
				//getminutes and getseconds is used to 
				//get minutes and seconds 
				else { 
					minutes.value = getminutes(); 
					seconds.value = getseconds(); 
				} 
				//when less than a minute remaining 
				//colour of the minutes and seconds 
				//changes to red 
				if (mins < 1) { 
					minutes.style.color = "red"; 
					seconds.style.color = "red"; 
				} 
				//if seconds becomes zero, 
				//then page alert time up 
				if (mins < 0) { 
                    
                     var flag=true;
                     if(flag==true)
                     window.location.href="test.php";
                    minutes.value = 0; 
					seconds.value = 0; 
				} 
				//if seconds > 0 then seconds is decremented 
				else { 
					secs--; 
					setTimeout('Decrement()', 1000); 
				} 
			} 
		} 

		function getminutes() { 
			//minutes is seconds divided by 60, rounded down 
			mins = Math.floor(secs / 60); 
			return mins; 
		} 

		function getseconds() { 
			//take minutes remaining (as seconds) away 
			//from total seconds remaining 
			return secs - Math.round(mins * 60); 
		} 
	</script> 
</head> 
<!-- onload function is evoke when page is load --> 
<!--countdown function is called when page is loaded --> 

<body onload="countdown();"> 
	<div > 
		Game will start in ::
		<input id="minutes" type="text" style="width: 10px; 
			border: none; font-size: 16px; 
			font-weight: bold; color: black;"><font size="5"> : 
						</font> 
		<input id="seconds" type="text" style="width: 20px; 
						border: none; font-size: 16px; 
						font-weight: bold; color: black;"> 
	</div> 
</body> 

</html> 
