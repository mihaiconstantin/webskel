export const imageMixin = {
	methods: {

		revealPath(filePath, folder) {
			return `${folder}/${filePath}`;
		},


        revealUrlPath(filePath, folder) {
            return `url(${this.revealPath(filePath, folder)})`;
        },


		itExists(filePath) {
			return (filePath === null || filePath.length < 5) ? false : true;
		},

		isApproved(approvalStatus) {
			return approvalStatus == 1 ? true : false;
		},

		itExistsAndIsApproved(filePath, approvalStatus) {
			return this.itExists(filePath) && this.isApproved(approvalStatus);
		}
	}
}