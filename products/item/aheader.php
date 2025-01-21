<div class="atops">
   <? if ($site_set['utop_bk']): ?>  <div class="atops_i atops_bk atops_clc"><i class="fal fa-long-arrow-left"></i></div> <? endif ?>
   <a class="atops_i" href="/products/">Товары</a>
   <? if ($product_d['catalog_id']): ?> <a class="atops_i" href="/products/"><?=product::pr_catalog_name($product_d['catalog_id'], $lang)?></a> <? endif ?>
   <div class="atops_i"><?=$site_set['utop_nm']?></div>
</div>

<div class="item_cn"><?=$product_d['name_ru']?></div>

<div class="mp_top">
   <div class="mp_topc">
      <a class="mp_topi <?=($pod_menu_name=='main'?'mp_topi_act':'')?>" href="/products/item/?id=<?=$product_id?>">Основные</a>
      <a class="mp_topi <?=($pod_menu_name=='characteristic'?'mp_topi_act':'')?>" href="/products/item/characteristic.php?id=<?=$product_id?>">Характеристика</a>
      <a class="mp_topi <?=($pod_menu_name=='img'?'mp_topi_act':'')?>" href="/products/item/img.php?id=<?=$product_id?>">Описание и переводы</a>
   </div>
</div>