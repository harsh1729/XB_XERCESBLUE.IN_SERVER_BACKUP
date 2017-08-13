<?php
// Merchant key here as provided by Payu
$MERCHANT_KEY = "36z0lv";


  $txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
 $hash =''; 

?>
<html>
  <head>

  </head>

  <body>
    <h2>PayU Form</h2>
    <br/>
   
    <?php
    	//echo "action parameter: ".$action."<br>";
    	//echo "merchant key: ".$MERCHANT_KEY."<br>";
    	//echo "merchant salt: ".$SALT;
    ?>
  
   <form action="next_level.php" method="post" name="payuForm">
      <input type="hidden" name="key" value="<?php echo $MERCHANT_KEY ?>" />
      <input type="hidden" name="hash" value="<?php echo $hash ?>"/>
      <input type="hidden" name="txnid" value="<?php echo $txnid ?>" />
      <table>
        <tr>
          <td><b>Mandatory Parameters</b></td>
        </tr>
        <tr>
          <td>Amount: </td>
          <td><input name="amount" value="" /></td>
          <td>First Name: </td>
          <td><input name="firstname" id="firstname" value="" /></td>
        </tr>
        <tr>
          <td>Email: </td>
          <td><input name="email" id="email" value="" /></td>
          <td>Phone: </td>
          <td><input name="phone" value="" /></td>
        </tr>
        <tr>
          <td>Product Info: </td>
          <td colspan="3"><textarea name="productinfo"></textarea></td>
        </tr>
        <tr>
          <td>Success URI: </td>
          <td colspan="3"><input name="surl" value="" size="64" /></td>
        </tr>
        <tr>
          <td>Failure URI: </td>
          <td colspan="3"><input name="furl" value="" size="64" /></td>
        </tr>

        <tr>
          <td colspan="3"><input type="hidden" name="service_provider" value="payu_paisa" size="64" /></td>
        </tr>

       
        <tr>
        
            <td colspan="4"><input type="submit" value="Submit" /></td>
         
        </tr>
      </table>
    </form>
  </body>
</html>