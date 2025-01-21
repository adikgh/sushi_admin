<? include "config/core.php";

   // 
   // if ($user_id) header('location: /cashbox');
   // header('location: /cashbox/');
   header('location: /dev.php');


	// site setting
	$menu_name = 'main';
	$site_set['menu'] = false;
	$css = ['sign'];
	// $js = [''];
?>
<? include "block/header.php"; ?>

	<div class="">

      <div class="sbl2">

         <div class="sbl2_ln">
            <div class="sbl2_lns"></div>
         </div>

         <div class="sign">
            <div class="bl_c">
               <div class="usign_c">

                  <div class="usign_head">
                     <h5 class="usign_h">Менеджерді таңдаңыз</h5>
                  </div>
                  <div class="usign_cn">

                     <div class="sbl2_lro">
                        <? $user_mn = db::query("select * from user_staff where positions_id  in (1, 2, 3, 4)"); ?>
                        <? while ($user_mnd = mysqli_fetch_assoc($user_mn)): ?>
                           <? $user_ds = fun::user($user_mnd['user_id']); ?>
                           <div class="sbl2_lroi loginq_clc user_id" data-id="<?=$user_ds['id']?>">
                              <div class="lazy_img" data-src="/assets/uploads/users/<?=($user_ds['img']?$user_ds['img']:'Sample_User_Icon.png')?>"></div>
                              <p class=""><?=$user_ds['name']?> <?=$user_ds['surname']?></p>
                           </div>
                        <? endwhile ?>
                     </div>
                  
                  </div>

               </div>
            </div>
         </div>
      </div>

	</div>

<? include "block/footer.php"; ?>

	<!--  -->
	<div class="pop_bl pop_bl2 loginq_block">
		<div class="pop_bl_a loginq_back"></div>
		<div class="pop_bl_c">
			<div class="head_c">
				<h4>Код-ты енгізіңіз</h4>
				<div class="btn btn_dd loginq_back"><i class="fal fa-times"></i></div>
			</div>
			<div class="pop_bl_cl">
				<div class="form_c">

               <div class="form_im form_im_ps">
						<i class="far fa-lock form_icon"></i>
						<input type="phone" class="form_txt fr_code code" placeholder="Код" data-lenght="4" data-sel="0" data-eye="0" />
						<i class="far fa-eye-slash form_icon_pass"></i>
					</div>
               <div class="form_im">
						<button class="btn btn_sign">
                     <span>Кіру</span>
                     <i class="far fa-long-arrow-right"></i>
                  </button>
					</div>
               
               <!-- <div class="form_im loginq_form">
                  <input type="phone" class="form_txt fr_code1 loginq_number1" placeholder="0" data-number="1">
                  <input type="phone" class="form_txt fr_code1 loginq_number2" placeholder="0" data-number="2">
                  <input type="phone" class="form_txt fr_code1 loginq_number3" placeholder="0" data-number="3">
                  <input type="phone" class="form_txt fr_code1 loginq_number4" placeholder="0" data-number="4">
               </div> -->

				</div>
			</div>
		</div>
	</div>