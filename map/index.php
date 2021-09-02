<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", 'Адреса ломбардов Первый Ювелирный. Ломбарды рядом с метро в Москве - Адреса скупок золота');
$APPLICATION->SetPageProperty("keywords", "");
$APPLICATION->SetPageProperty("description", 'Сеть лицензированных ювелирных ломбардов рядом со станциями метро. Удобное расположение подробное описание проезда к ломбарду. Карта и адреса ломбардов различных районах Москвы');
$APPLICATION->SetTitle("Адреса отделений ломбарда");

?>
</div> <!--container-->
<?

$APPLICATION->SetAdditionalCSS("//cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.5.2/css/perfect-scrollbar.css", true);
?>
<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAEUwmbUxAkIP62v009Y_zpCMK8k9_B12I&callback=initMap&libraries=places">
    </script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/0.6.7/js/min/perfect-scrollbar.jquery.min.js"></script>
<script>
    // Define locations
const locations = [
    <?
						// $GLOBALS["arrFilter"] = array("SECTION_ID" => 90);
						?>
						<?$APPLICATION->IncludeComponent(
							"bitrix:news.list",
							"metro-js",
							Array(
								"ACTIVE_DATE_FORMAT" => "d.m.Y",
								"ADD_SECTIONS_CHAIN" => "N",
								"AJAX_MODE" => "N",
								"AJAX_OPTION_ADDITIONAL" => "",
								"AJAX_OPTION_HISTORY" => "N",
								"AJAX_OPTION_JUMP" => "N",
								"AJAX_OPTION_STYLE" => "Y",
								"CACHE_FILTER" => "N",
								"CACHE_GROUPS" => "N",
								"CACHE_TIME" => "36000000",
								"CACHE_TYPE" => "A",
								"CHECK_DATES" => "Y",
								"DETAIL_URL" => "",
								"DISPLAY_BOTTOM_PAGER" => "N",
								"DISPLAY_DATE" => "N",
								"DISPLAY_NAME" => "N",
								"DISPLAY_PICTURE" => "N",
								"DISPLAY_PREVIEW_TEXT" => "N",
								"DISPLAY_TOP_PAGER" => "N",
								"FIELD_CODE" => array(""),
								"FILTER_NAME" => "arrFilter",
								"HIDE_LINK_WHEN_NO_DETAIL" => "N",
								"IBLOCK_ID" => "1",
								"IBLOCK_TYPE" => "content",
								"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
								"INCLUDE_SUBSECTIONS" => "Y",
								"MESSAGE_404" => "",
								"NEWS_COUNT" => "50",
								"PAGER_BASE_LINK_ENABLE" => "N",
								"PAGER_DESC_NUMBERING" => "N",
								"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
								"PAGER_SHOW_ALL" => "N",
								"PAGER_SHOW_ALWAYS" => "N",
								"PAGER_TEMPLATE" => ".default",
								"PAGER_TITLE" => "Новости",
								"PARENT_SECTION" => "",
								"PARENT_SECTION_CODE" => "",
								"PREVIEW_TRUNCATE_LEN" => "",
								"PROPERTY_CODE" => array("CORDS",""),
								"SET_BROWSER_TITLE" => "N",
								"SET_LAST_MODIFIED" => "N",
								"SET_META_DESCRIPTION" => "N",
								"SET_META_KEYWORDS" => "N",
								"SET_STATUS_404" => "N",
								"SET_TITLE" => "N",
								"SHOW_404" => "N",
								"SORT_BY1" => "SORT",
								"SORT_BY2" => "ID",
								"SORT_ORDER1" => "ASC",
								"SORT_ORDER2" => "ASC",
								"STRICT_SECTION_CHECK" => "N",
								"ANOTHER" => "Y"
							)
						);?>
];

// Define default variables
const markers = [];
let map;
let infowindow;

// Initialize map
function initMap() {
  map = new google.maps.Map(document.getElementById('google_map'), {
    zoom: 10,
    center: {lat: 55.753036, lng: 37.620564}
  });


  createList();
  dropMarkers();
  var searchBox = new google.maps.places.SearchBox(document.getElementById('pac-input'));
   google.maps.event.addListener(searchBox, 'places_changed', function() {
     searchBox.set('map', null);


     var places = searchBox.getPlaces();

     var bounds = new google.maps.LatLngBounds();
     var i, place;
     for (i = 0; place = places[i]; i++) {
       (function(place) {
         var marker = new google.maps.Marker({

           position: place.geometry.location
         });
         marker.bindTo('map', searchBox, 'map');
         google.maps.event.addListener(marker, 'map_changed', function() {
           if (!this.getMap()) {
             this.unbindAll();
           }
         });
         bounds.extend(place.geometry.location);


       }(place));

     }
     map.fitBounds(bounds);
     searchBox.set('map', map);
     map.setZoom(Math.min(map.getZoom(),12));

   });
}

// Create location list items
function createList() {
  const list = document.querySelector('.locations');

  for (var i = 0; i < locations.length; i++) {
    let listItem = document.createElement('div');

    listItem.innerHTML = locations[i][0];
    listItem.classList.add('metro__wrapper');
    listItem.classList.add('show-on-map-list');
      
    list.appendChild(listItem);

    listItem.addEventListener('click', listItemEvent.bind(null, i));
  }
}

// Lets loop through our locations and create markers
function dropMarkers() {
  for (var i = 0; i < locations.length; i++) {
    markerTimeout(locations[i], i * 400);
  }
}

// Create indiviual marker
function markerTimeout(location, timeout) {
  window.setTimeout(function() {
    var marker = new google.maps.Marker({
      position: location[1],
      map: map,
      animation: google.maps.Animation.DROP
    });

    markerEvent(marker, location);

    markers.push(marker);
  }, timeout);
}

// Custom marker event
function markerEvent(marker, location) {
  infowindow = new google.maps.InfoWindow;

  var content = '<div class="details">'+
                  location[0]+
                '</div>';
  
  marker.addListener('click', function() {
     map.setCenter(location[1]);
      map.setZoom(16, {useMapMargin: true});
    infowindow.setContent(content);
    infowindow.open(map, marker);
  });
}

// Custom location list item event
function listItemEvent(index) {
  google.maps.event.trigger(markers[index], 'click');
}

$(document).ready(function(){
            // $('#scs').perfectScrollbar();

            $('.filial__list-inner').perfectScrollbar({
            // wheelPropagation: true
        });
        });
 
        $(document).on('click', '.page_filial .filial__list .show__trigger_mobile', function (e) {
        e.preventDefault();
     
            $('.filial__list').toggleClass('show-list');
            $('.show__trigger_mobile').html('Перейти к просмотру ломбарда');
            if ($('.filial__list').hasClass('show-list')) {
                $('.filial__list-outer,.filial__list-empty').slideDown();
                
            } else {
                $('.filial__list-outer,.filial__list-empty').slideUp();
                $('.show__trigger_mobile').html('К списку ломбардов');
            }
      
        return false;
    });

</script>


   <style type="text/css">
   /* perfect-scrollbar v0.6.13 */
.ps-container {
  -ms-touch-action: auto;
  touch-action: auto;
  overflow: hidden !important;
  -ms-overflow-style: none;
}

@supports (-ms-overflow-style: none) {
  .ps-container {
    overflow: auto !important;
  }
}
@media screen and (-ms-high-contrast: active), (-ms-high-contrast: none) {
  .ps-container {
    overflow: auto !important;
  }
}
.ps-container.ps-active-x > .ps-scrollbar-x-rail, .ps-container.ps-active-y > .ps-scrollbar-y-rail {
  display: block;
  background-color: transparent;
}

.ps-container.ps-in-scrolling.ps-x > .ps-scrollbar-x-rail {
  background-color: #eee;
  opacity: .9;
}

.ps-container.ps-in-scrolling.ps-x > .ps-scrollbar-x-rail > .ps-scrollbar-x {
  background-color: #999;
  height: 11px;
}

.ps-container.ps-in-scrolling.ps-y > .ps-scrollbar-y-rail {
  background-color: #eee;
  opacity: .9;
}

.ps-container.ps-in-scrolling.ps-y > .ps-scrollbar-y-rail > .ps-scrollbar-y {
  background-color: #999;
  width: 11px;
}

.ps-container > .ps-scrollbar-x-rail {
  display: none;
  position: absolute;
  opacity: 0;
  -webkit-transition: background-color .2s linear, opacity .2s linear;
  -o-transition: background-color .2s linear, opacity .2s linear;
  -moz-transition: background-color .2s linear, opacity .2s linear;
  transition: background-color .2s linear, opacity .2s linear;
  bottom: 0px;
  height: 15px;
}

.ps-container > .ps-scrollbar-x-rail > .ps-scrollbar-x {
  position: absolute;
  background-color: #aaa;
  -webkit-border-radius: 6px;
  -moz-border-radius: 6px;
  border-radius: 6px;
  -webkit-transition: background-color .2s linear, height .2s linear, width .2s ease-in-out, -webkit-border-radius .2s ease-in-out;
  transition: background-color .2s linear, height .2s linear, width .2s ease-in-out, -webkit-border-radius .2s ease-in-out;
  -o-transition: background-color .2s linear, height .2s linear, width .2s ease-in-out, border-radius .2s ease-in-out;
  -moz-transition: background-color .2s linear, height .2s linear, width .2s ease-in-out, border-radius .2s ease-in-out, -moz-border-radius .2s ease-in-out;
  transition: background-color .2s linear, height .2s linear, width .2s ease-in-out, border-radius .2s ease-in-out;
  transition: background-color .2s linear, height .2s linear, width .2s ease-in-out, border-radius .2s ease-in-out, -webkit-border-radius .2s ease-in-out, -moz-border-radius .2s ease-in-out;
  bottom: 2px;
  height: 6px;
}

.ps-container > .ps-scrollbar-x-rail:hover > .ps-scrollbar-x, .ps-container > .ps-scrollbar-x-rail:active > .ps-scrollbar-x {
  height: 11px;
}

.ps-container > .ps-scrollbar-y-rail {
  display: none;
  position: absolute;
  opacity: 0;
  -webkit-transition: background-color .2s linear, opacity .2s linear;
  -o-transition: background-color .2s linear, opacity .2s linear;
  -moz-transition: background-color .2s linear, opacity .2s linear;
  transition: background-color .2s linear, opacity .2s linear;
  right: 0;
  width: 15px;
}

.ps-container > .ps-scrollbar-y-rail > .ps-scrollbar-y {
  position: absolute;
  background-color: #aaa;
  -webkit-border-radius: 6px;
  -moz-border-radius: 6px;
  border-radius: 6px;
  -webkit-transition: background-color .2s linear, height .2s linear, width .2s ease-in-out, -webkit-border-radius .2s ease-in-out;
  transition: background-color .2s linear, height .2s linear, width .2s ease-in-out, -webkit-border-radius .2s ease-in-out;
  -o-transition: background-color .2s linear, height .2s linear, width .2s ease-in-out, border-radius .2s ease-in-out;
  -moz-transition: background-color .2s linear, height .2s linear, width .2s ease-in-out, border-radius .2s ease-in-out, -moz-border-radius .2s ease-in-out;
  transition: background-color .2s linear, height .2s linear, width .2s ease-in-out, border-radius .2s ease-in-out;
  transition: background-color .2s linear, height .2s linear, width .2s ease-in-out, border-radius .2s ease-in-out, -webkit-border-radius .2s ease-in-out, -moz-border-radius .2s ease-in-out;
  right: 2px;
  width: 6px;
}

.ps-container > .ps-scrollbar-y-rail:hover > .ps-scrollbar-y, .ps-container > .ps-scrollbar-y-rail:active > .ps-scrollbar-y {
  width: 11px;
}

.ps-container:hover.ps-in-scrolling.ps-x > .ps-scrollbar-x-rail {
  background-color: #eee;
  opacity: .9;
}

.ps-container:hover.ps-in-scrolling.ps-x > .ps-scrollbar-x-rail > .ps-scrollbar-x {
  background-color: #999;
  height: 11px;
}

.ps-container:hover.ps-in-scrolling.ps-y > .ps-scrollbar-y-rail {
  background-color: #eee;
  opacity: .9;
}

.ps-container:hover.ps-in-scrolling.ps-y > .ps-scrollbar-y-rail > .ps-scrollbar-y {
  background-color: #999;
  width: 11px;
}

.ps-container:hover > .ps-scrollbar-x-rail, .ps-container:hover > .ps-scrollbar-y-rail {
  opacity: .6;
}

.ps-container:hover > .ps-scrollbar-x-rail:hover {
  background-color: #eee;
  opacity: .9;
}

.ps-container:hover > .ps-scrollbar-x-rail:hover > .ps-scrollbar-x {
  background-color: #999;
}

.ps-container:hover > .ps-scrollbar-y-rail:hover {
  background-color: #eee;
  opacity: .9;
}

.ps-container:hover > .ps-scrollbar-y-rail:hover > .ps-scrollbar-y {
  background-color: #999;
}

   .ps-container {
    -ms-touch-action: auto;
    touch-action: auto;
    overflow: hidden !important;
    -ms-overflow-style: none;
}
  .btn {
  display: inline-block;
  margin-top: 10px;
  padding: 5px 15px;
  font-weight: 600;
  color: white;
  text-decoration: none;
  background-color: #00C9FF;
}



