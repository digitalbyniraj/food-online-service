
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<head >
</head>
<body>
<h1>PayUMoney Payment Request Form </h1>
<form action="myServlet"  name="form_process.php" method=POST >
<input type="hidden" name="key"value="UFu3ed" />
<input type="hidden" name="hash_string" value="" />
<input type="hidden" name="hash" />
<input type="hidden" name="txnid"/>
<table>
<tr>
<td><b>Mandatory Parameters</b></td>
</tr>
<tr>
<td>Amount: </td>
<td><input name="amount"  /></td>
<td>First Name: </td>
<td><input name="firstname" id="firstname"  /></td>
</tr>
<tr>
<td>Email: </td>
<td><input name="email" id="email"   /></td>
<td>Phone: </td>
<td><input name="phone"  /></td>
</tr>
<tr>
<td>Product Info: </td>
<td colspan="3"><textarea name="productinfo" >  </textarea></td>
</tr>
<tr>
<td>Success URI: </td>
<td colspan="3"><input name="surl"  size="64"  /></td>
</tr>
<tr>
<td>Failure URI: </td>
<td colspan="3"><input name="furl"  size="64" /></td>
</tr>
<tr>
<td colspan="3"><input type="hidden" name="service_provider" value="payu_paisa" /></td>
</tr>
<tr>

<td colspan="4"><input type="submit" value="Submit"  /></td>
</tr>
</table>
</form>
</body>
</html>

