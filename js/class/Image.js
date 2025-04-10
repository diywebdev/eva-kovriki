class Image extends Ajax {
    name = "";
    id = 0;
    pos = 0;
    constructor(obj) {
        super();
        this.name = obj.name;
        this.id = obj.id;
        this.pos = obj.pos;
    };
    async deleteImage() {
        var data = new Object();
        data.name = this.name;
        return await this.post("/admin/delete_image", data);
    }
    async updataImage() {
        var data = new Object();
        data.pos = this.pos;
        data.name = this.name;
        return await this.post("/admin/updata_image", data);
    }
    uploadImages(data) {

        return this.post("/admin/upload", data);
    }
    addImage(data) {
        var arr = new Array();
        var imgs = this.post("/admin/save", data);
        $.each(imgs, function(i, img) {
            arr.push(new Image(img));
        });
        return arr;
    }
};