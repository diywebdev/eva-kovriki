class ImageFunction extends Ajax {
    images = new Array();
    constructor(hmtlElement) {
        super();
        this.hmtlElement = hmtlElement;
    }
    async getImages(getUrl) {
        var this_ = this;
        let imgs = await this.get(getUrl);
        $.each(imgs, function(i, img) {
            this_.images.push(new Image(img));
        })
        this.apendImages();
    };

    apendImages() {
        console.log(this.images);
        if (this.images != null) {
            this.hmtlElement.apendImages(this.images);
        }
    };
    async uploadImages(formData, url) {
        var imgs = await this.postImage(url, formData);
        this.hmtlElement.popupUploadedImages(imgs);
    }
};