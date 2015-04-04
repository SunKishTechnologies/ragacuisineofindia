function isEmpty(s)
{
  return ((s == null) || (s.length == 0))
}
function isDigit (c)
{
  return ((c >= "0") && (c <= "9"))
}
function isInteger (s)
{
  var i;
  if (isEmpty(s))
  if (isInteger.arguments.length == 1) return 0;
  else return (isInteger.arguments[1] == true);

  for (i = 0; i < s.length; i++)
  {
	 var c = s.charAt(i);

	 if (!isDigit(c)) return false;
  }
  return true;
}

