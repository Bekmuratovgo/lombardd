<?

function pre ($mixed, $color = "blue", $bgColor = "white") {
	
	echo "<pre style=\"background: white; color: {$color}; background-color: {$bgColor}\">";
	print_r($mixed);
	echo '</pre>';
	
}


CModule::IncludeModule("iblock");
\Bitrix\Main\Loader::includeModule("inter.olsc");
CModule::IncludeModule("highloadblock");				
use Bitrix\Highloadblock as HL;


use Inter\Olsc;
use Inter\Olsc\Subscribe;
use Bitrix\Main;
global $USER;

class CStatic {



		
		public static function HBGetList($hlblock_id, $filter = array() ) {		
		
				$hl_data_class = self::HightPreload($hlblock_id);
		
				$res = $hl_data_class::getList(array(
					// ограничиваем выборку условиями
					'filter' => $filter, 
					// ограничиваем поля выборки
					'select' => array(
						'ID', 'UF_NAME', 'UF_XML_ID', 'UF_DESCRIPTION', 'UF_FILE', 'UF_LINK', 'UF_SORT'
					), 
					// ограничиваем количество возвращаемых записей
					'limit' => 9999,
					// сортируем в нужном порядке
					'order' => array(
						'UF_SORT' => 'asc'
					),
				));
				while($row = $res->fetch()) {
					
					if($row["UF_FILE"]) {
						$arImg = CFile::ResizeImageGet($row["UF_FILE"], array('width'=>30, 'height'=>30), BX_RESIZE_IMAGE_EXACT, true);		
						$row["PICTURE"] = $arImg["src"];
					}
					
					$arColor[$row["UF_XML_ID"]] = $row;					
						
				} 		
		
				return $arColor;		
		}
		
		
		
		
		
		
		
		
		public static function HightGetByID($hlblock_id, $sID_xml) {
			
			$hl_data_class = self::HightPreload($hlblock_id);
		
			$res = $hl_data_class::getList(array(
				// ограничиваем выборку условиями
				'filter' => array(					
					'UF_XML_ID' => $sID_xml,
				), 
				// ограничиваем поля выборки
				'select' => array(
					'ID', 'UF_NAME', 'UF_XML_ID', 'UF_DESCRIPTION', 'UF_FILE', 'UF_LINK', 'UF_SORT'
				), 
				// ограничиваем количество возвращаемых записей
				'limit' => 1,
				// сортируем в нужном порядке
				'order' => array(
					'UF_SORT' => 'asc'
				),
			));
			if($row = $res->fetch()) {
				return $row;	
			} 
			
		}
		
		
		
		public static function HightPreload($hlblock_id) {	
		
			$hlblock = HL\HighloadBlockTable::getById($hlblock_id)->fetch();
            
			if (empty($hlblock))
			{
			   ShowError('404');
			   return;
			}
						
			$entity_data_class = HL\HighloadBlockTable::compileEntity($hlblock)->getDataClass();				
			
			return $entity_data_class;			
			
		}
		
		public static function HBAdd($hlblock_id, $arFields) {	
		
			$entity = self::HightPreload($hlblock_id);	
			
			$res =  $entity::add($arFields);
			if(!$res->isSuccess()){
				return $res->getErrorMessages(); //выведем ошибку
			}
			return $res->getId();		
		}
		
		public static function HBUpdate($hlblock_id, $arFields, $ID) {	
		
			PRE($hlblock_id);
		
		
			$entity = self::HightPreload($hlblock_id);	
			
			$res =  $entity::update($ID, $arFields);
			if(!$res->isSuccess()){
				return $res->getErrorMessages(); //выведем ошибку
			}
			return $ID;		
		}
		
		
		public static function HBDelete($hlblock_id, $ID) {	
		
			$entity = self::HightPreload($hlblock_id);	
			$res =  $entity::delete($ID);
		
		
		}
		
}

?>