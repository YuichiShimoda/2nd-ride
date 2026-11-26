import $ from "jquery";

import gsap from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";
import { ScrollToPlugin } from "gsap/ScrollToPlugin";
gsap.registerPlugin(ScrollTrigger, ScrollToPlugin);

import "lazysizes";
import "splitting/dist/splitting.css";
import "splitting/dist/splitting-cells.css";
import Splitting from "splitting";

const resizeObserver = new ResizeObserver(() => {
	ScrollTrigger.refresh();
	console.log("refresh");
});
resizeObserver.observe(document.body);

$(window).on('load', function() {
	ScrollTrigger.refresh();
	Splitting();
});











$('a[href^="#"]').click(function(e) {
	e.preventDefault();
	var speed = 1000;
	var href= $(this).attr("href");
	var target = $(href && href !== "#" ? href : "html");
	var windowWidth = $(window).width() ?? 0;
	if (location.pathname.includes('service')) {
		if (windowWidth >= 700) {
			var headerHeight = 0;
		} else {
			var headerHeight = 0;
		}
	} else {
		if (windowWidth >= 700) {
			var headerHeight = 0;
		} else {
			var headerHeight = 0;
		}
	}
	var position = (target.offset()?.top ?? 0) - headerHeight;
	$('body,html').animate({scrollTop:position}, speed, 'swing');
	if (href) {
		location.hash = href;
	}
	return false;
});





















$(function () {
    const $prefSelect = $('#pref');
    const $areaSelect = $('#area');
    const areas: { [key: string]: string[] } = {
        '愛知県': [
            '名古屋市千種区', '名古屋市東区', '名古屋市北区',
            '名古屋市西区', '名古屋市中村区', '名古屋市中区',
            '名古屋市昭和区', '名古屋市瑞穂区', '名古屋市熱田区',
            '名古屋市中川区', '名古屋市港区', '名古屋市南区',
            '名古屋市守山区', '名古屋市緑区', '名古屋市名東区',
            '名古屋市天白区',
            '豊橋市', '岡崎市', '一宮市', '瀬戸市', '半田市',
            '春日井市', '豊川市', '津島市', '碧南市', '刈谷市',
            '豊田市', '安城市', '西尾市', '蒲郡市', '犬山市',
            '常滑市', '江南市', '小牧市', '稲沢市', '新城市',
            '東海市', '大府市', '知多市', '知立市', '尾張旭市',
            '高浜市', '岩倉市', '豊明市', '日進市', '田原市',
            '愛西市', '清須市', '北名古屋市', '弥富市',
            'みよし市', 'あま市', '長久手市',
            '東郷町', '豊山町', '大口町', '扶桑町',
            '大治町', '蟹江町', '飛島村', '阿久比町',
            '東浦町', '南知多町', '美浜町', '武豊町',
            '幸田町', '設楽町', '東栄町', '豊根村'
        ],
        '三重県': [
            '津市', '四日市市', '伊勢市', '松阪市', '桑名市',
            '鈴鹿市', '名張市', '尾鷲市', '亀山市', '鳥羽市',
            '熊野市', 'いなべ市', '志摩市', '伊賀市',
            '木曽岬町', '東員町', '菰野町', '朝日町',
            '川越町', '多気町', '明和町', '大台町',
            '玉城町', '度会町', '大紀町', '南伊勢町',
            '紀北町', '御浜町', '紀宝町'
        ],
        '岐阜県': [
            '岐阜市', '大垣市', '高山市', '多治見市', '関市',
            '中津川市', '美濃市', '瑞浪市', '羽島市', '恵那市',
            '美濃加茂市', '土岐市', '各務原市', '可児市',
            '山県市', '瑞穂市', '飛騨市', '本巣市',
            '郡上市', '下呂市', '海津市',
            '岐南町', '笠松町', '養老町', '垂井町',
            '関ケ原町', '神戸町', '輪之内町', '安八町',
            '揖斐川町', '大野町', '池田町', '北方町',
            '坂祝町', '富加町', '川辺町', '七宗町',
            '八百津町', '白川町', '東白川村',
            '御嵩町', '白川村'
        ]
    };
    const oldArea = String($areaSelect.data('old-area') || '');

    /**
     * 市区町村の選択肢を更新
     */
    function updateAreas(selectedArea: string = ''): void {
        const pref = String($prefSelect.val() || '');
        $areaSelect.empty();
        $areaSelect.append(
            $('<option>', {
                value: '',
                text: '市区町村'
            })
        );
        if (areas[pref]) {
            areas[pref].forEach((area: string) => {
                const $option = $('<option>', {
                    value: area,
                    text: area
                });
                if (area === selectedArea) {
                    $option.prop('selected', true);
                }
                $areaSelect.append($option);
            });
        }
    }
    $prefSelect.on('change', function () {
        updateAreas();
    });
    updateAreas(oldArea);
});















$('.checkbox-ele input[type="checkbox"]').on('change', function () {
    const $checkbox = $(this);
    const $fakeCheckbox = $checkbox.siblings('.fake-checkbox');
    if ($checkbox.prop('checked')) {
        $fakeCheckbox.addClass('checked');
    } else {
        $fakeCheckbox.removeClass('checked');
    }
});

// 初期表示時（バリデーションエラーなどで値が保持されている場合）
$('.checkbox-ele input[type="checkbox"]').each(function () {
    const $checkbox = $(this);
    const $fakeCheckbox = $checkbox.siblings('.fake-checkbox');
    if ($checkbox.prop('checked')) {
        $fakeCheckbox.addClass('checked');
    }
});





















import flatpickr from 'flatpickr';
import { Japanese } from 'flatpickr/dist/l10n/ja.js';
import 'flatpickr/dist/flatpickr.min.css';

$(function () {
    ['#first_day', '#second_day', '#third_day'].forEach((selector) => {
        flatpickr(selector, {
            locale: Japanese,
            dateFormat: 'Y.n.j',
            minDate: 'today',
            allowInput: false,
            disableMobile: true,
        });
    });
});








import Swiper from 'swiper';
import { Autoplay, EffectFade } from 'swiper/modules';
import type { SwiperOptions } from 'swiper/types';

const swiper = new Swiper('#fv .swiper', {
	modules: [Autoplay, EffectFade],
	loop: true,
	centeredSlides: false,
	loopAdditionalSlides: 0,
	autoplay: {
		delay: 4000,
		disableOnInteraction: true,
	},
	effect: 'fade',
	speed: 1000,
	grabCursor: false,
	allowTouchMove: false,
	slidesPerView: 1.0,
	initialSlide: 1,
});









