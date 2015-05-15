function loadXMLString(txt) 
{
if (window.DOMParser)
  {
  var parser = new DOMParser();
  xmlDoc = parser.parseFromString(txt,"text/xml");
  }
else // code for IE
  {
    xmlDoc=new ActiveXObject("Microsoft.XMLDOM");
    xmlDoc.async=false;
    xmlDoc.loadXML(txt); 
  }
  return xmlDoc;
}

function getValueOf(name, txt, xmlDoc){
  x=xmlDoc.getElementsByTagName(name);
  
  for (i=0;i<x.length;i++)
  {
    return x[i].getAttribute(txt);
  }
}

function getElementByIndex(name, txt, index, xmlDoc){
  x=xmlDoc.getElementsByTagName(name);
  return x[index];
}

function getElements(name, xmlDoc){
  x=xmlDoc.getElementsByTagName(name);
  alert("länge: " + toString(x.Length));
  return x;
}