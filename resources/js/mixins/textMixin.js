export const textMixin = {
	methods: {
        shortenText(text, nWordsToKeep, endText = "...") {
            return text.split(' ').slice(0, nWordsToKeep).join(' ') + endText;
        },

        conditionalRender(test, whenTestTrue, whenTestFalse = "") {
            return test == 1 ? whenTestTrue : whenTestFalse;
        },
	}
}