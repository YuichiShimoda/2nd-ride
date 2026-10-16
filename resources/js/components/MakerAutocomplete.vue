<template>
	<div ref="autocompleteContainer"></div>
</template>

<script>
import { autocomplete } from '@algolia/autocomplete-js';
import '@algolia/autocomplete-theme-classic';
import axios from 'axios';

export default {
	props: {
		initialQueryValue: {
			type: String,
			default: ''
		}
	},
	mounted() {
		const container = this.$refs.autocompleteContainer;
		const hiddenInput = document.createElement('input');
		hiddenInput.type = 'hidden';
		hiddenInput.name = 'maker';
		container.appendChild(hiddenInput);

		let autocompleteInstance = null;
		autocompleteInstance = autocomplete({
			container,
			placeholder: 'メーカー名',
			initialQuery: '',

			onStateChange({ state }) {
				hiddenInput.value = state.query;
			},

			getSources: () => [
				{
					sourceId: 'makers',
					getItems: ({ query }) =>
						axios.get('/api/makers', { params: { query } }).then(res => res.data),
					templates: {
						item({ item }) {
							return item.name;
						}
					},
					onSelect: ({ item, state, setQuery }) => {
						if (state.query !== item.name) {
							setQuery(item.name);
						}
						hiddenInput.value = item.name;
					}
				}
			]
		});

		if (this.initialQueryValue) {
			autocompleteInstance.setQuery(this.initialQueryValue);
		}

		const handleClickOutside = (event) => {
			if (!container.contains(event.target)) {
				autocompleteInstance.setIsOpen(false);
			}
		};
		document.addEventListener('click', handleClickOutside);
	}
};
</script>