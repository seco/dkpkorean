// formStyle.js, produced by Philip Howard, GamingHeadlines.co.uk
// This JavaScript is open source and freely available to all those who wish to use it.
// A link back to GamingHeadlines.co.uk would be appreciated!

	function toggleCheckbox(cbId,cbKey,ffId)
	{
	if (cbKey==0||cbKey==32){
	var cbFF = document.getElementById(ffId);
	
		var cbFFValue = cbFF.checked;
		
		if(cbId.className.indexOf("checkboxchecked")<0)
			{
				var checkBoxType = cbId.className.replace("checkbox","");
				cbFF.checked=true;cbId.className="checkboxchecked"+checkBoxType;}
			else
			{
				var checkBoxType = cbId.className.replace("checkboxchecked","");
				cbFF.checked=false;cbId.className="checkbox"+checkBoxType;}
	return false;
		}
	}
	
	function InitialiseCheckboxes()
	{
		var inputFields = document.getElementsByTagName("span");
		var checkboxIndex = 0;
		for (var inputIndex=0;inputIndex<inputFields.length;inputIndex++)
			{
				if (inputFields[inputIndex].className=="cbstyled")
					{
						var styleType = "";
						if (inputFields[inputIndex].getAttribute("name")!=null){styleType=inputFields[inputIndex].getAttribute("name");}
						
						var inputCurrent = inputFields[inputIndex].getElementsByTagName("input").item(0);
						if(inputCurrent.getAttribute("type")=="checkbox")
						{
							inputCurrent.className = "inputhidden";
							inputCurrent.setAttribute("id","styledcheckbox"+checkboxIndex);
							
							if(navigator.appName.indexOf("Internet Explorer")>0)
							{
								//Internet Explorer
								var inputHTML = inputFields[inputIndex].innerHTML;
								var styledHTML = "<a"//href=\"#\""
								styledHTML+=" tabindex=\""+inputIndex+"\"";
								//styledHTML+=" name=\""+inputCurrent.getAttribute("name")+"\""
								
								if(inputCurrent.hasAttribute){if(inputCurrent.hasAttribute("title")){styledHTML+=" title=\""+inputCurrent.getAttribute("title")+"\"";}}
								
								if (inputCurrent.checked)
									{styledHTML+=" class=\"checkboxchecked"+styleType+"\""}
									else
									{styledHTML+=" class=\"checkbox"+styleType+"\""}
									
								styledHTML+=" onClick=\"toggleCheckbox(this,'','styledcheckbox"+checkboxIndex+"');return false;\""
								styledHTML+=" onKeyPress=\"return toggleCheckbox(this,event.keyCode,'styledcheckbox"+checkboxIndex+"');\""
								
								styledHTML+="></a>"
								
								inputFields[inputIndex].innerHTML = inputHTML+styledHTML;
								inputFields[inputIndex].className = "checkbox"+styleType;
							}
							else
							{
								var styledCheckbox = document.createElement("a"); 
								styledCheckbox.setAttribute("href","#");
								
								if(inputCurrent.hasAttribute){if(inputCurrent.hasAttribute("title")){styledCheckbox.setAttribute("title",inputCurrent.getAttribute("title"));}}
								
								styledCheckbox.setAttribute("onClick","toggleCheckbox(this,'','styledcheckbox"+checkboxIndex+"');return false;");
								styledCheckbox.setAttribute("onKeyPress","return toggleCheckbox(this,event.keyCode,'styledcheckbox"+checkboxIndex+"');");
								
								if (inputCurrent.checked)
									{styledCheckbox.className="checkboxchecked"+styleType;}
									else
									{styledCheckbox.className="checkbox"+styleType;}
								inputFields[inputIndex].appendChild(styledCheckbox);
							}
							
							checkboxIndex++;
						}
					}
			}	
	}
	
	function toggleRadiobox(rbObj,rbKey,rbGroup,rbId)
	{
	if (rbKey==0||rbKey==32){
	var inputFields = document.getElementsByTagName("a");
		for (var inputIndex=0;inputIndex<inputFields.length;inputIndex++)
			{
				if (inputFields[inputIndex].getAttribute("name")==rbGroup){
					
					if(inputFields[inputIndex].className.indexOf("radioboxchecked")<0)
									{var RadioBoxType = inputFields[inputIndex].className.replace("radiobox","");}
									else
									{var RadioBoxType = inputFields[inputIndex].className.replace("radioboxchecked","");}
									
					inputFields[inputIndex].className="radiobox"+RadioBoxType;
					}
			}
	var inputFields = document.getElementsByTagName("input");
		for (var inputIndex=0;inputIndex<inputFields.length;inputIndex++)
			{
				if (inputFields[inputIndex].getAttribute("name")==rbGroup)
					{
						if (inputFields[inputIndex].getAttribute("id")==rbId)
							{
								if(rbObj.className.indexOf("radioboxchecked")<0)
									{var RadioBoxType = rbObj.className.replace("radiobox","");}
									else
									{var RadioBoxType = rbObj.className.replace("radioboxchecked","");}

								inputFields[inputIndex].checked = true;rbObj.className="radioboxchecked"+RadioBoxType;}
							else
							{inputFields[inputIndex].checked = false;}
					}
			}
	return false;
	}
	}
	
	function InitialiseRadioboxes()
	{
		var inputFields = document.getElementsByTagName("span");
		var radioboxIndex = 0;
		
		for (var inputIndex=0;inputIndex<inputFields.length;inputIndex++)
			{
				if (inputFields[inputIndex].className=="rbstyled")
					{
						var styleType = "";
						if (inputFields[inputIndex].getAttribute("name")!=null){styleType=inputFields[inputIndex].getAttribute("name");}
						
						var inputCurrent = inputFields[inputIndex].getElementsByTagName("input").item(0);
						if(inputCurrent.getAttribute("type")=="radio")
						{
							//inputCurrent.setAttribute("class","inputhidden");
							inputCurrent.className = "inputhidden";
							inputCurrent.setAttribute("id","styledradiobox"+radioboxIndex);
							
							if(navigator.appName.indexOf("Internet Explorer")>0)
							{
								//Internet Explorer
								var inputHTML = inputFields[inputIndex].innerHTML;
								var styledHTML = "<a"//href=\"#\""
								styledHTML+=" tabindex=\"1"+inputIndex+"\"";
								
								styledHTML+=" name=\""+inputCurrent.getAttribute("name")+"\""
								
								if(inputCurrent.hasAttribute){if(inputCurrent.hasAttribute("title")){styledHTML+=" title=\""+inputCurrent.getAttribute("title")+"\"";}}
								
								if (inputCurrent.checked)
									{styledHTML+=" class=\"radioboxchecked"+styleType+"\""}
									else
									{styledHTML+=" class=\"radiobox"+styleType+"\""}
									
								styledHTML+=" onClick=\"toggleRadiobox(this,'','"+inputCurrent.getAttribute("name")+"','styledradiobox"+radioboxIndex+"');return false;\""
								styledHTML+=" onKeyPress=\"return toggleRadiobox(this,event.keyCode,'"+inputCurrent.getAttribute("name")+"','styledradiobox"+radioboxIndex+"');\""
								
								styledHTML+="></a>"
								
								inputFields[inputIndex].innerHTML = inputHTML+styledHTML;
								inputFields[inputIndex].className = "radiobox"+styleType;
							}
							else
							{
								//Firefox, Opera, Netscape
								var styledRadiobox = document.createElement("a"); 
								styledRadiobox.setAttribute("href","#");
								styledRadiobox.setAttribute("name",inputCurrent.getAttribute("name"));
								
								if(inputCurrent.hasAttribute){if(inputCurrent.hasAttribute("title")){styledRadiobox.setAttribute("title",inputCurrent.getAttribute("title"));}}
								
								styledRadiobox.setAttribute("onClick","toggleRadiobox(this,'','"+inputCurrent.getAttribute("name")+"','styledradiobox"+radioboxIndex+"');return false;");
								styledRadiobox.setAttribute("onKeyPress","return toggleRadiobox(this,event.keyCode,'"+inputCurrent.getAttribute("name")+"','styledradiobox"+radioboxIndex+"');");
								
								if (inputCurrent.checked)
									{styledRadiobox.className="radioboxchecked"+styleType;}
									else
									{styledRadiobox.className="radiobox"+styleType;}
								
								inputFields[inputIndex].appendChild(styledRadiobox);
							}
							
							radioboxIndex++;
						}
					}
			}	
	}
	
	function checkImages() {
	  if (document.getElementById) {
		var x = document.getElementById('formStyleTestImage').offsetWidth;
		if (x == '1'||x == '7') {
			document.getElementById('formStyleTestImage').style.display='none';
			return true;
		}else{
			return false;
		}
	  }
	}
	
	function preloadImages()
		{
		img1 = new Image();img1.src = "templates/m9wotlk/images/CheckboxUnchecked.gif";
		img1 = new Image();img1.src = "templates/m9wotlk/images/CheckboxChecked.gif";
		
		img2 = new Image();img1.src = "templates/m9wotlk/images/RadioboxUnchecked.gif";
		img2 = new Image();img1.src = "templates/m9wotlk/images/RadioboxChecked.gif";
		}
	
	function Initialise()
		{
			if(checkImages()){preloadImages();InitialiseCheckboxes();InitialiseRadioboxes();}
		}
		
	window.onload = Initialise;