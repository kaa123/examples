<?if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();?>
<?use Bitrix\Main\Localization\Loc;
Loc::loadMessages(__FILE__); ?>
<div class="b-store-statistics">
	<div class="store-statistics__period">
		<div class="period-title"><?=Loc::getMessage("SC_STORE_STATISTICS")?></div>
		<div class="period-limit">
			<div class="period-limit-from-wrapper">
				<input type="date" name="limitFrom" class="period-limit-from">
			</div>
			<div class="period-limit-to-wrapper">
				<input type="date" name="limitTo" class="period-limit-to">
			</div>
		</div>
	</div>
	<div class="store-statistics__values">
		<div class="values-item">
			<div class="values-item-name"><?=Loc::getMessage("SC_STORE_VISITS")?></div>
			<div class="values-item-index">1236</div>
		</div>
		<div class="values-item">
			<div class="values-item-name"><?=Loc::getMessage("SC_VIEWING_GOODS")?></div>
			<div class="values-item-index">1235</div>
		</div>
		<div class="values-item">
			<div class="values-item-name"><?=Loc::getMessage("SC_SITE_VISITS")?></div>
			<div class="values-item-index">125</div>
		</div>
	</div>
</div>