.location {
  font-size: 24px;
  font-weight: 600;
  color: white;
  cursor: pointer;
}

.location + .location {
  margin-top: 15px;
  padding-top: 15px;
  border-top: 1px solid #000;
}

.details {
  padding: 10px 15px;
}
#google_map {
  order: 2;

}

.map__wrapper{
    display: flex;
    flex-flow: row wrap;
    justify-content: space-between;
    min-height: 100%;
    margin: 0;
    font-size: 16px;
    font-family: "Open Sans", sans-serif;
    line-height: 1.5;

}
 
    </style>
<div class="office__blocks">
	<div class="page page_filial embed">
    <div class="view-type__switcher">
        <!-- <a href="#" class="active">
            На карте
        </a>
        <a href="#" class="list-view">
            Списком
        </a> -->
    </div>
    <div class="page__content">
        <div class="map__wrapper">
       
        <div id="google_map" class="filial-list-page__map"></div>
        <div class="map__items loaded">
            <div class="filial-map__filter">
                <div class="search-input" id="maps">
                <input name="search" type="text" placeholder="По названию, улице, метро" id="pac-input" value="" class="ui-autocomplete-input" autocomplete="off">
                </div>
            </div>
            <div class="filial__list">
            <div class="filial__list-title">

    <a href="#" class="show__trigger_mobile">
    К списку ломбардов    </a>
</div>
                <div class="filial__list-outer">
                    <div class="filial__list-inner locations rounded"  id="scs">

                    </div>
                </div>
            </div>
        </div>
           

                            </div>
        </div>
    </div>
</div>
<style>
.lombard-card {
  padding: 20px;
}
.text  .icon{
    margin-top: -4px;
    margin-right: 5px;
}

.icon_metro-red{width:25px;height:17px;background:url(../images/7.png) no-repeat}
.icon_metro-blue{width:25px;height:17px;background:url(../images/5.png) no-repeat}
.icon_metro-gray{width:25px;height:17px;background:url(../images/2.png) no-repeat}
.icon_metro-purple{width:25px;height:17px;background:url(../images/6.png) no-repeat}
.icon_metro-light{width:25px;height:17px;background:url(../images/map-light.png) no-repeat}
.icon_metro-orange{width:25px;height:17px;background:url(../images/1.png) no-repeat}
.icon_metro-salat{width:25px;height:17px;background:url(../images/4.png) no-repeat}
.icon_metro-green{width:25px;height:17px;background:url(../images/3.png) no-repeat}
.lombard-card .lombard-card__image {
  width: 70px;
  height: 70px;
  margin-right: 15px;
  position: relative;
  display: inline-block;
  vertical-align: top;
  *vertical-align: auto;
  *zoom: 1;
  *display: inline;
}
.lombard-card .lombard-card__image img {
  width: 100%;
  height: 100%;
  overflow: hidden;
}
.lombard-card .lombard-card__info {
  text-align: justify;
  display: inline-block;
  vertical-align: top;
  *vertical-align: auto;
  *zoom: 1;
  *display: inline;
}
.lombard-card .lombard-card__info .lombard-card__info-wrapper {
  max-width: 257px;
}
.lombard-card .lombard-card__info .lombard-card__info-title {
  font-size: 15px;
  color: #000000;
  font-weight: 700;
  line-height: 20px;
  margin-bottom: 4px;
}
.lombard-card .lombard-card__info .lombard-card__info-title .lombard-card__info-title__el {
  display: inline-block;
  vertical-align: middle;
  *vertical-align: auto;
  *zoom: 1;
  *display: inline;
}
.lombard-card .lombard-card__info .lombard-card__info-distance {
  font-size: 13px;
  margin-left: 5px;
  color: #898989;
  font-weight: 300;
  line-height: 20px;
  display: inline-block;
  vertical-align: middle;
  *vertical-align: auto;
  *zoom: 1;
  *display: inline;
}
.lombard-card .lombard-card__info .lombard-card__info-tel {
  font-size: 13px;
  color: #000000;
  font-weight: 900;
  line-height: 20px;
  text-decoration: none;
  display: inline-block;
  vertical-align: middle;
  *vertical-align: auto;
  *zoom: 1;
  *display: inline;
  margin-right: 20px;
}
.lombard-card .lombard-card__info .lombard-card__info-address, .lombard-card .lombard-card__info .lombard-card__info-time {
  font-size: 13px;
  color: #535353;
  font-weight: 300;
  line-height: 13px;
  display: inline-block;
  vertical-align: middle;
  *vertical-align: auto;
  *zoom: 1;
  *display: inline;
}
.lombard-card .lombard-card__info .lombard-card__info-address:first-child, .lombard-card .lombard-card__info .lombard-card__info-time:first-child {
  margin-right: 20px;
}
.lombard-card .lombard-card__info .lombard-card__info-address .metro-icon, .lombard-card .lombard-card__info .lombard-card__info-time .metro-icon {
  position: relative;
  top: -2px;
  margin-right: 2px;
}
.lombard-card .lombard-card__info .lombard-card__info-address img, .lombard-card .lombard-card__info .lombard-card__info-time img {
  margin-right: 4px;
  height: 11px;
}
.lombard-card .lombard-card__info .lombard-card__info-address img.img_location, .lombard-card .lombard-card__info .lombard-card__info-time img.img_location {
  height: 12px;
}
.lombard-card .lombard-card__info .lombard-card__more .lombard-card__info-link {
  display: inline-block;
  vertical-align: middle;
  *vertical-align: auto;
  *zoom: 1;
  *display: inline;
  padding: 6px 14px;
  line-height: 16px;
}
.lombard-card .lombard-card__info .lombard-card__more .lombard-card__info-link.lombard-card__info-link_map {
  margin-top: 10px;
}

