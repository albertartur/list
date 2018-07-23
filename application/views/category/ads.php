

<?php 
  foreach ($all as $val) {
    $info = unserialize($val['info_array']);
    $name = $val['name'];
    $location = $val['location'];

    if (isset($info['photos'])) {     
        $images = $info['photos'];
    }

    $description =  $val['description'];
    $id = $val['id'];
    $data_of_put = $val['data_of_put'];
    $data_of_update = $val['data_of_update'];
    
    if (intval($val['sub_id']) < 103) {
        $currency = $info['currency'];
      	$type = $info['type'];
    	$price = $info['price'];
    }
    else{
    	$currency = '';
    	$type = '';
    	$price = '';
    }
  }
 ?>
<div id="content" class="container">
  <div class="container"> 
    <ol class="breadcrumb col-md-10">
      <li><a href="#">Home</a></li>
      <li><a href="#">Library</a></li>
      <li class="active">Data</li>
    </ol>
  </div>
  <div class="col-md-9" id="main_content_ads">
    <h2 id="title"><?= $name; ?></h2>
    <div>
      <span><?= $price.' '.$currency; ?> </span><span id="Exchange"><?= $type; ?> </span> <span class="glyphicon glyphicon-globe"><?= $location; ?></span>  
    </div>

         <?php 
         $images[0] = 'uploads/coloriage-de-loup-monstre-loup-coloriage-de-loup-mandala.jpg';
            if (!empty($images) && intval($val['sub_id']) < 127) {
             echo  "<div id='img_ads'>
                                  <img id='top_img' src=''> 
                                  <div class='text-center'>
                                    <img id='prev' src='".base_url('img/prev.png')."'>
                                    <img class='zoom_img'  data-toggle='modal' data-target='#zoom_img' src='".base_url('img/zoom.png')."'> 
                                     <img id='next' src='".base_url('img/next.png')."'>
                                  </div>
                                </div><div id='iiii'>";
                for ($i=0; $i < count($images); $i++) { 

                    echo "<img class='img_next' src='".base_url($images[$i])."'>";
                }
               echo  '</div>';
            }
        ?>
   <div class="row" id='info'>
         <table>
                <?php
                    echo '<tr>';
                    foreach ($info as $key => $value) {
                        if($key!='photos' && $key!='location' && $key!='name' && $key!='description' && $key!='price' && $key!='currency' && $key!='type'){
                            echo '<td>'.$key.'</td>';
                        }
                    }
                    echo '</tr><tr>';
                    foreach ($info as $key => $value) {
                        if($key!='photos' && $key!='location' && $key!='name' && $key!='description' && $key!='price' && $key!='currency' && $key!='type'){
                            echo '<td class="td_ads">'.$value.'</td>';
                        }
                    }
                    echo '</tr>';
                ?>
         </table>     
    </div>
            <div class="border"></div>
    <div class="txt-ad"><?= $description; ?></div>
    <span class="date_ads">Հայտարարության համարը: <?= $id; ?></span><span class="date_ads"> Ամսաթիվ: <?= $data_of_put; ?> </span><span class="date_ads"> Թարմացվել է:<?= $data_of_update; ?></span>

  </div>
  <div class="col-md-3 border-l" id="right_content_ads">
    <div class="text-center">
        <?php 
            if (empty($user['image'])) {
                $user_img = 'img/avatar.png';
            }
            else{
                $user_img = 'uploads/'.$user['image'];
            }
        ?>
      <img width="54px;" src="<?= base_url($user_img); ?>">
      <p><a href=""><?= $user['user_name']; ?></a></p>
      <button class="btn btn-primary"  data-toggle="modal" data-target="#mytel">Զանգահարել</button>
      <div class="border"></div>
      <button type="button" class="btn-a" data-toggle="modal" data-target="#mymsg">ՈՒղարկել նամակ</button>
        <div class="border"></div>
        <div class="row">
          <div data-toggle="modal" data-target="#top_mod" class="col-md-4">
            <img width="52px" src="<?= base_url('img/top.png'); ?>">
            <span text-right>Տոպ</span>
          </div>
          <div  data-toggle="modal" data-target="#home_mod" class="col-md-4">
            <img width="52px" src="<?= base_url('img/home.png'); ?>">
            <span>գլխավոր էջ</span>
          </div>
          <div  data-toggle="modal" data-target="#free_mod" class="col-md-4">
            <img width="52px" src="<?= base_url('img/free.png'); ?>">
            <span>Շտապ</span>
          </div>
        </div>
        <div class="border"></div>
        <div>
          <div>Նմանատիպ հայտարարություններ</div>
          <?php
            foreach ($rand as $v) {
                 if (intval($v['sub_id']) < 103) {
                     $info = unserialize($v['info_array']);
                     if (!empty($info['photos'][0])) {
                        $img = 'ob_img_ads';
                        $img_url = $info['photos'][0];
                    }
                     else{
                        $img = '';
                        $img_url = 'img/noimage.jpg';
                    }
                    echo "<div class = 'rand_list ".$info['type']."'>
                            <div class='img_list'>
                                <a href='".base_url('category/ads/'.$v['id'])."'><img class='".$img."' src='".base_url($img_url)."'></a>
                            </div>
                            <div class='name_list'><a href='".base_url('category/ads/'.$v['id'])."'> ".$v['name']."</a></div>
                                <div class='price'>".$info['price']."</div>
                            </div>";
                }
            }
          ?>
        </div>

    </div>
  </div>
