<SCRIPT LANGUAGE="JavaScript">
<!-- Dynamic Version by: Nannette Thacker -->
<!-- http://www.shiningstar.net -->
<!-- Original by :  Ronnie T. Moore -->
<!-- Web Site:  The JavaScript Source -->
<!-- Use one function for multiple text areas on a page -->
<!-- Limit the number of characters per textarea -->
<!-- Begin
function textCounter(field,cntfield,maxlimit) {
if (field.value.length > maxlimit) // if too long...trim it!
field.value = field.value.substring(0, maxlimit);
// otherwise, update 'characters left' counter
else
cntfield.value = maxlimit - field.value.length;
}
//  End -->
</script>
<style type="text/css">
.body {
	font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
	font-size: 12px;	
}
</style>



<table class ="body" width="400" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
  <tr>
    <form action="send.php" method="post" name="form1" id="form1">
      <td width="341"><table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
        <tr>
          <td colspan="3" class ="body">SMS sending tool, remove the 0 from the front of the number before sending! Example "77712345"</td>
        </tr>
        <tr>
          <td width="116" class ="body">Send SMS to:</td>
          <td width="6">&nbsp;</td>
          <td width="254"><input name="number" type="text" id="number" /></td>
        </tr>
        <tr>
          <td height="52" valign="top" class ="body">Message to send</td>
          <td valign="top">:</td>
          <td><textarea name="mess" cols="30" rows="3" id="mess" wrap="physical" onKeyDown="textCounter(document.form1.mess,document.form1.remLen1,125)"
onKeyUp="textCounter(document.form1.messa,document.form1.remLen1,125)"></textarea> <br/>
            Remaining: 
            <input readonly type="text" name="remLen1" size="3" maxlength="3" value="125"></td>

        </tr>
        
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td><input type="submit" name="Submit" value="Send" /> 
          <div class="body">
            We will add a short message to the end of your tweet to support our work.<br />
<strong>&quot;Sent4Free: <a href="http://fmly.me/goGIbt">http://fmly.me/goGIbt</a>&quot;</strong>
</div></td>
        </tr>
      </table></td>
    </form>
  </tr>
</table>
