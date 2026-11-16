declare module "splitting" {
	export interface SplittingOptions {
		target?: Element | string;
		by?: "chars" | "words" | "lines";
		key?: string;
		whitespace?: boolean;
	}

	export interface SplittingResult {
		el: HTMLElement;
		words?: HTMLElement[];
		chars?: HTMLElement[];
		lines?: HTMLElement[];
	}

	function Splitting(
		options?: SplittingOptions
	): SplittingResult[];

	export default Splitting;
}
