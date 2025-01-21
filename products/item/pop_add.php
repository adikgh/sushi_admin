   <!-- upd product -->
	<div class="pop_bl pop_bl2 pr_upd_block">
      <div class="pop_bl_a pr_upd_back"></div>
      <div class="pop_bl_c">
         <div class="head_c">
            <h4>Обновить вид товара</h4>
            <div class="btn btn_dd pr_upd_back"><i class="fal fa-times"></i></div>
         </div>
         <div class="pop_bl_cl lazy_c"></div>
      </div>
   </div>


   <!-- add item -->
   <div class="pop_bl pop_bl2 pitem_add_block">
      <div class="pop_bl_a pitem_add_back"></div>
      <div class="pop_bl_c">
         <div class="head_c">
            <h4>Добавить вид товара</h4>
            <div class="btn btn_dd pitem_add_back"><i class="fal fa-times"></i></div>
         </div>
         <div class="pop_bl_cl">
            <div class="form_c">
               <div class="form_head">Общие данные:</div>
               <div class="form_im">
                  <div class="form_span">Артикул товара:</div>
                  <i class="fal fa-barcode form_icon"></i>
                  <input type="text" class="form_im_txt pitem_article" placeholder="Введите артикул" data-lenght="3">
               </div>
               <div class="form_im">
                  <div class="form_span">Штрих-код:</div>
                  <i class="fal fa-barcode form_icon"></i>
                  <input type="tel" class="form_im_txt pitem_barcode" placeholder="Сканируйте код" data-lenght="8">
               </div>
               <div class="form_im form_sel">
                  <div class="form_span">Склад:</div>
                  <i class="fal fa-warehouse-alt form_icon"></i>
                  <div class="form_im_txt sel_clc pitem_warehouses" data-val="5">Точка продажа</div>
                  <i class="fal fa-caret-down form_icon_sel"></i>
                  <div class="form_im_sel sel_clc_i">
                     <? $warehouses = db::query("select * from product_warehouses"); ?>
                     <? while ($warehouses_d = mysqli_fetch_assoc($warehouses)): ?>
                        <div class="form_im_seli" data-val="<?=$warehouses_d['id']?>"><?=$warehouses_d['name']?></div>
                     <? endwhile ?>
                  </div>
               </div>
               <div class="form_im">
                  <div class="form_span">Количество:</div>
                  <i class="fal fa-hashtag form_icon"></i>
                  <input type="tel" class="form_im_txt fr_number pitem_quantity" placeholder="0" data-lenght="1">
               </div>
               <div class="form_im">
                  <div class="form_span">Цена продажи:</div>
                  <i class="fal fa-tenge form_icon"></i>
                  <input type="tel" class="form_im_txt fr_price pitem_price" placeholder="0" data-lenght="1">
               </div>

               <div class="form_im form_im_toggle">
                  <div class="form_span">Доп. цены:</div>
                  <input type="checkbox" class="info_inp" data-val="" />
                  <div class="form_im_toggle_btn price1_clc"></div>
               </div>
               <div class="price1_bl">
                  <div class="form_im">
                     <div class="form_span">Закупочная цена:</div>
                     <i class="fal fa-tenge form_icon"></i>
                     <input type="tel" class="form_im_txt fr_price pitem_purchase_price" placeholder="0" data-lenght="1">
                  </div>
                  <div class="form_im">
                     <div class="form_span">Оптовая цена:</div>
                     <i class="fal fa-tenge form_icon"></i>
                     <input type="tel" class="form_im_txt fr_price pitem_discount_price" placeholder="0" data-lenght="1">
                  </div>
               </div>
					
					<div class="form_im form_sel">
						<div class="form_span">Цвет товара:</div>
						<i class="fal fa-palette form_icon"></i>
						<input type="text" class="form_im_txt pitem_color" placeholder="Выберите цвет" data-txt="Выберите цвет" data-lenght="2">
					</div>
					<div class="form_im form_sel">
						<div class="form_span">Размер товара:</div>
						<i class="fal fa-ruler form_icon"></i>
						<input type="text" class="form_im_txt pitem_size" placeholder="Выберите размер" data-txt="Выберите размер" data-lenght="2">
					</div>
            </div>

				<div class="form_c">
               <div class="form_head">Добавить изображение товара:</div>
               <div class="form_im">
                  <input type="file" class="file dsp_n product_img pitem_img" accept=".png, .jpeg, .jpg">
                  <div class="form_im_img lazy_img pitem_img_add" data-txt="Обновить изображение">Выберите с устройства</div>
               </div>
            </div>

            <div class="form_c">
					<div class="form_im">
						<div class="btn pitem_add" data-id="<?=$product_id?>"><span>Добавить</span></div>
					</div>
				</div>
         </div>
      </div>
   </div>

	<!-- upd item -->
	<div class="pop_bl pop_bl2 pitem_upd_block">
      <div class="pop_bl_a pitem_upd_back"></div>
      <div class="pop_bl_c">
         <div class="head_c">
            <h4>Обновить вид товара</h4>
            <div class="btn btn_dd pitem_upd_back"><i class="fal fa-times"></i></div>
         </div>
         <div class="pop_bl_cl lazy_c"></div>
      </div>
   </div>

	<!-- upd item quantity -->
	<div class="pop_bl pop_bl2 pitem_updq_block">
      <div class="pop_bl_a pitem_updq_back"></div>
      <div class="pop_bl_c">
         <div class="head_c">
            <h4>Корректировка количество</h4>
            <div class="btn btn_dd pitem_updq_back"><i class="fal fa-times"></i></div>
         </div>
         <div class="pop_bl_cl lazy_c"></div>
      </div>
   </div>

   <!-- view_add_pop -->
   <div class="pop_bl pop_bl2 view_add_block">
      <div class="pop_bl_a view_add_back"></div>
      <div class="pop_bl_c">
         <div class="head_c">
            <h4>Добавить вид товара</h4>
            <div class="btn btn_dd view_add_back"><i class="fal fa-times"></i></div>
         </div>
         <div class="pop_bl_cl">
            <div class="form_c">
               <div class="form_im form_sel">
                  <div class="form_span">Склады:</div>
                  <i class="fal fa-warehouse-alt form_icon"></i>
                  <div class="form_im_txt sel_clc views_warehouses" data-val="">Выберите склад</div>
                  <i class="fal fa-caret-down form_icon_sel"></i>
                  <div class="form_im_sel sel_clc_i">
                     <? $warehouses = db::query("select * from product_warehouses"); ?>
                     <? while ($warehouses_d = mysqli_fetch_assoc($warehouses)): ?>
                        <div class="form_im_seli" data-val="<?=$warehouses_d['id']?>"><?=$warehouses_d['name']?></div>
                     <? endwhile ?>
                  </div>
               </div>
               <div class="form_im">
                  <div class="form_span">Количество:</div>
                  <i class="fal fa-hashtag form_icon"></i>
                  <input type="tel" class="form_im_txt fr_number views_quantity" placeholder="0" data-lenght="1">
               </div>
               <div class="form_im">
                  <div class="form_span">Комментарий:</div>
                  <i class="fal fa-text form_icon"></i>
                  <input type="text" class="form_im_txt views_comment" placeholder="" data-lenght="1">
               </div>
            </div>
            <div class="form_c">
					<div class="form_im">
						<div class="btn view_add" data-product-id="<?=$product_id?>" data-item-id=""><span>Добавить</span></div>
					</div>
				</div>
         </div>
      </div>
   </div>


   <!-- imgs b -->
   <div class="pop_bl pop_bl2 imgs_add_block">
      <div class="pop_bl_a imgs_add_back"></div>
      <div class="pop_bl_c">
         <div class="head_c">
            <h4>Добавить фото товара</h4>
            <div class="btn btn_dd imgs_add_back"><i class="fal fa-times"></i></div>
         </div>
         <div class="pop_bl_cl lazy_c">
            <div class="form_c">
               <div class="form_head">Добавить изображение товара:</div>
               <div class="uacc_ic">
                  <div class="upl_logo upl_logo2">
                     <input type="file" class="item_file2 file" multiple accept=".png, .jpeg, .jpg" data-id="<?=$product_id?>" data-item-id="">
                     <div class="upl_logo_c item_ava_clc2">Добавить фото</div>
                  </div>
                  <div class="upl_lv lazy_c"></div>
               </div>
            </div>
         </div>
      </div>
   </div>