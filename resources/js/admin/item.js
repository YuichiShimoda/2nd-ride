import { createApp } from 'vue';
import BrandAutocomplete from '../components/BrandAutocomplete.vue';
import MakerAutocomplete from '../components/MakerAutocomplete.vue';

// ブランド用マウント
const brand = document.getElementById('brand');
if (brand) {
	const initialBrand = brand.dataset.initialBrand || '';
    createApp(BrandAutocomplete, {
        initialQueryValue: initialBrand
    }).mount(brand);
}

// メーカー用マウント
const maker = document.getElementById('maker');
if (maker) {
	const initialMaker = maker.dataset.initialMaker || '';
    createApp(MakerAutocomplete, {
        initialQueryValue: initialMaker
    }).mount(maker);
}
