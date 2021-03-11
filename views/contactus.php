<?php
require_once '../Model/Contact.php';
require_once '../Model/Database.php';

require("./partials/header.php");
insertHeader();

$subjects = ['==Please Select==' =>'select', 'About this product' => 'product', 'About customer service' => 'service', 'About Media' => 'media', 'Others' => 'others'];

$count = 0;
   
    if(isset($_POST['submit'])){
        
        $email = $_POST['email'];
        
        if($_POST['name'] == "" ){
            $nameError =  "Please input your name";
            $count++;
        }

        
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailError =  "Please input your email address";
            $count++;
        }
        

        if($_POST['subjects'] == "select") {
           
            $selectError = "Please choose your topic";
            $count++;
        } 

        if ($_POST['message'] == '') {
            $messageError = "Please input message";
            $count++;
        }

        if($count == 0){

            try {
                $db = Database::getDb();
    
                $c = new Contact();
                $count =  $c->addContactInfoPublic($_POST['name'], $_POST['email'], $_POST['phone'], $_POST['subjects'], $_POST['message'], $db);

                if($count){
                    $msg = "Thank you for your email. We will contact you shortly!";
                }else{
                    $msg = "Error occured. Please send email us again.";
                }

            
            } catch (\Exception $e) {
                echo $e;
            }   
        }

    }


?>

<!--Main Start Here-->

<main class="container container-login  my-5">
    <div class="row">
        <h2>We are here for you</h2>
        <p class="lead ">Get quick answers from FAQ or contact us</p> 

        <div class="my-5">

            <div><?= isset($msg) ? $msg : ''; ?></div>
            <form id="loginForm" name="form_login" method="POST" action="">
                <div class="my-3">
                    
                    <div class="form-group">
                    <div class="label"><label class="col-form-label" for="name">Name *</label> <?= isset($nameError) ? $nameError : ''; ?></div>
                        <!-- value="<?php echo $_POST['name']; ?>" -->
                        <input class="form-control" type="text" name="name" id="name" value="<?php echo $_POST['name']; ?>">
                    </div>
                </div>

                <div class="my-3">
                    
                    <div class="form-group">
                    <div class="label"><label class="col-form-label" for="email">Email *</label> <?= isset($emailError) ? $emailError : ''; ?></div>
                        <input class="form-control" type="email" name="email" id="email" value="<?php echo $_POST['email']; ?>">
                    </div>
                </div>

                <div class="my-3">
                    
                    <div class="form-group">
                        <div class="label"><label class="col-form-label" for="phone">Phone Number - if you wish to talk with us</label> <?= isset($phoneError) ? $phoneError : ''; ?></div>
                        <!-- value="<?php echo $_POST['phone']; ?>" -->
                        <input class="form-control" type="text" name="phone" id="phone" value="<?php echo $_POST['phone']; ?>">
                    </div>
                </div>

                <div class="my-3">
                    
                    <div class="form-group">
                        <div class="label"><label class="col-form-label" for="subjects">Please select the topic *</label> <?= isset($selectError) ? $selectError : ''; ?></div>
                        <!-- value="<?php echo $_POST['subjects']; ?>" -->
                        <select class="form-control" name= "subjects" id="subject">
                        <?php 
                            foreach ($subjects as $key => $value){
                        ?>
                            <option value="<?= $value ?>"<?= $_POST['subjects'] == $value ? 'selected' : ''; ?>><?php echo $key ?></option>
                        <?php
                            }
                        ?>
                        </select>
                    </div>
                </div>

                <div class="my-3">
                    
                    <div class="form-group">
                        <div class="label"><label class="col-form-label" for="message">Tell us how we can help *</label> <?= isset($messageError) ? $messageError : ''; ?></div>
                        <textarea class="form-control" name="message" id="message" rows="6"><?php echo htmlspecialchars($_POST['message']);?></textarea>
                    </div>
                </div>

                <div class="my-3">
                    <div class="margin_top">
                        <input type="submit" class="btn btn-primary" name="submit" value="Submit">    
                    </div>
                </div>
            </form>
        </div>
    </div>
</main>




<?php

require("./partials/footer.php");
insertFooter();

?>