</div>

<!-- Modal  Msg -->
<div id="mymsg" class="modal fade" role="dialog">
  <div class="modal-dialog ">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">ՈՒղարկել նամակ</h4>
      </div>
       <h3> <?= $user['user_name']; ?></h3>
      <img width="150px;" src="<?= base_url($user_img); ?>">
      <div class="border"></div>
      <div class="modal-body">
        <p>Ձեր հաղորդագրությունը</p>
        <textarea  name="" id="" cols="30" rows="10"></textarea>
        <div>
          
          <span>Անվտանգության կոդ</span>
          <input class="input-sm" type="text">
        </div>
        <div class="border"></div>
        <div class="text-center">
          <button class="btn-a">Ուղարկել</button>
          
        </div>



      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>


<!-- Modal Tel-->
<div id="mytel" class="modal fade" role="dialog">
  <div class="modal-dialog ">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Զանգահարել</h4>
      </div>
      <h3> <?= $user['user_name']; ?></h3>
      <img width="200px;" src="<?= base_url($user_img); ?>">
      <div class="border"></div>
      <div class="modal-body text-center">
        <?php
            $contact = unserialize($user['contact_information']);
                foreach ($contact as $k => $cont) {
                   echo "<div class='row text-center border'> <div class='col-md-6'><h4> $k</h4></div><div class='col-md-6'> <h4>$cont</h4></div></div>";
                }
         ?>

        <div class="text-center">
          <p>Խնդիրներ ունեք հայտարարության հետ կապված:
Տեղյակ պահեք մեզ:</p>         
        </div>



      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<!-- Modal Top-->
<div id="top_mod" class="modal fade" role="dialog">
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

<!-- Modal Home-->
<div id="home_mod" class="modal fade" role="dialog">
  <div class="modal-dialog ">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Տեղադրել գլխավոր էջի վրա

</h4>
      </div>
      <p>Հայտարարությունը կտեղադրվի կայքի գլխավոր էջի վրա` այլ հայտարարությունների հետ պարբերական կրկնության սկզբունքով:</p>
      <div class="border"></div>
      <div class="modal-body ">
        <ol>
          <li>Առավելագույն քանակությամբ դիտումներ` կայքի ամենաբարձր այցելություն ունեցող էջում:</li>
          <li>Առաջինը, ինչ կտեսնեն կայքի այցելուները, դա գլխավոր էջում տեղադրված Ձեր հայտարարությունն է:</li>
          <li>Հայտարարությունը առանձնացված կլինի դեղին գույնով մինչ ժամկետի սպառվելը:</li>
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

<!-- Modal free-->
<div id="free_mod" class="modal fade" role="dialog">
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
<!-- Modal zoom_img-->
<div id="zoom_img" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">name ads</h4>
      </div>
      <div class="modal-body">
        <img id="zoom_img_ads" src="">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>