class PricelistList extends Ajax{
    constructor(obj) {
        super();

    };

    setList(obj){
        this.title_am = obj.title_am;
        this.title_ru = obj.title_ru;
        this.title_en = obj.title_en;
        this.id = obj.id;
        this.pos = obj.pos;
        this.price = obj.price;
        this.group_id = obj.group_id;
        var _this = this;
        if(this.price.length){
            var price = new Array();
            $.each(_this.price,function (i,e) {
                var p = new Price();
                p.setPrice(e);
                price.push(p);
            })
            _this.price = price;
        }
    }

    async save(){
        await this.post("/admin_pricelist/updata_list",this);
    }

    async delete(){
        await this.get("/admin_pricelist/delete_list/" + this.id);
    }

    async add(){
        return this.post("/admin_pricelist/save_list",this);
    }
}