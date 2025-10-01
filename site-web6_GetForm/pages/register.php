<form name="form1" method="post" action="index.php?page=registerProcess">
  <table width="90%" border="0" align="center" cellpadding="5" cellspacing="0">
    <tr>
      <td colspan="2" align="center"><h3>Form Đăng ký</h3></td>
    </tr>
    <tr>
      <td>Username:</td>
      <td><input type="text" name="txtUsername" size="40" required></td>
    </tr>
    <tr>
      <td>Password:</td>
      <td><input type="password" name="txtPassword" size="40" required></td>
    </tr>
    <tr>
      <td>Gender:</td>
      <td>
        <label><input type="radio" name="radGender" value="Male"> Male</label>
        <label><input type="radio" name="radGender" value="Female"> Female</label>
      </td>
    </tr>
    <tr>
      <td>Address:</td>
      <td>
        <select name="lstAddress">
          <option value="Ha Noi">Ha Noi</option>
          <option value="TP.HCM">TP. HCM</option>
          <option value="Hue">Hue</option>
          <option value="Da Nang">Da Nang</option>
        </select>
      </td>
    </tr>
    <tr>
      <td>Enable Programming Language:</td>
      <td>
        <label><input type="checkbox" name="chkLang[]" value="PHP"> PHP</label>
        <label><input type="checkbox" name="chkLang[]" value="Java"> Java</label>
        <label><input type="checkbox" name="chkLang[]" value="C++"> C++</label>
      </td>
    </tr>
    <tr>
      <td>Skill:</td>
      <td>
        <label><input type="radio" name="radSkill" value="Normal"> Normal</label><br>
        <label><input type="radio" name="radSkill" value="Good"> Good</label><br>
        <label><input type="radio" name="radSkill" value="Very Good"> Very Good</label><br>
        <label><input type="radio" name="radSkill" value="Excellent"> Excellent</label>
      </td>
    </tr>
    <tr>
      <td>Note:</td>
      <td>
        <textarea name="taNote" cols="40" rows="3"></textarea>
      </td>
    </tr>
    <tr>
      <td>Marriage Status:</td>
      <td>
        <label><input type="checkbox" name="chkMariageStatus" value="Da ket hon"> Đã kết hôn</label>
      </td>
    </tr>
    <tr>
      <td align="right"><input type="reset" value="Reset"></td>
      <td><input type="submit" name="btnRegister" value="Register"></td>
    </tr>
  </table>
</form>
