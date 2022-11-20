<?php
require('header_&_footer/header.php');
?>
<div class="container">
    <div class="row">
        <div class="container contact-form">
            <div class="contact-image">
                <img src="https://image.ibb.co/kUagtU/rocket_contact.png" alt="rocket_contact" />
            </div>
            <form method="post">
                <h3>Envoyez votre message</h3>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="txtName" class="form-control" placeholder="Nom et prénom" value="" />
                        </div>
                        <div class="form-group my-3">
                            <input type="text" name="txtEmail" class="form-control" placeholder="E-mail" value="" />
                        </div>
                        <div class="form-group gy-3">
                            <input type="text" name="txtPhone" class="form-control" placeholder="Entrez le resultat de 5 x 5 =" value="" />
                        </div>
                    </div>
                    <div class="col-md-6 mt-3">
                        <div class="form-group">
                            <textarea name="txtMsg" class="form-control" placeholder="Écrire votre message..." style="width: 100%; height: 150px;"></textarea>
                        </div>
                        <div class="form-group my-2 text-center">
                            <input type="submit" name="btnSubmit" class="btnContact" value="Envoyer" />
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
require('header_&_footer/footer.php');
?>