@media screen and (max-width: 767px) {
  .lombard-card {
    padding: 0;
    position: relative;
  }
  .lombard-card .lombard-card__info .lombard-card__more {
    padding: 0;
  }
  .lombard-card .lombard-card__info .lombard-card__more .lombard-card__info-link {
    position: absolute;
    display: block;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    border: 0;
    font-size: 0;
    background: none;
  }
  .lombard-card .lombard-card__info .lombard-card__more .lombard-card__info-link:hover {
    background: none;
    border: none;
  }
  .lombard-card .lombard-card__info .lombard-card__info-distance {
    margin-left: 0;
  }
  .lombard-card .lombard-card__info .lombard-card__info-tel {
    border-bottom: 1px dotted #999999;
  }
}
.page.page_filial {
  clear: both;
  padding-bottom: 60px;
  width: 100%;
  /*padding-top: 110px;*/
  padding-top: 30px;
}
.page.page_filial .lombard-landing {
  padding-bottom: 0;
}
.page.page_filial .page__header .page__title {
  overflow: visible;
  white-space: normal;
}
.page.page_filial .page__header .page__title:after {
  display: none;
}
.page.page_filial .page__header .page__title, .page.page_filial .page__header .status, .page.page_filial .page__header .rating {
  display: inline-block;
  vertical-align: middle;
  *vertical-align: auto;
  *zoom: 1;
  *display: inline;
}
.page.page_filial .page__header .status {
  position: relative;
  top: 1px;
  padding: 0 5px;
  font-weight: 500;
  font-size: 15px;
  line-height: 24px;
  color: #ffffff;
  text-transform: uppercase;
  margin-left: 8px;
  background: #ff8c3f;
}
.page.page_filial .page__header .status.gray {
  background: #D4D4D6;
}
.page.page_filial .page__header .rating {
  display: inline-block;
  vertical-align: middle;
  *vertical-align: auto;
  *zoom: 1;
  *display: inline;
  margin: 0 8px;
  font-weight: 500;
  font-size: 16px;
  line-height: 20px;
  position: relative;
  top: 1px;
}
.page.page_filial .page__header .rating img {
  display: inline-block;
  vertical-align: top;
  *vertical-align: auto;
  *zoom: 1;
  *display: inline;
  position: relative;
  top: 3px;
}
.page.page_filial .page__header .review__link {
  display: inline-block;
  vertical-align: middle;
  *vertical-align: auto;
  *zoom: 1;
  *display: inline;
  font-weight: 300;
  font-size: 16px;
  line-height: 20px;
  color: #B1B1B1;
  text-decoration: none;
  border-bottom: 1px dashed #B1B1B1;
}
.page.page_filial .page__content {
  height: 100%;
}
.page.page_filial .page__content .section__title {
  font-weight: 300;
  font-size: 30px;
  line-height: 36px;
  color: #000;
  text-align: center;
  margin: 60px auto 35px;
  clear: both;
}
.page.page_filial .page__content .banner__wrapper {
  margin: 0 0 50px;
}
.page.page_filial .page__content .banner__wrapper .hide-on-desktop {
  display: none;
}
.page.page_filial .page__content .filial__wrapper {
  margin: 0 0 50px;
  font-size: 0;
  position: relative;
}
.page.page_filial .page__content .filial__wrapper .filial__images {
  display: inline-block;
  vertical-align: top;
  *vertical-align: auto;
  *zoom: 1;
  *display: inline;
  float: left;
  width: 40%;
  padding-right: 15px;
  text-align: center;
}
.page.page_filial .page__content .filial__wrapper .filial__images .filial__images-slider .swiper-wrapper {
  align-items: center;
  text-align: center;
}
.page.page_filial .page__content .filial__wrapper .filial__images .filial__images-slider .nav-btn {
  width: 36px;
  height: 36px;
  background: rgba(229, 229, 229, 0.8);
  border-radius: 5px;
  top: 0;
  bottom: 0;
  margin: auto;
}
.page.page_filial .page__content .filial__wrapper .filial__images .filial__images-slider .nav-btn:after {
  content: "";
  position: absolute;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
  margin: auto;
  background: url("../images/icons/arrow-down_gray.svg");
  width: 16px;
  height: 12px;
  background-size: 100% 100%;
  -moz-transform: rotate(-90deg);
  -ms-transform: rotate(-90deg);
  -webkit-transform: rotate(-90deg);
  transform: rotate(-90deg);
}
.page.page_filial .page__content .filial__wrapper .filial__images .filial__images-slider .nav-btn.swiper-button-prev {
  left: 0;
  -moz-transform: rotate(180deg);
  -ms-transform: rotate(180deg);
  -webkit-transform: rotate(180deg);
  transform: rotate(180deg);
}
.page.page_filial .page__content .filial__wrapper .filial__images .filial__images-slider .nav-btn.swiper-button-next {
  right: 0;
}
.page.page_filial .page__content .filial__wrapper .filial__images .filial__images-thumbs {
  font-size: 0;
  line-height: 0;
  margin-top: 8px;
}
.page.page_filial .page__content .filial__wrapper .filial__images .filial__images-thumbs .filial__images-thumbs__item {
  display: inline-block;
  vertical-align: middle;
  *vertical-align: auto;
  *zoom: 1;
  *display: inline;
  width: calc((100% - 40px) / 6);
  margin-right: 8px;
  position: relative;
}
.page.page_filial .page__content .filial__wrapper .filial__images .filial__images-thumbs .filial__images-thumbs__item:last-child {
  margin-right: 0;
}
.page.page_filial .page__content .filial__wrapper .filial__images .filial__images-thumbs .filial__images-thumbs__item img {
  display: block;
}
.page.page_filial .page__content .filial__wrapper .filial__images .filial__images-thumbs .filial__images-thumbs__item.active:before {
  content: "";
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  display: block;
  position: absolute;
  width: 100%;
  height: 100%;
  left: 0;
  top: 0;
  border: 3px solid #ff8c3f;
}
.page.page_filial .page__content .filial__wrapper .filial__images .more-photos__trigger {
  font-weight: 300;
  font-size: 12px;
  line-height: 14px;
  color: #000;
  text-decoration: underline;
  text-decoration-style: dashed;
  margin-top: 8px;
  display: inline-block;
  vertical-align: middle;
  *vertical-align: auto;
  *zoom: 1;
  *display: inline;
}
.page.page_filial .page__content .filial__wrapper .filial__info {
  display: inline-block;
  vertical-align: top;
  *vertical-align: auto;
  *zoom: 1;
  *display: inline;
  width: 60%;
  position: relative;
}
.page.page_filial .page__content .filial__wrapper .info__wrapper {
  position: relative;
  width: 50%;
  z-index: 2;
}
.page.page_filial .page__content .filial__wrapper .info__wrapper.has-lombard {
  min-height: 274px;
}
.page.page_filial .page__content .filial__wrapper .info__wrapper .info__row {
  font-size: 0;
  text-align: left;
  padding: 14px 0;
}
.page.page_filial .page__content .filial__wrapper .info__wrapper .info__row .info__image, .page.page_filial .page__content .filial__wrapper .info__wrapper .info__row .info__text {
  display: inline-block;
  vertical-align: middle;
}
.page.page_filial .page__content .filial__wrapper .info__wrapper .info__row .info__image {
  padding-right: 10px;
  width: 40px;
  vertical-align: top;
  padding-top: 3px;
}
.page.page_filial .page__content .filial__wrapper .info__wrapper .info__row .info__image .metro-image {
  height: 20px;
  height: 20px;
}
.page.page_filial .page__content .filial__wrapper .info__wrapper .info__row .info__image img, .page.page_filial .page__content .filial__wrapper .info__wrapper .info__row .info__image svg {
  display: block;
  margin: auto;
}
.page.page_filial .page__content .filial__wrapper .info__wrapper .info__row .info__text {
  width: calc(100% - 40px);
  font-weight: 400;
  font-size: 16px;
  line-height: 25px;
}
.page.page_filial .page__content .filial__wrapper .info__wrapper .info__row .info__text, .page.page_filial .page__content .filial__wrapper .info__wrapper .info__row .info__text a {
  color: #000;
}
.page.page_filial .page__content .filial__wrapper .info__wrapper .info__row .info__text .sm {
  font-weight: 300;
  font-size: 16px;
}
.page.page_filial .page__content .filial__wrapper .info__wrapper .info__row .info__text .sm, .page.page_filial .page__content .filial__wrapper .info__wrapper .info__row .info__text .sm a {
  color: #B1B1B1;
}
.page.page_filial .page__content .filial__wrapper .info__wrapper .info__row .info__text .sm .separator {
  display: inline-block;
  vertical-align: middle;
  *vertical-align: auto;
  *zoom: 1;
  *display: inline;
  height: 10px;
  width: 1px;
  background: #B1B1B1;
  margin: 0 10px;
}
.page.page_filial .page__content .filial__wrapper .info__wrapper .info__row .info__text .sm select, .page.page_filial .page__content .filial__wrapper .info__wrapper .info__row .info__text .sm .nice-select {
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  background: none;
  border: none;
  outline: none;
  -moz-border-radius: 0;
  -webkit-border-radius: 0;
  border-radius: 0;
  width: auto;
  font-weight: 300;
  font-size: 16px;
  line-height: inherit;
  color: #B1B1B1;
  padding: 0 13px 0 0;
  float: none;
  height: auto;
  display: inline;
}
.page.page_filial .page__content .filial__wrapper .info__wrapper .info__row .info__text .sm select .current, .page.page_filial .page__content .filial__wrapper .info__wrapper .info__row .info__text .sm .nice-select .current {
  border-bottom: 1px dashed #B1B1B1;
}
.page.page_filial .page__content .filial__wrapper .info__wrapper .info__row .info__text .sm select:after, .page.page_filial .page__content .filial__wrapper .info__wrapper .info__row .info__text .sm .nice-select:after {
  right: 0;
  border-color: #B1B1B1;
}
.page.page_filial .page__content .filial__wrapper .info__wrapper .info__row .info__text .sm .dotted {
  border-bottom: 1px dashed #B1B1B1;
  text-decoration: none;
  position: relative;
  white-space: nowrap;
}
.page.page_filial .page__content .filial__wrapper .info__wrapper .info__row .info__text .sm .dotted.bold {
  font-weight: 500;
}
.page.page_filial .page__content .filial__wrapper .info__wrapper .info__row .info__text .sm .dotted[target=_blank] {
  border-bottom-style: solid;
}
.page.page_filial .page__content .filial__wrapper .info__wrapper .info__row .info__text .sm .dotted .hint {
  position: absolute;
  z-index: 23;
  visibility: hidden;
  opacity: 0;
  background: #ffffff;
  -moz-box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.1);
  -webkit-box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.1);
  box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.1);
  padding: 15px;
  margin-bottom: 10px;
  width: 350px;
  left: 50%;
  bottom: 100%;
  -moz-transform: translateX(-50%);
  -ms-transform: translateX(-50%);
  -webkit-transform: translateX(-50%);
  transform: translateX(-50%);
  text-align: left;
  font-weight: 300;
  font-size: 13px;
  line-height: 20px;
  color: #000000;
  white-space: normal;
}
.page.page_filial .page__content .filial__wrapper .info__wrapper .info__row .info__text .sm .dotted .hint:after {
  content: "";
  display: block;
  width: 0;
  height: 0;
  border-style: solid;
  border-width: 7px 7px 0px 7px;
  border-color: #ffffff transparent transparent transparent;
  position: absolute;
  bottom: -7px;
  left: 0;
  right: 0;
  margin: auto;
}
.page.page_filial .page__content .filial__wrapper .info__wrapper .info__row .info__text .sm .dotted:hover .hint {
  opacity: 1;
  visibility: visible;
}
.page.page_filial .page__content .filial__wrapper .info__wrapper .info__row .info__text .bottom-dotted {
  border-bottom: 1px dashed #B1B1B1;
}
.page.page_filial .page__content .filial__wrapper .info__wrapper .info__row .info__text .map__trigger {
  font-weight: 500;
  font-size: 14px;
  color: #ff8c3f;
  border-bottom: 1px dashed #ff8c3f;
  display: none;
}
.page.page_filial .page__content .filial__wrapper .info__wrapper .legal {
  position: relative;
  display: inline-block;
  vertical-align: middle;
  *vertical-align: auto;
  *zoom: 1;
  *display: inline;
  cursor: pointer;
}
.page.page_filial .page__content .filial__wrapper .info__wrapper .legal > span {
  display: inline-block;
  vertical-align: middle;
  *vertical-align: auto;
  *zoom: 1;
  *display: inline;
  font-weight: 300;
  font-size: 14px;
  line-height: 20px;
  color: #000;
  border-bottom: 1px dashed #000;
}
.page.page_filial .page__content .filial__wrapper .info__wrapper .legal .hint {
  position: absolute;
  z-index: 23;
  visibility: hidden;
  opacity: 0;
  background: #ffffff;
  -moz-box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.1);
  -webkit-box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.1);
  box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.1);
  padding: 15px;
  margin-bottom: 10px;
  width: 350px;
  left: 50%;
  bottom: 100%;
  -moz-transform: translateX(-50%);
  -ms-transform: translateX(-50%);
  -webkit-transform: translateX(-50%);
  transform: translateX(-50%);
  text-align: left;
  font-size: 0;
  line-height: 0;
}
.page.page_filial .page__content .filial__wrapper .info__wrapper .legal .hint:before {
  content: "";
  display: block;
  width: 100%;
  height: 10px;
  position: absolute;
  top: 100%;
}
.page.page_filial .page__content .filial__wrapper .info__wrapper .legal .hint:after {
  content: "";
  display: block;
  width: 0;
  height: 0;
  border-style: solid;
  border-width: 7px 7px 0px 7px;
  border-color: #ffffff transparent transparent transparent;
  position: absolute;
  bottom: -7px;
  left: 0;
  right: 0;
  margin: auto;
}
.page.page_filial .page__content .filial__wrapper .info__wrapper .legal .hint > div {
  margin-top: 10px;
}
.page.page_filial .page__content .filial__wrapper .info__wrapper .legal .hint > div:first-child {
  margin-top: 0;
}
.page.page_filial .page__content .filial__wrapper .info__wrapper .legal .hint .title, .page.page_filial .page__content .filial__wrapper .info__wrapper .legal .hint .value {
  display: inline-block;
  vertical-align: middle;
  *vertical-align: auto;
  *zoom: 1;
  *display: inline;
  font-weight: 300;
  font-size: 13px;
  line-height: 20px;
  color: #000000;
}
.page.page_filial .page__content .filial__wrapper .info__wrapper .legal .hint .title {
  color: #A7A7A7;
  width: 135px;
}
.page.page_filial .page__content .filial__wrapper .info__wrapper .legal .hint .value {
  width: calc(100% - 135px);
  padding-left: 10px;
}
.page.page_filial .page__content .filial__wrapper .info__wrapper .legal:hover .hint {
  opacity: 1;
  visibility: visible;
}
.page.page_filial .page__content .filial__wrapper .info__wrapper.lombard {
  position: absolute;
  width: 30%;
  top: 0;
  right: 0;
}
.page.page_filial .page__content .filial__wrapper .features {
  margin: 20px 0 0;
  padding: 20px 0;
  border-top: 1px solid #F3F3F3;
  border-bottom: 1px solid #F3F3F3;
  font-size: 0;
  line-height: 0;
}
.page.page_filial .page__content .filial__wrapper .features .feature {
  display: inline-block;
  vertical-align: middle;
  *vertical-align: auto;
  *zoom: 1;
  *display: inline;
  margin-right: 40px;
  white-space: nowrap;
}
.page.page_filial .page__content .filial__wrapper .features .feature:last-child {
  margin-right: 0;
}
.page.page_filial .page__content .filial__wrapper .features .feature img, .page.page_filial .page__content .filial__wrapper .features .feature .label {
  display: inline-block;
  vertical-align: middle;
  *vertical-align: auto;
  *zoom: 1;
  *display: inline;
}
.page.page_filial .page__content .filial__wrapper .features .feature .label {
  margin-left: 10px;
  font-weight: 500;
  font-size: 16px;
  line-height: 30px;
  color: #000;
  max-width: calc(100% - 35px);
}
.page.page_filial .page__content .filial__wrapper.moved .filial__images, .page.page_filial .page__content .filial__wrapper.moved .filial__info {
  vertical-align: middle;
  float: none;
}
.page.page_filial .page__content .filial__wrapper .warning__title {
  font-weight: 700;
  font-size: 18px;
  line-height: 30px;
  color: #ff8c3f;
  text-transform: uppercase;
}
.page.page_filial .page__content .product__block {
  text-align: center;
}
.page.page_filial .page__content .product__block > .btn {
  min-width: 235px;
}
.page.page_filial .page__content .product__list:not(.product__list_new) {
  font-size: 0;
  border-left: 1px solid #f8f8f7;
  margin: 0 auto 20px;
  border-top: 1px solid #f8f8f7;
}
.page.page_filial .page__content .product__list:not(.product__list_new) .product__item {
  position: relative;
  display: inline-block;
  vertical-align: top;
  *vertical-align: auto;
  *zoom: 1;
  *display: inline;
  width: 20%;
  border-right: 1px solid #f8f8f7;
  border-bottom: 1px solid #f8f8f7;
  padding: 20px 0;
  margin: 0;
  font-weight: 900;
  font-size: 12px;
  line-height: 15px;
  text-align: center;
  text-transform: uppercase;
}
.page.page_filial .page__content .product__list:not(.product__list_new) .product__item:first-child {
  width: 40%;
  float: left;
}
.page.page_filial .page__content .product__list:not(.product__list_new) .product__item:first-child .discount {
  -moz-transform: scale(1.5);
  -ms-transform: scale(1.5);
  -webkit-transform: scale(1.5);
  transform: scale(1.5);
  -webkit-transform-origin: left top;
  -moz-transform-origin: left top;
  -ms-transform-origin: left top;
  -o-transform-origin: left top;
  transform-origin: left top;
}
.page.page_filial .page__content .product__list:not(.product__list_new) .product__item:first-child .product__image {
  padding: 40px 0 49px;
}
.page.page_filial .page__content .product__list:not(.product__list_new) .product__item:first-child .product__image .vertical-center {
  height: 300px;
}
.page.page_filial .page__content .product__list:not(.product__list_new) .product__item .product__image, .page.page_filial .page__content .product__list:not(.product__list_new) .product__item .product__price, .page.page_filial .page__content .product__list:not(.product__list_new) .product__item .product__price_old {
  position: static;
  z-index: 2;
}
.page.page_filial .page__content .product__list:not(.product__list_new) .product__item .product__price, .page.page_filial .page__content .product__list:not(.product__list_new) .product__item .product__price_old {
  font-size: 15px;
  line-height: 25px;
  color: #424242;
  display: inline-block;
  vertical-align: middle;
  *vertical-align: auto;
  *zoom: 1;
  *display: inline;
}
.page.page_filial .page__content .product__list:not(.product__list_new) .product__item .product__price_old {
  font-weight: 300;
  color: #9f9f9f;
  text-decoration: line-through;
  margin-right: 20px;
}
.page.page_filial .page__content .product__list:not(.product__list_new) .product__item .profit {
  display: inline-block;
  vertical-align: middle;
  *vertical-align: auto;
  *zoom: 1;
  *display: inline;
  margin-left: 10px;
  font-weight: 900;
  font-size: 12px;
  line-height: 14px;
  color: #ff8c3f;
  border: 1px solid #ff8c3f;
  padding: 0 2px;
  display: none;
  margin-bottom: 0;
}
.page.page_filial .page__content .product__list:not(.product__list_new) .product__item .product__price-wrapper {
  position: relative;
  z-index: 2;
}
.page.page_filial .page__content .product__list:not(.product__list_new) .product__item .product__image {
  width: 100%;
  display: table;
  text-align: center;
  padding: 0 20px;
  margin: 0 0 14px;
  position: relative;
}
.page.page_filial .page__content .product__list:not(.product__list_new) .product__item .product__image .brand {
  position: absolute;
  top: 100%;
  font-weight: 400;
  font-size: 10px;
  line-height: 10px;
  color: #c1c1c1;
  left: 0;
  right: 0;
  margin: auto;
  text-align: center;
}
.page.page_filial .page__content .product__list:not(.product__list_new) .product__item .product__image .brand img {
  max-height: 10px;
  display: inline-block;
  vertical-align: top;
  *vertical-align: auto;
  *zoom: 1;
  *display: inline;
  position: relative;
  top: 0px;
}
.page.page_filial .page__content .product__list:not(.product__list_new) .product__item .product__image .vertical-center {
  height: 150px;
  display: table-cell;
  vertical-align: middle;
}
.page.page_filial .page__content .product__list:not(.product__list_new) .product__item .product__image .vertical-center img {
  max-width: 100%;
  max-height: 100%;
  display: block;
  margin: auto;
}
.page.page_filial .page__content .product__list:not(.product__list_new) .product__item .product__image .vertical-center img:before {
  display: none;
}
.page.page_filial .page__content .product__list:not(.product__list_new) .product__item.without-price {
  font-size: 0;
  line-height: 0;
}
.page.page_filial .page__content .product__list:not(.product__list_new) .product__item.without-price .product__image {
  margin: 0;
}
.page.page_filial .page__content .product__list:not(.product__list_new) .product__item .circle__trigger {
  position: absolute;
  z-index: 3;
  display: block;
  -moz-border-radius: 50%;
  -webkit-border-radius: 50%;
  border-radius: 50%;
  width: 30px;
  height: 30px;
  border: 1px solid #D2D2D2;
  right: 10px;
  top: 10px;
  font-weight: 700;
  font-size: 12px;
  line-height: 28px;
  color: #d2d2d2;
  text-align: center;
}
.page.page_filial .page__content .product__list:not(.product__list_new) .product__item .discount {
  position: absolute;
  overflow: hidden;
  left: 0;
  top: 0;
  width: auto;
  height: auto;
  z-index: 2;
  text-transform: none;
  padding: 7px;
}
.page.page_filial .page__content .product__list:not(.product__list_new) .product__item .discount span {
  position: static;
  -moz-transform: rotate(0);
  -ms-transform: rotate(0);
  -webkit-transform: rotate(0);
  transform: rotate(0);
  top: 0;
  left: 0;
  width: auto;
  height: auto;
  display: inline-block;
  font-weight: 500;
  font-size: 12px;
  line-height: 18px;
  color: #ffffff;
  background: #ff8c3f;
  padding: 0 5px;
}
.page.page_filial .page__content .product__list:not(.product__list_new) .product__item .product__price-wrapper {
  height: 48px;
}
.page.page_filial .page__content .product__list:not(.product__list_new) .product__item .product__price-wrapper .product__price {
  font-weight: 300;
  font-size: 20px;
  line-height: 24px;
  display: block;
}
.page.page_filial .page__content .product__list:not(.product__list_new) .product__item .product__price-wrapper .product__price_old {
  margin-right: 0;
  font-size: 14px;
  line-height: 24px;
  color: #c4c4c4;
}
.page.page_filial .page__content .product__list:not(.product__list_new) .product__item .btn {
  position: absolute;
  top: 100%;
  left: 0;
  width: 100%;
  font-size: 14px;
  opacity: 0;
  visibility: hidden;
  -moz-transition: none;
  -o-transition: none;
  -webkit-transition: none;
  transition: none;
}
.page.page_filial .page__content .product__list:not(.product__list_new) .product__item:before {
  content: "";
  position: absolute;
  width: 100%;
  height: calc(100% + 45px);
  box-shadow: 0px 5px 30px rgba(73, 73, 84, 0.45);
  left: 0;
  top: 0;
  opacity: 0;
  visibility: hidden;
}
.page.page_filial .page__content .product__list:not(.product__list_new) .product__item:hover {
  z-index: 5;
}
.page.page_filial .page__content .product__list:not(.product__list_new) .product__item:hover .profit {
  display: inline-block;
}
.page.page_filial .page__content .product__list:not(.product__list_new) .product__item:hover .btn, .page.page_filial .page__content .product__list:not(.product__list_new) .product__item:hover:before {
  visibility: visible;
  opacity: 1;
}
.page.page_filial .page__content .text-info__wrapper {
  font-size: 0;
  line-height: 0;
  direction: rtl;
  text-align: center;
}
.page.page_filial .page__content .text-info__wrapper .text {
  padding-right: 20px;
  width: 55%;
  font-weight: 300;
  font-size: 16px;
  line-height: 30px;
  color: #000;
  text-align: left;
  direction: ltr;
}
.page.page_filial .page__content .text-info__wrapper * + p {
  margin-top: 0;
}
.page.page_filial .page__content .text-info__wrapper .image {
  width: 45%;
}
.page.page_filial .page__content .text-info__wrapper .text, .page.page_filial .page__content .text-info__wrapper .image {
  display: inline-block;
  vertical-align: middle;
  *vertical-align: auto;
  *zoom: 1;
  *display: inline;
}
.page.page_filial .page__content .kvazi-landing {
  padding: 0;
}
.page.page_filial .page__content .kvazi-landing .kvazi-landing__section .section__title {
  margin-bottom: 0;
}
.page.page_filial .page__content .kvazi-landing .kvazi-landing__section .section__title .distance span {
  display: inline-block;
  vertical-align: middle;
  *vertical-align: auto;
  *zoom: 1;
  *display: inline;
}
.page.page_filial .page__content .kvazi-landing .kvazi-landing__section .section__title .distance .metro__title {
  font-weight: 500;
  color: #000;
}
.page.page_filial .page__content .kvazi-landing .kvazi-landing__section .section__title .distance .separator {
  width: 8px;
  height: 8px;
  -moz-border-radius: 100%;
  -webkit-border-radius: 100%;
  border-radius: 100%;
  background: #000;
  margin: 0 15px 0 10px;
}
.page.page_filial .page__content .static-text {
  font-weight: 300;
  font-size: 16px;
  line-height: 30px;
  color: #000;
}
.page.page_filial .page__content .static-text p {
  margin: 0;
  padding: 0;
}
.page.page_filial .page__content .static-text p + p {
  margin-top: 15px;
}
.page.page_filial .page__content .static-text a {
  color: #4695cc;
  text-decoration: underline;
}
.page.page_filial .page__content .map__wrapper {
  height: 100%;
}
.page.page_filial .page__content .map__wrapper.show-list_view {
  overflow: auto;
  width: calc(100% + 40px);
  margin-left: -20px;
  padding: 0 5px;
}
.page.page_filial .page__content .map__wrapper.show-list_view .filial-list-page__map, .page.page_filial .page__content .map__wrapper.show-list_view .filial-map__switcher {
  display: none;
}
.page.page_filial .page__content .map__wrapper.show-list_view .map__items {
  max-width: 1290px;
  margin: 0 auto;
  padding: 0;
}
.page.page_filial .page__content .map__wrapper.show-list_view .filial-map__filter .search-input {
  width: calc(100% + 10px);
  margin: 0 0 0 -5px;
  padding: 0 15px 0 5px;
  border-bottom: 1px solid #F0F0F0;
  background: #F8F8F8;
  box-shadow: none;
}
.page.page_filial .page__content .map__wrapper.show-list_view .filial-map__filter .search-input button[type=submit], .page.page_filial .page__content .map__wrapper.show-list_view .filial-map__filter .search-input .search-clear__trigger {
  right: 15px;
  height: 100%;
  background-color: #F8F8F8;
}
.page.page_filial .page__content .map__wrapper.show-list_view .filial__list {
  box-shadow: none;
  background: #fff;
  margin-top: -1px;
  height: calc(100% - 51px) !important;
}
.page.page_filial .page__content .map__wrapper.show-list_view .filial__list .filial__list-empty {
  display: none !important;
}
.page.page_filial .page__content .map__wrapper.show-list_view .filial__list .filial__list-empty.on-list-view {
  display: block !important;
}
.page.page_filial .page__content .map__wrapper.show-list_view .filial__list .filial__list-title {
  display: none;
}
.page.page_filial .page__content .map__wrapper.show-list_view .filial__list .filial__list-outer {
  height: 100%;
}
.page.page_filial .page__content .map__wrapper.show-list_view .filial__list .filial__list-inner {
  max-height: 100%;
  font-size: 0px;
  line-height: 0;
}
.page.page_filial .page__content .map__wrapper.show-list_view .filial__list .filial__list-inner .metro__wrapper {
  display: inline-block !important;
  vertical-align: top;
  width: calc(100% / 3);
}
.page.page_filial .page__content .map__wrapper.show-list_view .filial__list .filial__list-inner .metro__wrapper .metro__title, .page.page_filial .page__content .map__wrapper.show-list_view .filial__list .filial__list-inner .metro__wrapper .lombard-card {
  display: block !important;
  cursor: auto;
}
.page.page_filial .page__content .map__wrapper.show-list_view .filial__list .filial__list-inner .metro__wrapper .lombard-card .lombard-card__info {
  cursor: auto;
}
.page.page_filial .page__content .map__wrapper.show-list_view .filial__list .filial__list-inner .lombard-card.active .lombard-card__info .lombard-card__info-title .hint .metro, .page.page_filial .page__content .map__wrapper.show-list_view .filial__list .filial__list-inner .lombard-card.active .lombard-card__info .lombard-card__info-title .hint svg {
  display: none;
}
.page.page_filial .page__content .map__wrapper.show-filter .filial-map__filter .filial-map__filter_hidden {
  display: block;
}
.page.page_filial .page__content .map__wrapper.show-filter .filial__list {
  display: none;
}
.page.page_filial .page__content .map__wrapper .map__items {
  width: 100%;
  max-width: 380px;
  padding: 10px 0;
  height: 100%;
  text-align: left;
  pointer-events: none;
}
.page.page_filial .page__content .map__wrapper .map__items.loaded {
  pointer-events: auto;
}
.page.page_filial .page__content .map__wrapper .filial-map__switcher {
  background: #fff;
  border-radius: 3px;
  box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
  font-size: 0;
  line-height: 0;
  position: relative;
  z-index: 3;
}
.page.page_filial .page__content .map__wrapper .filial-map__switcher label {
  display: inline-block;
  vertical-align: middle;
  *vertical-align: auto;
  *zoom: 1;
  *display: inline;
  width: 50%;
  cursor: pointer;
}
.page.page_filial .page__content .map__wrapper .filial-map__switcher label input {
  position: absolute;
  left: -999999px;
}
.page.page_filial .page__content .map__wrapper .filial-map__switcher label span {
  display: block;
  position: relative;
  z-index: 2;
  text-align: center;
  font-weight: 500;
  font-size: 12px;
  line-height: 20px;
  color: #000;
  text-transform: uppercase;
  padding: 15px 0;
  -moz-transition: all 0.3s;
  -o-transition: all 0.3s;
  -webkit-transition: all 0.3s;
  transition: all 0.3s;
}
.page.page_filial .page__content .map__wrapper .filial-map__switcher label input:checked + span {
  color: #ffffff;
}
.page.page_filial .page__content .map__wrapper .filial-map__switcher label:first-child span:before {
  content: "";
  position: absolute;
  width: 100%;
  height: 100%;
  left: 100%;
  top: 0;
  background: #ff8c3f;
  border-radius: 5px;
  box-shadow: 0px 4px 10px rgba(255, 141, 54, 0.4);
  z-index: -1;
  -moz-transition: all 0.3s;
  -o-transition: all 0.3s;
  -webkit-transition: all 0.3s;
  transition: all 0.3s;
}
.page.page_filial .page__content .map__wrapper .filial-map__switcher label:first-child input:checked + span:before {
  left: 0;
}
.page.page_filial .page__content .map__wrapper .filial-map__filter {
  display:none;
  position: relative;
  z-index: 4;
  font-size: 0;
  line-height: 0;
}
.page.page_filial .page__content .map__wrapper .filial-map__filter .mobile-element {
  display: none;
}
.page.page_filial .page__content .map__wrapper .filial-map__filter .search-input {
  position: relative;
  margin: 10px 0;
  background: #FFFFFF;
  box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
}
.page.page_filial .page__content .map__wrapper .filial-map__filter .search-input:first-child {
  margin-top: 0;
}
.page.page_filial .page__content .map__wrapper .filial-map__filter .search-input input {
  width: 100%;
  height: 50px;
  font-weight: 300;
  font-size: 14px;
  line-height: 30px;
  padding: 10px 45px 10px 15px;
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  background: none;
  border: none;
  -moz-box-shadow: none;
  -webkit-box-shadow: none;
  box-shadow: none;
}
.page.page_filial .page__content .map__wrapper .filial-map__filter .search-input input:-moz-placeholder, .page.page_filial .page__content .map__wrapper .filial-map__filter .search-input input::-moz-placeholder {
  color: #494954;
  opacity: 1;
}
.page.page_filial .page__content .map__wrapper .filial-map__filter .search-input input::-webkit-input-placeholder {
  color: #494954;
}
.page.page_filial .page__content .map__wrapper .filial-map__filter .search-input button[type=submit] {
  position: absolute;
  width: 45px;
  height: 100%;
  right: 0;
  top: 0;
  background: none;
  border: none;
  padding: 0;
  color: #000;
  font-size: 28px;
  line-height: 70px;
}
.page.page_filial .page__content .map__wrapper .filial-map__filter .search-input button[type=submit] span {
  display: block;
}
.page.page_filial .page__content .map__wrapper .filial-map__filter .search-input.inited .search-clear__trigger {
  display: block;
}
.page.page_filial .page__content .map__wrapper .filial-map__filter .search-input .search-clear__trigger {
  position: absolute;
  display: none;
  top: 0;
  bottom: 0;
  right: 0;
  margin: auto;
  width: 40px;
  height: 30px;
  background-color: #fff;
  background-image: url("../images/icons/svg/cancel.svg");
  background-size: 12px;
  background-position: center;
  background-repeat: no-repeat;
}
.page.page_filial .page__content .map__wrapper .filial-map__filter .search-select .ui-menu, .page.page_filial .page__content .map__wrapper .filial-map__filter .search-select .list, .page.page_filial .page__content .map__wrapper .filial-map__filter .search-input .ui-menu, .page.page_filial .page__content .map__wrapper .filial-map__filter .search-input .list {
  -moz-box-shadow: 0 0 15px 2px rgba(0, 0, 0, 0.15);
  -webkit-box-shadow: 0 0 15px 2px rgba(0, 0, 0, 0.15);
  box-shadow: 0 0 15px 2px rgba(0, 0, 0, 0.15);
  border: 0;
  max-height: 250px;
  width: 100%;
}
.page.page_filial .page__content .map__wrapper .filial-map__filter .search-select .ui-menu .option, .page.page_filial .page__content .map__wrapper .filial-map__filter .search-select .list .option, .page.page_filial .page__content .map__wrapper .filial-map__filter .search-input .ui-menu .option, .page.page_filial .page__content .map__wrapper .filial-map__filter .search-input .list .option {
  width: 100%;
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
  display: block;
}
.page.page_filial .page__content .map__wrapper .filial-map__filter .search-select .ui-menu:hover .ps-scrollbar-y-rail, .page.page_filial .page__content .map__wrapper .filial-map__filter .search-select .list:hover .ps-scrollbar-y-rail, .page.page_filial .page__content .map__wrapper .filial-map__filter .search-input .ui-menu:hover .ps-scrollbar-y-rail, .page.page_filial .page__content .map__wrapper .filial-map__filter .search-input .list:hover .ps-scrollbar-y-rail {
  opacity: 1;
}
.page.page_filial .page__content .map__wrapper .filial-map__filter .search-select .ui-menu .ps-scrollbar-y-rail, .page.page_filial .page__content .map__wrapper .filial-map__filter .search-select .list .ps-scrollbar-y-rail, .page.page_filial .page__content .map__wrapper .filial-map__filter .search-input .ui-menu .ps-scrollbar-y-rail, .page.page_filial .page__content .map__wrapper .filial-map__filter .search-input .list .ps-scrollbar-y-rail {
  width: 10px;
  background: none;
  -moz-border-radius: 0px;
  -webkit-border-radius: 0px;
  border-radius: 0px;
  right: 0 !important;
}
.page.page_filial .page__content .map__wrapper .filial-map__filter .search-select .ui-menu .ps-scrollbar-y-rail:before, .page.page_filial .page__content .map__wrapper .filial-map__filter .search-select .list .ps-scrollbar-y-rail:before, .page.page_filial .page__content .map__wrapper .filial-map__filter .search-input .ui-menu .ps-scrollbar-y-rail:before, .page.page_filial .page__content .map__wrapper .filial-map__filter .search-input .list .ps-scrollbar-y-rail:before {
  content: "";
  display: block;
  height: 100%;
  width: 2px;
  position: absolute;
  right: 0;
  top: 0;
  background: rgba(0, 0, 0, 0.2);
}
.page.page_filial .page__content .map__wrapper .filial-map__filter .search-select .ui-menu .ps-scrollbar-y-rail .ps-scrollbar-y, .page.page_filial .page__content .map__wrapper .filial-map__filter .search-select .list .ps-scrollbar-y-rail .ps-scrollbar-y, .page.page_filial .page__content .map__wrapper .filial-map__filter .search-input .ui-menu .ps-scrollbar-y-rail .ps-scrollbar-y, .page.page_filial .page__content .map__wrapper .filial-map__filter .search-input .list .ps-scrollbar-y-rail .ps-scrollbar-y {
  background: none;
  -moz-border-radius: 0px;
  -webkit-border-radius: 0px;
  border-radius: 0px;
  left: 0;
  width: 100%;
}
.page.page_filial .page__content .map__wrapper .filial-map__filter .search-select .ui-menu .ps-scrollbar-y-rail .ps-scrollbar-y:after, .page.page_filial .page__content .map__wrapper .filial-map__filter .search-select .list .ps-scrollbar-y-rail .ps-scrollbar-y:after, .page.page_filial .page__content .map__wrapper .filial-map__filter .search-input .ui-menu .ps-scrollbar-y-rail .ps-scrollbar-y:after, .page.page_filial .page__content .map__wrapper .filial-map__filter .search-input .list .ps-scrollbar-y-rail .ps-scrollbar-y:after {
  content: "";
  display: block;
  height: 100%;
  width: 2px;
  position: absolute;
  right: 0;
  top: 0;
  background: #ff8c3f;
}
.page.page_filial .page__content .map__wrapper .filial-map__filter .search-select .ui-menu .ui-menu-item, .page.page_filial .page__content .map__wrapper .filial-map__filter .search-select .list .ui-menu-item, .page.page_filial .page__content .map__wrapper .filial-map__filter .search-input .ui-menu .ui-menu-item, .page.page_filial .page__content .map__wrapper .filial-map__filter .search-input .list .ui-menu-item {
  font-weight: 300;
  font-size: 14px;
  color: #494954;
  line-height: 16px;
  padding: 8px 15px;
  min-height: 32px;
  position: relative;
}
.page.page_filial .page__content .map__wrapper .filial-map__filter .search-select .ui-menu .ui-menu-item:before, .page.page_filial .page__content .map__wrapper .filial-map__filter .search-select .list .ui-menu-item:before, .page.page_filial .page__content .map__wrapper .filial-map__filter .search-input .ui-menu .ui-menu-item:before, .page.page_filial .page__content .map__wrapper .filial-map__filter .search-input .list .ui-menu-item:before {
  width: 18px;
  height: 14px;
  display: inline-block;
  background-image: url("../images/icons/suggest_sprite.png");
  margin-right: 10px;
}
.page.page_filial .page__content .map__wrapper .filial-map__filter .search-select .ui-menu .ui-menu-item:after, .page.page_filial .page__content .map__wrapper .filial-map__filter .search-select .list .ui-menu-item:after, .page.page_filial .page__content .map__wrapper .filial-map__filter .search-input .ui-menu .ui-menu-item:after, .page.page_filial .page__content .map__wrapper .filial-map__filter .search-input .list .ui-menu-item:after {
  font-weight: 300;
  font-size: 10px;
  line-height: 16px;
  color: #7D7D84;
  text-transform: uppercase;
  margin-left: 5px;
}
.page.page_filial .page__content .map__wrapper .filial-map__filter .search-select .ui-menu .ui-menu-item.lombard:after, .page.page_filial .page__content .map__wrapper .filial-map__filter .search-select .list .ui-menu-item.lombard:after, .page.page_filial .page__content .map__wrapper .filial-map__filter .search-input .ui-menu .ui-menu-item.lombard:after, .page.page_filial .page__content .map__wrapper .filial-map__filter .search-input .list .ui-menu-item.lombard:after {
  content: "(Ломбард)";
}
.page.page_filial .page__content .map__wrapper .filial-map__filter .search-select .ui-menu .ui-menu-item.lombard:before, .page.page_filial .page__content .map__wrapper .filial-map__filter .search-select .list .ui-menu-item.lombard:before, .page.page_filial .page__content .map__wrapper .filial-map__filter .search-input .ui-menu .ui-menu-item.lombard:before, .page.page_filial .page__content .map__wrapper .filial-map__filter .search-input .list .ui-menu-item.lombard:before {
  background-position: 0 0;
}
.page.page_filial .page__content .map__wrapper .filial-map__filter .search-select .ui-menu .ui-menu-item.metro:after, .page.page_filial .page__content .map__wrapper .filial-map__filter .search-select .list .ui-menu-item.metro:after, .page.page_filial .page__content .map__wrapper .filial-map__filter .search-input .ui-menu .ui-menu-item.metro:after, .page.page_filial .page__content .map__wrapper .filial-map__filter .search-input .list .ui-menu-item.metro:after {
  content: "(Метро)";
}
.page.page_filial .page__content .map__wrapper .filial-map__filter .search-select .ui-menu .ui-menu-item.metro:before, .page.page_filial .page__content .map__wrapper .filial-map__filter .search-select .list .ui-menu-item.metro:before, .page.page_filial .page__content .map__wrapper .filial-map__filter .search-input .ui-menu .ui-menu-item.metro:before, .page.page_filial .page__content .map__wrapper .filial-map__filter .search-input .list .ui-menu-item.metro:before {
  background-position: -40px 0;
}
.page.page_filial .page__content .map__wrapper .filial-map__filter .search-select .ui-menu .ui-menu-item.district:after, .page.page_filial .page__content .map__wrapper .filial-map__filter .search-select .list .ui-menu-item.district:after, .page.page_filial .page__content .map__wrapper .filial-map__filter .search-input .ui-menu .ui-menu-item.district:after, .page.page_filial .page__content .map__wrapper .filial-map__filter .search-input .list .ui-menu-item.district:after {
  content: "(Округ)";
}
.page.page_filial .page__content .map__wrapper .filial-map__filter .search-select .ui-menu .ui-menu-item.district:before, .page.page_filial .page__content .map__wrapper .filial-map__filter .search-select .list .ui-menu-item.district:before, .page.page_filial .page__content .map__wrapper .filial-map__filter .search-input .ui-menu .ui-menu-item.district:before, .page.page_filial .page__content .map__wrapper .filial-map__filter .search-input .list .ui-menu-item.district:before {
  background-position: -60px 0;
}
.page.page_filial .page__content .map__wrapper .filial-map__filter .search-select .ui-menu .ui-menu-item.street:after, .page.page_filial .page__content .map__wrapper .filial-map__filter .search-select .list .ui-menu-item.street:after, .page.page_filial .page__content .map__wrapper .filial-map__filter .search-input .ui-menu .ui-menu-item.street:after, .page.page_filial .page__content .map__wrapper .filial-map__filter .search-input .list .ui-menu-item.street:after {
  content: "(Улица)";
}
.page.page_filial .page__content .map__wrapper .filial-map__filter .search-select .ui-menu .ui-menu-item.street:before, .page.page_filial .page__content .map__wrapper .filial-map__filter .search-select .list .ui-menu-item.street:before, .page.page_filial .page__content .map__wrapper .filial-map__filter .search-input .ui-menu .ui-menu-item.street:before, .page.page_filial .page__content .map__wrapper .filial-map__filter .search-input .list .ui-menu-item.street:before {
  background-position: -20px 0;
}
.page.page_filial .page__content .map__wrapper .filial-map__filter .search-select .ui-menu .ui-menu-item.neighborhood:after, .page.page_filial .page__content .map__wrapper .filial-map__filter .search-select .list .ui-menu-item.neighborhood:after, .page.page_filial .page__content .map__wrapper .filial-map__filter .search-input .ui-menu .ui-menu-item.neighborhood:after, .page.page_filial .page__content .map__wrapper .filial-map__filter .search-input .list .ui-menu-item.neighborhood:after {
  content: "(Район)";
}
.page.page_filial .page__content .map__wrapper .filial-map__filter .search-select .ui-menu .ui-menu-item:last-child, .page.page_filial .page__content .map__wrapper .filial-map__filter .search-select .list .ui-menu-item:last-child, .page.page_filial .page__content .map__wrapper .filial-map__filter .search-input .ui-menu .ui-menu-item:last-child, .page.page_filial .page__content .map__wrapper .filial-map__filter .search-input .list .ui-menu-item:last-child {
  border-bottom: 0;
}
.page.page_filial .page__content .map__wrapper .filial-map__filter .search-select {
  position: relative;
  padding: 0;
  margin: 0 0 10px;
}
.page.page_filial .page__content .map__wrapper .filial-map__filter .search-select .nice-select {
  width: 100%;
  float: none;
  background: #FFFFFF;
  border: 1px solid #E5E5E5;
  font-weight: 300;
  font-size: 16px;
  line-height: 30px;
  height: 50px;
  padding: 10px 30px 10px 15px;
}
.page.page_filial .page__content .map__wrapper .filial-map__filter .search-select .nice-select.service .current:before {
  content: "Услуги";
}
.page.page_filial .page__content .map__wrapper .filial-map__filter .search-select .nice-select.metro .current:before {
  content: "Метро";
}
.page.page_filial .page__content .map__wrapper .filial-map__filter .search-select .nice-select.district .current:before {
  content: "Округ";
}
.page.page_filial .page__content .map__wrapper .filial-map__filter .search-select .nice-select.neighborhood .current:before {
  content: "Район";
}
.page.page_filial .page__content .map__wrapper .filial-map__filter .search-select .nice-select .metro-icon {
  margin-right: 5px;
}
.page.page_filial .page__content .map__wrapper .filial-map__filter .search-select .nice-select .current {
  display: block;
  max-width: 100%;
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
  font-weight: 500;
  font-size: 12px;
  line-height: 16px;
  color: #494954;
  text-transform: uppercase;
}
.page.page_filial .page__content .map__wrapper .filial-map__filter .search-select .nice-select .current .metro-icon {
  display: none;
}
.page.page_filial .page__content .map__wrapper .filial-map__filter .search-select .nice-select .current:before {
  display: block;
  font-weight: 300;
  font-size: 10px;
  line-height: 14px;
  text-transform: uppercase;
  color: #7D7D84;
}
.page.page_filial .page__content .map__wrapper .filial-map__filter .search-select .nice-select .current .count {
  font-weight: 300;
  font-size: 10px;
  color: #7D7D84;
}
.page.page_filial .page__content .map__wrapper .filial-map__filter .search-select .nice-select .current .default {
  font-weight: 300;
  font-size: 14px;
  line-height: 48px;
  width: 100%;
  height: 100%;
  padding: 0 15px;
  color: #494954;
  position: absolute;
  left: 0;
  top: 0;
  background: #fff;
}
.page.page_filial .page__content .map__wrapper .filial-map__filter .search-select .nice-select .option {
  font-weight: 500;
  font-size: 12px;
  line-height: 16px;
  text-transform: uppercase;
  color: #494954;
  padding: 7px 15px;
  height: 30px;
  min-height: 30px;
}
.page.page_filial .page__content .map__wrapper .filial-map__filter .search-select .nice-select .option .default {
  font-weight: 400;
}
.page.page_filial .page__content .map__wrapper .filial-map__filter .search-select .nice-select .option .count {
  font-weight: 300;
  font-size: 10px;
  color: #7D7D84;
}
.page.page_filial .page__content .map__wrapper .filial-map__filter .filial-map__filter_hidden {
  background: #FAFAFA;
  box-shadow: 0px 4px 5px rgba(0, 0, 0, 0.05);
  padding: 0 15px;
  display: none;
}
.page.page_filial .page__content .map__wrapper .filial-map__filter .filial-map__filter_hidden .filial-map__filter-title {
  text-align: left;
  font-weight: 300;
  font-size: 18px;
  line-height: 21px;
  padding: 17px 15px;
  box-shadow: 0px 4px 5px rgba(0, 0, 0, 0.05);
  background: #fff;
  position: relative;
  z-index: 2;
  width: calc(100% + 30px);
  margin-left: -15px;
  margin-bottom: 20px;
}
.page.page_filial .page__content .map__wrapper .filial-map__filter .filial-map__filter_hidden .filial-map__filter-title .close__trigger {
  display: block;
  position: absolute;
  width: 55px;
  height: 100%;
  right: 0;
  top: 0;
  background: url("../images/icons/close_black.svg");
  background-size: 15px;
  background-position: center center;
  background-repeat: no-repeat;
}
.page.page_filial .page__content .map__wrapper .filial-map__filter .filial-map__filter_hidden .counter__wrapper {
  font-weight: 300;
  font-size: 14px;
  line-height: 16px;
  margin: 18px 0;
  text-align: center;
}
.page.page_filial .page__content .map__wrapper .filial-map__filter .filial-map__filter_hidden .counter__wrapper span {
  font-weight: 500;
}
.page.page_filial .page__content .map__wrapper .filial-map__filter .filial-map__filter_hidden .actions__wrapper {
  width: calc(100% + 30px);
  margin-left: -15px;
  font-size: 0;
  line-height: 0;
}
.page.page_filial .page__content .map__wrapper .filial-map__filter .filial-map__filter_hidden .actions__wrapper .btn {
  width: 50%;
  font-weight: 500;
  font-size: 12px;
}
.page.page_filial .page__content .map__wrapper .filial-map__filter .filial-map__filter_hidden .actions__wrapper .btn.btn_light {
  background: #fff;
  color: #000;
  border-color: #E5E5E5;
}
.page.page_filial .page__content .map__wrapper .filial__list {
  position: relative;
  z-index: 3;
  background: #FCFCFC;
  box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
  overflow: hidden;
  text-align: left;
}
.page.page_filial .page__content .map__wrapper .filial__list .filial__list-title {
  text-align: left;
  font-weight: 300;
  font-size: 18px;
  line-height: 21px;
  padding: 17px 15px;
  box-shadow: 0px 4px 5px rgba(0, 0, 0, 0.05);
  background: #fff;
  position: relative;
  z-index: 3;
}
.page.page_filial .page__content .map__wrapper .filial__list .filial__list-title a {
  color: #000;
  text-decoration: none;
}
.page.page_filial .page__content .map__wrapper .filial__list .filial__list-title .close-detail__trigger {
  display: none;
}
.page.page_filial .page__content .map__wrapper .filial__list .filial__list-title .filter__trigger {
  font-weight: 500;
  font-size: 12px;
  line-height: 14px;
  color: #000;
  text-transform: uppercase;
  text-decoration: none;
  display: inline-block;
  vertical-align: middle;
  *vertical-align: auto;
  *zoom: 1;
  *display: inline;
  border-bottom: 1px dashed #000;
  float: right;
  margin-top: 3px;
}
.page.page_filial .page__content .map__wrapper .filial__list .filial__list-title .filter__trigger .count {
  margin-left: 4px;
}
.page.page_filial .page__content .map__wrapper .filial__list .filial__list-title .filter__trigger .count:before {
  content: "(";
}
.page.page_filial .page__content .map__wrapper .filial__list .filial__list-title .filter__trigger .count:after {
  content: ")";
}
.page.page_filial .page__content .map__wrapper .filial__list .filial__list-title .filter__trigger .count:empty {
  display: none;
}
.page.page_filial .page__content .map__wrapper .filial__list.show-detail .metro__wrapper, .page.page_filial .page__content .map__wrapper .filial__list.show-detail .lombard-card, .page.page_filial .page__content .map__wrapper .filial__list.show-detail .metro__title {
  display: none;
}
.page.page_filial .page__content .map__wrapper .filial__list.show-detail .metro__wrapper.active, .page.page_filial .page__content .map__wrapper .filial__list.show-detail .lombard-card.active, .page.page_filial .page__content .map__wrapper .filial__list.show-detail .metro__title.active {
  display: block;
}
.page.page_filial .page__content .map__wrapper .filial__list.show-detail .filial__list-title .close-detail__trigger {
  display: initial;
  padding-left: 16px;
  background: url("../images/icons/arrow-left.svg");
  background-size: 6px 12px;
  background-repeat: no-repeat;
  background-position: left center;
}
.page.page_filial .page__content .map__wrapper .filial__list.show-detail .filial__list-title .show__trigger_mobile, .page.page_filial .page__content .map__wrapper .filial__list.show-detail .filial__list-title .filter__trigger {
  display: none;
}
.page.page_filial .page__content .map__wrapper .filial__list .filial__list-empty {
  padding: 45px 15px 30px;
  font-weight: 300;
  font-size: 16px;
  line-height: 25px;
  color: #000;
  text-align: center;
}
.page.page_filial .page__content .map__wrapper .filial__list .filial__list-empty .filial__list-clear__trigger {
  display: inline-block;
  vertical-align: middle;
  *vertical-align: auto;
  *zoom: 1;
  *display: inline;
  font-weight: 500;
  font-size: 12px;
  line-height: 14px;
  color: #000;
  text-decoration: none;
  text-transform: uppercase;
  border-bottom: 1px dashed #000;
}
.page.page_filial .page__content .map__wrapper .filial__list .filial__list-empty.on-list-view {
  display: none !important;
}
.page.page_filial .page__content .map__wrapper .filial__list .filial__list-inner {
  max-height: calc(100vh - (94px + 140px + 55px + 61px));
  overflow: auto;
  position: relative;
  height: 100%;
  -ms-overflow-style: none;
}
.page.page_filial .page__content .map__wrapper .filial__list .filial__list-inner:hover .ps-scrollbar-y-rail {
  opacity: 1;
}
.page.page_filial .page__content .map__wrapper .filial__list .filial__list-inner .ps-scrollbar-y-rail {
  width: 10px;
  background: none;
  -moz-border-radius: 0px;
  -webkit-border-radius: 0px;
  border-radius: 0px;
  right: 0 !important;
}
.page.page_filial .page__content .map__wrapper .filial__list .filial__list-inner .ps-scrollbar-y-rail:before {
  content: "";
  display: block;
  height: 100%;
  width: 2px;
  position: absolute;
  right: 0;
  top: 0;
  background: rgba(0, 0, 0, 0.2);
}
.page.page_filial .page__content .map__wrapper .filial__list .filial__list-inner .ps-scrollbar-y-rail .ps-scrollbar-y {
  background: none;
  -moz-border-radius: 0px;
  -webkit-border-radius: 0px;
  border-radius: 0px;
  left: 0;
  width: 100%;
}
.page.page_filial .page__content .map__wrapper .filial__list .filial__list-inner .ps-scrollbar-y-rail .ps-scrollbar-y:after {
  content: "";
  display: block;
  height: 100%;
  width: 2px;
  position: absolute;
  right: 0;
  top: 0;
  background: #ff8c3f;
}
.page.page_filial .page__content .map__wrapper .filial__list .filial__list-inner::-webkit-scrollbar {
  display: none;
}
.page.page_filial .page__content .map__wrapper .filial__list .lombard-card {
  position: static;
  padding: 0;
  border: none;
}
.page.page_filial .page__content .map__wrapper .filial__list .lombard-card:last-child .lombard-card__info {
  padding-bottom: 15px;
}
.page.page_filial .page__content .map__wrapper .filial__list .lombard-card:last-child .lombard-card__info:after {
  display: none;
}
.page.page_filial .page__content .map__wrapper .filial__list .lombard-card .lombard-card__info {
  padding: 16px 15px 0;
  cursor: pointer;
  position: relative;
  display: block;
}
.page.page_filial .page__content .map__wrapper .filial__list .lombard-card .lombard-card__info:after {
  content: "";
  display: block;
  height: 1px;
  background: #E5E5E5;
  margin-top: 15px;
}
.page.page_filial .page__content .map__wrapper .filial__list .lombard-card .lombard-card__info:before {
  content: "";
  position: absolute;
  display: block;
  display: none;
  background: url("../images/icons/arrow-down_black_sm.svg");
  width: 12px;
  height: 7px;
  top: 50%;
  right: 14px;
  -moz-transform: translateY(-50%) rotate(-90deg);
  -ms-transform: translateY(-50%) rotate(-90deg);
  -webkit-transform: translateY(-50%) rotate(-90deg);
  transform: translateY(-50%) rotate(-90deg);
}
.page.page_filial .page__content .map__wrapper .filial__list .lombard-card .lombard-card__info .lombard-card__info-title {
  font-weight: 500;
  font-size: 16px;
  line-height: 30px;
  margin: 0 0 5px;
}
.page.page_filial .page__content .map__wrapper .filial__list .lombard-card .lombard-card__info .lombard-card__info-title .status {
  display: inline-block;
  vertical-align: middle;
  *vertical-align: auto;
  *zoom: 1;
  *display: inline;
  float: right;
  font-weight: 400;
  font-size: 10px;
  line-height: 15px;
  color: #fff;
  text-transform: uppercase;
  background: #D4D4D6;
  padding: 0 4px;
  margin-top: 7px;
}
.page.page_filial .page__content .map__wrapper .filial__list .lombard-card .lombard-card__info .lombard-card__info-title .status.orange {
  background: #ff8c3f;
}
.page.page_filial .page__content .map__wrapper .filial__list .lombard-card .lombard-card__info .lombard-card__info-title .hint {
  display: block;
  font-weight: 300;
  font-size: 14px;
  line-height: 25px;
}
.page.page_filial .page__content .map__wrapper .filial__list .lombard-card .lombard-card__info .lombard-card__info-title .hint .metro-image, .page.page_filial .page__content .map__wrapper .filial__list .lombard-card .lombard-card__info .lombard-card__info-title .hint .metro {
  display: none;
}
.page.page_filial .page__content .map__wrapper .filial__list .lombard-card .lombard-card__info .lombard-card__info-row + .lombard-card__info-row {
  margin-top: 5px;
}
.page.page_filial .page__content .map__wrapper .filial__list .lombard-card .lombard-card__info .lombard-card__info-label {
  font-weight: 300;
  font-size: 10px;
  line-height: 20px;
  color: #7D7D84;
  text-transform: uppercase;
}
.page.page_filial .page__content .map__wrapper .filial__list .lombard-card .lombard-card__info .lombard-card__info-value {
  font-weight: 300;
  font-size: 14px;
  line-height: 20px;
}
.page.page_filial .page__content .map__wrapper .filial__list .lombard-card .lombard-card__info .lombard-card__info-value .dropdown .bottom-dotted {
  text-decoration: underline;
  text-decoration-style: dashed;
}
.page.page_filial .page__content .map__wrapper .filial__list .lombard-card .lombard-card__info .lombard-card__info-value .dropdown .dropdown-inner {
  right: auto;
  left: 0;
  top: 100%;
  margin-top: 0;
}
.page.page_filial .page__content .map__wrapper .filial__list .lombard-card .lombard-card__info .lombard-card__info-value .dropdown .dropdown-inner:after {
  display: none;
}
.page.page_filial .page__content .map__wrapper .filial__list .lombard-card .lombard-card__info .lombard-card__info-value a {
  color: #000;
}
.page.page_filial .page__content .map__wrapper .filial__list .lombard-card .lombard-card__info .lombard-card__info-value .lombard-card__info-value__item {
  display: inline-block;
  vertical-align: middle;
  *vertical-align: auto;
  *zoom: 1;
  *display: inline;
}
.page.page_filial .page__content .map__wrapper .filial__list .lombard-card .lombard-card__info .lombard-card__info-value .lombard-card__info-value__item:after {
  content: "";
  display: inline-block;
  vertical-align: middle;
  *vertical-align: auto;
  *zoom: 1;
  *display: inline;
  width: 4px;
  height: 4px;
  background: #D4D4D6;
  margin: 0 5px;
}
.page.page_filial .page__content .map__wrapper .filial__list .lombard-card .lombard-card__info .lombard-card__info-value .lombard-card__info-value__item:last-child:after {
  display: none;
}
.page.page_filial .page__content .map__wrapper .filial__list .lombard-card.active .lombard-card__info .lombard-card__info-title .hint .metro {
  display: inline;
  font-weight: 500;
}
.page.page_filial .page__content .map__wrapper .filial__list .lombard-card.active .lombard-card__info .lombard-card__info-title .hint .metro-image {
  vertical-align: top;
  display: inline-block;
  margin-right: 2px;
  width: 25px;
  height: 25px;
}
.page.page_filial .page__content .map__wrapper .filial__list .metro__title {
  border-bottom: 1px solid #F3F5F9;
  border-top: 1px solid #F3F5F9;
  padding: 10px 15px;
  background: #fff;
}
.page.page_filial .page__content .map__wrapper .filial__list .metro__title .metro-image {
  width: 30px;
  height: 30px;
}
.page.page_filial .page__content .map__wrapper .filial__list .metro__title .text {
  display: inline-block;
  vertical-align: middle;
  *vertical-align: auto;
  *zoom: 1;
  *display: inline;
  font-weight: 500;
  font-size: 14px;
  line-height: 16px;
}
.page.page_filial .page__content .map__wrapper .filial__list .metro__title .text .count {
  font-weight: 300;
  font-size: 10px;
  line-height: 12px;
  text-transform: uppercase;
  color: #7D7D84;
}
.page.page_filial .page__content .map__wrapper .filial__list .metro__wrapper:first-child .metro__title {
  border-top: 0;
}
.page.page_filial .page__content .map__wrapper .filial__list .metro__wrapper, .page.page_filial .page__content .map__wrapper .filial__list .lombard-card {
  display: none;
}
.page.page_filial .page__content .map__wrapper .filial__list .metro__wrapper.show-on-map-list, .page.page_filial .page__content .map__wrapper .filial__list .lombard-card.show-on-map-list {
  display: block;
}
.page.page_filial .page__content .filial-list-page__map {
  position: absolute;
  width: 100%;
  height: 100%;
  left: 0;
  top: 0;
}
.page.page_filial .dropdown {
  position: relative;
  z-index: 2;
  display: inline-block;
  vertical-align: top;
  *vertical-align: auto;
  *zoom: 1;
  *display: inline;
}
.page.page_filial .dropdown:hover .dropdown-inner {
  opacity: 1;
  visibility: visible;
}
.page.page_filial .dropdown .dropdown-trigger {
  font-size: 12px;
  margin: 0 5px;
  color: #999999;
  cursor: pointer;
  display: inline-block;
}
.page.page_filial .dropdown .dropdown-trigger img {
  display: block;
  filter: brightness(0);
  opacity: 0.3;
}
.page.page_filial .dropdown .dropdown-inner {
  font-size: 15px;
  font-weight: 300;
  line-height: 20px;
  position: absolute;
  visibility: hidden;
  opacity: 0;
  -moz-transition: all 0.3s;
  -o-transition: all 0.3s;
  -webkit-transition: all 0.3s;
  transition: all 0.3s;
  background: #ffffff;
  -moz-box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.2);
  -webkit-box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.2);
  box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.2);
  right: -19px;
  margin-top: -5px;
  padding: 10px 20px;
}
.page.page_filial .dropdown .dropdown-inner:after {
  content: "";
  display: block;
  width: 0;
  height: 0;
  border-style: solid;
  border-width: 0 7px 7px 7px;
  border-color: transparent transparent #ffffff transparent;
  position: absolute;
  top: -7px;
  right: 23px;
}
.page.page_filial .dropdown.time .dropdown-inner {
  white-space: nowrap;
  padding: 10px;
}
.page.page_filial .dropdown.time .dropdown-inner .separator {
  height: 1px;
  background: #EEEEF0;
  margin: 10px 0;
}
.page.page_filial .dropdown.time .dropdown-inner div {
  color: #000;
  font-weight: 300;
}
.page.page_filial .dropdown.time .dropdown-inner div.bold {
  font-weight: 700;
}
.page.page_filial .dropdown.time .dropdown-inner div span {
  display: inline-block;
  vertical-align: middle;
  *vertical-align: auto;
  *zoom: 1;
  *display: inline;
  font-weight: 700;
  text-align: left;
  width: 100px;
}
.page.page_filial .dropdown.time .dropdown-inner div span.orange {
  color: #ff8c3f;
}
.page.page_filial .view-type__switcher {
  float: right;
  font-size: 0;
  line-height: 0;
}
.page.page_filial .view-type__switcher a {
  display: inline-block;
  vertical-align: middle;
  *vertical-align: auto;
  *zoom: 1;
  *display: inline;
  position: relative;
  font-weight: 300;
  font-size: 18px;
  line-height: 32px;
  color: #000;
  text-decoration: none;
}
.page.page_filial .view-type__switcher a + a {
  margin-left: 30px;
}
.page.page_filial .view-type__switcher a.active {
  font-weight: 700;
}
.page.page_filial .view-type__switcher a.active:after {
  content: "";
  display: block;
  position: absolute;
  left: 0;
  top: 100%;
  height: 3px;
  width: 100%;
  margin-top: 11px;
  background: #ff8c3f;
}
.page.page_filial.page_filial-map {
  padding-bottom: 0;
}
.page.page_filial.page_filial-map .page__header {
  box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.2);
  position: relative;
  z-index: 3;
  padding: 14px 0;
}
.page.page_filial.page_filial-map .page__header .page__title .count {
  font-size: 20px;
  color: #D4D4D6;
}
.page.page_filial.page_filial-map .mobile-navigation {
  display: none;
}
.page.page_filial.page_filial-map .page__content {
  height: calc(100vh - 94px);
  height: calc(100vh - 94px - 61px);
  position: relative;
  z-index: 2;
  overflow: hidden;
}
.page.page_filial.page_filial-map .page__content .container {
  height: 100%;
  max-width: 100%;
}
.page.page_filial.page_filial-map .page__content .map__wrapper .filial__list {
  height: calc(100% - 120px);
}
.page.page_filial.embed .page__content {
  height: 570px;
  overflow: hidden;
  padding: 0 20px;
  position: relative;
  clear: both;
}
.page.page_filial.embed .view-type__switcher {
  margin-top: -42px;
  margin-bottom: 14px;
}
.page.page_filial.embed .map__wrapper .filial__list .filial__list-inner {
  max-height: calc(570px - (80px + 55px));
}

