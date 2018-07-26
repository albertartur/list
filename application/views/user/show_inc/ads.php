<div class="container content-sm user-my">  
  
<?php if(count($check)==0){ ?>

   <h4>Այս պահին Դուք չունեք գործող հայտարարություններ:</h4>
   <a class="btn-a" href="">Ավելացնել հայտարարություն</a>

<?php  }   ?>



<?php
     foreach ($check as $key=>$value) 
     {
        if(count($value['us_id'])>0)
   {
?>

    <div id="user-info">
  

      <div class="row">
        <div class="col-md-10"><a href="<?= base_url(); ?>"><?= $value['name']; ?></a></div>
        <div class="col-md-2 text-right">
           <img class="edit" id="<?= $value['id']; ?>" width="24px" src="<?= base_url('img/renew.png'); ?>">
           <img width="24px" src="<?= base_url('img/edit.png'); ?>">
           <img class="del"  id="<?= $value['id']; ?>" width="24px" src="<?= base_url('img/del.png'); ?>">
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <div data-toggle="modal" data-target="#top" class="col-md-4">
                  <img width="52px" src="<?= base_url('img/top.png'); ?>">
          </div>
          <div  data-toggle="modal" data-target="#free" class="col-md-4">
                  <img width="52px" src="<?= base_url('img/free.png'); ?>">
               </div>
        </div>
      </div>
    </div>  
    <?php }} ?> 
  </div>
</div>





<!-- Modal free-->
<div id="free" class="modal fade" role="dialog">
  <div class="modal-dialog ">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Դարձնել շտապ</h4>
      </div>
      <p>Հայտարարությունների ցանկում և որոնման արդյունքում Ձեր հայտարարութունը նշված կլինի Շտապ! նշանով:</p>
      <div class="border"></div>
      <div class="modal-body ">
        <ol>
          <li>"Շտապ!" նշանը պահպանվում է մինչև Ձեր հայտարարության ժամկետի սպառվելը:</li>
          <li>"Շտապ!" հայտարարությունները կայքի այցելուներից ստանում են ավելի շատ արձագանքներ:</li>
          <li>Իդեալական հնարավորություն է գրավել ավելի մեծ քանակով այցելուների ուշադրությունը Ձեր հայտարարության նկատմամբ:</li>
        </ol>
        <div class="border"></div>
        <div class="text-center">
          <p><a href="">Մանրամասներ >></a></p>          
        </div>



      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>



<!-- Modal Top-->
<div id="top" class="modal fade" role="dialog">
  <div class="modal-dialog ">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Տեղադրել Տոպ-ում
</h4>
      </div>
      <p>Հայտարարությունը կտեղադրվի "Տոպ Հայտարարություններ" -ի ցուցակում` համապատասխան բաժնի էջի սկզբնամասում:</p>
      <div class="border"></div>
      <div class="modal-body ">
        <ol>
          <li>Դիտողների քանակի զգալի ավելացում:</li>
          <li>Որոնման արդյունքում առաջնահերթ ցուցադրում:</li>
          <li>Մինչ ժամկետի սպառվելը` հայատարարության նշում դեղին գույնով:</li>
        </ol>
        <div class="border"></div>
        <div class="row">
          <div class="col-md-4">
            <img width="150px"  src="<?= base_url('img/po_cards.png'); ?>">
          </div>
          <div class="col-md-4">
            <img width="150px" src="<?= base_url('img/po_paypal.png'); ?>">
          </div>
          <div class="col-md-4">
            <img width="150px" src="<?= base_url('img/po_sms.png'); ?>">
          </div>
             
            <!-- payment_system  -->
          <div class="col-md-4">

            <form action="<?= base_url('UsersController/payment_system'); ?>" method="POST">

                  <script
                   src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                   data-key="pk_test_dHlf2yN1QsjmfW5aVCIR0hZq"
                   data-amount="10000"
                   data-name="Demo Site"
                   data-description="Example charge"
                   data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
                   data-locale="auto">
                 </script>

              </form>

          </div>
          <!-- payment_system  -->
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>