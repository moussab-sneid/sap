<?php
session_start();
error_reporting(0);
include('general/config.php');
if(isset($_POST['submit']))
{

$n=$_POST['nom'];
$em=$_POST['email']; 
$descr=$_POST['message'];


$sql="INSERT INTO  messages (nom_expediteur,email_expediteur,contenu) VALUES(:n,:em,:descr)";
$query = $dbh->prepare($sql);
$query->bindParam(':n',$n,PDO::PARAM_STR);
$query->bindParam(':em',$em,PDO::PARAM_STR);
$query->bindParam(':descr',$descr,PDO::PARAM_STR);

$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)

{
  $mg = "envoiyer Message";
  // echo "<script>alert('Message envoiyer');</script>";
}
else 
{
    $err = "Erreur , Essayer Encore";
  // echo "<script>alert('Invalid Details');</script>";
}

}

?>

<style type="text/css">

        .errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #dd3d36;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);

}
 .successWrap {
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #4caf50;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}

  
</style>
  <section class="w3l-about-breadcrumb text-center">
    <div class="breadcrumb-bg breadcrumb-bg-about py-sm-5 py-4">
      <div class="container">
        <h2 class="title">Contact</h2>
      
      </div>
    </div>
  </section>

    <!--/contact-->
   <section class="w3l-contact-11 py-5">
    <div class="contacts-main py-lg-5 py-md-4">
      <div class="title-content text-center">
     
        <h3 class="hny-title">Contactez Nous</h3>
        
         <?php if($err){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($err); ?> </div><?php } 
        else if($mg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($mg); ?> </div><?php }?>
  <p style="width: 350px;">
    </div>
      <div class="form-41-mian section-gap mt-5">
        <div class="container">
          <div class="d-grid align-form-map">
            <div class="form-inner-cont">
              <form  name="contact.php" method="post" class="signin-form">

      
                <div class="form-input">
                  <label for="w3lName">Nom *</label>
                  <input type="text" name="nom" id="" placeholder="Votre Nom" />
                </div>
                <div class="form-input">
                  <label for="w3lSender">Email *</label>
                  <input type="email" name="email" id="" placeholder="" required="" />
                </div>
                <div class="form-input">
                  <label for="Message">Message *</label>
                  <textarea placeholder="" name="message" id="" required=""></textarea>
                </div>
                <div class="form-submit text-right">
                    <button type="submit" name="submit" class="btn btn-style btn-primary">Envoiyer votre Message</button>
                  </div>
              </form>
            </div>
            <div class="map">
             <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7717.909473115621!2d-17.461197777489126!3d14.715151151106602!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xec1129712efe6d1%3A0x4409fd65cdfb9760!2sSAPCO%20SENEGAL%20SA!5e0!3m2!1sfr!2ssn!4v1609822041783!5m2!1sfr!2ssn" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
          </div>
        </div>
      </div>
      <div class="contant11-top-bg mt-lg-5 mt-4">
        <div class="container">
          <div class="d-grid contact pt-lg-4">
            <div class="contact-info-left d-grid text-left">
              <div class="contact-info mt-4">
                <h4>Dakar </h4>
                <p class="mb-3"><label>Address: </label> Dakar </p>
                <p class="mb-3"><label>Email : </label> <a href="mailto:homish@email.com" class="email">dakar@email.com</a></p>
                <p class="mb-3"><label>Telephone : </label> <a href="tel:+1-2345-678-11">+221-77-678-11-32</a></p>
                 <p class="mb-3"><label>Hours : </label> ouvert: 8hGMT – 17hGMT</p>
              </div>
              <div class="contact-info mt-4">
                <h4>saint louis</h4>
                <p class="mb-3"><label>Address: </label> Saint-louis </p>
                <p class="mb-3"><label>Email : </label> <a href="mailto:homish@email.com" class="email">saintlouis@email.com</a></p>
                <p class="mb-3"><label>Telephne : </label> <a href="tel:+1-2345-678-11">+221-77-678-11-32</a></p>
                 <p class="mb-3"><label>heures : </label> ouvert: 8h – 17h</p>
              </div>
              <div class="contact-info mt-4">
                <h4>mbour </h4>
                <p class="mb-3"><label>Address: </label> mbour</p>
                <p class="mb-3"><label>Email : </label> <a href="mailto:homish@email.com" class="email">mbour@email.com</a></p>
                <p class="mb-3"><label>Telephone : </label> <a href="tel:+1-2345-678-11">+221-77-678-11-44</a></p>
                 <p class="mb-3"><label>heurs : </label> ouvert: 8hGMT – 17hGMT</p>
              </div>
            </div>
          </div>
        </div>
      </div>
  </section>
  <!--//contact-->
   