@media screen and (max-width: 1279px) {
  .page.page_filial .page__content .product__list:not(.product__list_new) .product__item .profit {
    display: none !important;
  }
  .page.page_filial .page__content .product__list:not(.product__list_new) .product__item .product__price-wrapper {
    padding: 0 8px;
  }
  .page.page_filial .page__content .product__list:not(.product__list_new) .product__item:before {
    display: none;
  }
  .page.page_filial .page__content .product__list:not(.product__list_new) .product__item .btn {
    display: none;
  }
}
@media screen and (max-width: 1023px) {
  .page.page_filial .page__content .product__list:not(.product__list_new) .product__item {
    width: 25%;
  }
  .page.page_filial .page__content .product__list:not(.product__list_new) .product__item:first-child {
    width: 50%;
  }
  .page.page_filial .page__content .filial__wrapper .filial__images {
    float: none;
    display: block;
    width: 100%;
    max-width: 500px;
    margin: 0 auto;
    padding: 0;
  }
  .page.page_filial .page__content .filial__wrapper .filial__info {
    float: none;
    display: block;
    width: 100%;
    margin: 30px auto;
  }
  .page.page_filial .page__content .filial__wrapper .info__wrapper, .page.page_filial .page__content .filial__wrapper .info__wrapper.lombard {
    width: 50%;
  }
  .page.page_filial .page__content .filial__wrapper .info__wrapper .info__row .info__text .sm .dotted .hint {
    width: 280px;
    left: -50px;
    -moz-transform: none;
    -ms-transform: none;
    -webkit-transform: none;
    transform: none;
  }
  .page.page_filial .page__content .filial__wrapper .info__wrapper .legal .hint {
    width: 310px;
    left: -10px;
    -moz-transform: none;
    -ms-transform: none;
    -webkit-transform: none;
    transform: none;
  }
  .page.page_filial .page__content .text-info__wrapper {
    direction: ltr;
    padding: 0 10px;
  }
  .page.page_filial .page__content .text-info__wrapper .text, .page.page_filial .page__content .text-info__wrapper .image {
    width: 100%;
    display: block;
  }
  .page.page_filial .page__content .text-info__wrapper .image {
    margin-bottom: 15px;
  }
  .page.page_filial.embed .view-type__switcher {
    padding: 0 15px;
  }

  .page.page_filial .page__content .map__wrapper.show-list_view .filial__list .filial__list-inner .metro__wrapper {
    width: calc(100% / 2);
  }
}
@media screen and (max-width: 767px) {
  .page.page_filial {
    overflow: visible;
  }
  .page.page_filial .container {
    padding: 0 5px;
  }
  .page.page_filial .dropdown .dropdown-inner {
    font-size: 13px;
  }
  .page.page_filial .page__header {
    padding: 15px 10px;
  }
  .page.page_filial .page__header .page__title {
    display: block;
    font-size: 20px;
    line-height: 25px;
  }
  .page.page_filial .page__header .rating {
    margin-left: 0;
  }
  .page.page_filial .page__header .breadcrumbs {
    display: none;
  }
  .page.page_filial .page__header .status {
    margin-left: 0;
    font-size: 12px;
    line-height: 20px;
    padding: 0 4px;
    margin-right: 8px;
  }
  .page.page_filial .page__content .product__list:not(.product__list_new) {
    margin-bottom: 25px;
  }
  .page.page_filial .page__content .product__list:not(.product__list_new) .product__item {
    width: 50%;
    padding-bottom: 0;
  }
  .page.page_filial .page__content .product__list:not(.product__list_new) .product__item .profit {
    font-size: 10px;
    padding: 0 1px;
  }
  .page.page_filial .page__content .product__list:not(.product__list_new) .product__item .btn {
    bottom: 8px;
  }
  .page.page_filial .page__content .product__list:not(.product__list_new) .product__item .product__price-wrapper .product__price {
    font-size: 14px;
  }
  .page.page_filial .page__content .product__list:not(.product__list_new) .product__item .product__price-wrapper .product__price_old {
    font-size: 10px;
    line-height: 10px;
  }
  .page.page_filial .page__content .product__list:not(.product__list_new) .product__item:first-child {
    width: 100%;
  }
  .page.page_filial .page__content .product__list:not(.product__list_new) .product__item:first-child .product__image {
    padding: 0;
  }
  .page.page_filial .page__content .product__list:not(.product__list_new) .product__item:first-child .product__image .vertical-center {
    max-height: 300px;
    height: auto;
  }
  .page.page_filial .page__content .product__list:not(.product__list_new) .product__item:last-child {
    display: none;
  }
  .page.page_filial .page__content .banner__wrapper {
    width: calc(100% + 10px);
    margin: 0 0 0 -5px;
  }
  .page.page_filial .page__content .banner__wrapper img {
    display: none;
  }
  .page.page_filial .page__content .banner__wrapper .hide-on-desktop {
    display: block;
    width: 100%;
  }
  .page.page_filial .page__content .filial__wrapper {
    margin: 0;
  }
  .page.page_filial .page__content .filial__wrapper .filial__images .filial__images-slider .nav-btn {
    display: block;
  }
  .page.page_filial .page__content .filial__wrapper .filial__images .filial__images-thumbs, .page.page_filial .page__content .filial__wrapper .filial__images .more-photos__trigger {
    display: none;
  }
  .page.page_filial .page__content .filial__wrapper .filial__info {
    margin: 0;
  }
  .page.page_filial .page__content .filial__wrapper .filial__info .warning__title, .page.page_filial .page__content .filial__wrapper .filial__info .static-text {
    padding: 0 10px;
  }
  .page.page_filial .page__content .filial__wrapper .filial__info .warning__title {
    margin: 15px 0 10px;
  }
  .page.page_filial .page__content .filial__wrapper .filial__info .static-text {
    margin-bottom: 15px;
  }
  .page.page_filial .page__content .filial__wrapper .info__wrapper {
    display: block;
    float: none;
    padding: 10px;
    border: 1px solid #F3F3F3;
    margin: 0;
  }
  .page.page_filial .page__content .filial__wrapper .info__wrapper, .page.page_filial .page__content .filial__wrapper .info__wrapper.lombard {
    width: 100%;
  }
  .page.page_filial .page__content .filial__wrapper .info__wrapper.has-lombard {
    min-height: 0;
  }
  .page.page_filial .page__content .filial__wrapper .info__wrapper .info__row .info__text {
    font-size: 14px;
  }
  .page.page_filial .page__content .filial__wrapper .info__wrapper.lombard {
    position: static;
    background: #F3F3F3;
  }
  .page.page_filial .page__content .filial__wrapper .features {
    margin: 0;
    padding: 10px 15px;
    border: 0;
    font-size: 0;
    line-height: 0;
  }
  .page.page_filial .page__content .filial__wrapper .features .feature {
    width: 50%;
    display: inline-block;
    vertical-align: middle;
    *vertical-align: auto;
    *zoom: 1;
    *display: inline;
    padding: 5px 0;
    margin: 0;
  }
  .page.page_filial .page__content .filial__wrapper .features .feature img {
    width: 25px;
  }
  .page.page_filial .page__content .filial__wrapper .features .feature .label {
    font-size: 12px;
  }
  .page.page_filial .page__content .map__wrapper {
    width: calc(100% + 10px);
    margin-left: -5px;
    position: relative;
  }
  .page.page_filial .page__content .map__wrapper .map__items {
    padding: 10px 15px;
    margin: auto;
  }
  .page.page_filial .page__content .map__wrapper .filial-map__switcher label span {
    font-size: 11px;
    padding: 10px 0;
  }
  .page.page_filial .page__content .map__wrapper .filial-map__filter {
    position: static;
  }
  .page.page_filial .page__content .map__wrapper .filial-map__filter .search-select .nice-select {
    height: 40px;
    line-height: 20px;
    padding-top: 3px;
  }
  .page.page_filial .page__content .map__wrapper .filial-map__filter .search-select .nice-select .current .default {
    font-size: 12px;
    line-height: 38px;
  }
  .page.page_filial .page__content .map__wrapper .filial-map__filter .search-input input {
    font-size: 12px;
    line-height: 20px;
    height: 40px;
  }
  .page.page_filial .page__content .map__wrapper .filial-map__filter .filial-map__filter_hidden .filial-map__filter-title {
    font-size: 16px;
    padding: 15px;
  }
  .page.page_filial .page__content .map__wrapper .filial-map__filter .filial-map__filter_hidden .filial-map__filter-title .close__trigger {
    width: 50px;
    height: 50px;
  }
  .page.page_filial .page__content .map__wrapper .filial-map__filter .filial-map__filter_hidden .counter__wrapper {
    font-size: 12px;
    line-height: 14px;
    margin: 14px 0;
  }
  .page.page_filial .page__content .map__wrapper .filial__list, .page.page_filial .page__content .map__wrapper .filial-map__filter .filial-map__filter_hidden {
    position: absolute;
    bottom: 0;
    width: 100%;
    left: 0;
  }
  .page.page_filial .page__content .map__wrapper .filial__list {
    overflow-anchor: none;
    height: auto !important;
  }
  .page.page_filial .page__content .map__wrapper .filial__list .filial__list-empty {
    font-size: 14px;
    padding: 40px 15px;
  }
  .page.page_filial .page__content .map__wrapper .filial__list .filial__list-title {
    font-size: 16px;
    line-height: 20px;
    padding: 15px;
  }
  .page.page_filial .page__content .map__wrapper .filial__list .filial__list-title .show__trigger_mobile {
    padding-right: 20px;
    position: relative;
  }
  .page.page_filial .page__content .map__wrapper .filial__list .filial__list-title .show__trigger_mobile:after {
    content: "";
    display: block;
    width: 12px;
    height: 6px;
    background: url("../images/icons/arrow-down_black_sm.svg");
    background-size: 100% 100%;
    background-repeat: no-repeat;
    background-position: center center;
    position: absolute;
    top: 0;
    bottom: 0;
    right: 0;
    margin: auto;
    -moz-transform: rotate(180deg);
    -ms-transform: rotate(180deg);
    -webkit-transform: rotate(180deg);
    transform: rotate(180deg);
  }
  .page.page_filial .page__content .map__wrapper .filial__list .filial__list-title .filter__trigger {
    font-size: 11px;
  }
  .page.page_filial .page__content .map__wrapper .filial__list .filial__list-outer, .page.page_filial .page__content .map__wrapper .filial__list .filial__list-empty {
    display: none;
  }
  .page.page_filial .page__content .map__wrapper .filial__list.show-list .filial__list-title .show__trigger_mobile:after {
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -webkit-transform: rotate(0);
    transform: rotate(0);
  }
  .page.page_filial .page__content .map__wrapper .filial__list.show-detail .filial__list-title .show__trigger_mobile {
    display: block;
    font-size: 0;
    position: absolute;
    right: 15px;
    top: 0;
    bottom: 0;
    margin: auto;
  }
  .page.page_filial .page__content .map__wrapper #map {
    width: 100%;
  }
  .page.page_filial .page__content .map__wrapper.show-list_view {
    width: calc(100% + 10px);
    margin-left: -5px;
    padding: 0;
  }
  .page.page_filial .page__content .map__wrapper.show-list_view .filial-map__filter .search-input {
    margin: 0;
    width: 100%;
  }
  .page.page_filial .page__content .map__wrapper.show-list_view .filial-map__filter .search-input input {
    height: 50px;
  }
  .page.page_filial .page__content .map__wrapper.show-list_view .filial__list {
    position: static;
  }
  .page.page_filial .page__content .map__wrapper.show-list_view .filial__list .filial__list-outer {
    display: block !important;
  }
  .page.page_filial .page__content .map__wrapper.show-list_view .filial__list .filial__list-inner {
    max-height: none !important;
  }
  .page.page_filial .page__content .map__wrapper.show-list_view .filial__list .filial__list-inner .metro__wrapper {
    width: 100%;
    display: block !important;
  }
  .page.page_filial .view-type__switcher {
    display: block;
    float: none;
    padding: 0 10px;
  }
  .page.page_filial .view-type__switcher a {
    font-size: 16px;
    line-height: 20px;
    padding-bottom: 10px;
    width: 50%;
    text-align: center;
  }
  .page.page_filial .view-type__switcher a + a {
    margin: 0;
  }
  .page.page_filial .view-type__switcher a.active:after {
    bottom: 0;
    top: auto;
    margin: 0;
  }
  .page.page_filial.embed .view-type__switcher {
    padding: 0 10px;
  }
  .page.page_filial.page_filial-map {
    overflow: hidden;
    height: calc(100vh - 78px);
    height: calc(var(--vh, 1vh) * 100 - 78px);
    border-top: 1px solid #F8F8F8;
  }
  .page.page_filial.page_filial-map .page__header {
    padding: 0;
  }
  .page.page_filial.page_filial-map .page__header .page__title {
    line-height: 30px;
    padding: 10px;
    text-align: center;
  }
  .page.page_filial.page_filial-map .page__header .page__title .count {
    font-size: 18px;
  }
  .page.page_filial.page_filial-map .page__content {
    height: calc(100% - 81px);
  }
  .page.page_filial.page_filial-map .page__content .map__wrapper .filial__list .filial__list-inner {
    max-height: calc(100vh - (78px + 110px + 50px + 81px));
  }
  .page.page_filial.embed .page__content {
    height: 420px;
    padding: 0;
    overflow: visible;
  }
  .page.page_filial.embed .view-type__switcher {
    margin: 0;
  }
  .page.page_filial.embed .map__wrapper .filial__list .filial__list-inner {
    max-height: calc(420px - (60px + 50px));
  }

  .lombard-landing__section .page_filial .page__content .map__wrapper {
    width: calc(100% + 40px);
    margin-left: -20px;
  }
}
.page.page_main .swiper-container.main-slider.main-slider_geo {
  height: 300px;
}
.page.page_main .swiper-container.main-slider.main-slider_geo .swiper-slide__content .main-slider__image {
  background-position: left center;
}
.page.page_main .swiper-container.main-slider.main-slider_geo .swiper-slide__content .main-slider__content .main-slider__content-inner {
  font-size: 20px;
  line-height: 25px;
}
.page.page_main .geo-lombard__features {
  font-size: 0;
  line-height: 0;
  text-align: center;
  margin: 45px auto;
}
.page.page_main .geo-lombard__features .feature {
  display: inline-block;
  vertical-align: middle;
  *vertical-align: auto;
  *zoom: 1;
  *display: inline;
  width: calc(100% / 3);
}
.page.page_main .geo-lombard__features .feature .feature__img, .page.page_main .geo-lombard__features .feature .feature__info {
  display: inline-block;
  vertical-align: middle;
  *vertical-align: auto;
  *zoom: 1;
  *display: inline;
}
.page.page_main .geo-lombard__features .feature .feature__img {
  width: 60px;
  height: 60px;
  background-size: contain;
  background-repeat: no-repeat;
  background-position: center center;
}
.page.page_main .geo-lombard__features .feature .feature__info {
  margin-left: 20px;
  text-align: left;
  font-weight: 300;
  font-size: 16px;
  line-height: 21px;
  max-width: 195px;
}
.page.page_main .geo-lombard__features .feature .feature__info .feature__title {
  font-weight: 700;
  margin-bottom: 8px;
}
.page.page_main .lombard-landing__form-block.lombard-landing__form-block_geo {
  margin: 50px auto;
  background-color: #F7F7FA;
  background-position: center center;
  background-repeat: no-repeat;
  background-size: auto 100%;
}
.page.page_main .lombard-landing__form-block.lombard-landing__form-block_geo.promocode {
  background-image: url("../images/geo/form1.jpg");
}
.page.page_main .lombard-landing__form-block.lombard-landing__form-block_geo.consultation {
  background-image: url("../images/geo/form2.jpg");
}
.page.page_main .lombard-landing__form-block.lombard-landing__form-block_geo .container {
  max-width: 1080px;
}
.page.page_main .lombard-landing__form-block.lombard-landing__form-block_geo .form-control {
  background: #fff;
}
.page.page_main .lombard-landing__form-block.lombard-landing__form-block_geo .lombard-landing__form-block__info {
  max-width: 370px;
}
.page.page_main .lombard-landing__form-block.lombard-landing__form-block_geo .lombard-landing__form {
  width: 100%;
  max-width: 400px;
}
.page.page_main .lombard-landing__form-block.lombard-landing__form-block_geo .lombard-landing__form .form-submit {
  margin: 0;
}
.page.page_main .lombard-landing__form-block.lombard-landing__form-block_geo .lombard-landing__form form {
  width: 100%;
  padding: 30px;
  max-width: 100%;
}
.page.page_main .lombard-landing__form-block.lombard-landing__form-block_geo:before {
  display: none;
}
.page.page_main .lombard-landing__form-block.lombard-landing__form-block_geo .lombard-landing__form-block__title {
  font-weight: 900;
  font-size: 25px;
  line-height: 30px;
  color: #000;
  margin: 0 0 25px;
}
.page.page_main .lombard-landing__form-block.lombard-landing__form-block_geo .lombard-landing__form-block__desc {
  font-weight: 300;
  font-size: 18px;
  line-height: 27px;
  color: #000;
  margin: 0;
  padding: 0;
}

