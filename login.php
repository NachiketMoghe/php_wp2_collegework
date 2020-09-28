<form action="index1.php" method="post" name="Login_Form">
  <table width="400" border="0" align="center" cellpadding="5" cellspacing="1" class="Table">
    <?php if(isset($msg)){?>
    <tr>
      <td colspan="2" align="center" valign="top"><?php echo $msg;?></td>
    </tr>
    <?php } ?>
    <tr>
      <td colspan="2" align="center" valign="top"><h3>SIGN-IN form</h3></td>
    </tr>
    <tr>
      <td align="center" valign="top">Email ID: <br><br>
      <input name="Username" type="text" class="Input"></td>
    </tr>
    <tr>
      <td align="center">Password: <br><br><input name="Password" type="password" class="Input"></td><br><br>
    </tr>
    <tr>
      <td align="center"><input name="Submit" type="submit" value="Login" class="Button3"></td>
    </tr>
    <tr>
      <td align="center"><a href="Forgot password">Forgot password?</a><br><br>
 <a href="">New user? Sign up here</a></td>
    </tr>
    <br>  
 
            
  </table>
</form>

