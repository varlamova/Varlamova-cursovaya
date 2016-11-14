<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<div class="nav">
	<nav>
		<?if (!empty($arResult)):?>
		<ul class="menu">
			<?foreach($arResult as $key => $arItem):?>
				<?if($arItem['DEPTH_LEVEL'] != 1){
					continue;
				}
				?>
				<?if($arItem['DEPTH_LEVEL'] == 1):?>
			<li <?if($arItem["SELECTED"]):?>class="current li-none"<?endif?>></li>
			<li><a href="<?=$arItem["LINK"];?>"><?=$arItem["TEXT"];?></a></li>
				<?endif;?>
			<?endforeach;?>
			<?foreach($arResult as $keyInner => $arItemInner):?>
				<?if($keyInner <= $key) {
					continue;
				}
				?>
			<?if($arItemInner['DEPTH_LEVEL'] == 2):?>
					<li><a href="<?=$arItem["LINK"];?>"><?=$arItem["TEXT"];?></a></li>
					<?endif;?>
				<?if($arItemInner['DEPTH_LEVEL'] != 2){
					break;
				}
				?>
			<?endforeach;?>
		</ul>
		<?endif;?>
	</nav>
</div>