@media screen and (max-width: 1023px) {
  .page.page_main .swiper-container.main-slider.main-slider_geo {
    height: auto;
  }
  .page.page_main .swiper-container.main-slider.main-slider_geo .swiper-slide .swiper-slide__content {
    background: #F5F5F6;
  }
  .page.page_main .swiper-container.main-slider.main-slider_geo .swiper-slide .swiper-slide__content .main-slider__content-title {
    display: block;
    font-weight: 900;
    font-size: 6.66667vw;
    line-height: 10.66667vw;
    margin: 0.66667vw 0 0;
  }
  .page.page_main .swiper-container.main-slider.main-slider_geo .swiper-slide .swiper-slide__content .main-slider__content-inner {
    display: block;
    font-size: 4.44444vw;
    line-height: 6.94444vw;
  }
  .page.page_main .geo-lombard__features .feature {
    width: calc(100% / 3);
  }
  .page.page_main .geo-lombard__features .feature .feature__img {
    display: none;
  }
  .page.page_main .geo-lombard__features .feature .feature__info {
    margin: auto;
  }
}
@media screen and (max-width: 767px) {
  .page.page_main .geo-lombard__features {
    margin: 20px auto;
    text-align: left;
    padding: 0 10px;
  }
  .page.page_main .geo-lombard__features .feature {
    display: block;
    width: 100%;
  }
  .page.page_main .geo-lombard__features .feature + .feature {
    margin-top: 15px;
  }
  .page.page_main .geo-lombard__features .feature .feature__info {
    display: block;
    max-width: 100%;
  }
  .page.page_main .geo-lombard__features .feature .feature__info .feature__title {
    float: left;
    width: 100px;
  }
  .page.page_main .lombard-landing__form-block.lombard-landing__form-block_geo {
    background-size: cover;
    background-position: center center;
  }
  .page.page_main .lombard-landing__form-block.lombard-landing__form-block_geo.promocode {
    background-image: url("../images/geo/form1_sm.jpg");
  }
  .page.page_main .lombard-landing__form-block.lombard-landing__form-block_geo.consultation {
    background-image: url("../images/geo/form2_sm.jpg");
  }
  .page.page_main .lombard-landing__form-block.lombard-landing__form-block_geo .lombard-landing__form-block__info {
    max-width: 100%;
  }
  .page.page_main .lombard-landing__form-block.lombard-landing__form-block_geo .container {
    padding: 0 15px;
  }
  .page.page_main .lombard-landing__form-block.lombard-landing__form-block_geo .container > div {
    text-align: center;
  }
  .page.page_main .lombard-landing__form-block.lombard-landing__form-block_geo .lombard-landing__form {
    margin-top: 160px;
  }
  .page.page_main .lombard-landing__form-block.lombard-landing__form-block_geo .lombard-landing__form form {
    margin: 0 auto;
    -moz-transform: none;
    -ms-transform: none;
    -webkit-transform: none;
    transform: none;
    padding: 20px;
  }
  .page.page_main .lombard-landing__form-block.lombard-landing__form-block_geo .lombard-landing__form-block__title {
    font-size: 24px;
    line-height: 28px;
    margin: 0 0 20px;
  }
  .page.page_main .lombard-landing__form-block.lombard-landing__form-block_geo .lombard-landing__form-block__desc {
    font-size: 16px;
    line-height: 22px;
  }
}
</style>

<div class="container"> <!--container-->

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php")?>
